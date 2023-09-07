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
    .redbox{background-color:red;}
</style>
<!--2칸 1:11/2:10 ~ 11:1--3~6칸 만들어보기 / lg - md 차이확인
SSL php
-->
    </head>
    <body>
        <div class="row">
            <div class="col-lg-3"><h1>.col-lg-3</h1></div>
            <div class="col-lg-9"><h1>.col-lg-9</h1></div>
        </div>
        <br>
        <br>
        <?
        // 단열주석
        /* 다열주석*/
        //변수 $변수명'
        //문자열 합치기는 .이다
        //변수 형이 없다
        //반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
        for($i=1;$i<7;$i++){
            $a='h'.$i;
            print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
        }
        ?>
        <div class="row">
            <?php
                for($i=0;$i<3;$i++){
            ?>
            <div class="col-lg-4"><h1>.col-lg-4</h1></div>
            <?php
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
        <br>
        <br>

        <div class="row">
            <?php
            $total = 12;//부트스트랩 전체컬럼수
            $wkan=3;//나누고 싶은 칸 수
            $cNo=($total/$wkan);//클래스 숫자
            $cnt=$total/$cNo;//반복숫자
            for($i=0;$i<($total/$wkan);$i++){
                $s=' <div class="col-lg-'.$cNo.'"><h1>.col-lg-'.$cNo.'</h1></div>';
                print($s);
            }
            ?>
        </div>
        <br>

        <?php
        $total = 12;//부트스트랩 전체컬럼수
        $wkan=3;//나누고 싶은 칸 수

        $cNo=($total/$wkan);//클래스 숫자
        $cnt=$total/$cNo;//반복숫자
        print('<div class="row">');
        for($i=0;$i<($total/$wkan);$i++){
            $s=' <div class="col-lg-'.$cNo.'"><h1>.col-lg-'.$cNo.'</h1></div>';
            print($s);
        }
        print('</div>');
        ?>
        <br>
        <?php
        //def 함수명():
        //선언 function 함수명(매개변수){코드블럭;return 변수명}
        function makeBcol($wkan=3){
                //$wkan=3; // 나누고 싶은칸수
                $total=12; // 부트스트랩 전체컬럼수
                /*php 수학 내장함수*/ 
                $cNo=round($total/$wkan);//반올림
                //$cNo=floor($total/$wkan);//내림
                //$cNo=ceil($total/$wkan); // 클래스 숫자 올림

                $cnt=$total/$cNo; // 반복숫자
                print('<div class="row">'."\n");
                for($i=0;$i<$cnt;$i++){
                    if($i%2==1){
                        $addClass='redbox';
                    }else{
                        $addClass='';
                    }
                    $s='<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>.col-md-'.$cNo.' ('.$cnt.')</h1></div>'."\n";
                    print($s);//cNo와 addclass는 꼭 띄어쓰기 해주기
                } //2nd for
                print('</div>'."\n");
        }

        for($kan=2;$kan<7;$kan++){
            makeBcol($kan);
        }

        print('<hr>');


        $score = 75;
        $score = 10*floor($score/10);
        print($score);
        //python에는 if elif else문을 써야하지만 php는 switch문이 있다.
       //switch문은 변수나 표현식의 결과가 여러 개일 때 각기 다른 함수를 호출할 수 있어서 유용 
        switch($score){
            case 90:
                print('수');
                break;
            case 80:
                print('우');
                break;
            case 70:
                print('미');
                break;
            default:
                print('낙제');
        }

        print('<hr>');
        //<br>대신 이렇게쓰면 <h1>등 간격크기 제안 가능

        ?>
        
        <?
        //개별처리 글자 위 아래로 공백주기 함수로 만들어봄
        function makehr($title="개별처리"){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
        }
        makehr();

        makeBcol(1);
        makeBcol(2);
        makeBcol(3);
        makeBcol(4);
        makeBcol(6);
        makehr('사다리 만들기');

        $kn=1;
        function grid1($cNo=1,$addClass='redbox'){
            $other=12-$cNo;
            $s = '<div class = "row">';    
            $s.='<div class="col-lg-'.$cNo.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-md-'.$other.'</h1></div>'."\n";
            $s = '</div>';
            print($s);
        }
        for ($i=11;$i>0;$i--){
            grid1($i);
        }
    
        makehr('단순배열');
        /*단순 배열*/
        $arr = array(1,2,국어,수학);
            for($i=0;$i<count($arr);$i++){
                print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
            }

        foreach($arr as $a){
            print('<li>'.$a.'</li>');
        }
        makehr('연관배열');
        /*연관 배열 key - value*/
        $arr = array(1=>'국어',2=>'수학',5=>'영어',6=>'과학');
            for($i=0;$i<count($arr);$i++){
                print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
            }

        foreach($arr as $k=>$v){
            print('<li>'.$k.':'.$v.'</li>');
        }
        ?>
    </body>
</html>