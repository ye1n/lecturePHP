<?php

$id = $_GET['id'];

require 'db.php';

$sql = "select * from board where id=" . $id;
$result = $db->query($sql);
$list = $result->fetchAll();

?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0 auto;
        }

        section {
            position: relative;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 500px;
            height: 500px;
        }

        .text {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            background-color: rgba(255, 255, 255, 0);
            border: none;
            font-weight: bold;
        }
        .title{
            display: flex;
        }
    </style>
</head>

<body>
    <section>
        <?php
        foreach ($list as $data) {
            echo "<div class = 'title'><h3>" . $data->title . "</h3></div><br>";
        }
        ?>
        <div class="text">
            <?php
            foreach ($list as $data) {
                echo "</br><pre>" . $data->text . "</pre><br><br>";
            }
            ?>
        </div>

        <br><input type="button" onclick="history.go(-1)" value="목록으로" class="btn">
    </section>
</body>

</html>