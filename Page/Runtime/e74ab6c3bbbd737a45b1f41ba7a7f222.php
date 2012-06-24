<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>团购确认页</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/buy_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--buyContent-->
	<div class="buyContent">
		<div class="buyOrderConfirmation_bg">
			<table class="tba">
				<tr>
					<td width="300">项目</td>
					<td>数量</td>
					<td>&nbsp;</td>
					<td>价格</td>
					<td>&nbsp;</td>
					<td>总价</td>
				</tr>
				<tr>
					<td style="width:300px;">
						<h1>
							<?=$model['name']?>
						</h1>
						<h2>
							<?=$model['smallname']?>
						</h2>
					</td>
					<td><div><input type="text" id="calculate3" maxlength="4" onblur="cal()" value="2"/></div></td>
					<td>X</td>
					<td><b>$<font id="calculate1"><?=$model['nowprice']?></font></b></td>
					<td>=</td>
					<td width="100"><b>$<font id="calculate2">726</font></b></td>
				</tr>
			</table>
			<script>
			$("#calculate2").html($("#calculate3").val()*$("#calculate1").html());
			function cal(){
			$("#calculate2").html($("#calculate3").val()*$("#calculate1").html());
			}
			</script>
			<table class="tbb">
				<tr>
					<td width="50">手机号</td>
					<td width="180"><input type="text" /></td>
					<td><a href="#"><img src="/Public/img/buyOrder_img2.jpg" /></a></td>
				</tr>
				<tr>
					<td>验证码</td>
					<td colspan="2"><input type="text" /></td>
				</tr>
			</table>
			<ul>
				<li>
					<a href="#"></a>
				</li>
				<li><a href="#"></a></li>
				<li><a href="#"></a></li>
				<li class="orderlid">
					<a href="#">asdfas</a>
				</li>
			</ul>
		</div>
	</div>
	<!--buyContent-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
