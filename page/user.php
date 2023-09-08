<?php
    $do=$_GET['do'];
    $id=$_GET['id'];
    $udata=array(
        array('id','번호','hidden'),
        array('name','이름','txt'),
        array('uid','아이디','txt'),
        array('upw','패스워드','password'),
        array('uemail','이메일','txt'),
        array('status','상태','txt'),
    );
    $user=array();
    if($do=='edit'){// 수정하기 위해 get 정보 들어옴
        $title=array('User Edit','사용자 수정');
        include('./module/mysql.php');
        $qry='select id,name,uid,upw,uemail,status from users where id='.$id;
        $users=getData($qry);
        $user=$users[0];
    }else{ // 추가하기위해 get 정보 들어옴
        $title=array('User Add','사용자 추가');
        foreach($udata as $u){
            $user[$u[0]]='';
        }
    }
    include('./module/header.php');
    //print_r($user);
?>
<form action="/page/users.php?do=<?=$do?>" method="POST">
    <?php foreach($udata as $u){
            $txt='<div class="form-group row">';
            if($u[2]!='hidden'){
                $txt.='<label class="col-sm-2 col-form-label" for="'.$u[0].'">'.$u[1].':</label>';
            }
            
            $txt.='<div class="col-sm-10">
                    <input   type="'.$u[2].'" class="form-control" 
                    name="'.$u[0].'" value="'.$user[$u[0]].'" >
                </div>
            </div>';

            print($txt);
    }?>
  <button type="submit" class="btn btn-default">Submit</button>
</form>