<?php
$number = $_GET['number'];

if($number <= 13){
    echo "초등학생입니다.";
}else if($number <= 16){
    echo "중학생입니다.";
}else if($number <= 19){
    echo "고등학생입니다.";
}else{
    echo "모두 아닙니다.";
}