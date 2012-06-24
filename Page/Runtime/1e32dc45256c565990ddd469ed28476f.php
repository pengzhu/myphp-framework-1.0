<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>效果显示</title>
<script src="/Public/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/js/jquery.lightbox-0.5.js"></script>
<link href="/Public/images/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<Script>
$(document).ready(function(){
	$('.light_box').lightBox();
})
</script>
<style>
#content { width:800px; height:800px; }
#content div{ float:left; margin:10px 0 0 10px; width:50px; height:50px; }
#content div img { width:50px; height:50px; border:1px solid #cccccc; }
</style>
</head>

<body>
<center>
<div id="content" style="border:1px solid #cccccc;">
	<?foreach($list as $val){?>
	<div><a href="<?=$val['photo_url']?>" class="light_box"><img src="<?=$val['thumburl2']?>" /></a></div>
	<?}?>
</div>
</center>
</body>
</html>