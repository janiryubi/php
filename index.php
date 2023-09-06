<!DOCTYPE Html>
<html>
    <head>
        <meta charset = "utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style>
    .row div{border:1px solid grey}
</style>
<!--2칸 1:11/2:10 ~ 11:1--3~6칸 만들어보기 / lg - md 차이확인
SSL php
-->
<?
// 단열주석
/* 다열주석*/
//변수 $변수명
//문자열 합치기는 .이다
//변수 형이 없다
//반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
for($i=1;$i<7;$i++){
    $a='h'.$i;
    print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
}
?>
    </head>
    <body>
        <div class="row">
            <div class="col-lg-6"><h1>.col-lg-6</h1></div>
            <div class="col-lg-6"><h1>.col-lg-6</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-1"><h1>.col-lg-1</h1></div>
            <div class="col-lg-11"><h1>.col-lg-11</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-2"><h1>.col-lg-2</h1></div>
            <div class="col-lg-10"><h1>.col-lg-10</h1></div>
        </div>
        <div class="row">
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
            <div class="col-lg-9"><h1>.col-lg-9</h1></div>
        </div>
        <div class="row">
            <div class="col-md-3"><h1>.col-md-3</h1></div>
            <div class="col-md-9"><h1>.col-md-9</h1></div>
        </div>
        <div class="row">
            <div class="col-sm-3"><h1>.col-sm-3</h1></div>
            <div class="col-sm-9"><h1>.col-sm-9</h1></div>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<3;$i++){
            $s=' <div class="col-lg-4"><h1>.col-lg-4</h1></div>';
            print($s);
            }
            ?>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                $d='<div class="col-sm-3"><h1>.col-sm-3</h1></div>';
                print($d);
            }
            ?>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                $d='<div class="col-md-3"><h1>.col-md-3</h1></div>';
                print($d);
            }
            ?>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                $f='<div class="col-lg-3"><h1>.col-lg-3</h1></div>';
                print($f);
            }
            ?>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                $g='<div class="col-xl-3"><h1>.col-xl-3</h1></div>';
                print($g);
            }
            ?>
        </div>
        <div class="row">
            <?php
            for($i=0;$i<4;$i++){
                $j='<div class="col"><h1>.col</h1></div>';
                print($j);
            }
            ?>
        </div>
    </body>
</html>