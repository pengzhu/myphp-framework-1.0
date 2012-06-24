<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>视频and图片</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function top_movie(url){
	$("#embed").html('<embed src="'+url+'" allowFullScreen="true" quality="high" width="470" height="380" wmode="transparent" align="middle" allowScriptAccess="always"></embed>');
}

function showcontent(id){

	$.get("/Visual/video_content?id="+id,function(data){
		$("#size_content").html(data);
		size_window();
	});

}
$(function(){
	var id = location.hash.replace("#","");
	if(id!=""){
		showcontent(id);
	}
});
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
	<div class="news" style="height:1050px;">
		<div class="news_l video" style=" height:1040px">
			<div style="width:729px; height:379px; margin-top:10px;">
				<div class="video_l">
					<div class="video_rec " id="embed">
						<embed src="<?=$recvedio['url']?>" allowFullScreen="true" quality="high" width="470" height="380" align="middle" allowScriptAccess="always" wmode="transparent"></embed>
					</div>
				</div>
				<div class="video_r">
					<ul>
						<?$i=1;
						foreach($hotvediolist as $val){?>
						<li <?if($i>1){echo 'class="lia"';}?>>
							<div class="vidc"><a href="javascript:top_movie('<?=$val['url']?>');"><?=$val['title']?></a></div>
							<div class="vidd"><a href="javascript:top_movie('<?=$val['url']?>');"><img src="<?=$val['pic']?>" width="100%" /></a></div>
						</li>
						<?$i=2;}?>
					</ul>
				</div>
			</div>
			<!--page-->
			<div class="video_page">
				<ul>
					<?foreach($list as $val){?>
					<li style="height:120px;">
						<div class="t">
                            <p class="visual_abs2" style=" width:164px; margin-top:80px; text-align:left;"><a onclick="showcontent(<?=$val['id']?>)" class="visual_abs_a" style="margin-left:5px;"><?=$val['title']?></a></p>
							<p class="visual_abs1" style=" width:166px;"><a onclick="showcontent(<?=$val['id']?>)"><img src="<?=$val['pic']?>"  width="99%" /></p>
                        </div>
						<!--<div class="d">发布：<?=$val['addtime']?><br />播放：<?=$val['favorite']?></div>-->
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
