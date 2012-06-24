<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我的订单</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#profile_info").css("background","#000000");
	$("#profile_info").css("color","#fff");
})
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
	<div class="profile">
		<div class="profile_c">
			<div class="profile_t">
			<?Temp("Public::member_menu");?>
			</div>
			<div class="order" style="height:1300px;">
				<table cellspacing="0" cellpadding="0">
					<tr class="order_bg">
						<td class="tit" width="250">团购项目</td>
						<td class="tit" width="80">数量</td>
						<td class="tit" width="120">订单号</td>
						<td class="tit" width="100">总价</td>
						<td class="tit" width="150">订单状态</td>
					</tr>
					<?foreach($list as $val){?>
					<tr>
						<td>
							<div class="l"><img src="<?=$val['shoe_pic']?>" /></div>
							<div class="r">
								<h3><?=$val['shoe_name']?></h3>
							</div>
						</td>
						<td><h2><?=$val['shoe_num']?></h2></td>
						<td><h2><?=$val['order_sn']?></h2></td>
						<td><h2>￥<?=$val['order_price']?></h2></td>
						<td><h3><?if($val['ispay']=='1'){echo "已支付,发货中";}else{echo "等待支付 <a href='/Shopping/order_pay?id=".$val['id']."'>付款>></a>";}?> <!--<a href="#"><img src="/Public/img/order_mail.jpg" align="absmiddle" /></a>--></h3></td>
					</tr>
					<?}?>
					
				</table>
				<div align="center" style="margin-top:10px;">
						<?$page->pagehtml();?>
						
				</div>
			</div>
			<div style="height:40px;"></div>
		</div>
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
