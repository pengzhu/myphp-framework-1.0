<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>系统登录 - ISIZE - 后台管理系统</title>
<?Temp("Public::css");?>
<script>
function abc(){
	if($("#loginid").val()==""){alert("帐号不能为空");return};
	if($("#pwd").val()==""){alert("密码不能为空");return};
	if($(".yzm").val()==""){alert("验证码");return};
	document.login.submit();
}
</script>
</head>

<body class="login">
<div class="login_user">
	<div class="left"><img src="/Public/images/login.png" /></div>
	<div class="right">
		<form action="cate.html" method="post" name="login">
		<table>
			<tr>
				<td>管理员帐号：</td>
				<td><input type="text" name="loginid" id="loginid" /></td>
			</tr>
			<tr>
				<td>管理员密码：</td>
				<td><input type="password" name="pwd" id="pwd" /></td>
			</tr>
			<tr>
				<td>验证码：</td>
				<td><input type="text" class="yzm" name="code" /> <img src="/Web/Public/verify" onclick="this.src='/Web/Public/verify?'+(new Date())" width="60" height="20" align="absmiddle" /></td>
			</tr>
			<tr>
				<td colspan="2"><input type="checkbox" class="store" name="store" value="store" /> 请保存我这次的登录信息。</td>
			</tr>
			<tr>
				<td colspan="2"><input type="button" value="登录" class="sub" onclick="abc()" /> <input type="reset" value="取消" class="sub" /></td>
			</tr>
		</table>
		</form>
	</div>
</div>
</body>
</html>
