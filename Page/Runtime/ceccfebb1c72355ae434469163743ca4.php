<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>团购首页</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
var hotpage = 1;
var lastpage = 1;
$(function(){
	getHotList();
	getLastList();
});

function getHotList(){
	$.get("/Shopping/shoes_list?page=" + hotpage,function(data){
		$(".buy_cic").html(data);
	});
}
function getLastList(){
	$.get("/Shopping/shoes_list?w=3&page=" + lastpage,function(data){
		$(".buy_did").html(data);
	});
}
</script>
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
	<!--buy-->
	<div class="buy">
		<div class="buy_t"><img src="/Public/img/monopoly_img10.jpg" /></div>
		<div class="buy_c">
			<div class="buy_tit">
				<h3 class="buy_tit_h">WHAT'S HOT 正在热卖</h3>
			</div>
			<div class="buy_cic"></div>
			<div class="buy_tit">
				<h3 class="buy_tit_h">PREVIOUS SALE 往期热卖</h3>
			</div>
			<div class="buy_did"></div>
		</div>
	</div>
	<!--buy-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
