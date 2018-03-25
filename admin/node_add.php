<?php
require_once '_main.php';

if(!empty($_POST)){
    $node_name     = $_POST['node_name'];
    $node_server   = $_POST['node_server'];
    $node_method   = $_POST['node_method'];
    $node_protocol = $_POST['node_protocol'];
    $node_obfs     = $_POST['node_obfs'];
    $node_info     = $_POST['node_info'];
    $node_enable   = $_POST['node_enable'];
    $node_plan     = $_POST['node_plan'];
    $node_order    = $_POST['node_order'];

    $node = new Ss\Node\Node();
    $query = $node->Add($node_name,$node_plan,$node_server,$node_method,$node_protocol,$node_obfs,$node_info,$node_enable,$node_order);
    if($query){
        echo ' <script>alert("添加成功!")</script> ';
        echo " <script>window.location='node.php';</script> " ;
    }
}

?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点添加
            <small>Add Node</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">添加节点</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="node_add.php">
                        <div class="box-body">

                            <div class="form-group">
                                <label for="cate_title">节点名字</label>
                                <input  class="form-control" name="node_name" value="<?php echo $rs['node_name'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">节点地址</label>
                                <input  class="form-control" name="node_server" value="<?php echo $rs['node_server'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_method">加密方式</label>
                                <input  class="form-control" name="node_method" value="<?php echo $rs['node_method'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_protocol">协议</label>
                                <input  class="form-control" name="node_protocol" value="<?php echo $rs['node_protocol'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_obfs">混淆</label>
                                <input  class="form-control" name="node_obfs" value="<?php echo $rs['node_obfs'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">推荐线路</label>
                                <input  class="form-control" name="node_info" value="<?php echo $rs['node_info'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">节点状态<code>[0为禁用、1为启用]</code></label>
                                <input   class="form-control" name="node_enable"  value="<?php echo $rs['node_enable'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">节点等级<code>[对应switchrule.py中node_plan]</code></label>
                                <input   class="form-control" name="node_plan"  value="<?php echo $rs['node_plan'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">排序<code>[对应usermysql.json中node_id]</code></label>
                                <input   class="form-control" name="node_order"  value="<?php echo $rs['node_order'];?>" >
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" name="action" value="add" class="btn btn-primary">添加</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
