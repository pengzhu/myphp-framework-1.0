<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<style>
.a { float:left; margin:10px; width:160px; height:150px; border:1px solid #cccccc; text-align:left; }
.a input { border:1px solid #cccccc;}
</style>
<script>
function del(id,event_id){
	if(confirm("确定要删除该活动图片吗？")){
		location.href="join_pic_del?id="+id+"&event_id="+event_id;
	}
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="vote_option_add?event_id=<?=$event_id?>">新增投票选项</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 选项列表 </span>
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
			<th>选项图片</th>
			<th>选项名称</th>
			<th>选项票数</th>
			<th>选项排序</th>
			<th>操作</th>
		</tr>
		<?
			foreach($list as $val)
			{
				echo "<tr><td>".$val['pic']."</td><td>".$val['name']."</td><td>".$val['num']."</td><td>".$val['cindex']."</td><td><a href='vote_log?option_id=".$val['id']."'>投票记录</a> / <a href='vote_option_edit.html?id=".$val['id']."'>修改</a> / <a href='vote_option_del.html?event_id=".$val['event_id']."&id=".$val['id']."'>删除</a></td></tr>";
			}
		?>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
