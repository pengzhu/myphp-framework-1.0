<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="news_catelist.html">返回文章分类列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加文章分类 </span>
</h1>
<!-- 商品搜索 -->

<div class="addbrand-div" id="listDiv">
	<form action="cate_news.html?cate=add" method="post" name="addcate">
	<table cellspacing="1" cellpadding="3">
	  <tr>
		<td class="label" align="right">文章分类名称：</td>
		<td align="left"><input type="text" name="brand_name" maxlength="60" value="" /> <span>*</span></td>
	  </tr>
	  <tr>
		<td class="label" align="right">所属分类：</td>
		<td><select name="cat_id1"><option value="0">所有分类：</option></select></td>
	  </tr>
	  <tr>
		<td class="label" align="right">排序：</td>
		<td><input type="text" name="brand_sort" maxlength="60" value="" /></td>
	  </tr>
	  <tr>
		<td class="label" align="right">关键字：</td>
		<td><input type="text" name="brand_key" maxlength="60" value="" /></td>
	  </tr>
	  <tr>
		<td class="label" align="right">分类描述：</td>
		<td><textarea cols="40" rows="8"></textarea></td>
	  </tr>
	  <tr>
		<td colspan="2" align="center"><br />
		  <input type="submit" class="butt_time" value=" 确定 " />
		  <input type="reset" class="butt_time" value=" 重置 " />
		</td>
	  </tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
