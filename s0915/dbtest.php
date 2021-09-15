<?php

// xampp contrl panel 에서 mysql의 admin 누르기
//myblog라는 테이블만들고 id name password level 넣기 다 varchr 100에
//id는 primarykey level은 int

$host = "localhost";
$dbname = "myblog";
$charset = "utf8mb4"; //인코딩
$user = "root";
$passwd = "";
// PDO::ATTR_DEFAULT_FETCH_MODE : 가져올 값에 대한 설정을 디폴트로 설정
// PDO::FETCH_OBJ : 결과에서 반환되는 열 이름에 해당하는 property 이름으로 익명 객체를 반환
$option = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ];

// DB 접속
$db = new PDO("mysql:host={$host}; dbname={$dbname}; charset={$charset}", $user, $passwd, $option);

// INSERT
// $sql = "INSERT INTO users(id, name, password, level)
//        VALUES('yydh02', '성현추', '1234', 1)";

$sql = "SELECT * FROM users";
$result = $db -> query($sql);
$list = $result -> fetchAll(); // fetchAll() : 결과를 모두 list에 넣음

//INSERT, UPDATE, DELETE 쿼리를 실행할 땐 exec()
//SELECT 쿼리를 실행할 땐 query()

//테이블 형태로 출력
echo "<pre>";
foreach($list as $data){
    echo "<table border='1'>";
    echo "<tr>";
    echo "<td>$data->id</td>";
    echo "<td>$data->name</td>";
    echo "<td>$data->password</td>";
    echo "<td>$data->level</td>";
    echo "</tr>";
    echo "</table>";
}
echo "</pre>";