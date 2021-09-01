<?php

//--------------------------------

// $human = [
//     // key => value
//     'name' => '홍길동',
//     'age' => 20,
//     'job' => '도적'
// ];
// $human2 = [];

//key 와 value 같이 찍기
// foreach ($human as $key => $item){
//     echo $key . ":" . $item . "<br/>";
// }

//--------------------------------

//$human = [
//    [1,2,3,4,5], //$human[0][1]
//    [6,7,8,9,10],
//    [11,12,13,14,15], //$human[2][3]
//    [16,17,18,19,20]
//];

//for loop로 위 2 차원 배열을 출력하시오.

//count($human) = 4
//count($human[$i]) = 5

//for($i=0; $i < count($human); $i++){
//    for($j=0; $j < count($human[$i]); $j++){
//        echo $human[$i][$j];
//    }
//    echo "<br/>";
//}

//--------------------------------

// $data = [1,2,3,4,5,6,7,8,9,10];
// $needle = "4";

//in_array : 값이 배열 안에 존재하는지 확인
// if(in_array($needle, $data)){
//     echo "4는 배열안에 있습니다 <br/>";
// }

//타입까지 비교
// if(in_array($needle, $data, true)){
//     echo "타입까지 비교해도 4는 배열안에 있습니다 <br/>";
// }else{
//     echo "타입 미스매치 <br/>";
// }

//--------------------------------

// $keys = ["name","age","job"];
// $value = ["홍길동", 20, "도적"];

// $arr = array_combine($keys, $value);

// echo "<pre>";
// var_dump($arr); //car_dump : 변수의 정보를 출력
// echo "</pre>";

//--------------------------------

// function dump($value){
//     echo "<pre>";
//     var_dump($value);
//     echo "<pre>";
// }
// echo "<div style = 'width: 400px'>";
// $fill_zero = array_fill(0, 5, 0);
// dump($fill_zero);

// //3번째 index부터 4개의 배열을 생성 banana로
// $fill_banana = array_fill(3, 4, "banana");
// dump($fill_banana);

// echo "</div>";

//--------------------------------

// function dump($value){
//     echo "<pre>";
//     var_dump($value);
//     echo "<pre>";
// }

// $arr = ["양영", "디지털", "홍길동"];

// dump($arr);

// //shift : 배열 첫번째 비우기 unshift : 비워진 자리에 채워넣고 배열 크기 반환
// echo array_shift($arr) . "<br/>";
// echo array_unshift($arr, "성남", "분당") . "<br/>";

// dump($arr);

//--------------------------------

// function dump($value){
//     echo "<pre>";
//     var_dump($value);
//     echo "<pre>";
// }

// $arr1 = [
//     "name1" => "홍길동",
//     "name2" => "이순신",
//     "name3" => "신사임당"
// ];

//value의 가나다
//sort($arr1);
//rsort($arr1); //역순
// krsort($arr1); //키기준 역순 정렬
// dump($arr1); 

//--------------------------------

function dump($value){
    echo "<pre>";
    var_dump($value);
    echo "<pre>";
}

$data = [
    ['name'=>'홍길동', 'age'=>34, 'job'=>"도적"],
    ['name'=>'신사임당', 'age'=>57, 'job'=>"가정주부"],
    ['name'=>'이순신', 'age'=>19, 'job'=>"해적"],
];

usort($data, function($a, $b){
    return $a['age'] - $b['age'];
});

// 홍길동 - 신사임당 : -23
// 신사임당 - 이순신 : 38
// 홍길동 - 이순신 : 15

// 뺀 숫자 중에서 가장 작은 수부터

dump($data);