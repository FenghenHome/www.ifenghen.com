<?php
require_once '_main.php';

//获得流量信息
if($oo->get_transfer()<1000000)
{
    $transfers=0;}else{ $transfers = $oo->get_transfer();

}
//计算流量并保留2位小数
$all_transfer = $oo->get_transfer_enable()/$togb;
$unused_transfer =  $oo->unused_transfer()/$togb;
$used_100 = $oo->get_transfer()/$oo->get_transfer_enable();
$used_100 = round($used_100,2);
$used_100 = $used_100*100;
//计算流量并保留2位小数
$transfers = $transfers/$tomb;
$transfers = round($transfers,2);
$all_transfer = round($all_transfer,2);
$unused_transfer = round($unused_transfer,2);
//最后在线时间
$unix_time = $oo->get_last_unix_time();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                用户中心
                <small>User Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">公告&FAQ</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p>流量不会重置，可以通过签到获取流量。</p> 
                            <p>流量可以通过签到获取，基本每天可以用1M-10M流量。</p> 
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">流量使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 已用流量：<?php echo $transfers."MB";?> </p>
                            <div class="progress progress-striped">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $used_100; ?>%">
                                    <span class="sr-only">Transfer</span>
                                </div>
                            </div>
                            <p> 可用流量：<?php echo $all_transfer ."GB";?> </p>
                            <p> 剩余流量：<?php echo  $unused_transfer."GB";?> </p>
                            <p> 到期时间：<?php echo $oo->get_expire_time();?> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">套餐使用情况</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 当前套餐：<?php echo $oo->get_plan();?> </p>
                            <p> 套餐A：</p>
                            <p> 套餐B：</p>
                            <p> 套餐C：</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">签到获取流量</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 22小时内可以签到一次。</p>
                            <?php  if($oo->is_able_to_check_in())  { ?>
                                <p id="checkin-btn"> <button id="checkin" class="btn btn-success  btn-flat">签到</button></p>
                            <?php  }else{ ?>
                                <p><a class="btn btn-success btn-flat disabled" href="#">不能签到</a> </p>
                            <?php  } ?>
                            <p id="checkin-msg" ></p>
                            <p>上次签到时间：<code><?php echo date('Y-m-d H:i:s',$oo->get_last_check_in_time());?></code></p>
                            <p> 最后使用时间：<code><?php echo date('Y-m-d H:i:s',$unix_time);  ?></code> </p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">联系方式</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 邮箱：<a href="mailto:s.sunfeihu@gmail.com" rel="nofollow" target="_blank">s.sunfeihu@gmail.com</a></p>
                            <p> Telegram：<a href="https://t.me/fenghen" rel="nofollow" target="_blank">https://t.me/fenghen</a></p>
                            <p> Telegram交流群：<a href="https://t.me/ifenghen" rel="nofollow" target="_blank">https://t.me/ifenghen</a></p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <h3 class="box-title">续费</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <p> 续费：<a href="https://www.114rom.com/dashang.html" rel="nofollow" target="_blank">https://www.114rom.com/dashang.html</a></p>
                            <p> 续费之后请截图，将截图+端口+邮箱等信息通过联系方式提供管理员</p>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>

<script>
    $(document).ready(function(){
        $("#checkin").click(function(){
            $.ajax({
                type:"GET",
                url:"_checkin.php",
                dataType:"json",
                success:function(data){
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                    // 在控制台输出错误信息
                    console.log(removeHTMLTag(jqXHR.responseText));
                }
            })
        })
    })
</script>
<script type="text/javascript">
            // 过滤HTML标签以及&nbsp 来自：http://www.cnblogs.com/liszt/archive/2011/08/16/2140007.html
            function removeHTMLTag(str) {
                    str = str.replace(/<\/?[^>]*>/g,''); //去除HTML tag
                    str = str.replace(/[ | ]*\n/g,'\n'); //去除行尾空白
                    str = str.replace(/\n[\s| | ]*\r/g,'\n'); //去除多余空行
                    str = str.replace(/&nbsp;/ig,'');//去掉&nbsp;
                    return str;
            }
</script>