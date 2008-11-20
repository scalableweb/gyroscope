<?
include 'settings.php';
include 'auth.php';
login();
$user=userinfo();
?>
<html>
<head>
	<title>Antradar Gyroscope(tm) Sample Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta id="viewport" name="viewport" content="width=320; initial-scale=0.85; maximum-scale=1.2; user-scalable=0;"/>
	<link href='gyrodemo.css' type='text/css' rel='stylesheet'>
</head>

<body onload="setTimeout(scrollTo, 0, 0, 1)">
<script>
document.appsettings={codepage:'<?echo $codepage;?>',viewcount:<?echo $viewcount;?>};
</script>
<style>
</style>

<!-- left panel -->
<div id="tooltitle" style="background-color:#666666;position:absolute;left:0;width:220px;height:30px;top:50px;"></div>
<div id="leftview" style="background-color:#fefefe;overflow:auto;position:absolute;left:0;width:220px;top:80px;" scale:ch="105">
<div id="lv0" style="display:none;width:100%;height:100%;overflow:auto;"></div>
<div id="lv1" style="display:none;width:100%;height:100%;overflow:auto;"></div>
<div id="lv2" style="display:none;width:100%;height:100%;overflow:auto;"></div>
<div id="lv3" style="display:none;width:100%;height:100%;overflow:auto;"></div>

</div>
<div id="lefticons" style="position:absolute;top:0px;left:0;height:50px;background:transparent url(imgs/toolbar.jpg) repeat-x top left;" scale:cw="0">
<div style="margin-top:5px;margin-left:10px;">
<span class="iconbuttons">
<acronym title="Landlords"><a href=# onmouseover="hintstatus('Landlords',this);" onclick="showview(0);"><img src="imgs/bll.gif"></a></acronym>
<acronym title="Properties"><a href=# onmouseover="hintstatus('Properties',this);" onclick="showview(1);"><img src="imgs/bpr.gif"></a></acronym>

<acronym title="Tenants"><a href=# onmouseover="hintstatus('Tenants',this);" onclick="showview(2);"><img src="imgs/btn.gif"></a></acronym>
<acronym title="Leases"><a href=# onmouseover="hintstatus('Leases',this);" onclick="showview(3);"><img src="imgs/bls.gif"></a></acronym>

</span><!-- iconbuttons -->

<div id="logoutlink">
<a href="login.php?from=<?echo $_SERVER['PHP_SELF'];?>" onmouseover="hintstatus(this,'Logout');">logout <em><?echo $user['login'];?></em></a>
</div><!-- logout -->
</div>
</div>
<div id="statusinfo" style="border-top:solid 1px #666666;background:#dedede url(imgs/powered.png) no-repeat top right;position:absolute;left:0;height:24px;" scale:ny="25" scale:cw="0"></div>

<!-- right panel -->
<div id="tabtitles" style="background-color:#666666;position:absolute;left:220px;height:30px;top:50px;" scale:cw="220"></div>
<div id="tabviews" style="overflow:auto;position:absolute;left:220px;height:30px;top:80px;" scale:cw="220" scale:ch="105"></div>

<div id="sptr" style="background-color:white;border-left:solid 1px #666666;border-right:solid 1px #444444;position:absolute;left:218px;top:50px;height:30px;width:5px;font-size:1px;" scale:ch="74"></div>
<script src="nano.js"></script>

<script src="tabs.js"></script>

<script src="viewport.js"></script>
<script src="validators.js"></script>
<script src="autocomplete.js"></script>

<script>
window.onresize=autosize;
autosize();
showview(0);
addtab('welcome','Welcome','wk');
setInterval(authpump,300000);
</script>
</body>
</html>