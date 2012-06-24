<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>潘多拉OL是2011年最新3D魔幻网游，带给你策略国战、攻城器械战、公会战、战马系统、竞技场的精彩PVP感受！</title>
<meta name="Keywords" content="潘多拉 潘多拉激活 潘多拉特权码" /> 
<meta name="Description" content="2011大型3D策略对抗网游潘多拉8月5日14时开启梦想测试，无策略、不对抗！打与不打，由你决定！上17173，为潘多拉投票赢取变形金刚3电影票！为天下苍生的梦想，勇士们，冲锋吧！潘多拉特权码，让你拿到手酸！" /> 
<link rel="stylesheet" type="text/css" href="/Public/images/20110728/css.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#pct1").css("height","152px");
	$("#pce1 img").attr("src","/Public/images/20110728/pce_d.jpg");
	for(var i=1;i<=5;i++){
		$("#pce"+i).click(function(){
			abc($(this).attr("id"));
		});
		$(".r"+i).click(function(){
			abc_($(this).attr("class"));
		});
	}
});
function abc_(j){
	var uc = new Array();
	uc[1]="<div><b>·</b>多种职业，多种装备，多种技能加点方法，同一个游戏让你玩出不同的感受。</div>";
	uc[2]="<div><b>·</b>多种风格地图场景，勾画出不一样的游戏画面，让你真实体验潘多拉的魔幻特色。</div>";
	uc[3]="<div><b>·</b>三国鼎立，定会引发无限战争，这个是神魔人三界无法维持的平衡，硝烟战火，对抗仍然在继续。</div>";
	uc[4]="<div><b>·</b>公会技能，国家战争，有人说一切的终端其实只是一个开始，对于PVP，我们会让玩家知道，之前所玩的游戏，只是个开始。</div>";
	uc[5]="<div><b>·</b>与众不同的战马系统，如果多增加一件珍贵装备，其丰富的改造和培养更加考验玩家的策略性。</div>";
	var k=j.replace("r","");
	$(".z_pct").html(uc[k]);
	$(".pct img").attr("src","/Public/images/20110728/img-"+k+".jpg");
	for(var i=1;i<=5;i++){
		$(".r"+i).css("background","url(/Public/images/20110728/b"+i+".jpg)")
	}
	$(".r"+k).css("background","url(/Public/images/20110728/b"+k+"-"+k+".jpg)")

}
function abc(j){
	var k=j.replace("pce","pct");
	for(var i=1;i<=4;i++){
		$("#pct"+i).animate({height:"0px"},{queue:false,duration:300});
		$("#pce"+i+" img").attr("src","/Public/images/20110728/pce_l.jpg");
	}
	$("#"+k).animate({height:"152px"},{queue:false,duration:300});
	$("#"+j+" img").attr("src","/Public/images/20110728/pce_d.jpg");
}
function reg(){
	if($("#loginid").val()==""){alert("用户名不能为空");return;}
	if($("#pwd1").val()==""){alert("密码不能为空");return;}
	if($("#pwd1").val().length<6||$("#pwd1").val().length>20){alert("码必须在6到20个字符之间");return;}
	if($("#pwd1").val()!=$("#pwd2").val()){alert("两次密码不相同");return;}
	if($("#email").val()==""){alert("邮箱不能为空");return;}
	if($("#iddentity").val()==""){alert("证件号码不能为空");return;}
	if($("#truename").val()==""){alert("姓名不能为空");return;}
	if($("#code").val()==""){alert("验证码不能为空");return;}
	document.my.submit();
}
</script>
</head>

<body>
<div class="body">
	<div class="t">
		<div class="t1"></div>
		<div class="t2">
			<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="961" height="604">
			  <param name="movie" value="/Public/images/20110728/pandora-flash.swf" />
			  <param name="quality" value="high" />
			  <param name="wmode" value="transparent" />
			  <embed src="/Public/images/20110728/pandora-flash.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="961" height="604"></embed>
			</object>
		</div>
		<div class="t3"></div>
	</div>
	<div class="m">
		<div class="ct">
			<div class="ct1">
				<div class="zc">
					<div class="zc1"><form name="my" action="http://u.126play.com/Index/reg.html" method="post" target="thisframe">
						<input type="hidden" name="act" value="post" />
						<input type="hidden" name="url" value="http://pdl.126play.com/index.html" />
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td align="right" width="75">用户名：</td>
								<td align="left" width="201"><input type="text" name="loginid" id="loginid"/></td>
							</tr>
							<tr>
								<td align="right">密码：</td>
								<td align="left"><input type="password" name="pwd1" id="pwd1" /></td>
							</tr>
							<tr>
								<td align="right">确认密码：</td>
								<td align="left"><input type="password" name="pwd2" id="pwd2" /></td>
							</tr>
							<tr>
								<td align="right">联系邮箱：</td>
								<td align="left"><input type="text" name="email" id="email" /></td>
							</tr>
							<tr>
								<td align="right">身份证件：</td>
								<td align="left"><input type="text" name="iddentity" id="iddentity" /></td>
							</tr>
							<tr>
								<td align="right">真实姓名：</td>
								<td align="left"><input type="text" name="truename" id="truename" /></td>
							</tr>
							<tr>
								<td align="right">验证码：</td>
								<td align="left"><input type="text" id="code" name="code" style="width:50px;" maxlength="4" /> <img id="pic" src="http://u.126play.com/Public/verify" width="50" height="22" align="absmiddle" /> <a href="javascript:pic();">看不清，换一个</a>
								<script>function pic(){
									document.getElementById("pic").src="http://u.126play.com/Public/verify?"+new Date();
								}
								</script>
								</td>
							</tr>
							<tr>
								<td align="right">服务条款：</td>
								<td align="left"><input type="checkbox" checked="checked" class="rig" align="absmiddle" /><span>仔细阅读并同意烈风通行证条款</span></td>
							</tr>
							<tr>
								<td align="center" colspan="2" style="height:60px;"><img src="/Public/images/20110728/butt_zc.jpg" class="rig" onclick="reg()" style="cursor:pointer;" /></td>
								
							</tr></form>
						</table>
					</div>
				</div>
				<div class="pho">
					<div class="tit">
					<a href="javascript:void(0)" class="r1"></a>
					<a href="javascript:void(0)" class="r2"></a>
					<a href="javascript:void(0)" class="r3"></a>
					<a href="javascript:void(0)" class="r4"></a>
					<a href="javascript:void(0)" class="r5"></a>
					</div>
					<div class="pct">
						<div class="z_pct"><div><b>·</b>多种职业，多种装备，多种技能加点方法，同一个游戏让你玩出不同的感受</div></div>
						<div><img src="/Public/images/20110728/img-1.jpg" width="619" height="334" border="0" /></div>
					</div>
				</div>
				
			</div>
			
			<div class="ct2">
				<div class="photo">
					<div><a href="#"><img src="/Public/images/20110728/img1.jpg" border="0" /></a></div>
					<div><a href="#"><img src="/Public/images/20110728/img2.jpg" border="0" /></a></div>
					<div><a href="#"><img src="/Public/images/20110728/img3.jpg" border="0" /></a></div>
				</div>
				<div class="pce">
					<div class="pce_bg" id="pce1">
						<div><img src="/Public/images/20110728/pce_l.jpg" border="0" align="absmiddle" /> 新手引导站</div>
					</div>
					<div class="pce_ct" id="pct1">
						<div class="attr">
							<div class="attr1"><img src="/Public/images/20110728/t1.jpg" border="0" /></div>
							<div class="attr2">
							&nbsp;&nbsp;&nbsp;&nbsp;让你第一时间熟悉潘多拉的职业系统，操作指南。各种对抗性副本，多种变化多端的装备属性。<br /><br />
							最短的时间从新鸟变成老鸟
							</div>
						</div>
					</div>
					<div class="pce_bg" id="pce2">
						<div><img src="/Public/images/20110728/pce_l.jpg" border="0" align="absmiddle" /> 潘多拉主题公会</div>
					</div>
					<div class="pce_ct" id="pct2">
						<div class="attr">
							<div class="attr1"><img src="/Public/images/20110728/t2.jpg" border="0" /></div>
							<div class="attr2">
							无兄弟，不PK。<br /><br />
							在潘多拉的世界中，与兄弟们并肩作战是不可忽视的欢迎加入潘多拉主题公会！
							</div>
						</div>
					</div>
					<div class="pce_bg" id="pce3">
						<div><img src="/Public/images/20110728/pce_l.jpg" border="0" align="absmiddle" /> 8重活动大狂欢</div>
					</div>
					<div class="pce_ct" id="pct3">
						<div class="attr">
							<div class="attr1"><img src="/Public/images/20110728/t3.jpg" border="0" /></div>
							<div class="attr2">
							登入即有奖、冲级送耳机、增加掉宝率<br /><br />在游戏开启梦想测试后将开启众多活动让你在潘多拉的世界里，激情四射！
							</div>
						</div>
					</div>
					<div class="pce_bg" id="pce4">
						<div><img src="/Public/images/20110728/pce_l.jpg" border="0" align="absmiddle" /> 潘多拉微电影，实现你的狂欢</div>
					</div>
					<div class="pce_ct" id="pct4" style=" border-bottom:#5A230E 1px solid">
						<div class="attr">
							<div class="attr1"><img src="/Public/images/20110728/t4.jpg" border="0" /></div>
							<div class="attr2">
							不同的3个女孩，不同的3个故事。<br /><br />
							他们如何实现了他们的愿望,潘多拉视频站将揭晓一切
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="m_f" style=" background:#151110;">
	<div align="center" style="margin-top:20px; color:#FEF0B1;">
	健康游戏忠告：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活。
	</div>
	<div class="m_foot_" style="margin-top:10px;">
		<div style="margin-left:60px;"><img src="http://pdl.126play.com//Public/images/liefeng.jpg" height="69" width="167" border="0" /></div>
		<!--<div><img src="/Public/images/foot_2.jpg" height="47" width="114" border="0" /></div>-->
		<div class="h" style=" text-align:center;">
			<a href="http://pdl.126play.com/zp.html">·招贤纳士</a>
			<a href="http://pdl.126play.com/xieyi.html">·用户协议</a>
			<a href="http://kf.126play.com/Home/Index/question">·常见问题</a>
			<a href="http://bbs.pdl.126play.com/">·互动中心</a>
			<a href="http://kf.126play.com/">·客服中心</a><br />
			文网进字[2011]021号 | 新出审字[2011]460号 <br />
			增值电信业务许可证编号：沪B2-20110055  | 《版署电子出版》编号:ISBN 978-7-89989-019-6 <br />
			Copyright @ 2010 pdl.126play.com All Rights Reserved
		</div>
	</div>

	
	
</div>
<!--Passit BUTTON BEGIN-->
<script type="text/javascript">
var passit_title = "";//自定义分享标题，删除和留空表示使用默认
var passit_url = "";//自定义分享网址，删除和留空表示使用默认
var passit_content= "";//自定义分享内容，删除和留空表示使用默认Meta中的描述
var passit_image= "";//自定义分享图片，删除和留空表示不分享图片
</script>
<script type="text/javascript">
bookmark_service="qqkj,sinaweibo,xnzt,qq,kxzt,qqxy,baiduHi,bookmark,baidu,douban,sohuweibo,163weibo,qqweibo,fhwwb,mhrs,more";</script>
<script type="text/javascript" src="http://www.passit.cn/js/passit_float_new.js?pub=0&img_src=btn15&simple=1" charset="UTF-8"></script>
<!--Passit BUTTON END-->
<iframe name="thisframe" src="" width="0" height="0"></iframe>
</body>
</html>
