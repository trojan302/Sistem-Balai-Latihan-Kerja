<?php

require './config/conn.php';

function _mime_content_type($filename) {
    $result = new finfo();

    if (is_resource($result) === true) {
        return $result->file($filename, FILEINFO_MIME_TYPE);
    }

    return false;
}

if (isset($_GET['file'])) {

    $fileID = base64_decode($_GET['file']);

    $sql = "SELECT * FROM materi WHERE materiID='$fileID'";
    $query = mysql_query($sql);
    $result = mysql_fetch_assoc($query);

    $file_name = str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','./libs/materi/',$result['fileMateri']);
    $file = str_replace('http://localhost/project_blk/v.1.0.3/libs/materi/','', $result['fileMateri']);
    $fileexts       = pathinfo($file);
    $basename       = $fileexts['basename'];
    $filename       = $fileexts['filename'];
    $ext            = $fileexts['extension'];

    $mime = mime_content_type($file_name);

    header('Content-Description: File Transfer');
    header('Content-Type: '.$mime);
    header('Content-Disposition: attachment; filename:'.$file_name);
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: '.$result['size']);
    ob_clean();
    flush();
    readfile($file_name);

    exit;
    
}else{
    header('Location: http://localhost/project_blk/v.1.0.3/user/materi');
}

?>