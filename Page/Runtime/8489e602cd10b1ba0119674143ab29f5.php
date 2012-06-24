<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>视频and图片</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function showcontent(id){

	$.get("/Visual/photo_content?id="+id,function(data){
		$("#size_content").html(data);
		size_window();
	});

}
</script>
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
	<div class="news" style="height:1000px;">
		<div class="news_l video" style=" height:990px">
			<div style="width:729px; height:329px; margin-top:10px;">
				<div class="video_l" style="width:556px;">
					<div class="photo_rec">
						<img src="/Public/img/photo_img.jpg" />
					</div>
				</div>
				<div class="photo_r">
					<ul>
						<?$i=1;
						foreach($hotphotolist as $val){?>
						<li <?if($i>1){echo 'class="lia"';}?>>
							<div class="ddc"><a href="#"><?=$val['title']?></a></div>
							<div class="ddd"><a onclick="showcontent(<?=$val['id']?>)"><img src="<?=$val['thumb_src']?>" width="155" /></a></div>
						</li>
						<?$i=2;}?>
					</ul>
				</div>
			</div>
			<!--page-->
			<div class="photo_page">
				<ul>
					<?foreach($list as $val){?>
					<li>
						<div class="t"><a onclick="showcontent(<?=$val['id']?>)"><img src="<?=$val['thumb_src']?>" /></a></div>
						<div><a onclick="showcontent(<?=$val['id']?>)"><?=$val['title']?></a></div>
						<div class="d">发布：<?=$val['addtime']?><br />播放：<?=$val['favorite']?></div>
					</li>
					<?}?>
				</ul>
			</div>
			<div class="news_page_c">
				<?$page->pagehtml();?>
			</div>
			<!--page-->
		</div>
		<div class="news_m"></div>
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
<div id="size_content" style="display:none;"></div>
</body>
</html>
