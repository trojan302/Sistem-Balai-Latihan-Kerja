<?php 

require 'conn.php';

function stafNama($stafID){

	$query = "SELECT nama FROM staf_blk WHERE stafID='$stafID'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function fileAs($judulMateri, $stafID, $kejuruan, $uploaded, $ext){

	$result = str_replace(' ', '_', $judulMateri).'-('.str_replace(' ', '_', stafNama($stafID)).'-'.str_replace(' ', '_', $kejuruan).')-'.$uploaded.'-'.date('His').'.'.$ext;

	return $result;

}

function updateDataServer($dataUpdated){

	$sql = "UPDATE materi SET judulMateri='".$dataUpdated['judulMateri']."',fileMateri='".$dataUpdated['fileMateri']."',deskripsi='".$dataUpdated['deskripsi']."',uploaded='".$dataUpdated['uploaded']."',extension='".$dataUpdated['extension']."',size='".$dataUpdated['size']."' WHERE materiID='".$dataUpdated['materiID']."'";

	$query = mysql_query($sql);

	return true;

}

if (isset($_POST['editMateri'])) {

if (!empty($_FILES['fileMateri']['name'])) {

	$purePath	 	= '../../libs/materi/'.str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','', $_FILES['fileMateri']['name']);
	$filePath	 	= $_POST['judulMateri'];
	$oldFile     	= $_POST['fileMateri'];

	$file 			= 'http://localhost/project_blk/v.1.0.3/libs/materi/'. $_FILES['fileMateri']['name'];
	$judulMateri 	= $_POST['judulMateri'];
	$deskripsi 		= $_POST['deskripsi'];
	$materiID		= $_POST['materiID'];
	$stafID			= $_POST['stafID'];
	$kejuruan 		= $_POST['kejuruan'];
	$uploaded 		= date('Y-m-d');
	$filetype  		= $_FILES['fileMateri']['type'];
	$filesize 		= $_FILES['fileMateri']['size'];
	$filetmp 		= $_FILES['fileMateri']['tmp_name'];
	$fileinfo		= pathinfo($_FILES['fileMateri']['name']);
	$ext 			= $fileinfo['extension'];

	$move 	= '../../libs/materi/'.fileAs($judulMateri, $stafID, $kejuruan, $uploaded, $ext);
	$remove = '../../libs/materi/'.str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','',$oldFile);

	$fileToServer = 'http://localhost/project_blk/v.1.0.3/libs/materi/'.fileAs($judulMateri, $stafID, $kejuruan, $uploaded, $ext);

	$data = array(
		"judulMateri" => $judulMateri,
		"fileMateri" => $fileToServer,
		"deskripsi" => $deskripsi,
		"uploaded" => $uploaded,
		"extension" => $ext,
		"size" => $filesize,
		"materiID" => $materiID
	);

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

	if (in_array($filetype, $type)) {
		
		$update = updateDataServer($data);

		if ($update == true) {
			
			move_uploaded_file($filetmp, $move);
			unlink($remove);

			header('Location: http://localhost/project_blk/v.1.0.3/staf/dashboard?success='. urlencode('File sukses diupdate'));

		}else{
			header('Location: http://localhost/project_blk/v.1.0.3/staf/dashboard?err='. urlencode('File gagal diupdate'));
		}

	}

}else{

	$file 			= $_POST['fileMateri'];
	$judulMateri 	= $_POST['judulMateri'];
	$deskripsi 		= $_POST['deskripsi'];
	$materiID		= $_POST['materiID'];
	$stafID			= $_POST['stafID'];
	$kejuruan 		= $_POST['kejuruan'];
	$size 			= $_POST['size'];
	$uploaded 		= date('d-m-Y');

	$sql = mysql_query("UPDATE materi SET judulMateri='$judulMateri', deskripsi='$deskripsi', fileMateri='$file' WHERE materiID='$materiID'");

	if ($sql) {
		header('Location: http://localhost/project_blk/v.1.0.3/staf/dashboard?success='. urlencode('File sukses diupdate'));
	}else{
		header('Location: http://localhost/project_blk/v.1.0.3/staf/dashboard?err='. urlencode('File gagal diupdate'));
	}
}

}

?>