<?php
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];
$node = new \Ss\Node\NodeInfo($id);
$server =  $node->Server();
$method = $node->Method();
$protocol = $node->Protocol();
$obfs = $node->Obfs();
$pass = $oo->get_pass();
$port = $oo->get_port();
$user_plan = $oo->get_plan();
$node_plan = $node->Plan();
$status = $node->Status();
$passwd = \Ss\User\Comm::base64_url_encode_pass($pass);

$ssurl = $server.":".$port.":".$protocol.":".$method.":".$obfs.":".$passwd."/?obfsparam=Y2xvdWRmbGFyZS5jb20";
$url = \Ss\User\Comm::base64_url_encode1_url($ssurl);
$ssqr = "ssr://".$url;
?>

<?php
if ($status>="1" && $node_plan<=$user_plan) {
?>
<div align="center">
    <div id="qrcode"></div>
</div>

<p align="center">
<table border="1" style=‘margin：0px auto’>
<tr><td>服务器</td><td><?php echo $server; ?></td></tr>
<tr><td>远程端口</td><td><?php echo $port; ?></td></tr>
<tr><td>密码</td><td><?php echo $pass; ?></td></tr>
<tr><td>加密方法</td><td><?php echo $method; ?></td></tr>
<tr><td>协议</td><td><?php echo $protocol; ?></td></tr>
<tr><td>混淆方式</td><td><?php echo $obfs; ?></td></tr>
<tr><td>混淆参数</td><td>cloudflare.com</td></tr>
</table>
</p>
</p>
<?php
}
?>

<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>




