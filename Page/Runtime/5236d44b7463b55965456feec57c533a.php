<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="addbrand.html?brand=add">添加品牌</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 品牌列表 </span>
</h1>
<!-- 商品搜索 -->

<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>品牌名称</th>
			<th>品牌网址</th>
			<th>排序</th>
			<th>是否现实</th>
			<th>操作</th>
		</tr>
		<tr>
			<?
				foreach($value as $c_value){
					if($c_value['is_show']==1){$is_show="是";}else{$is_show="否";}
					echo "<tr><td>".$c_value['brand_name']."</td><td>".$c_value['site_url']."</td><td>".$c_value['sort_order']."</td><td>".$is_show."</td><td><a href='addbrand.html?brand=update&id=".$c_value['brand_id']."'>修改</a> / <a href='brand_edit.html?brand=del&id=".$c_value['brand_id']."'>删除</a></td></tr>";
				}
			?>
		</tr>
		<tr>
			<td colspan="5"><?$page->pagehtml();?></td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
