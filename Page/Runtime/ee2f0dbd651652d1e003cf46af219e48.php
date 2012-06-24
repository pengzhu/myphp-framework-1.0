<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>活动首页</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/betterprice_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--events-->
	<div class="events">
		<div class="events_rec">
			<div class="l"><a href="#"><img src="/Public/img/events_rec.jpg" /></a></div>
			<div class="r">
				<div><a href="#"><img src="/Public/img/events_img.jpg" /></a></div>
				<div>
					<ul>
						<li class="liea">12月27日 |</li>
						<li class="lieb">这里是标题，这粒就是标题，这题</li>
					</ul>
				</div>
			</div>
		</div>
		<!---->
		<div class="events_c">
			<div class="events_left">
			<div class="l">
				<div><a href="#"><img src="/Public/img/events_img.jpg" /></a></div>
				<div>
					<ul>
						<li class="liea">12月27日 |</li>
						<li class="lieb">这里是标题，这粒就是标题，这题</li>
					</ul>
				</div>
			</div>
			</div>
			<script>
			for(var i=1;i<=5;i++){
				document.write('<div class="events_left"><div class="l"><div><a href="#"><img src="/Public/img/events_img.jpg" /></a></div><div><ul><li class="liea">12月27日 |</li><li class="lieb">这里是标题，这粒就是标题，这题</li></ul></div></div></div>');
			}
			</script>
		</div>
		<!--page-->
		<div class="events_page">
			<a href="#"> << </a> 
			<a href="#"> 1 </a> 
			<a href="#"> 2 </a> 
			<a href="#"> 3 </a> 
			<a href="#"> 4 </a> 
			<a href="#"> 5 </a> 
			<a href="#"> 6 </a> 
			<a href="#"> 7 </a> 
			<a href="#"> 8 </a> 
			<a href="#"> 9 </a> 
			<a href="#"> >> </a>
		</div>
	</div>
	
	<!--events-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
