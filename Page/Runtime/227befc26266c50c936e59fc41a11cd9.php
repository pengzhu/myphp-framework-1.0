<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<style>
.da{ border:0px; border_bottom:1px solid; width:50px; background:transparent;}
</style>
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	var count_th=document.getElementById('addgoods').getElementsByTagName('th').length;
	for(var i=1;i<=count_th;i++){
		$(".th"+i).click(function(){
			play($(this).attr("class"));
		});
	}
	$(".th1").css("background","#EEF8F9");
});
function play(k){
	var j=k.replace("th","");
	var count_th=document.getElementById('addgoods').getElementsByTagName('th').length;
	for(var i=1;i<=count_th;i++){
		$(".goods"+i).css("display","none");
		$(".th"+i).css("background","#BBDDE5");
	}
	$(".goods"+j).css("display","");
	$("."+k).css("background","#EEF8F9");
}
function recpic(a){ $("#recpic").val(a); }
function pic1(a){ $("#pic1").val(a); }
function pic2(a){ $("#pic2").val(a); }
function pic3(a){ $("#pic3").val(a); }
function pic4(a){ $("#pic4").val(a); }
function pic5(a){ $("#pic5").val(a); }
function pic6(a){ $("#pic6").val(a); }

function chk_series(){

	var brand_id = $("#brand_id").val();

	if(brand_id!=""){

		//alert(brand_id);
	
		$.get("/Root/Shoe/getSeries.html?id="+brand_id,function(data){ $("#series_div").html(data); });

	}

}
function showoption(i){
	if(i==1){$("#shoeoption").show();}
	if(i==2){$("#shoeoption").hide();}
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="order_list.html">订单列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 订单详情 </span>
</h1>
<!-- 商品搜索 -->
<div class="list-div" id="listDiv"><h3> &nbsp;订单号：<span style="color:red"><?=$model['order_sn']?></span>&nbsp;&nbsp;下单时间：<span style="color:red"><?=$model['order_dt']?></span> &nbsp;&nbsp;订单价格：<span style="color:red">￥<?=$model['order_price']?></span>&nbsp;&nbsp;支付状态：<?if($model['ispay']=='1'){?><span style="color:green">（已支付）</span><?}else{?><span style="color:red">（尚未支付）</span><?}?></h3>
	<table cellpadding="2" cellspacing="5" id="addgoods">
		<tr>
		<th style="text-align:left;" colspan="3"> &nbsp;下单人帐号信息</th>
		</tr>
		<tr>
		<td style="text-align:left;"> &nbsp; &nbsp;email：<?=$model['email']?> &nbsp; &nbsp; &nbsp; 昵称：<?=$model['nickname']?></td>
		</tr>
		<tr>
		<td style="text-align:left;"> &nbsp; &nbsp;地址：<?=$model['province']?><?=$model['city']?><?=$model['address']?>&nbsp; &nbsp; &nbsp; 邮编：<?=$model['zipcode']?></td>
		</tr>
		<tr>
		<td style="text-align:left;"> &nbsp; &nbsp;联系电话：<?=($model['mobile']==""?"-----":$model['mobile'])?> / <?=($model['telephone']==""?"-----":$model['telephone'])?></td>
		</tr>
	</table>

	<table cellpadding="2" cellspacing="5" id="addgoods">
		<tr>
		<th style="text-align:left;" colspan="5"> &nbsp; 订单（<?=$model['order_sn']?>）的商品信息</th>
		</tr>
		<?foreach($list as $val){?>
		<tr>
		<td width="200"> <img src="<?=$val['shoe_pic']?>" width="100" /></td>
		<td> 商品名称：<?=$val['shoe_name']?></td>
		<td> 商品单价：￥<?=$val['shoe_price']?></td>
		<td> 商品数量：<?=$val['shoe_num']?></td>
		<td> 商品总价：￥<?=$val['shoe_num']*$val['shoe_price']?></td>
		</tr>
		<?}?>
		<tr>
		<td colspan="4" style="text-align:left;"></td>
		</tr>
	</table>		
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
