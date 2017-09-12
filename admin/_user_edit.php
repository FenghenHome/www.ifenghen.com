<?php
require_once '../lib/config.php';
require_once '_check.php';

if(!empty($_POST)){
    $uid = $_POST['uid'];
    $name = $_POST['name'];
    $passwd = $_POST['passwd'];
    $email = $_POST['email'];
    $transfer_enable = $_POST['transfer_enable'];
    $invite_num = $_POST['invite_num'];
    $enable = $_POST['enable'];
    $plan = $_POST['plan'];
    $expire_time = $_POST['expire_time'];
      
    //更新
    $User = new Ss\User\User($uid);
    $query = $User->updateUser($name,$email,$passwd,$transfer_enable,$invite_num,$enable,$plan,$expire_time);
    if($query){
                $ue['code'] = '1';
                $ue['ok'] = '1';
                $ue['msg'] = "修改成功！即将跳转到用户管理列表！";
    }else{
                $ue['code'] = '0';
                $ue['msg'] = "出错了，请重试";
    }
}
echo json_encode($ue);
