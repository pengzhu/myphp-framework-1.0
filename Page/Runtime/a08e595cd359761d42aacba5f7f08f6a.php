<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="shoe_add.html">添加球鞋</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 球鞋列表 </span>
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
			<th>相关图片</th>
			<th>鞋子名称</th>
			<th>品牌</th>
			<th>系列</th>
			<th>类别</th>
			<th>性别</th>
			<th>记录</th>
			<th>操作</th>
		</tr>
		<?foreach($list as $val){?>
		<tr>
			<td><?=$val['id']?></td><td><?=$val['shoe_pic']?></td><td><?=$val['shoe_name']?></td><td><?=$val['brand_name']?></td><td><?=$val['series_name']?></td><td><?=$val['style_name']?></td><td><?=$val['sex_name']?></td><td><?if($val['iseval']=='1'){?><a href="shoe_comment?id=<?=$val['id']?>">评论</a> <a href="shoe_score?id=<?=$val['id']?>">打分</a><?}else{echo "-----------";}?></td><td><a href="shoe_edit?id=<?=$val['id']?>">修改</a> <a href="shoe_del?id=<?=$val['id']?>"  onclick="return confirm('确定要删除该鞋子吗？')">删除</a></td>
		</tr>
		<?}?>
		<tr>
			<td colspan="9">
			<?$page->pagehtml();?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
