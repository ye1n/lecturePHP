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
    </style>
</head>
<body>
    <?php
        // 5. 선택한 음료 출력 & 잔돈 출력

        echo "<div class='menuList'>";
        $name = ['딸기주스', '오렌지주스', '바나나주스', '블루베리주스', '레몬주스','복숭아주스','키위주스','수박주스','체리주스'];
        $price = [1000, 1500, 2000, 2500, 3000, 3500, 4000, 4500, 5000];

        $choiceNum = $_GET['choice'];
        $money = $_GET['money'];

        $result = $money - $price[$choiceNum];
        echo "<h3>" . $name[$choiceNum] . "를 선택하셨습니다. </h3><br/>";
        echo "<div class='result'><b>잔돈 </b>: " . $result . "원</div>";
        echo "</div>";
    ?>
</body>
</html>