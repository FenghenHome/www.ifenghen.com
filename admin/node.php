<?php
require_once '_main.php';
$node = new Ss\Node\Node();
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
            <div class="row">
                <div class="col-xs-12">
                    <p> <a class="btn btn-success btn-sm" href="node_add.php">添加</a> </p>
                    <div class="box">
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>节点</th>
                                    <th>状态</th>
                                    <th>在线</th>
                                    <th>等级</th>
                                    <th>操作</th>
                                </tr>
                                <?php
                                $n = new \Ss\Node\Node();
                                $nodes = $n->AllNode();
                                foreach($nodes as $rs){ ?>
                                    <tr>
                                        <td>#<?php echo $rs['id']; ?></td>
                                        <td> <?php echo $rs['node_name']; ?></td>
                                        <td>
<?php
$node_enable = $rs['node_enable'];
if ($node_enable == "1"){
    $show_enable = "启用";
} else {
    $show_enable = "禁用";
}
echo $show_enable;
?>
                                        </td>
                                        <td><?php echo $rs['node_online']; ?>人</td>
                                        <td><?php echo $rs['node_plan']; ?>级</td>
                                        <td>
                                            <a class="btn btn-info btn-sm" href="node_edit.php?id=<?php echo $rs['id']; ?>">编辑</a>
                                            <a class="btn btn-danger btn-sm" href="node_del.php?id=<?php echo $rs['id']; ?>">删除</a>
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
