<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寻找潘多拉公主-打开梦想的魔盒</title>
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<link href="/Public/images/20110629/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery.lightbox-0.5.js"></script>
<link href="/Public/js/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){
	$('.light_box').lightBox();
});
</script>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #B9B5B4;
}
-->
</style></head>

<body>
<div id="szggz-top">
<div id="szgkong"></div>
<div id="szggz000123">
<?foreach($list as $val){?>
	<div class="szg_tu"><a href="<?=$val?>" class="light_box"><img src="<?=$val?>" width="181" height="189" border="0" /></a></div>
<?}?>
</div>

</div>
<?Temp("Public::foot");?>
</body>
</html>
