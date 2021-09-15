<?php

//---------------------------------------

// function testFunction($param1, $param2, $param3=0){ // 기본값 0으로 지정
//    $sum = $param1 + $param2 + $param3;
//    return $sum;
// }

// $result = testFunction(40,50); 
// echo $result . "<br/>"; // 결과 : 90

// $result = testFunction(40,50, -20); 
// echo $result . "<br/>"; // 결과 : 70

//---------------------------------------

// 오버로딩 : 함수의 이름이 같아도 파라메터의 타입이나 개수가 다르면 가능
// 오버라이딩 : 부모를 상속받는 자식이 이름이 같은 함수를 다시 재정의한다 (덮어쓰기)

// call by reference : 참조에 의한 호출, 얕은 복사
// call by value : 값에 의한 호출, 깊은 복사

//---------------------------------------

// call by value
// function testFunction($param1, $param2){
//     $param1 = $param1 + 20;
//     $param2 = $param2 + 20;
//     return $param1 + $param2;
// }

// $a = 20;
// $b = 30;
// $result = testFunction($a, $b);
// echo $result . "<br/>"; 
// echo $a . "<br/>"; // 원본데이터에 영향 X
// echo $b . "<br/>"; 

//---------------------------------------

// call by reference
//function testFunction(&$param1, $param2){
//    $param1 = $param1 + 20;
//    $param2 = $param2 + 20;
//    return $param1 + $param2;
//}

//$a = 20;
//$b = 30;
//$result = testFunction($a, $b);
//echo $result . "<br/>"; 
//echo $a . "<br/>"; // 원본데이터에 영향 O
//echo $b . "<br/>";

//---------------------------------------

require_once("human.php");
require_once("lib.php");

//$h1 = new human();
// $h1 -> setName("우예인");
// $h1 -> sethobby("일기쓰기");
// $h1 -> sethobby("잠자기");

//dump($h1);
// echo $h1 -> hasHobby("일기쓰기");

// $h2 = new human();
// $h2 -> setName("박인환");
// $h2 -> sethobby("게임하기");
// $h2 -> sethobby("잠자기");

// dump($h1);

// if($h1 -> hasHobby("잠자기")
//     && $h1 -> hasHobby("잠자기")){
//     echo "둘다 개쓰레기";
// }

//---------------------------------------

$h1 = new human("우예인","일기쓰기");
dump($h1);

//---------------------------------------