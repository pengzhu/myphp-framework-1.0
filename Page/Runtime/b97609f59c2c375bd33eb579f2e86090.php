<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>活动-内容</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function vote(){
	<?if(islogin()){?>
	size_vote2();
	<?}else{?>
	alert('请先登录');
	<?}?>
}
function e_vote(){
	var event_id = <?=$model['id']?>; 
	var option_id = $('input:radio[name="rar"]:checked').val();
	var mobile = $("#mobile").val();
	var code = $("#code").val();

	$.post("e_vote",{event_id:event_id,option_id:option_id,mobile:mobile,code:code},function(data){
		if(data==-1){alert('请先登录!');return;}
		if(data==-2){alert('请正确输入您的手机号码！'); $("#mobile").focus(); return;}
		if(data==-3){alert('验证码不正确!'); $("#code").focus(); return;}
		if(data==200){alert('您的投票信息已经提交，恭喜您'); size_close();}
	});
}
function mobilecode(){
	var mobile = $("#mobile").val();
	if(mobile==""){alert('请填写您的手机号码！');return;}
	$.post("get_mobile_code",{mobile:mobile},function(data){
		if(data==-1){alert('请先登录!');return;}
		if(data==-2){alert('请正确输入您的手机号码！'); $("#mobile").focus(); return;}
		if(data==200){alert('验证码已发送至您的手机，请注意查收！');}
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
		<div class="star_l"><div class="eventsVote_pot"><img src="/Public/img/events_vote.gif" /></div>
			<div class="star_inside">
				<div class="star_content">
					<div class="img"><img src="<?=$model['focuspic']?>" /></div>
					<div class="t" style="height:50px;">
						<div style="float:left; width:450px; margin-top:10px;">
							<a onclick="size_vote1()"><img src="/Public/img/events_vote_img.jpg" /></a>
						</div>
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
					<div class="d" style="height:110px; border-bottom:0px;">
						<h5 style=" margin-top:10px;">投票时间：<span><?=$model['st']?> - <?=$model['et']?></span></h5>
						<h5 style=" margin-top:5px;">抽奖时间：<span><?=$model['lottery_dt']?></span></h5>
						<h5 style=" margin-top:5px;">公布时间：<span><?=$model['publish_dt']?></span></h5>
					</div>
					<div class="c" style=" height:250px;">
						<ul class="eventsVote_rec">
							<?foreach($list as $val){?>
							<li>
								<div class="va"><img src="<?=$val['pic']?>" /></div>
								<div class="vb"><a><?=$val['name']?></a></div>
								<div class="vc"><input type="radio" checked="checked" name="rar" value="<?=$val['id']?>" /></div>
							</li>
							<?}?>
						</ul>
						<div class="eventsVote_vote"><a onclick="size_vote2()">投票</a></div>
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
					<a href="#">参加此活动的会员</a>
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
function size_vote1(){
	$("#size_vote1").css("display","");
	$("#size_vote2").css("display","none");
	size_window();
}
function size_vote2(){
	$("#size_vote2").css("display","");
	$("#size_vote1").css("display","none");
	size_window();
}
</script>
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div id="size_vote1">
			<div class="size_tit"><h1>投票抽奖规则</h1></div>
			<div class="size_c">
				<?=htmldecode($model['content'])?>
			</div>
		</div>
		<div id="size_vote2">
			<div class="size_tit"><h1>投票抽奖</h1></div>
			<div class="size_c" style="margin-top:30px;">
				<div class="size_vote">
					<form>
					<table>
						<tr>
							<td align="left">昵&nbsp;&nbsp;&nbsp;&nbsp;称：</td>
							<td><font><?=$_SESSION['nickname']?></font></td>
						</tr>
						<tr>
							<td align="left">手机号码：</td>
							<td><input type="text" name="mobile" id="mobile" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><a href="javascript:mobilecode();"><img src="/Public/img/events_vote_img3.jpg" /></a></td>
						</tr>
						<tr>
							<td align="left">验&nbsp;证&nbsp;码：</td>
							<td><input type="text" name="code" id="code" /></td>
						</tr>
					</table>
					<div class="eventsContent"><a href="javascript:e_vote();" style="margin:0;">确认投票</a></div>
					</form>
				</div>
				
			</div>
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
