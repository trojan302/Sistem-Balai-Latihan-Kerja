<?php 

require 'conn.php';

function stafNama($stafID){

	$query = "SELECT nama FROM staf_blk WHERE stafID='$stafID'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function fileAs($filePath, $judulMateri, $stafID, $kejuruan, $uploaded, $ext){

	$result = $filePath.str_replace(' ', '_', $judulMateri).'-('.str_replace(' ', '_', stafNama($stafID)).'-'.str_replace(' ', '_', $kejuruan).')-'.$uploaded.'-'.date('His').'.'.$ext;

	return $result;

}

function updateDataServer($dataUpdated){

	$sql = "UPDATE materi SET judulMateri='".$dataUpdated['judulMateri']."',fileMateri='".$dataUpdated['fileMateri']."',deskripsi='".$dataUpdated['deskripsi']."',uploaded='".$dataUpdated['uploaded']."',extension='".$dataUpdated['extension']."',size='".$dataUpdated['size']."' WHERE materiID='".$dataUpdated['materiID']."'";

	$query = mysql_query($sql);

	return true;

}

$purePath	 	= '../../libs/materi/'.str_replace('http://localhost/project_blk/libs/materi/','', $_POST['fileMateri']);
$file 			= str_replace('http://localhost/project_blk/libs/materi/','', $_POST['fileMateri']);
$judulMateri 	= $_POST['judulMateri'];
$deskripsi 		= $_POST['deskripsi'];
$materiID		= $_POST['materiID'];
$stafID			= $_POST['stafID'];
$kejuruan 		= $_POST['kejuruan'];
$uploaded 		= date('d-m-Y');

if (file_exists($purePath)) {

	$type = array(
		// .docx Office Document (Ubuntu / Linux)
		"application/vnd.openxmlformats-officedocument.wordprocessingml.document",
		// .pptx Office Document (Ubuntu / Linux)
		"application/vnd.openxmlformats-officedocument.presentationml.presentation",
		// .xlsx Office Document (Ubuntu / Linux)
		"application/vnd.openxmlformats-officedocument.spreadsheetml.sheet",
		// .pdf
		"application/pdf",
		// .doc Microsoft Word
		"application/msword",
		// .ppt Microsoft Word
		"application/vnd.ms-powerpoint",
		// .xls Microsoft Word
		"application/vnd.ms-excel"
	);

	$filePath 		= "../../libs/materi/";

	$filetype		= mime_content_type($purePath);
	$filesize 		= $_POST['size'];
	$fileexts 		= pathinfo($file);
	$ext 			= $fileexts['extension'];

	if (in_array($filetype, $type)) {

		if ($filesize < 10000000) {

			$pathUpload = fileAs($filePath, $judulMateri, $stafID, $kejuruan, $uploaded, $ext);

			$dataUpdated = array(
				'judulMateri' => $judulMateri,
				'fileMateri' => str_replace('../../','http://localhost/project_blk/', $pathUpload),
				'deskripsi' => $deskripsi,
				'uploaded' => date('Y-m-d'),
				'extension' => $ext,
				'size' => $filesize,
				'materiID' => $materiID 
			);

			rename($purePath, $pathUpload);
			
			$sukses = updateDataServer($dataUpdated);

			if ($sukses == true) {
				echo "Data sukses diupdate";
			}else{
				echo "Data gagal diupdate";
			}

		}else{

			header('Location: http://localhost/project_blk/staf/dashboard?err='. urlencode('File tidak boleh lebih dari 10 MB'));

		}

	}else{

		header('Location: http://localhost/project_blk/staf/dashboard?err='. urlencode('Ektensi yang diijinkan hanya (.docx, .pptx, .xlsx, .pdf, .doc, .ptt, .xls)'));
	}
	
	// $sql = "UPDATE materi SET judulMateri='$judulMateri', deskripsi='$deskripsi', fileMateri='$file' WHERE materiID='$materiID'";

	// echo $sql;

}else{

	$filePath 		= "../../libs/materi/";
	
	$filetype 		= $_FILES['fileMateri']['type'];
	$filename 		= $_FILES['fileMateri']['name'];
	$filesize 		= $_FILES['fileMateri']['size'];
	$filetmp 		= $_FILES['fileMateri']['tmp_name'];

	$fileexts 		= pathinfo($_FILES['fileMateri']['name']);
	$ext 			= $fileexts['extension'];

	echo "File tidak ada";
}


?>