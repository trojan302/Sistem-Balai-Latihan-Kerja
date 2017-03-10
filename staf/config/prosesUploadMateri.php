<?php 

require 'conn.php';

function stafNama($stafID){

	$query = "SELECT nama FROM staf_blk WHERE stafID='$stafID'";
	$sql = mysql_query($query);
	$result = mysql_fetch_assoc($sql);

	return $result['nama'];

}

function fileAs($filePath, $judulMateri, $stafID, $kejuruan, $uploaded, $ext){

	$result = $filePath.str_replace(' ', '_', $judulMateri).'-('.str_replace(' ', '_', stafNama($stafID)).'-'.$kejuruan.')-'.$uploaded.'-'.date('His').'.'.$ext;

	return $result;

}

function uploadToServer($dataUpload){

	// echo "<pre>",print_r($dataUpload),"</pre>";		
	$query = "INSERT INTO `materi`(`stafID`, `id_kejuruan`, `judulMateri`, `fileMateri`, `deskripsi`, `uploaded`, `extension`, `size`) VALUES ('".$dataUpload['stafID']."','".$dataUpload['id_kejuruan']."','".$dataUpload['judulMateri']."','".$dataUpload['fileMateri']."','".$dataUpload['deksripsi']."','".$dataUpload['uploaded']."','".$dataUpload['extension']."','".$dataUpload['size']."')";

	$sql = mysql_query($query);

	return true;
	
}

if (isset($_POST['share'])) {

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

	$kejuruan 		= $_POST['kejuruan'];
	$kejuruanID 	= $_POST['kejuruanID'];
	$stafID 		= $_POST['stafID'];
	$deksripsi 		= $_POST['deksripsi'];
	$judulMateri 	= $_POST['judulMateri'];
	$uploaded 		= date('d-m-Y');

	$filetype 		= $_FILES['fileMateri']['type'];
	$filename 		= $_FILES['fileMateri']['name'];
	$filesize 		= $_FILES['fileMateri']['size'];
	$filetmp 		= $_FILES['fileMateri']['tmp_name'];

	$fileexts 		= pathinfo($_FILES['fileMateri']['name']);
	$ext 			= $fileexts['extension'];

	if (in_array($filetype, $type)) {

		if ($filesize < 10000000) {

			$pathUpload = fileAs($filePath, $judulMateri, $stafID, $kejuruan, $uploaded, $ext);

			if(move_uploaded_file($filetmp, $pathUpload)) {

				$dataUpload = array(
					'stafID' => $stafID,
					'id_kejuruan' => $kejuruanID,
					'judulMateri' => $judulMateri,
					'fileMateri' => str_replace('../../','http://anonymous/project_blk/', $pathUpload),
					'deksripsi' => $deksripsi,
					'uploaded' => date('Y-m-d'),
					'extension' => $ext,
					'size' => $filesize 
				);

				$sukses = uploadToServer($dataUpload);

				if ($sukses == true) {
					header('Location: http://anonymous/project_blk/staf/dashboard?success='. urlencode('data berhasil diunggah'));
				}else{
					header('Location: http://anonymous/project_blk/staf/dashboard?err='. urlencode('data gagal diunggah'));
				}

			}else{

				header('Location: http://anonymous/project_blk/staf/dashboard?err='. urlencode('data gagal diunggah'));

			}

		}else{

			header('Location: http://anonymous/project_blk/staf/dashboard?err='. urlencode('File tidak boleh lebih dari 10 MB'));

		}

	}else{

		header('Location: http://anonymous/project_blk/staf/dashboard?err='. urlencode('Ektensi yang diijinkan hanya (.docx, .pptx, .xlsx, .pdf, .doc, .ptt, .xls)'));
	}

}

?>