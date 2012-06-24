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
	<span class="action-span"><a href="add.html">添加文章</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 文章列表 </span>
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
			<th>文章标题</th>
			<th>是否推荐</th>
			<th>是否热点</th>
			<th>是否显示</th>
			<th>操作</th>
		</tr>
		<?
			foreach($list as $val)
			{
				if($val['statu']==1){$statu="是";}else{$statu="否";}
				if($val['isrec']==1){$isrec="是";}else{$isrec="否";}
				if($val['ishot']==1){$ishot="是";}else{$ishot="否";}
				echo "<tr><td>".$val['id']."</td><td>".$val['recpic']."</td><td>".$val['title']."</td><td>".$isrec."</td><td>".$ishot."</td><td>".$statu."</td><td><a href='edit.html?id=".$val['id']."'>修改</a> / <a href='del.html?id=".$val['id']."' onclick='return onconfirm()'>删除</a></td></tr>";
			}
		?>
		<tr>
			<td colspan="7">
			<?$page->pagehtml();?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
