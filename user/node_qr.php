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
$type = $node->Type();
$passwd = \Ss\User\Comm::base64_url_encode_pass($pass);

$ssurl = $server.":".$port.":".$protocol.":".$method.":".$obfs.":".$passwd."/?obfsparam=Y2xvdWRmbGFyZS5jb20";
$url = \Ss\User\Comm::base64_url_encode1_url($ssurl);
$ssqr = "ssr://".$url;
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

<p valign="middle">
<p align="center">
<table border="1" style=‘margin：0px auto’>
<tr><td>Android 客户端</td><td><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/Shadowsocksr-android-3.4.0.6.apk" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>Windows 客户端</td><td><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/Shadowsocksr-csharp-4.7.0.zip" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>iOS 客户端</td><td><a href="https://www.25pp.com/ios/detail_1923429" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>Mac OS X 客户端</td><td><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/ShadowsocksX-NG-R8.dmg" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>OpenWrt客户端</td><td><a href="https://github.com/ywb94/openwrt-ssr/releases" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>avege 多平台客户端</td><td><a href="https://github.com/avege/avege/releases" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>electron-ssr 多平台客户端</td><td><a href="https://github.com/erguotou520/electron-ssr/releases" rel="nofollow" target="_blank">下载</a></td></tr>
</table>
</p>

<script src="https://cdn.staticfile.org/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>




