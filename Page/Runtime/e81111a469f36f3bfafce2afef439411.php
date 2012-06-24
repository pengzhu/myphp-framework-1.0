<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>新闻首页</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function showcontent(id){

	$.get("/News/content?id="+id,function(data){
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
	<div class="nhead">
		<div class="nhead_l"><img src="/Public/img/nlogo.jpg" /></div>
		<div class="nhead_r"><img src="/Public/img/nlogo1.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--tag-->
	<div class="ntag">
		<ul>
			<li class="ntag_li"><a>Tag标签：</a></li>
			<li><a href="#">adobe</a></li>
			<li><a href="#">apple</a></li>
			<li><a href="#">google</a></li>
			<li><a href="#">chrome</a></li>
			<li class="ntag_li"><a href="#">...more</a></li>
		</ul>
	</div>
	<!--tag-->
	<!--news_index-->
	<div class="news">
		<div class="news_l">
			<div style="width:729px; height:534px;">
				<div class="news_lImg">
					<div class="news_rec">
						<div style="width:458px; height:409px; overflow:hidden"><a onclick="showcontent(<?=$recnews['id']?>)"><img src="<?=$recnews['focuspic']?>" width="100%" /></a></div>
						<div class="d">
							<a onclick="showcontent(<?=$recnews['id']?>)"><?=$recnews['title']?></a>
						</div>
						<div class="c">
							<a onclick="showcontent(<?=$recnews['id']?>)"><?=$recnews['brief']?></a>
						</div>
					</div>
				</div>
				<div class="news_rImg">
					<ul>
					<?$i = 1;
					foreach($hotnews as $val){?>
						<li <?if($i>1){ echo "class='lia'";}?>>
							<div class="ac"><a onclick="size_window()"><img src="<?=$val['recpic']?>" width="100%" /></a></div>
							<div class="bc"><a onclick="size_window()"><?=$val['title']?></a></div>
							<div class="cc"><a onclick="size_window()"><?=$val['brief']?></a></div>
						</li>
					<?$i=2;}?>
					</ul>
				</div>
			</div>
			<!--page-->
			<div class="news_page">
				<ul>
				<?foreach($list as $val){?>
					<li>
						<div class="ac"><a onclick="showcontent(<?=$val['id']?>)"><img src="<?=$val['recpic']?>" width="99%" /></a></div>
						<div class="bc"><a onclick="showcontent(<?=$val['id']?>)"><?=$val['title']?></a></div>
						<div class="cc"><a onclick="showcontent(<?=$val['id']?>)"><?=$val['brief']?></a></div>
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
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin-top:8px;"></div>
</div>

<!--弹出框-->
<div id="size_content" style="display:none;"></div>
</body>
</html>
