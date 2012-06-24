<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<style>
.a { float:left; margin:10px; width:160px; padding-bottom:10px; border:1px solid #cccccc; text-align:left; }
.a input { border:1px solid #cccccc;}
</style>
<script>
function del(id){
	if(confirm("确定要删除该video吗？")){
		location.href="del?id="+id;
	}
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="add">发布新Video</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - Video列表 </span>
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
			<th align="left"> &nbsp;&nbsp;Video展区</th>
			
		</tr>
		
		<tr>
			<td>
			<?foreach($list as $val){?>
			<div class="a">
				<img src="<?=$val['pic']?>" width="160" height="107" />
				<br><span style="font-weight:bold; color:#000">&nbsp;<?=$val['title']?></span>
				<br><span style="color:#999999;">&nbsp;发布：<?=$val['addtime']?></span>
				<br><span style="color:#999999;">&nbsp;播放：<?=$val['favorite']?></span>
				<br><div style="width:100%; text-align:center;">&nbsp;<input type="button" value="修改" onclick="location.href='edit?id=<?=$val['id']?>'" />&nbsp; <input type="button" value="删除" onclick="del(<?=$val['id']?>)"/></div>
			</div>
			<?}?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
