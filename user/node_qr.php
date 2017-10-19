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
<tr><td>Android 客户端</td><td><a href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/Shadowsocksr-android-3.4.0.6.apk" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/07/59d8efead858d.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>Windows 客户端</td><td><a href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/Shadowsocksr-csharp-4.7.0.zip" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/07/59d8f73bd160f.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>Windows 游戏客户端</td><td><a href="https://www.sockscap64.com/sstap/" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/08/59d9939f81d61.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>iOS 客户端</td><td><a href="https://www.25pp.com/ios/detail_1923429" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/07/59d8f3cda6710.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>Mac OS X 客户端</td><td><a href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/ShadowsocksX-NG-R8.dmg" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/08/59d995a3b46c5.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>OpenWrt 15.05(ar71xx) 客户端</td><td><a href="https://github.com/FenghenHome/breakwa11.github.io/raw/master/download/luci-app-shadowsocksR-GFW_1.2.5_all.ipk" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>OpenWrt 15.05(ramips) 客户端</td><td><a href="#" rel="nofollow" target="_blank">暂无</a></td></tr>
<tr><td>LEDE 客户端</td><td><a href="#" rel="nofollow" target="_blank">暂无</a></td></tr>
<tr><td>avege 多平台客户端</td><td><a href="https://github.com/avege/avege/releases" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>electron-ssr 多平台客户端</td><td><a href="https://github.com/erguotou520/electron-ssr/releases" rel="nofollow" target="_blank">下载</a></td></tr>
<tr><td>Shadowrocket IPA</td><td><a href="https://www.iphonecake.com/app_932747118_.html" rel="nofollow" target="_blank">下载</a></td><td><a href="https://i.loli.net/2017/10/07/59d8f3cda6710.png" rel="nofollow" target="_blank">教程</a></td></tr>
<tr><td>A.BIG.T IPA</td><td><a href="https://www.iphonecake.com/app_1051326718_.html" rel="nofollow" target="_blank">下载</a></td></tr>
</table>
</p>

<script src="https://cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>




