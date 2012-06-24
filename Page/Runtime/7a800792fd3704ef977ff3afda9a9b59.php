<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="sex_add.html">添加新性别</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 性别列表 </span>
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
			<th>编号</th>
			<th>性别名称</th>
			<th>操作</th>
		</tr>
		<?foreach($list as $val){?>
		<tr>
			<td><?=$val['id']?></td><td><?=$val['sex_name']?></td><td><a href="sex_edit?id=<?=$val['id']?>">修改</a> <a href="sex_del?id=<?=$val['id']?>">删除</a></td>
		</tr>
		<?}?>
		<tr>
			<td colspan="3">
			<?$page->pagehtml();?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
