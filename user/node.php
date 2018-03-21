<?php
require_once '_main.php';
require_once '_check.php';
$node = new Ss\Node\Node();
$pass = $oo->get_pass();
$port = $oo->get_port();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                节点列表
                <small>Node List</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- START PROGRESS BARS -->
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">信息</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <?php
                            $node0 = $node->NodesArray(Ord);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
					<a class="btn btn-xs bg-orange btn-flat margin" target="_blank" href="node_qr.php?id=<?php echo $row['id']; ?>">二维码</a>
					<a class="btn btn-xs bg-purple btn-flat margin"> <?php echo $row['node_online']; ?>人在线</a>
					<a class="btn btn-xs bg-orange btn-flat margin" target="_blank" href="https://stats.uptimerobot.com/36QKXSxwN">状态</a>
					<a class="btn btn-xs bg-purple btn-flat margin">描述:</a> <code><?php echo $row['node_info']; ?></code>
                                    </ul>
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-th-list"></i>
                            <h3 class="box-title">客户端</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> Android 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/Shadowsocksr-android-3.4.0.6.apk" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/07/59d8efead858d.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> Windows 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/Shadowsocksr-csharp-4.7.0.zip" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/07/59d8f73bd160f.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> Windows 游戏客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://www.sockscap64.com/sstap/" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/08/59d9939f81d61.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> iOS 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://www.25pp.com/ios/detail_1923429" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/07/59d8f3cda6710.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> Mac OS X 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/ShadowsocksX-NG-R8.dmg" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/08/59d995a3b46c5.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> OpenWrt 15.05(ar71xx) 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/luci-app-shadowsocksR-GFW_1.2.5_all.ipk" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="#" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> OpenWrt 15.05(ramips) 客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="#" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="#" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> avege 多平台客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/avege/avege/releases" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="#" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> electron-ssr 多平台客户端</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://github.com/erguotou520/electron-ssr/releases" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="#" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> Shadowrocket IPA</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://www.iphonecake.com/app_932747118_.html" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="https://i.loli.net/2017/10/07/59d8f3cda6710.png" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> A.BIG.T IPA</li>
					<a class="btn btn-xs bg-orange btn-flat margin" href="https://www.iphonecake.com/app_1051326718_.html" rel="nofollow" target="_blank">下载</a>
					<a class="btn btn-xs bg-purple btn-flat margin" href="#" rel="nofollow" target="_blank">教程</a>
                                    </ul>
                                </div><!-- nav-tabs-custom -->
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
				
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
