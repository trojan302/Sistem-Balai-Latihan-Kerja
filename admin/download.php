<?php 

if (isset($_GET['filename'])) {

    $file = $_GET['filename'];

    // $filename = str_replace('http://localhost/project_blk/v.1.0.3/admin/database/','./database/',$file);
    // $fileinfo = str_replace('http://localhost/project_blk/v.1.0.3/admin/database/','', $file);
    $fileexts       = pathinfo($file);
    $basename       = $fileexts['basename'];
    $filename       = $fileexts['filename'];
    $ext            = $fileexts['extension'];
    $mime           = mime_content_type('./database/'.$basename);

    echo $mime;

    // header yang menunjukkan nama file yang akan didownload
    header("Content-Disposition: attachment; filename=".$basename.'.'.$ext);

    // header yang menunjukkan ukuran file yang akan didownload
    header("Content-length: ".$fileexts['size']);

    // header yang menunjukkan jenis file yang akan didownload
    header("Content-type: ".$mime);

    // proses membaca isi file yang akan didownload dari folder
    $fp  = fopen("./database/'".$basename, 'r');
    $content = fread($fp, filesize('./database/'.$basename.'.'.$ext));
    fclose($fp);

    // menampilkan isi file yang akan didownload
    echo $content;

    exit;
    
}else{
    header('Location: http://localhost/project_blk/v.1.0.3/admin/backups?restore=true');
}

?>