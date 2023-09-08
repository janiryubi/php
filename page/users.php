<?php
        // 처리부분
        include('./module/mysql.php');

        $get=$_GET;
        $post=$_POST;
        switch($get['do']){
            case 'add':
                //print_r($post);
                unset($post['id']);// 자동완성컬럼이므로 삭제
                print('추가하는중...');
                if(empty($post['name'])){// 필수항목인 사람이름이 있는지 체크
                    print('사람 이름이 없습니다');
                }else{
                    // insert into 테이블명 (컬럼들ks) values (값들vs)
                    $ks='';
                    $vs='';
                    foreach($post as $k=>$v){
                        $ks.=$k.',';
                        $vs.='"'.$v.'",';
                    }
                    $qry='insert into users ('.substr($ks,0,-1).') values('.substr($vs,0,-1).')';
                    print($qry);
                    $res=getData($qry,2);
                }
                break;
            case 'edit':
                //
                // update 테이블명 set 컬럼명=값,...where 조건절
                $qbody='';
                foreach($post as $k=>$v){
                    $qbody.=$k."='".$v."',";
                }
                $where=' where id='.$post['id'];
                $qry='update users set '.substr($qbody,0,-1).$where;
                //print($qry);
                $res=getData($qry,2);
                break;
            case 'delete':
                print($get['id'].'을 삭제합니다.');
                //1 update를 이용한 삭제
                $where=' where id='.$get['id'];
                $qry='update users set status=-1'.$where;
                print($qry);
                $res=getData($qry,2);
                break;
            case 'cdel':
                print($get['id'].'을 삭제합니다.');
                //1 delete를 이용한 삭제
                $where=' where id='.$get['id'];
                $qry='delete from users '.$where;
                print($qry);
                $res=getData($qry,2);
                break;
            case 'reco':
                print($get['id'].'을 복구합니다.');
                // 복구
                $where=' where id='.$get['id'];
                $qry='update users set status=0'.$where;
                print($qry);
                $res=getData($qry,2);
                break;
        }
        $btn='<a href="/page/user.php?do=add" class="btn btn-primary">추가하기</a>';
        $title=array('Users','사용자 리스트'.$btn);
        include('./module/header.php');
        //update를 이용한 삭제일 경우
        //$qry='select id,name,uid,uemail,status from users where status>=0';
        //삭제된 데이터도 볼 경우
        $qry='select id,name,uid,uemail,status from users';
        $resArr=getData($qry);
        //print_r($resArr);
        $heads=array('id','이름','아이디','이메일','상태','관리');
        print('<table class="table table-bordered">');
        print('<tr>');
        foreach($heads as $head){
            print('<th>'.$head.'</th>');
        }
        print('</tr>');
        $row='';// 반복문 밖에서 항상 초기화에 신경쓴다.
        //$i = 1; // id값 1-2-3순으로 정렬 -> 칸밀리는데 줄이는 것 연구------
        foreach($resArr as $fall){
            $row.='<tr>';
            //$row.='<td>'.$i.'</td>';
            //$i++;
            foreach($fall as $k=>$v){
                $row.='<td>'.$v.'</td>';
            }
            $no=$fall['id'];// 개별 고유키를 기반으로 열리는 페이지에 데이터 전송
            $btns='
            <a href="/page/user.php?do=edit&id='.$no.'" class="btn btn-primary">E</a>
            <a href="/page/users.php?do=delete&id='.$no.'" class="btn btn-warning">D</a>';
            if($fall['status']<0){//삭제된 데이터의 경우
            $btns.='
            <a href="/page/users.php?do=cdel&id='.$no.'" class="btn btn-danger">완전삭제</a>
            <a href="/page/users.php?do=reco&id='.$no.'" class="btn btn-info">복구</a>';
            }
            $row.='<td><div class="btn-group">'.$btns.'</td>';
            $row.='</tr>';
        }
        print($row);
        print('</table>');
        ?>
        </div>
    </div>
    <?php
    //include('./module/footer.php');
    ?>
    </body>
</html>