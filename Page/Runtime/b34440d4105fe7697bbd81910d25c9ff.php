<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="">添加商品</a></span>
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
			<th>货号</th>
			<th>价格</th>
			<th>上架</th>
			<th>精品</th>
			<th>新品</th>
			<th>热销</th>
			<th>推荐排序</th>
			<th>库存</th>
			<th>操作</th>
		</tr>
		<script>
		for(var i=1;i<=12;i++){
		document.write("<tr><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td><td>1</td></tr>")
		}
		</script>
		<tr>
			<td colspan="10">没有找到任何记录</td>
			<td><a href="#">修改</a> / 删除</td>
		</tr>
		<tr>
			<td colspan="11">
			<a href="#">第一页</a> 
			<a href="#">上一页</a> 
			<a href="#">下一页</a> 
			<a href="#">最末页</a> 
			总计 <span>0</span> 个 每页<span>18</span> 当前第 <span>1</span> 页，  </td>
		</tr>
	</table>
</div>
<div id="footer">版权所有 &copy; 2011-2012 上海烈风派网络科技有限公司，并保留所有权利。</div>
</body>
</html>
