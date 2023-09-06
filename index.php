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

        <?php
        //function 함수명(매개변수){코드블럭;return 변수명}
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
        $score = 75;
        $score = 10*floor($score/10);
        print($score);
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
        ?>
        
    </body>
</html>