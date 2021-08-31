<?php

    //------------------------------------

    // $name = '홍길동';
    // $age = 20;
    // echo "안녕하세요 제 이름은 " . $name . "입니다.<br/>";
    // 결과 : 안녕하세요 제 이름은 홍길동입니다.

    // echo "안녕하세요 제 이름은 $name 입니다.<br/>";
    // 결과 : 안녕하세요 제 이름은 홍길동 입니다.
     
    // echo "안녕하세요 제 이름은 {$name}입니다.<br/>";
    // 결과 : 안녕하세요 제 이름은 홍길동입니다.

    // echo '안녕하세요 제 이름은 $name 입니다.<br/>';
    // 결과 : 안녕하세요 제 이름은 $name 입니다.

    //------------------------------------

    // $str = ' a b c '; // 띄어쓰기도 크기 차지
    // echo strlen($str) . "<br/>";
    
    // $str = '안녕하세요'; // UTF-8은 한글 3byte
    // echo strlen($str) . "<br/>";
    // echo mb_strlen($str) . "<br/>";

    // $str2 = 'abcde'; //0 1 2 3
    // echo strpos($str2, "d") . "<br/>";

    // $str3 = 'abcdeabcde'; 
    // $str3에서 6번째 이후로 있는 d 위치
    // echo strpos($str3, "d", 6) . "<br/>";

    // echo mb_strpos($str, "하") . "<br/>";

    //------------------------------------

    // replace
    // $str = "<a href='#'>네이버</a>";
    // $replaced = str_replace("네이버", "구글",  $str);
    // echo $str . "<br/>";
    // echo $replaced . "<br/>";
    
    //------------------------------------

    // $list = ["a", "b", "c", "d", "e"];
    // $replaced = str_replace($list, "", "Hello World");
    // echo $replaced . "<br/>"; //replace는 대소문자 구분을 한다.
    // 결과 : Hllo Worl;

    //------------------------------------

    // $str = "건강을 위해서라면 매일 야채와 과일, 물을 먹어야 한다.";
    // $target = ["야채", "과일", "물"];
    // $list = ["과자", "초콜릿", "치킨"];
    // $replaced = str_replace($target, $list, $str);
    // echo $str . "<br/>" . $replaced;

    //------------------------------------

    //$str = "abcdefg"; // 0부터 3개
    //echo substr($str, 0, 3) . "<br/>"; // 결과 : abc
    //echo substr($str, -1, 1) . "<br/>"; // 결과 : g
    //echo substr($str, -2, 2) . "<br/>"; // 결과 : fg
    //echo substr($str, -3); // 결과 : efg

    //------------------------------------

    //$department = ['소프트웨어과', '전자제어', '정보통신', '바이오화학'];
    // echo $department[1] . "<br/>";

    // $human = ['name'=>'홍길동', 'age'=>20, 'male'=>true, 'job'=>'도적'];
    // echo $human['name'] . "<br/>";
    // echo $human['age'] . "<br/>";
    // echo $human['male'] . "<br/>"; //결과 : 1
    
    // array_push($department, "새로운 학과1");
    // echo $department[4] . "<br/>";

    // $department[] = "새로운 학과2";
    // echo $department[5] . "<br/>";

    // $newArr = array_splice($department, 2, 1);
    // $newArr = array_splice($department, 2, 2, ["새로운과1","새로운과2"]);

    // echo "<pre>";
    // var_dump($department);
    // var_dump($newArr);
    // echo "</pre>";

    //------------------------------------

    // [문제] while loop를 통해 department의 모든 데이터를 출력해보세요.

    // 방법_1
    $department = ['소프트웨어과', '전자제어', '정보통신', '바이오화학'];

    $n = 0;
    while($n < count($department)){
        echo $department[$n] . "<br/>";
        $n++;
    }

    // 방법_2
    $department = ['소프트웨어과', '전자제어', '정보통신', '바이오화학'];

    $n = 0;
    while(count($department) > 0){
        $item = array_pop($department);
        echo $item . "을 꺼냈습니다. <br/>";
    }

    //------------------------------------