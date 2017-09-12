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

<p align="center"><a>Android 客户端:</a><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/Shadowsocksr-android-3.4.0.6.apk" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>Windows 客户端:</a><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/Shadowsocksr-csharp-4.7.0.zip" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>iOS 客户端:</a><a href="https://www.25pp.com/ios/detail_1923429" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>Mac OS X 客户端:</a><a href="https://github.com/FenghenHome/shadowsocksr-download/raw/master/ShadowsocksX-NG-R8.dmg" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>ShadowsocksR-libev for OpenWrt客户端:</a><a href="https://github.com/ywb94/openwrt-ssr/releases" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>avege for 多平台客户端:</a><a href="https://github.com/avege/avege/releases" rel="nofollow" target="_blank">下载</a>
<p align="center"><a>electron-ssr for 多平台客户端:</a><a href="https://github.com/erguotou520/electron-ssr/releases" rel="nofollow" target="_blank">下载</a>

<div align="center">
    <div id="qrcode"></div>
</div>
<p align="center"><a>服务器:</a> <code><?php echo $server; ?></code></p>
<p align="center"><a>远程端口:</a> <code><?php echo $port; ?></code></p>
<p align="center"><a>密码:</a> <code><?php echo $pass; ?></code></p>
<p align="center"><a>加密方法:</a> <code><?php echo $method; ?></code></p>
<p align="center"><a>协议:</a> <code><?php echo $protocol; ?></code></p>
<p align="center"><a>混淆方式:</a> <code><?php echo $obfs; ?></code></p>
<p align="center"><a>混淆参数:</a> <code>cloudflare.com</code></p>

<script src="https://cdn.staticfile.org/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>




