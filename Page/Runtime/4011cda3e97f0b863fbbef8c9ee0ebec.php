<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<style>
td{ height:18px;}
</style>
</head>

<body style="font-size:12px;">
<input type="button" value="返回" onclick="location.href='/Encode/code_activate.html'" />
<hr>
<table border="1" align="center" cellspacing='0' cellpadding='0' width="800">
<tr><td align="center">激活码</td><td align="center">状态</td><td align="center">激活账号</td><td align="center">激活时间</td></tr>
<?foreach($list as $val){?>
<tr><td align="center"><?=$val['code']?></td><td align="center"><?if($val['loginid']!=''){echo "<span style='color:green'>已激活</span>";}else{echo "<span style='color:red'>未激活</span>";}?></td><td align="center"><?if($val['loginid']!=''){echo $val['loginid'];}else{echo '---------------';}?></td><td align="center"><?if($val['loginid']!=''){echo $val['dt'];}else{echo '---------------';}?></td></tr>
<?}?>
</table>

</body>
</html>
