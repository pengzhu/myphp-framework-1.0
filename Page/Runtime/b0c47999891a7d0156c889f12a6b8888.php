<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>SIZE视觉精选</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function top_movie(url){
	$("#embed").html('<embed src="'+url+'" allowFullScreen="true" quality="high" width="490" height="380" align="middle" allowScriptAccess="always"></embed>');
}
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
	<!--visual_index-->
	<div class="marginT">
		<img src="/Public/img/monopoly_img10.jpg" width="970" />
	</div>
	<div class="visual_v">
		<div class="visual_video">
			<div class="visual_dvd">
				<ul>
					<li id="embed"><embed src="<?=$recvedio['url']?>" allowFullScreen="true" quality="high" width="490" height="380" align="middle" allowScriptAccess="always"></embed></li>
					<!--<li><embed src="//player.ku6.com/refer/lGs0zV2uIvle8pbkeV1jLA../v.swf" width="490" height="380" allowscriptaccess="always"></embed></li>-->
					<li class="lidvd">
						<?$i=1;
						foreach($hotvediolist as $val){?>
						<div <?if($i==1){echo 'class="divdvd"';}?>><a href="javascript:top_movie('<?=$val['url']?>');"><img src="<?=$val['pic']?>" /></a></div>
						<?$i=2;}?>
					</li>
				</ul>
			</div>
			<div class="visual_more">
				<a href="/Visual/video"> &nbsp;</a><!--more-->
			</div>
		</div>
	</div>
	<div class="visual_p">
		<div class="visual_pt"></div>
		<div class="visual_pm">
			<div class="visual_pmc">
				<div class="visual_pmt"></div>
				<div class="visual_pmtit">
					<h2>球鞋图赏</h2>
				</div>
				<div class="visual_photo">
					<ul>
						<li>
							<p class="pli1">
								<a href="#"><?=$recphoto1['title']?></a>
								<a href="#" class="love">我喜欢</a>
							</p>
							<p class="pli2"><a href="javascript:showcontent(<?=$recphoto1['id']?>);"><img src="<?=$recphoto1['src']?>" /></a></p>
						</li>
						<li class="lipho">
							<?$i=1;
							foreach($hotphotolist1 as $val){?>
							<div <?if($i==1){echo 'class="divpho"';}?>><a href="javascript:showcontent(<?=$val['id']?>);"><img src="<?=$val['thumb_src']?>" width="100%" /></a></div>
							<?$i=2;}?>
							
						</li>
					</ul>
				</div>
				<div class="visual_more" style="width:915px; margin-top:8px;">
					<a href="/Visual/photo" class="ce"><img src="/Public/img/visual_img8.jpg" /></a><!--more-->
				</div>
				
				<div class="visual_pmt" style="margin-top:30px;"></div>
				<div class="visual_pmtit">
					<h2>球鞋街拍</h2>
				</div>
				<div class="visual_photo">
					<ul>
						<li>
							<p class="pli1">
								<a href="#"><?=$recphoto2['title']?></a>
								<a href="#" class="love">我喜欢</a>
							</p>
							<p class="pli2"><a href="javascript:showcontent(<?=$recphoto2['id']?>);"><img src="<?=$recphoto2['src']?>" /></a></p>
						</li>
						<li class="lipho">
							<?$i=1;
							foreach($hotphotolist2 as $val){?>
							<div <?if($i==1){echo 'class="divpho"';}?>><a href="javascript:showcontent(<?=$val['id']?>);"><img src="<?=$val['thumb_src']?>" width="100%" /></a></div>
							<?$i=2;}?>
						</li>
					</ul>
				</div>
				<div class="visual_more" style="width:915px; margin-top:8px;">
					<a href="/Visual/photo" class="ce"><img src="/Public/img/visual_img8.jpg" /></a><!--more-->
				</div>
				
			</div>
			
		</div>
		
		<div class="visual_pf"></div>
		<div style="height:20px;"></div>
	</div>
	<!--visual_index-->
	<div style="height:20px;"></div>
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin-top:8px;"></div>
</div>
<div id="size_content" style="display:none;"></div>
</body>
</html>
