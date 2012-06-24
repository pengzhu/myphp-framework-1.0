<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="add.html">添加厂商活动</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 厂商活动列表 </span>
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
			<th>活动名称</th>
			<th>开始时间</th>
			<th>结束时间</th>
			<th>感兴趣</th>
			<th>加入人数</th>
			<th>状态</th>
			<th>推荐</th>
			<th>活动图片</th>
			<th>操作</th>
		</tr>
		<?
			foreach($list as $val)
			{
				if($val['statu']==1){$statu="是";}else{$statu="否";}
				if($val['isrec']==1){$isrec="是";}else{$isrec="否";}
				echo "<tr><td>".$val['title']."</td><td>".$val['st']."</td><td>".$val['et']."</td><td>".$val['interestnum']."</td><td>".$val['joinnum']."</td><td>".$statu."</td><td>".$isrec."</td><td><a href='join_pic_add.html?event_id=".$val['id']."'>添加</a> <a href='join_pic_list.html?event_id=".$val['id']."'>列表</a></td><td><a href='edit.html?id=".$val['id']."'>修改</a> / <a href='del.html?id=".$val['id']."'>删除</a></td></tr>";
			}
		?>
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
