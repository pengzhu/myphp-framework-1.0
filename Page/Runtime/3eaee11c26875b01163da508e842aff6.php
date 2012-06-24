<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="addcate.html?cate=add">添加分类</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 分类列表 </span>
</h1>
<!-- 商品搜索 -->

<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>分类名称</th>
			<th>数量单位</th>
			<th>导航栏</th>
			<th>是否显示</th>
			<th>排序</th>
			<th>操作</th>
		</tr>
		<?=$contents ?>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>

