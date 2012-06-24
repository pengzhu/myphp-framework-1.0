<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script>
function onconfirm(){
	if(confirm("你确定要删除该咨询吗？"))
		return true;
	else
		return false;
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 订单列表 </span>
</h1>
<!-- 商品搜索 -->
<div class="form-div">
  <form action="" name="searchForm">
    <img src="/Public/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
        <!-- 分类 -->
    <select name="cat_id"><option value="0">所有分类</option></select>
        <!-- 关键字 -->
    关键字 <input type="text" name="keyword" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>

<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>订单号</th>
			<th>用户帐号</th>
			<th>订单价格</th>
			<th>是否支付</th>
			<th>支付日期</th>
			<th>详情</th>
		</tr>
		<?
			foreach($list as $val)
			{
				if($val['ispay']==1){$ispay="是";}else{$ispay="否";}
				echo "<tr><td>".$val['order_sn']."</td><td>".$val['email']."</td><td>".$val['order_price']."</td><td>".$ispay."</td><td>".$pay_dt."</td><td><a href='order_info?id=".$val['id']."'>订单详情</a></td></tr>";
			}
		?>
		<tr>
			<td colspan="6">
			<?$page->pagehtml("ispay=$ispay");?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
