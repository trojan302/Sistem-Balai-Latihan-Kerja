<?php

require './config/conn.php';

if (isset($_GET['fileMateri'])) {

    $fileMateri = $_GET['fileMateri'];

    $sql = "SELECT * FROM materi WHERE fileMateri='$fileMateri'";
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);

    $filename = str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','../libs/materi/',$result['fileMateri']);
    $file = str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','', $result['fileMateri']);
    $fileexts       = pathinfo($file);
    $basename       = $fileexts['basename'];
    $filename       = $fileexts['filename'];
    $ext            = $fileexts['extension'];
    $mime           = mime_content_type('../libs/materi/'.$basename);

    echo $basename;

    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$basename);

    // header yang menunjukkan ukuran file yang akan didownload
    header("Content-length: ".$result['size']);

    // header yang menunjukkan jenis file yang akan didownload
    header("Content-type: ".$mime);

    // proses membaca isi file yang akan didownload dari folder
    $fp  = fopen("../libs/materi/'".$basename, 'r');
    $content = fread($fp, filesize('../libs/materi/'.$basename));
    fclose($fp);

    // menampilkan isi file yang akan didownload
    echo $content;

    exit;
    
}else{
    header('Location: http://localhost/project_blk/v.1.0.3/user/materi');
}

?>