<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="seekorder.html">订单查询</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 订单列表 </span>
</h1>
<!-- 商品搜索 -->
<div class="form-div">
  <form action="" name="searchForm">
    <img src="/Public/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
       
        <!-- 关键字 -->
    订单号 <input type="text" name="keyword" size="15" /> 
	收货人 <input type="text" name="keyword" size="15" /> 
	<a href="">待付款</a> 
	<a href="">已付款</a> 
	<a href="">待发货</a>
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>

<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>订单号</th>
			<th>下单时间</th>
			<th>收货人</th>
			<th>总金额</th>
			<th>订单状态</th>
			<th>操作</th>
		</tr>
		<tr>
			<?
				foreach($value as $c_value){
					echo "<tr><td><a href='detailorder.html?id=".$c_value['order_id']."'>".$c_value['order_sn']."</a></td><td><div align='left'>pengrui11<br>2011-11-11</div></td><td><div align='left'>".$c_value['consignee']."[TEL:".$c_value['tel']."]<br>".$c_value['address']."</div></td><td>".$c_value['money_paid']."</td><td>状态</td><td><a href='detailorder.html?id=".$c_value['order_id']."'>查看</a> / <a href=''>删除</a></td></tr>";
				}
			?>
		</tr>
		<tr>
			<td colspan="6"><?$page->pagehtml();?></td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
