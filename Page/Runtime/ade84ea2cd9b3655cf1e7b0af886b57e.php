<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="admin_add.html?cate=add">添加管理员</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 管理员列表 </span>
</h1>
<!-- 商品搜索 -->


<div class="list-div" id="listDiv">
	<table cellpadding="3" cellspacing="1">
		<tr>
			<th>帐号</th>
			<th>密码</th>
			<th>权限</th>
			<th>状态</th>
			<th>添加时间</th>
			<th>最后登录时间</th>
			<th>操作</th>
		</tr>
		
			<?
				foreach($value as $c_value){
					echo "<tr><td>".$c_value['loginid']."</td><td>".$c_value['password']."</td><td>".$c_value['permissions']."</td><td>".$c_value['ban']."</td><td>".$c_value['addtimes']."</td><td>".$c_value['logintime']."</td><td><a href='admin_add.html?cate=update&cid=".$c_value['id']."'>修改</a> / <a href='admin_remove.html?cid=".$c_value['id']."'>删除</a></td></tr>";
				}
			?>
		
		<tr>
			<td colspan="11"><?$page->pagehtml();?></td>
		</tr>
	</table>
</div>
<div id="footer">版权所有 &copy; 2011-2012 上海烈风派网络科技有限公司，并保留所有权利。</div>
</body>
</html>
