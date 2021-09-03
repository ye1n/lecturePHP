<?php

// PHP_시간 다루기 
//------------------------------------

// echo date('Y-m-d'). "<br/>";
// Apache -> config -> PHP (php.ini) -> timezone 변경
// echo date('Y-m-d H:i:s'). "<br/>";
// echo date('Y-m-d') . "<br/>";
// echo date('y,M,D') . "<br/>";

//------------------------------------

// strtotime : string을 time으로
// $time = strtotime("1989-06-29 07:30:18");
// echo date('Y-m-d H:i:s', $time). "<br/>";
// echo date('Y-m-d H:i:s', strtotime("+10 day", $time)). "<br/>";
// echo date('Y-m-d H:i:s', strtotime("+3 week", $time)). "<br/>";
// echo date('Y-m-d H:i:s', strtotime("+1 year", $time)). "<br/>";

// echo date('Y-m-d H:i:s', strtotime("+1 year", strtotime("1989-06-29 07:30:18"))). "<br/>";

// PHP_파일 다루기 
//------------------------------------

//파일을 읽어오기
// $filename = "sample.txt";

// if(file_exists($filename)){
//     // fopen : 읽기 모드로 해당 파일을 열겠다
//     $file = fopen($filename, "r");
//     if($file){
//         $size = filesize($filename);
//         echo "파일크기 : ${size} <br/>";
//         //fread : 파일 읽어오기
//         echo fread($file, 100);
//     }else{
//         echo "파일 열기에 실패했습니다.";
//     }
// }else{
//     echo "해당 파일이 존재하지 않습니다.";
// }

//------------------------------------

//파일을 만들기
// $filename = "hello.txt";

// w : 쓰기 모드 / r : 읽기 모드
// $file = fopen($filename, "w");
// if($file){
//     fwrite($file, "안녕하세요 Hello.txt입니다. ");
//     fclose($file);
// }else{
//     echo "파일 작성에 실패했습니다. ";
// }

//------------------------------------

// $myPage = file_get_contents("https://www.naver.com");
// echo $myPage;

//터미널에서 cd .. -> cd ./php -> php -> php ../htdocs/index.php

//------------------------------------

// $file =  file_get_contents("sample.txt");
// echo $file;

//------------------------------------

// include : 오류가 있어도 나머지 실행 / require : 오류가 있으면 실행 중지

//include("lib.php");
//require("lib.php");
// require_once("lib.php"); // require_once : 파일을 한번만 삽입
// $arr = [1,2,3,4,5,6,7];
// dump($arr);