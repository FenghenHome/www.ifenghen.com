<?php
require_once '_main.php';

//更新
if(!empty($_POST)){
    $node_id        = $_POST['node_id'];
    $node_name      = $_POST['node_name'];
    $node_server    = $_POST['node_server'];
    $node_method    = $_POST['node_method'];
    $node_protocol  = $_POST['node_protocol'];
    $node_obfs      = $_POST['node_obfs'];
    $node_info      = $_POST['node_info'];
    $node_enable    = $_POST['node_enable'];
    $node_plan      = $_POST['node_plan'];
    $node_order     = $_POST['node_order'];
    $node_obfsparam = $_POST['node_obfsparam'];
    $node_port      = $_POST['node_port'];
    $node_passwd    = $_POST['node_passwd'];

    $node = new \Ss\Node\NodeInfo($node_id);
    $query = $node->Update($node_name,$node_plan,$node_server,$node_method,$node_protocol,$node_obfs,$node_info,$node_enable,$node_order,$node_obfsparam,$node_port,$node_passwd);
    if($query){
        echo ' <script>alert("更新成功!")</script> ';
        echo " <script>window.location='node.php';</script> " ;
    }
}

if(!empty($_GET)){
    //获取id
    $id = $_GET['id'];
    $node = new \Ss\Node\NodeInfo($id);
    $rs = $node->NodeArray();
}

?>

<!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            节点编辑
            <small>Node Update</small>
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
                        <h3 class="box-title">编辑节点</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="node_edit.php">
                        <div class="box-body">

                            <div class="form-group" style="display:none" >
                                <label for="cate_title" >ID</label>
                                <input  class="form-control" name="node_id" value="<?php echo $id;?>"  >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">名字</label>
                                <input  class="form-control" name="node_name" value="<?php echo $rs['node_name'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">地址</label>
                                <input  class="form-control" name="node_server" value="<?php echo $rs['node_server'];?>" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">端口</label>
                                <input   class="form-control" name="node_port"  value="<?php echo $rs['node_port'];?>" placeholder="对应user-config.json中additional_ports的端口" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">密码</label>
                                <input   class="form-control" name="node_passwd"  value="<?php echo $rs['node_passwd'];?>" placeholder="对应user-config.json中additional_ports的端口密码" >
                            </div>

                            <div class="form-group">
                                <label for="cate_method">加密</label>
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
                                <label for="cate_order">混淆参数</label>
                                <input   class="form-control" name="node_obfsparam"  value="<?php echo $rs['node_obfsparam'];?>" placeholder="对应user-config.json中redirect的参数" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">等级</label>
                                <input   class="form-control" name="node_plan"  value="<?php echo $rs['node_plan'];?>" placeholder="对应switchrule.py中node_plan的参数" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">排序</label>
                                <input   class="form-control" name="node_order"  value="<?php echo $rs['node_order'];?>" placeholder="节点显示顺序" >
                            </div>

                            <div class="form-group">
                                <label for="cate_order">状态</label>
                                <input   class="form-control" name="node_enable"  value="<?php echo $rs['node_enable'];?>" placeholder="0为禁用、1为启用" >
                            </div>

                            <div class="form-group">
                                <label for="cate_title">线路</label>
                                <input  class="form-control" name="node_info" value="<?php echo $rs['node_info'];?>" >
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" name="action" value="edit" class="btn btn-primary">修改</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<?php
require_once '_footer.php'; ?>
