<?php

require './config/conn.php';

if (isset($_GET['file'])) {

    $fileID = base64_decode($_GET['file']);

    $sql = "SELECT * FROM materi WHERE materiID='$fileID'";
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);

    $filename = str_replace('http://localhost/project_blk/libs/materi/','../libs/materi/',$result['fileMateri']);
    $file = str_replace('http://localhost/project_blk/libs/materi/','', $result['fileMateri']);
    $type = mime_content_type($filename);
    $fileexts       = pathinfo($file);
    $ext            = $fileexts['extension'];

    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$file);

    // header yang menunjukkan ukuran file yang akan didownload
    header("Content-length: ".$result['size']);

    // header yang menunjukkan jenis file yang akan didownload
    header("Content-type: ".$type);

    // proses membaca isi file yang akan didownload dari folder 'data'
    $fp  = fopen("../libs/materi/'".$file, 'r');
    $content = fread($fp, filesize('../libs/materi/'.$file));
    fclose($fp);

    // menampilkan isi file yang akan didownload
    echo $content;

    exit;
    
}else{
    header('Location: http://localhost/project_blk/user/materi');
}

?>