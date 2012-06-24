<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>超级变变变 - 微道具变大礼包 - 潘多拉活动专题</title>
<link type="text/css" rel="stylesheet" href="/Public/images/20110729/css.css" />
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<!--<script type="text/javascript" src="jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="jquery.fancybox-1.3.1.css" />-->
<script>
function buka(i){
	$("#kuang_buka").fadeIn(200);
	if(i==1){$(".table_2").css("display","none");$(".table_1").css("display","");$("#cit1").attr("src","/Public/images/20110729/recodes1.jpg");}
	if(i==2){$(".table_1").css("display","none");$(".table_2").css("display","");$("#cit1").attr("src","/Public/images/20110729/recodes2.jpg")}
}
function closebuka(){
	$("#kuang_buka").fadeOut(200);
}
window.onload = function(){
	window.onscroll = function(){
		var scrollTop = document.documentElement.scrollTop + document.body.scrollTop;
		
		if(scrollTop){
			document.getElementById("kuang_buka").style.top=(scrollTop + 40)+"px";
		}
	}
};
</script>
</head>

<body>
<Div class="body">
	<div class="left l"></div>
	<div class="left w">
		<!--弹 1 2 3-->

<div style="position:absolute; margin-left:80px; top: 40px; width:800px; z-index:10; display:none;" id="kuang_buka">
	<div id="page2_kuang4">
		<div class="page2_kuang4"><div class="pto_l"></div><div class="pto_m">
		    <div class="code">
			<div style="overflow-y:scroll;width:720px; height:310px;margin:10px;">
				<!--
				<table cellpadding="0" cellspacing="0" border="1" class="table_1" style="display:none;">
					<tr>
						<td width="140" align="center">2011-05-05</td>
						<td width="180" align="center"><Div class="td1">蝙蝠质疑<div></td>
						<td width="190" align="center">3</td>
						<td>&nbsp;</td>
					</tr>
				</table>
				<table cellpadding="0" cellspacing="0" border="0" class="table_2">
					<tr>
						<td width="140" align="center">2011-05-05</td>
						<td width="180" align="center"><Div class="td1">蝙蝠质疑<div></td>
						<td width="190" align="center">3</td>
						<td>&nbsp;</td>
					</tr>
				</table>
				-->
			</div>
			</div>
			<Div style=" width:750px; margin:0 auto;">
			<div class="c2"><img src="/Public/images/20110729/recodes1.jpg" id="cit1" /></div>
			<div class="cl"><a href="javascript:void(0)" onclick="closebuka()"><img src="/Public/images/20110729/closed.jpg" border="0" /></a></div>
			</Div>
			</div>
			<div class="pto_r"></div>
		</div>
	</div>
</div>
		<div class="t">
			<div>
				<a href="http://pdl.126play.com/" target="_blank" title="进入官网"></a>
				<a href="http://bbs.pdl.126play.com/" target="_blank" title="互动中心"></a>
			</div>
		</div>
		<div class="time">
			<div>
				
			</div>
		</div>
		<div class="bg_m"></div>
		<?if(!isset($_SESSION['loginid_729'])){?>
		<div class="bg_login">
			<div class="login">
			<form action="/A20110729" method="post">
			<input type="hidden" name="act" value="post" />
				<div class="w1">
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td align="right">通行证：</td>
							<td align="left"><input type="text" name="loginid" maxlength="30" /></td>
						</tr>
						<tr>
							<td align="right">&nbsp;&nbsp;密码：</td>
							<td align="left"><input type="password" name="password" maxlength="30" /></td>
						</tr>
					</table>
				</div>
				<div class="w2">
					<div><input type="image" src="/Public/images/20110729/butt1.jpg" /></div>
					<div><a href="http://u.126play.com/Index/reg.html" target="_blank"><img src="/Public/images/20110729/butt2.jpg" border="0" /></a></div>
				</div>
			</div>
			</form>
		</div>
		<?}else{?>
		<div class="bg_reg">
			<div class="bg_reg1">欢迎您：<?=$_SESSION['loginid_729']?><br /><a href="/A20110729/logout.html"><img src="/Public/images/20110729/log.jpg" border="0" /></a></div>
			<div class="bg_reg2"><br /><span>想知道超级变变变成功了几次？</span><br />（<a href="javascript:void(0);" onclick="buka(1)" >点击查看记录</a>）</div>
			<div class="bg_reg3"><br /><span>个人炼金小账本</span><br />（<a href="javascript:void(0);" onclick="buka(2)">点击查看记录</a>）</div>
		</div>
		<?}?>
		
		<div class="bg_content">
			<div class="content1">
				<div class="ct">潘多拉女神降临，把你身上小小的无用的小道具变化成珍贵的道具。赶快来参与吧。</div>
				<div class="cc">超级变变变告知：<br />
				1.请先在当前页面登录您的账号。<br />
				2.变化道具需要放在游戏内初始提供的仓库栏才能完成变化的哦~ <br />
				3.请确认您变化道具的数量与种类，不符合变化要求将无法完成转变哦~<br />
				<span>4.注意：您申请变化前，需要您暂时离开游戏下线片刻，女神才可正常进行变化。</span>
				</div>
			</div>
			<div class="content2">
				<div class="ct">潘多拉魔盒能够将任何物品的价值体现出来，你手上有什么游戏用不太到的珍藏品吗？不妨来这里鉴定并换成点券比较实在哦~。</div>
				<div class="cc">珍品炼金说明：<br />
				1.请先在当前页面登录您的账号。<br />
				2.变化道具需要放在游戏内初始提供的仓库栏才能完成炼化的哦~  <br />
				3.请选择您需要的炼金道具的数量，不符合要求将无法完成炼化哦~<br />
				<span>4.注意：您申请炼金前，需要您暂时离开游戏下线片刻，女神才可正常进行炼化。</span>
				</div>
			</div>
		</div>
		<div class="bg_ft">
			<div class="ft1">
				<div class="div1" title="free up"></div>
				<div class="div2">
					<div class="left" style="margin-left:6px; text-align:center; padding-top:10px;"><!----><img src="/Public/images/20110729/l1.gif" /></div>
					<div class="right" style="margin-left:6px; text-align:center; padding-top:10px;"><!----><img src="/Public/images/20110729/r1.gif" /></div>
				</div>
				<div class="div3"><a href="/A20110729/convert_1.html"><img src="/Public/images/20110729/butt3.jpg" border="0" /></a></div>
			</div>
			<div class="ft2">
				<div class="div1" style="text-align:center; padding-top:2px;"><img src="/Public/images/20110729/pb.gif" /></div>
				<div class="div2">
					<div class="left" style="margin-left:2px;"><!--<img src="/Public/images/20110729/bg_.jpg" />--></div>
					<div class="right" style="text-align:center; padding-top:8px;"><!----><img src="/Public/images/20110729/no.gif" /></div>
				</div>
				<div class="div3"><a href="/A20110729/convert_2.html"><img src="/Public/images/20110729/page3_9.jpg" border="0" /></a></div>
			</div>
		</div>
		<div class="bg_f">
			<div>
			健康游戏忠告：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活。<br />
			·<a href="http://pdl.126play.com/zp.html" target="_blank">招贤纳士</a> 
			·<a href="http://pdl.126play.com/xieyi.html" target="_blank">用户协议</a> 
			·<a href="http://kf.126play.com/Home/Index/question" target="_blank">常见问题</a> 
			·<a href="http://bbs.pdl.126play.com/" target="_blank">互动中心</a> 
			·<a href="http://kf.126play.com/" target="_blank">客服中心</a><br />
			文网进字[2011]021号 | 新出审字[2011]460号 <br />
			增值电信业务许可证编号：沪B2-20110055 | 《版署电子出版》编号:ISBN 978-7-89989-019-6 <br />
			Copyright @ 2010 pdl.126play.com All Rights Reserved
			</div>
		</div>
	</div>
	<div class="left r"></div>
</Div>
<?Temp("Public::foot");?>
</body>
</html>
