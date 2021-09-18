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

        h3{
            margin-bottom: 5px;
        }
        .form {
            width: 100%;
        }

        .input {
            width: 100%;
            margin-bottom: 10px;
        }

        .input>input {
            padding: 5px;
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
        <h1>게시글 작성</h1><br>
        <form action="result.php" method="POST">
            <div class="input">
                <h3>제목</h3>
                <input type="text" name="title" placeholder="제목을 입력해주세요.">
            </div>
            <div class="input">
                <h3>이름</h3>
                <input type="name" name="name" placeholder="이름을 입력해주세요.">
            </div>
            <div class="input">
                <h3>내용</h3>
                <textarea name="text" id="text" cols="30" rows="5" placeholder="내용을 입력해주세요."></textarea>
            </div>
            <input type="submit" value="등록하기"  class="btn">
            <input type="button" onclick="history.go(-1)" value="목록으로" class="btn">
        </form>
    </section>
</body>

</html>