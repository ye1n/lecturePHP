<?php

//-------------------------------------

$tmpName = $_FILES["upload"]["tmp_name"];
$realName = $_FILES["upload"]["name"];

if(!file_exists("upload")){
    mkdir("upload"); //mkdir : upload 디렉토리 생성
}

// move_uploaded_file : 업로드된 파일을 새 위치로 옮기는 함수
move_uploaded_file($tmpName, "upload/" . $realName);
//upload_max_filesize M , post_max_size M 바꿔서 가능 용량 변경

