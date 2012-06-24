<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>搜索</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/video_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--video_index-->
	<div class="news" style=" height:auto;">
		<div class="news_l" style=" height:auto;">
			<ul class="search_t">
				<li class="la">分类搜索</li>
				<li><a href="?_c=News&_s=<?=$_s?>">【新闻咨询】</a></li>
				<li><a href="?_c=Topics&_s=<?=$_s?>">【专题报道】</a></li>
				<li><a href="?_c=Events&_s=<?=$_s?>">【活动】</a></li>
				<li><a href="?_c=Shoe&_s=<?=$_s?>">【球鞋博物馆】</a></li>
				<li><a href="?_c=Photo&_s=<?=$_s?>">【图片】</a></li>
				<li><a href="?_c=Video&_s=<?=$_s?>">【视频】</a></li>
			</ul>
			<div class="search_s">
				<p class="pa">关键字：<?=$_s?></p>
				<p class="pb">共有<?=$count?>个结果</p>
			</div>
			<ul class="search_c">
			<?foreach($list as $val){?>
				<li>
					<div class="da"><a href="<?=url($val['id'])?>"><img src="<?=$val['recpic']?>" /></a></div>
					<div class="db">
						<p class="pa"><a href="<?=url($_c,$val['id'])?>">【<?=model_name($_c)?>】<?=$val['title']?></a></p>
						<p class="pb"><?=$val['brief']?></p>
					</div>
					<div class="dc"><?=$val['addDate']?></div>
					
				</li>
				<?}?>
				
			</ul>
			<div class="search_page">
				<?$page->pagehtml("_c=$_c&_s=$_s");?>
			</div>
			<!--page-->
		</div>
		<div class="news_r">
			<div><a href="#"><img src="/Public/img/news_img2.jpg" /></a></div>
			<div class="b"><a href="#"><img src="/Public/img/news_img3.jpg" /></a></div>
			<div class="b"><a href="#"><img src="/Public/img/news_img4.jpg" /></a></div>
		</div>
	</div>
	<div style="height:20px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin-top:8px;"></div>
</div>
<!--弹出框-->
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div class="size_c">
			<div class="size_photot"></div>
			<div class="size_photom">
				<div class="size_photoRec"><img src="/Public/img/photo_img8.jpg" /></div>
			</div>
			<div class="size_photof" style="background:#000000; height:100px;">
				<div><h3>这就是标题</h3></div>
				<div style="background:#FFFFFF; height:4px; margin-top:3px;"></div>
				<div style="background:#FFFFFF; height:2px; margin-top:3px;"></div>
			</div>
			<div class="size_photof"></div>
		</div>
		<div class="size_photoDown">
			<a class="adown"></a>
			<a href="#">800*600</a>
			<a href="#">1024*768</a>
			<a href="#">1280*960</a>
			<a href="#">1600*1200</a>
			<a href="#">1280*1024</a>
		</div>
		<div class="size_photoTag">
			<div class="l">
				<ul>
					<li class="photoT">Tag标签：</li>
					<li><a href="#">adobe</a></li>
					<li><a href="#">google</a></li>
					<li><a href="#">apple</a></li>
					<li><a href="#">china</a></li>
				</ul>
			</div>
			<div class="r">
				<div style="width:160px;"><img src="/Public/img/photo_img10.jpg" /></div>
				<div style="width:71px;"><img src="/Public/img/photo_img11.jpg" /></div>
			</div>
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
