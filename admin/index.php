<?php
require_once '_main.php';
$ssmin = new \Ss\Etc\Ana();
$mt = $ssmin->getMonthTraffic();
$mt = $mt/$togb;
$mt = round($mt,3);
$active_user = $ssmin->activedUserCount();
$all_user = $ssmin->allUserCount();
$node_count = $ssmin->nodeCount();
$node_online = $ssmin->nodeonlineCount();
?>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                管理中心
                <small>Manage Center</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <?php  echo $node_count; ?>
                            </h3>
                            <p>
                                节点
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cloud"></i>
                        </div>
                        <a href="node.php" class="small-box-footer">
                            管理 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                <?php  echo $node_count; ?>
                            </h3>
                            <p>
                                节点
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-cloud"></i>
                        </div>
                        <a href="https://stats.uptimerobot.com/36QKXSxwN" class="small-box-footer">
                            状态 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3>
                                <?php  echo $all_user; ?>[<?php  echo $node_online; ?>]
                            </h3>
                            <p>
                                用户[在线]
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="user.php" class="small-box-footer">
                            查看 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>
                                <?php  echo $all_user; ?>
                            </h3>
                            <p>
                                数据库
                            </p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="https://manage.ifenghen.com" class="small-box-footer">
                            管理 <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div><!-- ./col -->

            </div><!-- /.row -->

        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>



