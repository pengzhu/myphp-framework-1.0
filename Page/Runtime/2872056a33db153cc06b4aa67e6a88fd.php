<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>会员注册</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
function pic(){
	$("#pic").attr("src","/Public/verify?"+(new Date()));
}
</script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/member_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--reg con-->
	<div class="reg">
		<ul>
			<li class="lira">
				<div><h2>欢迎来到鞋报</h2></div>
				<div class="reg_l">
					这里有最新最全的鞋类咨询<br />
					这里有潮流新鲜的游戏活动<br />
					这里有炙手可热的鞋类团购<br />
					我们致力于为大家提供更好、更多的潮流运动<br />品牌咨询！<br />
					在这里，我们希望每一个人都能体会到运动球<br />鞋带给大家的快乐！
				</div>
				<div style="margin-top:30px;"><h2>注册有奖</h2></div>
				<div class="reg_l">
					现在注册成为我们的会员，绑定你的手机号，<br />就有机会参加我们的抽奖活动，各种好礼等着<br />你来拿。
				</div>
			</li>
			<li class="lirb">
				<div><h2>新会员注册</h2></div>
				<div class="reg_r">
					<form action="/Member/reg" method="post">
					<input type="hidden" name="post" value="post" />
					<table>
						<tr>
							<td width="100">用户名</td>
							<td><input type="text" name="username" maxlength="20" /> <em>*</em></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><p>可用来登录鞋报，不超过20个字符</p></td>
						</tr>
						<tr>
							<td width="100">邮箱地址</td>
							<td><input type="text" name="email" maxlength="50" /> <em>*</em></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><p>可用来登录鞋报，建议使用常用邮箱</p></td>
						</tr>
						<tr>
							<td>昵称</td>
							<td><input type="text" name="nickname" maxlength="12" /> <em>*</em></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><p>使用你在网上常用的昵称，小于12个字符</p></td>
						</tr>
						<tr>
							<td>设置密码</td>
							<td><input type="password" name="password" /> <em>*</em></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><p>6-12个字符</p></td>
						</tr>
						<tr>
							<td>重复密码</td>
							<td><input type="password" name="repassword" /> <em>*</em></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>绑定手机</td>
							<td><input type="text" class="mobile" name="mobile" /></td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td><p>参加注册抽奖活动，成为鞋报高级会员</p></td>
						</tr>
						<tr>
							<td>验证码</td>
							<td>
								<input type="text" class="yzm" name="code" /> 
								<img id="pic" src="/Public/verify" height="20" width="50" align="absmiddle" /> 
								<a href="javascript:pic();">看不清楚，换一张</a>
							</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td><input type="image" src="/Public/img/member_sub.jpg" class="m_sub" /></td>
							<td>&nbsp;</td>
						</tr>
						<tr style="height:30px;">
							<td colspan="2"><input type="checkbox" checked="checked" class="ckbox" /> <font>我已阅读并接受</font></td>
						</tr>
					</table>
					</form>
				</div>
			</li>
		</ul>
	</div>
	<!--reg con-->
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
