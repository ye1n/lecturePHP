<?php
$dir = __DIR__ . "/upload";

$handle = opendir($dir);

while(($file=readdir($handle)) !== false){
    $fname = $file;
    if($fname == "." || $fname == "..") continue;
    $fname = $file;

    echo "<a href='http://localhost/download.php?name=$fname'>$fname</a>" . "</br>";
}