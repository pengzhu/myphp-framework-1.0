<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>神马归来回归礼包 - 活动专题 - 潘多拉</title>
<link href="/Public/images/20110513/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<script type="text/javascript" src="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<script>
$(document).ready(function() {
	$("a#movie").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.8'   
	});
	$(".a_1").mouseover(function(){
		$("#a_sm").css("border","0px");
	});
	$(".a_1").mouseout(function(){
		$("#a_sm").css("border","none");
	});
	$(".a_2").mouseover(function(){
		$("#a_jp").css({border:"0px"});
		$("#a_jp").css({margin:"1px 0 0 1px"});
	});
	$(".a_2").mouseout(function(){
		$("#a_jp").css("border","none");
		$("#a_jp").css({margin:"0 0 0 0"});
	});
});
function startMovie(){
	$("#movie").click(); 
}
function closeMovie(){$.fancybox.close();}
function olduser(){
	$.get("/A20110513/clickback.html",function(data){
		if(data==-1){alert("请先登录！");location.href="http://u.126play.com/Index/login?url=http://act.126play.com/A20110513";return;}
		if(data==-2){alert("只有神马测试中激活过的帐号才能参加本次活动！");return;}
		if(data==200){
			alert("欢迎您回来，继续点击下面的领取回归礼包以获取礼品！");
			$("#newphoto").html('<a href="/A20110513/getpackage.html"><img src="/Public/images/20110513/m_trf.jpg" height="50" width="171" id="a_jp" border="0" /></a>');
		}
	});
}
</script>
</head>

<body>
<div class="m">
	<div class="m_middle">
		<div class="top">
			<a href="http://pdl.126play.com" class="sy" title="官网首页"><span>官网首页</span></a>
			<a href="http://u.126play.com/Index/reg.html" class="zczh" title="注册帐号"><span>注册帐号</span></a>
			<a href="http://u.126play.com/Index/activate.html" class="yxjh" title="游戏激活"><span>游戏激活</span></a>
			<a href="http://pdl.126play.com/download/" class="yxxz" title="游戏下载"><span>游戏下载</span></a>
			<a href="http://bbs.pdl.126play.com" class="yxlt" title="游戏论坛"><span>游戏论坛</span></a>
		</div>
		<div class="middle">
			<div><img src="/Public/images/20110513/m_top.jpg" height="94" width="874" /></div>
			<div class="m_2">
				<div class="m_21">
					<strong style="font-size:14px;">活动时间：</strong><br /><br />
					神马归来：2011-05-16 12：00——2011-05-23 12：00<br />
					领取回归礼包：2011-05-16 12：00——本次测试结束<br /><br />
					<strong style="font-size:14px;">活动对象：</strong>神马测试激活的用户<br /><br />
					<strong style="font-size:14px;">活动流程表：</strong>
				</div>
				<div class="m_l">
					<div><img src="/Public/images/20110513/m_l.jpg" height="112" width="8" /></div>
					<div class="m_z">
						<Div style="width:100%; text-align:center; margin-top:10px;"><img src="/Public/images/20110513/m_z1.jpg" height="28" width="172" /></Div>
						<table cellpadding="0" cellspacing="0">
							<tr>
								<td><a href="http://u.126play.com/Index/login?url=http://act.126play.com/A20110513/index.html"><img src="/Public/images/20110513/m_1.jpg" height="50" width="89" border="0" /></a></td>
								<td><a class="a_1"><img src="/Public/images/20110513/m_2.jpg" height="50" width="89" border="0" /></a></td>
								<td><img src="/Public/images/20110513/m_3.jpg" height="50" width="89" border="0" /></td>
								<td><a class="a_2"><img src="/Public/images/20110513/m_4.jpg" height="50" width="89" border="0" /></a></td>
								<td><img src="/Public/images/20110513/m_5.jpg" height="50" width="96" border="0" /></td>
								<td><img src="/Public/images/20110513/m_6.jpg" height="50" width="96" border="0" /></td>
								<td><img src="/Public/images/20110513/m_7.jpg" height="50" width="87" border="0" /></td>
								<td><img src="/Public/images/20110513/m_8.jpg" height="50" width="65" border="0" /></td>
							</tr>
						</table>
					</div>
					<div><img src="/Public/images/20110513/m_r.jpg" height="112" width="8" /></div>
				</div>
				<table cellpadding="0" cellspacing="0" class="table1">
					<tr>
						<td width="550" valign="top" class="td1">
						<div>
							<span style="font-size:14px; font-weight:bold; color:#000000;">活动明细：</span><br /><br />
							<span style="color:#FF0000;">1.本次活动只针对神马测试激活过的帐号<br />
							2.每个帐号限领一次<br />
							3.未点击神马归来按钮将无法领取礼包</span><br />
							4.回归礼包的道具只能兑换到双线测试专区<br />
							5.点击<a href="javascript:void(0)" class="a_1"><span style="color:#69A706; font-weight:bold;">神马归来</span></a>按钮，点击前需要登录您的帐号，务必留意活动时间<span style="color:#FF0000;">【必要步骤】</span><br />
							6.点击<a href="javascript:void(0)" class="a_2"><span style="color:#69A706; font-weight:bold;">领取回归礼包</span></a>按钮，获得礼包兑换码，点击前需要登录您的帐号，请务必留意活动时间<span style="color:#FF0000;">【必要步骤】</span><br />
							7.领取回归礼包前请确认账户内（任意角色）<span style="color:#FF0000; font-weight:bold;">等级达到10级</span>（未达到者需提升到10级才能领取）<br />
							8.可以通过<a href="http://u.126play.com/Prop/codes.html" target="_blank">我的兑换信息</a>查看兑换码→进入<a href="http://u.126play.com/Prop/index.html" target="_blank">道具兑换</a>页面兑换礼包（需要登录帐号）

						
						</div></td>
						<td width="250" class="td2">
							<div style=" margin-left:37px; background:url(/Public/images/20110513/m_tr.jpg) center top no-repeat; width:204px; height:178px;">
								<div style="margin:127px 0 0 15px;" title="神马归来">
									<?if($show=='1'){?>
										<a href="javascript:olduser();"><img src="/Public/images/20110513/m_sm.jpg" height="48" id="a_sm" width="143"  border="0"/></a>
									<?}else{?>
										<img src="/Public/images/20110513/m_sm1.jpg" height="48" id="a_sm" width="143"  border="0"/>
									<?}?>
								</div>
							</div>
							<div align="center"><img src="/Public/images/20110513/m_trz.jpg" height="49" width="77" /></div>
							<div align="center" id="newphoto">
							<?if($model['hasclick']=='1'){?>
							<a href="/A20110513/getpackage.html"><img src="/Public/images/20110513/m_trf.jpg" height="50" width="171" id="a_jp" border="0" /></a>
							<?}else{?>
							<img src="/Public/images/20110513/m_trf1.jpg" height="50" width="171" id="a_jp" border="0" />
							<?}?>
							</div>
						</td>
					</tr>
				</table>
				
				<div class="m_f">
					<table cellpadding="4" cellspacing="8" border="0">
						<tr>
							<td>
								<div>
									<p class="p_l">
										<img src="/Public/images/20110513/m_f1.jpg" height="58" width="56" /><br />
										三级冰符<br />石*1
									</p>
									<p class="p_r">
										种类：符石类<br />
										3级冰之符石<br />
										锻造武器和防具时使用，
										使装备附加冰属性效果，
										如果被锻造装备已有其他属性，则不能使用
										
									</p>
								</div>
							</td>
							<td>
								<div>
									<p class="p_l">
										<img src="/Public/images/20110513/m_f2.jpg" height="58" width="56" /><br />
										月色轻甲<br />马鞍*1
									</p>
									<p class="p_r">
										种类：马鞍类<br />
										装备部位：马鞍<br />
										防御力：0<br />
										装备等级：1
									</p>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<div>
									<p class="p_l">
										<img src="/Public/images/20110513/m_f3.jpg" height="58" width="56" /><br />
										月色轻甲<br />缰绳*1
									</p>
									<p class="p_r">
										种类：缰绳类<br />
										装备部位：鞍<br />
										防御力：0<br />
										装备等级：1
									</p>
								</div>
							</td>
							<td>
								<div>
									<p class="p_l">
										<img src="/Public/images/20110513/m_f4.jpg" height="58" width="56" /><br />
										三级魔法<br />冰符石*1
									</p>
									<p class="p_r">
										种类：符石类<br />
										3级冰之魔法符石<br />
										锻造法杖类装备时使用，
										使装备附加冰属性魔法威力，
										如果被锻造装备已有其他魔法属性，则不能使用
									</p>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div><img src="/Public/images/20110513/foot.jpg" height="68" width="874" /></div>
		</div>
	</div>
	<div style="height:100px;"></div>
</div>

<!--登陆弹出-->
<a id="movie" href="#spnjy_dl"></a>
<div style="display:none">
<div id="spnjy_dl">
	<div id="vedio-kuang" class="bgd_dl">
		<div class="vedio_div1">
			<a title="登陆"><span>登陆</span></a>
			<a href="javascript:closeMovie();" class="close"><img src="/Public/images/20110513/close.jpg" height="24" width="26"  border="0" /></a>
		</div>
		<div style="clear:both"></div>
		<div class="vedio_dl mag_dl" id="vedio_dl">
			<form name="" action="" method="get">
			<b>帐&nbsp;号：</b> <input type="text" class="ipt" name="username" /><br /><br />
			<b>密&nbsp;码：</b> <input type="password" class="ipt" name="pwd" /><br /><br />
			<b>验证码：</b><input type="text" name="??" style="border:#AA2246 1px solid; height:18px; width:100px;" />&nbsp;
			<input style="border:#AA2246 1px solid; height:18px; width:60px;" type="text" /><br /><br />
			<input type="image" src="/Public/images/20110513/btm.jpg" height="34" width="86" />
			</form>
		</div>
	</div>
	
</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
