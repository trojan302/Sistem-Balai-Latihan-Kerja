<?php 

if (isset($_GET['filename'])) {

    $file = $_GET['filename'];

    $filename = str_replace('http://localhost/project_blk/admin/database/','./database/',$file);
    $fileinfo = str_replace('http://localhost/project_blk/admin/database/','', $file);
    $fileexts       = pathinfo($fileinfo);
    $basename       = $fileexts['basename'];
    $filename       = $fileexts['filename'];
    $ext            = $fileexts['extension'];
    $mime           = mime_content_type('./database/'.$basename);

    echo $mime;

    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$basename);

    // header yang menunjukkan ukuran file yang akan didownload
    header("Content-length: ".$result['size']);

    // header yang menunjukkan jenis file yang akan didownload
    header("Content-type: ".$mime);

    // proses membaca isi file yang akan didownload dari folder
    $fp  = fopen("./database/'".$basename, 'r');
    $content = fread($fp, filesize('./database/'.$basename));
    fclose($fp);

    // menampilkan isi file yang akan didownload
    echo $content;

    exit;
    
}else{
    header('Location: http://localhost/project_blk/admin/backups?restore=true');
}

?>