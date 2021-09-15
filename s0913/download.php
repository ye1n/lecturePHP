<?php
$filename = $_GET['name'];
$path = 'upload/' . $filename;
if(!file_exists($path)){
    echo "해당 파일은 존재하지 않습니다.";
    exit;
}

$filesize = filesize($path);
header("Pragma: public");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=$filename");
header("Content-Transfer-Encoding: binary");
header("content-Length: $filesize");

ob_clean();
flush();
readfile($path);
