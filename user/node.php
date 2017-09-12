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
                            <h3 class="box-title">普通节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="nav-tabs-custom">
				   <code>目前有美国洛杉矶Sharktech、美国洛杉矶Quadranet、 日本东京Choopa节点</code>
                            </div><?php
                            $node0 = $node->NodesArray(Ord);
                            foreach($node0 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
										<a class="btn btn-xs bg-orange btn-flat margin" target="_blank" href="node_qr.php?id=<?php echo $row['id']; ?>">获取二维码</a>
										<a class="btn btn-xs bg-purple btn-flat margin" href="#">状态:</a> <code><?php echo $row['node_status']; ?></code>
										<a class="btn btn-xs bg-purple btn-flat margin" href="#">描述:</a> <code><?php echo $row['node_info']; ?></code>
                                    </ul>
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->


                    </div><!-- /.box -->
                </div><!-- /.col (left) -->

                <div class="col-md-6">
                    <div class="box box-solid">
                        <div class="box-header">
                            <i class="fa fa-code"></i>
                            <h3 class="box-title">增强节点</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="nav-tabs-custom">
				<code>目前有日本东京KDDI、台湾GoogleCloud、美国洛杉矶C3edge-CN2节点</code>
                            </div><?php
                            $node1 = $node->NodesArray(Pro);
                            foreach($node1 as $row){
                                ?>
                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs pull-right">
                                        <li class="pull-left header"><i class="fa fa-angle-right"></i> <?php echo $row['node_name']; ?></li>
										<a class="btn btn-xs bg-orange btn-flat margin" target="_blank" href="node_qr.php?id=<?php echo $row['id']; ?>">获取二维码</a>
										<a class="btn btn-xs bg-purple btn-flat margin" href="#">状态:</a> <code><?php echo $row['node_status']; ?></code>
										<a class="btn btn-xs bg-purple btn-flat margin" href="#">描述:</a> <code><?php echo $row['node_info']; ?></code>
                                    </ul>
                                </div><!-- nav-tabs-custom -->
                            <?php }?>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- /.col (right) -->
                 
            </div><!-- /.row -->
            <!-- END PROGRESS BARS -->
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
