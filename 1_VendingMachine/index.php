<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>자판기</title>
    <style>
        *{
            margin : 0;
            padding : 0;
            border: none;
            outline: none;
        }
        .menuList{
            margin : 0 auto;
            width : 300px;
            height : 500px;
            display : flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .input{
            width: 100px;
            height: 20px;
            border-bottom: 1px solid #ddd;
            text-align: center;
        }
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }
        .submit{
            border-radius : 5px;
            padding : 1.5px 5px 1.5px 5px;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <?php

    echo "<div class='menuList'>";
    // 1. 모든 리스트 출력

    echo "<h2>MENULIST</h2><br/>";
    $drinkList= [
        '딸기주스' => 1000,
        '오렌지주스' => 1500,
        '바나나주스' => 2000,
        '블루베리주스' => 2500,
        '레몬주스' => 3000,
        '복숭아주스' => 3500,
        '키위주스' => 4000,
        '수박주스' =>4500,
        '체리주스' => 5000
    ];
    
    foreach($drinkList as $name=> $price){
        echo "<div class='menu'><b>" . $name . " </b>" . $price. "원<br/></div>";
    }
    

    // 2. 돈 투입
    echo "<br/><b>투입 할 가격을 입력해주세요.</b>";
    echo "<form action='/drinkList.php' method='get'>";
    echo    "<input type='number' name='money' class='input'>";
    echo    "<input type='submit' value='투입' class='submit'>";
    echo "</form>";

    echo "</div>";
    ?>

</body>
</html>