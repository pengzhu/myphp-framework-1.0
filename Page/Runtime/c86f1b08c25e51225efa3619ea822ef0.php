<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="addgoods.html?goods=add">添加商品</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 商品列表 </span>
</h1>
<!-- 商品搜索 -->
<div class="form-div">
  <form action="" name="searchForm">
    <img src="/Public/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
        <!-- 分类 -->
    <select name="cat_id"><option value="0">所有分类</option></select>
    <!-- 品牌 -->
    <select name="brand_id"><option value="0">所有品牌</option></select>
    <!-- 推荐 -->
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
        <!-- 关键字 -->
    关键字 <input type="text" name="keyword" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>

<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>编号</th>
			<th>商品名称</th>
			<th>价格</th>
			<th>商品状态</th>
			<th>精品</th>
			<th>新品</th>
			<th>热销</th>
			<th>库存</th>
			<th>操作</th>
		</tr>
			<?
				foreach($value as $c_value){
					if($c_value['is_on_sale']==0){$is_on_sale="上架";}else{$is_on_sale="下架";}
					if($c_value['is_best']==1){$is_best="是";}else{$is_best="否";}
					if($c_value['is_new']==1){$is_new="是";}else{$is_new="否";}
					if($c_value['is_hot']==1){$is_hot="是";}else{$is_hot="否";}
					echo "<tr><td>".$c_value['goods_sn']."</td><td>".$c_value['goods_name']."</td><td>".$c_value['shop_price']."</td><td>".$is_on_sale."</td><td>".$is_best."</td><td>".$is_new."</td><td>".$is_hot."</td><td>".$c_value['goods_number']."</td><td><a href='addgoods.html?goods=update&id=".$c_value['goods_id']."'>修改</a> / <a href='edit.html?goods=del&id=".$c_value['goods_id']."'>删除</a></td></tr>";
				}
			?>
		<tr>
			<td colspan="10"><?$page->pagehtml();?></td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
