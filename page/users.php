
            <?php
        //처리부분
        include('./module/mysql.php');
        //print_r($_POST);
        //print_r($_GET);
        $get = $_GET;
        $post = $_POST;
        switch($get['do']){
            case 'add':

                break;
            case 'edit':
                //print_r($_POST);
                //update 테이블명 set 컬럼명 = 값, ...where 조건절
            //$qbody= " id'".$post['id']."',name='홍길동', uid='hong', upw = '1234',uemail='hong@aa.com', status= '0'";
            $qbody='';
            foreach($post as $k=>$v){
                    $qbody.=$k."='".$v."',";
                }
                $where = ' where id=' .$post['id'];
                $qry ='update users set '.substr($qbody,0,-1).$where;
                print($qry);
                $res = getData($qry,2);
                print($res);
                break;
            case 'delete':

                break;
        }
        //모듈화
        $title=array('Users', '사용자 리스트');
        include('./module/header.php');
            
        $qry ='select id,name,uid,uemail,status from users';
        $fall = getData($qry);
        //print_r($fass);
        $heads = array('id','이름','아이디','이메일','상태','관리');
        print ('<table class ="table table-bordered">');

        print ('<tr>');
        foreach($heads as $head){
            print('<th>'.$head.'</th>');
        }
        print ('</tr>');

        print ('<tr>');
        foreach($fall as $k=>$v){
            print('<td>'.$v.'</td>');
        }
        $btns = '<div class="btn-group">
        <a href = "/page/user.php" class="btn btn-primary">E</a>
        <button type="button" class="btn btn-warning">D</button>
        </div>';
        print('<td>'.$btns.'</td>');
        print ('<tr>');
        print ('</table>');
        ?>
        </div>
    </div>
    <?php
    //include('./module/footer.php');
    ?>
    </body>
</html>
