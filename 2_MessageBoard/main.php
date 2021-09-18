<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBlog</title>
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

        .table {
            padding: 10px;
            border: 1px solid #ddd;
            width: 500px;
            text-align: center;
        }
        
        .btn{
            background-color: rgba(255, 255, 255, 0);
            border: none;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <section>
        <h1>게시판</h1><br>

        <?php

        require 'db.php';

        $sql = "SELECT * FROM board";
        $result = $db->query($sql);
        $list = $result->fetchAll();

        if (isset($list)) {
            //echo "<pre>";
            echo "<table class='table'>";
            echo "<th width='66%'><h3>제목</h3></th>";
            echo "<th width='33%'><h3>작성자</h3></th>";
            foreach ($list as $data) {
                echo "<tr>";
                echo "<td width='66%'><a href=\"text.php?id=$data->id\">$data->title</a></td>";
                echo "<td width='33%'>$data->name</td>";
                echo "</tr>";
            }
            echo "</table>";
            //echo "</pre>";
        }
        ?>

        <br><button onclick="location.href='upload.php'" class="btn">글쓰기</button>
    </section>
</body>

</html>