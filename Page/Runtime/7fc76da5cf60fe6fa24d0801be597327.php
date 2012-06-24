<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>SIZE专题</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/feature_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--star shoes-->
	<div class="feature_star">
		<img src="/Public/img/feature_img.jpg" />
	</div>
	<div class="feature_img">
		<ul>
			<?foreach($celelist as $val){?>
			<li><a href="/Topics/celebrity.html?id=<?=$val['id']?>"><img src="<?=$val['recpic']?>" /></a></li>
			<?}?>
		</ul>
		<div>
			<a href="#"><img src="/Public/img/feature_img3.jpg" /></a> &nbsp;&nbsp;
			<a href="#"><img src="/Public/img/feature_img4.jpg" /></a>
		</div>
	</div>
	<!--star shoes-->
	<!--interview-->
	<div class="feature_int">
		<div class="t"><img src="/Public/img/feature_img5.jpg" /></div>
		<div class="c">
			<ul>
				<?foreach($starlist as $val){?>
				<li>
					<div class="po1"><p><?=$val['title']?></p></div>
					<div class="po2"><a href="/Topics/star.html?id=<?=$val['id']?>"><img src="<?=$val['recpic']?>" width="100%" /></a></div>
				</li>
				<?}?>
			</ul>
			<div class="c_page">
				<a href="#"></a><!--下一页-->
				<a href="#"></a><!--上一页-->
			</div>
		</div>
	</div>
	<!--interview-->
	<!--review-->
	<div class="feature_rev">
		<div class="feature_gif"><img src="/Public/img/feature_img7.gif" /></div>
		<ul>
			
			<li><a href="#"><img src="<?=$val['shoe_pic']?>" /></a></li>
			
		</ul>
		<div class="feature_page">
			<a href="#"><img src="/Public/img/feature_img10.jpg" /></a><!--上一页-->&nbsp;&nbsp;
			<a href="#"><img src="/Public/img/feature_img11.jpg" /></a><!--下一页-->
		</div>
	</div>
	<!--review-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
