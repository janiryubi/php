<?php
//http://127.0.0.1/myadmin/ root apmsetup
//데이터베이스 생성
//데이터베이스 연결
//$fall = mysqli_fetch_array($res);//다나옴
//$frow = mysqli_fetch_row($res);//순서대로 나옴
function getconn(){
    $host = 'localhost';
    $user = 'root';
    $pass = 'apmsetup';
    $dbase = 'myshop';
    $conn = mysqli_connect($host,$user,$pass,$dbase);
    mysqli_query($conn,'SET NAMES utf8');
    return $conn;
}

function getData($qry = 'select * from users'){
    $conn = getconn();
    $res = mysqli_query($conn,$qry);
    $data= mysqli_fetch_assoc($res);//연관배열로
    return $data;
}
?>
