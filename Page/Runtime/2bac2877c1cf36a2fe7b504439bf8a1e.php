<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
function abc(){
	if($("#loginid").val()==""){alert("帐号不能为空");return};
	if($("#pwd").val()==""){alert("密码不能为空");return};
	if($("#pwd").val()!=$("#pwd1").val()){alert("两次密码不能为空");return};
	
	document.login.submit();
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="admin_lists.html">管理员列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加管理员 </span>
</h1>
<!-- 商品搜索 -->
<div class="admin-div" id="listDiv">
	<?
		if($cate=='update'){?>
			<form action="addadmin.html" method="post" name="login">
			<input type="hidden" value="update" name="cate">
		<?}else{?>
			<form action="addadmin.html" method="post" name="login">
			<input type="hidden" value="add" name="cate">
		<?}
	
	?>
	
	<table class="admin-add">
		<tr>
			<td align="right" width="40%">管理员帐号：</td>
			<td align="left" width="60%">
			<?if($cate=='update'){?><input type="hidden" name="loginid" id="loginid" value="<?=$value[0]['loginid']?>" class="w-h" size="15"><?=$value[0]['loginid']?><?}else{?><input type="text" name="loginid" id="loginid" class="w-h" size="15"><?}?>
			</td>
		</tr>
		<tr>
			<td align="right">管理员密码：</td>
			<td align="left">
			<?if($cate=='update'){?><input type="password" name="pwd" id="pwd" value="<?=$value[0]['loginpwd']?>" class="w-h" size="20"><?}else{?><input type="password" name="pwd" id="pwd" class="w-h" size="20"><?}?>
			</td>
		</tr>
		<tr>
			<td align="right">请确认密码：</td>
			<td align="left">
			<?if($cate=='update'){?><input type="password" name="pwd1" id="pwd1" value="<?=$value[0]['loginpwd']?>" class="w-h" size="20"><?}else{?><input type="password" name="pwd1" id="pwd1" class="w-h" size="20"><?}?>
			</td>
		</tr>
		<tr>
			<td align="right">管理员权限：</td>
			<td align="left">
			<?if($cate=='update'){?><input type="text" name="permissions" id="permissions" value="<?=$value[0]['permissions']?>" class="w-h"><?}else{?><input type="text" name="permissions" id="permissions" class="w-h"><?}?>
			</td>
		</tr>
		<tr>
			<td align="right">是否禁用：</td>
			<td align="left">
			<?if($cate=='update'){
				if($value[0]['ban']=='正常'){?>
					<input type="radio" name="ban" value="正常" checked="checked"/>否 <input type="radio" name="ban" value="禁用" />是
				<?}else{?>
					<input type="radio" name="ban" value="正常"/>否 <input type="radio" name="ban" value="禁用"  checked="checked"/>是
				<?}
			?>
				
			<?}else{?>
				<input type="radio" name="ban" value="正常" checked="checked"/>否 <input type="radio" name="ban" value="禁用" />是
			<?}?>
			
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<?if($cate=='update'){?><input type="button" value="修改管理员" onclick="abc()" class="sub"><?}else{?><input type="button" value="添加管理员" onclick="abc()" class="sub"><?}?>
			</td>
		</tr>
	</table>
	</form>
</div>


<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
