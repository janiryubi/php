<!DOCTYPE html>
<html>
    <head><!--주석 전체적 페이지에 영향을 주는 요소-->
        <meta charset="utf-8"/>
        <title>My php</title>
        <!-- CSS 문법 -->
        <style type = "text/css"> 
            /* CSS(Cascading Style Sheet) 주석 -> 스크래이핑 CSS selector */
            /* 태그 셀렉터 h1 태그를 찾아서 모두 red 컬러로 바꿀 것 */ 
            h1{
                color:red;
            }
            div{border:1px solid red;} /* 테두리, dotted-> 점선 */
            /* 아이디 셀렉터 # */
            #hello{
                border:3px dotted blue;
            }
            /* 클래스 셀렉터 . */
            .txtGreen{
                color:green;
            }
        </style>
        <!-- javascript 영역-->
        <script>
            // javascript 한줄 주석
            /* javascript 블럭 주석 */
        </script>
    </head>
    <body><!-- 페이지 본문-->
    hello html
        <div>
            <h1>hello html</h1><!--띄어쓰기가 많아도 하나로 봄-->
            <h2 class = "txtGreen">h2</h2>
            <h3 class = "txtGreen">h3</h3>
            <h4>...</h4>
            <h6>h6</h6>
            <h7>h7</h7><!-- 사용자 정의 태그 -->
        </div>
        <p>안녕하세요</p>
        <p>여러분</p>
        <div id = "hello">여러분 반갑습니다.</div>
    </body>
    
</html>