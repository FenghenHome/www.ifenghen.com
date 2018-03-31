<?php
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];
$node = new \Ss\Node\NodeInfo($id);
$server =  $node->Server();
$user_port = $oo->get_port();
$node_port = $node->Port();
$user_passwd = $oo->get_pass();
$base64_user_passwd = \Ss\User\Comm::base64_url_encode($user_passwd);
$node_passwd = $node->Passwd();
$base64_node_passwd = \Ss\User\Comm::base64_url_encode($node_passwd);
$method = $node->Method();
$obfs = $node->Obfs();
$obfsparam = $node->Obfsparam();
$base64_obfsparam = \Ss\User\Comm::base64_url_encode($obfsparam);
$protocol = $node->Protocol();
$protoparam = $user_port.":".$user_passwd;
$base64_protoparam = \Ss\User\Comm::base64_url_encode($protoparam);
$user_plan = $oo->get_plan();
$node_plan = $node->Plan();
$user_enable = $oo->get_enable();
$node_enable = $node->Enable();

$ssrurl = $server.":".$node_port.":".$protocol.":".$method.":".$obfs.":".$base64_node_passwd."/?obfsparam=".$base64_obfsparam."&protoparam=".$base64_protoparam;
$url = \Ss\User\Comm::base64_url_encode($ssrurl);
$ssqr = "ssr://".$url;
?>

<?php if ($node_enable>="1" && $user_enable>="1" && $node_plan<=$user_plan) { ?>
<div align="center">
    <a href="http://api.qrserver.com/v1/create-qr-code/?size=300x300&data=<?php echo $ssqr; ?>" rel="nofollow" target="_blank"><div id="qrcode"></div></a>
</div>

<p align="center">
<table border="1" style=‘margin：0px auto’>
<tr><td>服务器</td><td><?php echo $server; ?></td></tr>
<tr><td>远程端口</td><td><?php echo $node_port; ?></td></tr>
<tr><td>密码</td><td><?php echo $node_passwd; ?></td></tr>
<tr><td>加密方法</td><td><?php echo $method; ?></td></tr>
<tr><td>协议</td><td><?php echo $protocol; ?></td></tr>
<tr><td>协议参数</td><td><?php echo $protoparam; ?></td></tr>
<tr><td>混淆方式</td><td><?php echo $obfs; ?></td></tr>
<tr><td>混淆参数</td><td><?php echo $obfsparam; ?></td></tr>
<tr><td>SSR链接</td><td><a href="<?php echo $ssqr; ?>" rel="nofollow" target="_blank">获取</a></td></tr>
</table>
</p>

<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>
<?php } else { header("Location:index.php"); } ?>




