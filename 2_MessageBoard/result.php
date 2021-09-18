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
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 500px;
            height: 500px;
        }

        .btn {
            background-color: rgba(255, 255, 255, 0);
            border: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section>

        <?php

        $title = $_POST["title"];
        $name = $_POST["name"];
        $text = $_POST["text"];

        if (!empty($title) && !empty($name) && !empty($text)) {

            require 'db.php';

            //insert
            $sql = "INSERT INTO board(title, name, text)
                VALUES('$title', '$name', '$text')";

            $db->exec($sql);

            echo "<h2>성공적으로 업로드 되었습니다.</h2><br>";

            echo "<form action='main.php' method='post'>";
            echo    "<input type='submit' value='목록으로' class='btn'>";
            echo "</form>";

        } else {
            echo "<script>alert(\"모든 빈칸을 작성해주세요.\");</script>";
            echo "<script>location.href='upload.php'</script>";
        }
        ?>

    </section>

</body>

</html>