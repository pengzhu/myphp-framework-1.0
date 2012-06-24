<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>活动-内容</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function showpic(url){
	$(".size_c").html("<img src="+url+" />");
	size_window();
}
function join(){
	$.post("e_join",{event_id:<?=$model['id']?>},function(data){
		if(data==-1){alert('请先登录!');return;}
		if(data==-2){alert('您的报名信息已经提交！');return;}
		if(data==200){alert('欢迎您参加我们的活动，您的报名信息已经提交！');return;}
	});
}
function interest(){
	$.post("e_interest",{event_id:<?=$model['id']?>},function(data){
		if(data==-1){alert('请先登录!');return;}
		if(data==-2){alert('感谢您对我们活动的支持');return;}
		if(data==200){alert('感谢您对我们活动的支持，您的信息已经提交！');return;}
	});
}
</script>
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
	<!--star cont-->
	<div class="star">
		<!--star left-->
		<div class="star_l">
			<div class="star_inside">
				<div class="star_content">
					<div class="img"><img src="<?=$model['focuspic']?>" /></div>
					<div class="t">
						<div style="float:left; width:450px; margin-top:20px;"><h1><?=$model['title']?><br /><?=$model['smalltitle']?></h1></div>
						<div style="float:right; width:200px; padding-top:55px;">
						<!-- JiaThis Button BEGIN -->
							<div id="ckepop">
								<span class="jiathis_txt">分享到：</span>
								<a class="jiathis_button_qzone"></a>
								<a class="jiathis_button_tsina"></a>
								<a class="jiathis_button_tqq"></a>
								<a class="jiathis_button_renren"></a>
								<a class="jiathis_button_kaixin001"></a>
								<a class="jiathis_counter_style"></a>
							</div>
							<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
							<!-- JiaThis Button END -->
						</div>
					</div>
					<div class="d" style="height:110px;">
						<h5 style=" margin-top:10px;">活动时间：<span><?=$model['st']?> - <?=$model['et']?></span></h5>
						<h5 style=" margin-top:5px;">活动地点：<span><?=$model['place']?></span></h5>
						<h5 style=" margin-top:5px;">感兴趣人数：<span><?=$model['interestnum']?>人</span> 参加人数：<span><?=$model['joinnum']?>人</span></h5>
						<div class="eventsContent">
							<a href="javascript:interest();">感兴趣</a>
							<a href="javascript:join();">要参加</a>
						</div>
					</div>
					<div class="c">
						<?=htmldecode($model['content'])?>
					</div>
					<div style="height:0px; margin-top:20px; border-top:#000000 3px dotted;"></div>
					<div class="star_relat" style="background:none;"><img src="/Public/img/events_content_img2.jpg" /></div>
					<div class="eventsContent_r">
						<?$i = 1;
						foreach($list as $val){?>
						<div <?if($i==1){echo 'class="dive"';}?>><a onclick="showpic('<?=$val['pic']?>')"><img src="<?=$val['thumbpic']?>" /></a></div>
						<?$i++;}?>
					</div>
					<div class="eventsContent_f">
						<!--<a href="#">more</a>-->
					</div>
				</div>
			</div>
		</div>
		<!--star left-->
		<div class="star_m"></div>
		<script>$(".star_m").height($(".star_l").height())</script>
		<div class="star_r">
			<div class="star_rT">
				<div class="eventsContent_ra">
					<a href="#">更多最新活动</a>
				</div>
				<?
				$i = 1;
				foreach($eventlist as $val){?>
				<div class="eventsContent_rb <?if($i==2){echo 'bg_black';}?>">
					<div><a href="url?id=<?=$val['id']?>"><img src="<?=$val['recpic']?>" width="100%" height="158" /></a></div>
					<div class="eventsContent_rba">
						<a href="url?id=<?=$val['id']?>"><?=$val['st']?><br />
						<?=$val['title']?><br />
						<?=$val['smalltitle']?></a>
					</div>
				</div>
				<?$i++;}?>
				<div class="eventsContent_ra marginT">
					<a>参加此活动的会员</a>
				</div>
				<div class="eventsContent_rc marginT">
					<ul>
						<?foreach($userlist as $val){?>
						<li><img src="<?=$val['face']?>" width="100%" /><div><?=$val['nickname']?></div></li>
						<?}?>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	<!--star cont-->
	<div style="height:12px;"></div>
	<div style="border:1px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
<!--弹出框-->
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div class="size_c">
			<img src="/Public/img/events_rec.jpg" />
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
