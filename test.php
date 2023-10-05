<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <style type="text/css">
            .line{border:1px solid greenyellow}
            .bgaqua{background-color: aquamarine;}
            
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>//document ready
        $(function(){ //ajax
            $("#btn3").click(function(){
                //form 값을 serialize
                let fdata = $("#form").serialize();
                console.log(fdata);
                //ajax로 데이터 전송
                $.ajax({
                    url:'getcoupon.php',
                    data:fdata,
                    type:'POST',
                    dataType:'html',
                    success:function(result){//성공했을 때
                        console.log(result)
                        $("#tbl tbody").append(result);
                    },
                    error:function(e){
                        confirm.log(e)
                    }
                })
            })
        })  
        </script>
    </head>
    <body>
        <h1>Coupon</h1>
        <button id = "btn3">쿠폰에 입력해줘!</button>
        <form>
            <ul>
                <li><label>no</label>
                    <input name = "no" id = "no" value = "#123456789">
                </li><!--number-->
                <li><label>사용자</label>
                    <input name = "user" id = "user" value = "1">
                </li>
                <li><label>금액</label>
                    <input name = "price" id = "price" value = "1200">
                </li>
                <li><label>유효기간</label>
                    <input name = "till" id = "till" value = "2023-01-01">
                </li>
            </ul>
        </form>
        <div id="div1">
            <table id = "tbl" border=1>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>번호</th>
                        <th>사용자</th>
                        <th>금액</th>
                        <th>유효기간</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>#123456789</td>
                        <td>홍길동</td>
                        <td>1000</td>
                        <td>2023-01-01</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="div2">
        </div>
        <div id="div3">
        </div>
        
    </body>

</html>