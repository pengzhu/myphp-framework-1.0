<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>活动-拍卖</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function do_auction(){
	var event_id = <?=$model['id']?>;
	var price = $("#price").val();
	var comment = $("#comment").val();
	$.post("do_auction",{event_id:event_id,price:price,comment:comment},function(data){
		if(data==-1){alert('请先登录');return;}
		if(data==-2){alert('请正确输入您要出的价格！');$("#price").focus();return;}
		if(data==-3){alert('您输入的价格必须高于当前最高出价！');return;}
		if(data==-4){alert('您输入的价格必须高于商品底价！');return;}
		if(data==200){alert('您的竞拍价格已经提交，当前最高价格为￥'+price);location.reload();}
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
			<div class="eventsVote_pot"><img src="/Public/img/events_auction.gif" /></div>
			<div class="star_inside">
				<div class="star_content">
					<div class="img"><img src="<?=$model['focuspic']?>" /></div>
					<div class="t" style="height:50px;">
						<div style="float:left; width:450px; margin-top:10px; height:30px;"><h1><?=$model['title']?></h1></div>
						<div style="float:right; width:200px; margin-top:10px;">
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
					<div class="d" style="height:130px;;">
						<div style="width:500px; float:left;">
							<h5 style=" margin-top:10px;">球鞋货号：<span><?=$model['huohao']?></span></h5>
							<h5 style=" margin-top:5px;">球鞋尺码：<span><?=$model['chima']?></span></h5>
							<h5 style=" margin-top:5px;">球鞋原价：<span><?=$model['oldprice']?></span></h5>
							<h5 style=" margin-top:5px;">竞拍时间：<span><?=$model['st']?> - <?=$model['et']?></span>
							<?if(time()<strtotime($model['st'])){?><span style='color:green'>期待中...</span><?}?>
							<?if(time()>strtotime($model['et'])){?><span style='color:red'>已结束</span><?}?></h5>
							<h5 style=" margin-top:5px;"><?if(time()>=strtotime($model['st'])&&time()<=strtotime($model['et'])){?><a onclick="size_auction1()"><img src="/Public/img/events_auction_img1.jpg" /></a><?}?></h5>
						</div>
						<div style="float:right; width:120px; padding-top:20px;">
							<a onclick="size_auction2()"><img src="/Public/img/events_auction_img2.jpg" /></a>
						</div>
					</div>
					<div class="eventsAuction">
						<ul>
							<li><img src="/Public/img/events_auction_img3.jpg" /></li>
							<?foreach($list as $val){?>
							<li>
								<div class="aua"><img src="<?=$val['face']?>" width="100%" /></div>
								<div class="aub">
									<h2>￥<?=$val['price']?></h2>
									<p><?=$val['comment']?></p>
								</div>
								<div class="auc">
									<p>用户：<?=$val['nickname']?></p>
									<p>出价时间：<?=$val['dt']?></p>
								</div>
							</li>
							<?}?>
						</ul>
					</div>
					<!--<div style="margin-top:10px;"><a href="#">▼显示所有比价结果</a></div>-->
				</div>
			</div>
		</div>
		<!--star left-->
		<div class="star_m"></div>
		<script>$(".star_m").height($(".star_l").height())</script>
		<div class="star_r">
			<div class="star_rT">
				<div class="eventsContent_ra">
					<a>更多最新活动</a>
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
						<li><div style="width:50px; height:38px;"><img src="<?=$val['face']?>" width="100%" /></div><div><?=$val['nickname']?></div></li>
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
<script>
function size_auction1(){
	$("#size_auction1").css("display","");
	$("#size_auction2").css("display","none");
	size_window();
}
function size_auction2(){
	$("#size_auction2").css("display","");
	$("#size_auction1").css("display","none");
	size_window();
}
</script>
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div id="size_auction1" style="display:none;">
			<div class="size_tit"><h1>竞拍规则</h1></div>
			<div class="size_c">
				这里就是内容的区域了<br />为什么是这<br />
				asdasda
			</div>
		</div>
		<div id="size_auction2">
			<div class="size_tit"><h1>开始竞拍</h1></div>
			<div class="size_c" style="margin-top:30px;">
				<div class="size_l">
					<div class="size_bg"><h2>
						<?=$model['title']?>
					</h2></div>
					<div class="size_time">
						距离结束时间还有：<font><?=timespan($model['et'])?></font>
					</div>
					<div class="size_auction">
						<p><font>球鞋货号：</font><?=$model['huohao']?></p>
						<p><font>球鞋尺码：</font><?=$model['chima']?></p>
						<p><font>球鞋原价：</font><?=$model['oldprice']?></p>
						<p><font>竞拍时间：</font><?=$model['st']?></p>
					</div>
					<div class="size_auction_h">
						<p>目前最高出价：<font>￥<?=$model['maxprice']?></font></p>
						<p style="margin-top:20px;">你的竞拍价格：<input type="text" id="price" name="price" value="0" /></p>
					</div>
				</div>
				<div class="size_r">
					<img src="<?=$model['recpic']?>" />
				</div>
			</div>
			<div class="size_auction_comment">
				<textarea name="comment" id="comment"></textarea>
				<p>
					<script>
						var myDate = new Date();
						document.write(myDate.toLocaleTimeString()+" "+myDate.toLocaleDateString());
					</script></p>
			</div>
			<div class="eventsContent"><a href="javascript:do_auction();" style="margin:0;">确认竞拍</a></div>
			<div style="height:20px;"></div>
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
