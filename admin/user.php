<?php
require_once '_main.php';
$Users = new Ss\User\User();
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户管理
                <small>User Manage</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>用户名</th>
                                    <th>邮箱</th>
                                    <th>端口</th>
                                    <th>总流量</th>
                                    <th>剩余流量</th>
                                    <th>已使用流量</th>
                                    <th>是否启用</th>
                                    <th>套餐</th>
                                    <th>到期时间</th>
                                    <th>剩余时间</th>
                                    <th>邀请人</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $us = $Users->AllUser();
                                foreach ( $us as $rs ){ ?>
                                    <tr>
                                        <td>#<?php echo $rs['uid']; ?></td>
                                        <td><?php echo $rs['user_name']; ?></td>
                                        <td><?php echo $rs['email']; ?></td>
                                        <td><?php echo $rs['port']; ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow($rs['transfer_enable']); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['transfer_enable']-$rs['u']-$rs['d'])); ?></td>
                                        <td><?php \Ss\Etc\Comm::flowAutoShow(($rs['u']+$rs['d'])); ?></td>
                                        <td>
<?php
$user_enable = $rs['enable'];
if ($user_enable == "1"){
    $show_enable = "启用";
} else {
    $show_enable = "禁用";
}
echo $show_enable;
?>
                                        </td>
                                        <td><?php echo $rs['plan']; ?></td>
                                        <td>
<?php
$user_expire_time = $rs['expire_time'];
$show_expire_time = date("Y",strtotime("$user_expire_time"))."年".date("m",strtotime("$user_expire_time"))."月".date("d",strtotime("$user_expire_time"))."日";
echo $show_expire_time;
?>
                                        </td>
                                        <td>
<?php
$now_time = date("Ymd");
$unix_now_time = strtotime($now_time);
$user_expire_time = $rs['expire_time'];
$unix_expire_time = strtotime($user_expire_time);
$show_unused_time = round(($unix_expire_time-$unix_now_time)/3600/24);
if ($unix_expire_time-$unix_now_time >= "1"){
echo $show_unused_time."天";
} else {
echo "已过期";
}
?>
                                        </td>
                                        <td>
<?php 
if ( $rs['ref_by'] != 0 ){
    $ref_u  = new \Ss\User\UserInfo($rs['ref_by']);
    $ref_name = $ref_u->GetUserName();
}

echo $ref_name;
?>
                                        </td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="user_edit.php?uid=<?php echo $rs['uid']; ?>">查看</a>
                                            <a class="btn btn-danger btn-sm" href="user_del.php?uid=<?php echo $rs['uid']; ?>" onclick="JavaScript:return confirm('确定删除吗？')">删除</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
