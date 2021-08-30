<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_1DAY</title>
</head>
<body>

    <!-- ip 주소 아는법 
    win + r cmd ipconpig -->
    <!-- IPv4 주소 . . . . . . . . . : 10.104.104.48 -->
    <!-- localhost = 127.0.0.1 -->

    <!-- --------------------------------- -->
    
    <!-- php 문서의 시작 -->

    <?php

        // html 문법 적용 가능
        //echo "<h1>Hello php world<h1>";

        // $a = 20;
        // $b = "yydh";
        // $c = [1,2,3,4];
        // echo $a1 . $b . "fff";
        // echo "<br/>" . $b;
        // echo $a . 120;
        // echo $a + 120;

        //---------------------------------

        //php의 함수
        // $a = 20;

        // function testFunction(){
        //     global $a;
        //     $b = 30;
        //     echo $a + $b;
        // }

        // testFunction();

        //---------------------------------

        //php는 함수 우선
        // $a = 20;

        // if($a >= 20){
        //     $b = 30;
        // }

        // echo $b;

        //---------------------------------

        //$a = 100;
        //$b = 200;
        //echo $a . "<br/>" . $b . "<br/>";

        //변수제거 함수
        //unset($a);
        //변수 존재 여부 확인
        //echo isset($a) . "<br/>";

        //echo $a . "<br/>" . $b;

        //---------------------------------

        // function destroy_foo(){
        //     global $foo;
        //     grobal 변수 지우기
        //     unset($GLOBALS['foo']);
        // }

        // $foo = 'bar';
        // destroy_foo();
        // echo $foo;

        //---------------------------------

        // define("HOME", "/src");

        // echo HOME . "<br/>";

        // function test(){
        //     echo "In test : " . HOME;
        // }

        // test();

        //---------------------------------

        echo __LINE__ . "<br/>"; // 결과 : 95
        echo __FILE__ . "<br/>"; // 결과 : C:\xampp\htdocs\index.php
        echo __DIR__ . "<br/>"; // 결과 : C:\xampp\htdocs

        function test(){
            echo __FUNCTION__ . "<br/>";
            // 결과 : test
        }

        test();

    ?>

</body>
</html>