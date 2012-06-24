<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<style>
.a { float:left; margin:10px; width:160px; height:170px; border:1px solid #cccccc; text-align:left; }
.a input { border:1px solid #cccccc;}
</style>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="brand_add">添加新品牌</a></span>
	<span class="action-span1"><a href="">管理中心</a></span><span id="search_id" class="action-span1"> - 品牌列表 </span>
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
			<th align="left"> &nbsp;&nbsp;品牌展区</th>
			
		</tr>
		
		<tr><td>
		<?foreach($list as $val){?>
		<div class="a">
			<img src="<?=$val['brand_icon']?>" width="160"  />
			<br><span style="font-size:12px; font-weight:bold; color:#000">&nbsp;<?=$val['brand_name']?></span>
			<br><div style="width:100%; text-align:center;">&nbsp;<input type="button" value="修改" onclick="location.href='brand_edit?id=<?=$val['id']?>'" />&nbsp; <input type="button" value="删除" onclick="location.href='brand_del?id=<?=$val['id']?>'" /></div>
		</div>
		<?}?>
		</td>
		</tr>
	</table><br>
	<table cellpadding="3" cellspacing="1"><tr><td>
		<?$page->pagehtml();?>
	</td></tr></table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
