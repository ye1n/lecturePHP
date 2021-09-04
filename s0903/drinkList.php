<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .submit{
            border-radius : 5px;
            padding : 1.5px 5px 1.5px 5px;
            font-weight: 500;
            width: 100%;
        }
    </style>
</head>
<body>

<?php

// 3. 가진 돈으로 살수 있는 리스트 출력
// 4. 원하는 음료를 선택
echo "<div class='menuList'>";
echo "<h2>MENULIST</h2><br/>";
$money = $_GET['money'];

$name = ['딸기주스', '오렌지주스', '바나나주스', '블루베리주스', '레몬주스','복숭아주스','키위주스','수박주스','체리주스'];
$price = [1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000];

echo "<form action='/result.php' method='get'>";

for($i=0; $i<count($name); $i++){
    if($money >= $price[$i]){
        echo "<div class='menu'><input type='radio' name='choice' value='$i'> ";
        echo "<b>" . $name[$i] . " </b>" . $price[$i] . "원<br/></div>";
    }
}

echo "<br/><button type='submit' value='$money' name='money' class='submit'>선택</button>";
echo "</form>";
echo "</div>";

?>

</body>
</html>