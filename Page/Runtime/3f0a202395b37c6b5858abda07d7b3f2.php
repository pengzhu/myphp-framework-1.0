<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>团购付款页</title>
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
	<div class="buyContent" style="height:1000px;">
		<div class="buyOrderConfirmation_bg buyPayment_bg">
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
						<h1 style="margin-left:50px;">
							<?=$infomodel['shoe_name']?>
						</h1>
					</td>
					<td><b><?=$infomodel['shoe_num']?></b></td>
					<td>X</td>
					<td><b>￥<font id="calculate1"><?=$infomodel['shoe_price']?></font></b></td>
					<td>=</td>
					<td width="100"><b style="color:#FF0000;">￥<font id="calculate2"><?=$model['order_price']?></font></b></td>
				</tr>
			</table>
			<form action="/Shopping/order_pay_do" method="post">
			<input type="hidden" name="id" value="<?=$model['id']?>" />
			<div class="buyPayment_div">
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="ICBCB2C"/></div>
					<div><img src="/Pay/Alipay/images/ICBC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CMB"/></div>
					<div><img src="/Pay/Alipay/images/CMB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CCB"/></div>
					<div><img src="/Pay/Alipay/images/CCB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="BOCB2C"/></div>
					<div><img src="/Pay/Alipay/images/BOC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="ABC"/></div>
					<div><img src="/Pay/Alipay/images/ABC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="COMM"/></div>
					<div><img src="/Pay/Alipay/images/COMM_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="SPDB"/></div>
					<div><img src="/Pay/Alipay/images/SPDB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="GDB"/></div>
					<div><img src="/Pay/Alipay/images/GDB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CITIC"/></div>
					<div><img src="/Pay/Alipay/images/CITIC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CEBBANK"/></div>
					<div><img src="/Pay/Alipay/images/CEB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CIB"/></div>
					<div><img src="/Pay/Alipay/images/CIB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="SDB"/></div>
					<div><img src="/Pay/Alipay/images/SDB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CMBC"/></div>
					<div><img src="/Pay/Alipay/images/CMBC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="HZCBB2C"/></div>
					<div><img src="/Pay/Alipay/images/HZCB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="SHBANK"/></div>
					<div><img src="/Pay/Alipay/images/SHBANK_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="NBBANK"/></div>
					<div><img src="/Pay/Alipay/images/NBBANK_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="SPABANK"/></div>
					<div><img src="/Pay/Alipay/images/SPABANK_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="BJRCB"/></div>
					<div><img src="/Pay/Alipay/images/BJRCB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="ICBCBTB"/></div>
					<div><img src="/Pay/Alipay/images/ENV_ICBC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="CCBBTB"/></div>
					<div><img src="/Pay/Alipay/images/ENV_CCB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="SPDBB2B"/></div>
					<div><img src="/Pay/Alipay/images/ENV_SPDB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="ABCBTB"/></div>
					<div><img src="/Pay/Alipay/images/ENV_ABC_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="fdb101"/></div>
					<div><img src="/Pay/Alipay/images/FDB_OUT.gif" border="0"/></div>
				</div>
				<div class="tit">
					<div class="l"><input type="radio" name="pay_bank" value="PSBC-DEBIT"/></div>
					<div><img src="/Pay/Alipay/images/PSBC_OUT.gif" border="0"/></div>
				</div>
				<div class="buyPayment_sub"><input type="image" src="/Public/img/buyPayment_img.jpg"></div>
			</div>
			</form>
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
