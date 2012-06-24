<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="shoe_add.html">添加商品</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - <?if($cate=='1'){echo "<span style='color:yellow'>等待上架</span>的";}?><?if($cate=='2'){echo "<span style='color:green'>出售中</span>的";}?><?if($cate=='3'){echo "<span style='color:red'>已过期</span>的";}?>商品列表 </span>
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
			<th>商品名称</th>
			<th>原价</th>
			<th>现价</th>
			<th>折扣</th>
			<th>售出</th>
			<th>热点</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
		<?foreach($list as $val){?>
		<tr>
			<td><?=$val['id']?></td><td><?=$val['recpic']?></td><td><?=$val['name']?></td><td>￥<?=$val['oldprice']?></td><td>￥<?=$val['nowprice']?></td><td><?=$val['discount']?></td><td><?=$val['sold']?></td><td><?if($val['ishot']==1){echo "<span style='color:green'>是</span>";}else{echo "<span style='color:red'>否</span>";}?></td><td><?if($val['statu']==1){echo "<span style='color:green'>开启</span>";}else{echo "<span style='color:red'>关闭</span>";}?></td><td><a href="shoe_edit?id=<?=$val['id']?>">修改</a> <a href="shoe_del?id=<?=$val['id']?>"  onclick="return confirm('确定要删除该商品吗？')">删除</a></td>
		</tr>
		<?}?>
		
		<tr>
			<td colspan="10">
			<?$page->pagehtml("cate=$cate");?>
			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
