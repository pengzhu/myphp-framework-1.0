<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
function sub(){
	if($("#brand_name").val()==""){alert("填写商品名称");return;};
	document.edit_brand.submit();
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="brand_list.html">返回品牌列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加品牌 </span>
</h1>
<!-- 商品搜索 -->

<div class="addbrand-div" id="listDiv">
	<?if($brand=="add"){?>
		<form action="brand_edit.html?brand=add" method="post" name="edit_brand">
	<?}
		if($brand=="update"){?>
		<form action="brand_edit.html?brand=update" method="post" name="edit_brand">
	<?}?>
	<table cellspacing="1" cellpadding="3">
	  <tr>
		<td class="label">品牌名称</td>
		<td>
		<?if($brand=="add"){?>
		<input type="text" name="brand_name" maxlength="60" value="" />
		<?}
		if($brand=="update"){?>
		<input type="text" name="brand_name" maxlength="60" value="<?=$brand_value[0]['brand_name']?>" />
		<?}?>
		 <span>*</span></td>
	  </tr>
	  <tr>
		<td class="label">品牌网址</td>
		<td>
		<?if($brand=="add"){?>
		<input type="text" name="site_url" maxlength="60" size="40" value="" />
		<?}
		if($brand=="update"){?>
		<input type="text" name="site_url" maxlength="60" size="40" value="<?=$brand_value[0]['site_url']?>" />
		<?}?>
		</td>
	  </tr>
	  <tr>
		<td class="label">品牌LOGO</td>
		<td>
		<?if($brand=="add"){?>
		<input type="text" name="brand_logo" id="txtRecpic0" size="45" style="width:150px;">
		<?}
		if($brand=="update"){?>
		<input type="text" name="brand_logo" id="txtRecpic0" size="45" style="width:150px;" value="<?=$brand_value[0]['brand_logo']?>" />
		<?}?>
		<br><script type="text/javascript">function AddText(str){document.getElementById("txtRecpic0").value=str;}</script><iframe src="/Web/Public/upload?script=AddText&&path=/Upload/Goods/" height="30" frameborder="0" scrolling="no" style="float:left;display:inline"></iframe>
		</td>
	  </tr>
	  <tr>
		<td class="label">品牌描述</td>
		<td>
		<?if($brand=="add"){?>
		<textarea  name="brand_desc" cols="60" rows="4"  ></textarea>
		<?}
		if($brand=="update"){?>
		<textarea  name="brand_desc" cols="60" rows="4"  ><?=$brand_value[0]['brand_desc']?></textarea>
		<?}?>
		</td>
	  </tr>
	  <tr>
		<td class="label">排序</td>
		<td>
		<?if($brand=="add"){?>
		<input type="text" name="sort_order" maxlength="40" size="15" value="50" />
		<?}
		if($brand=="update"){?>
		<input type="text" name="sort_order" maxlength="40" size="15" value="50"value="<?=$brand_value[0]['sort_order']?>" />
		<?}?>
		</td>
	  </tr>
	  <tr>
		<td class="label">是否显示</td>
		<td>
		<?if($brand=="add"){?>
		<input type="radio" name="is_show" value="1" checked="checked" /> 是        <input type="radio" name="is_show" value="0"  /> 否
		<?}
		if($brand=="update"){
			if($brand_value[0]['is_show']==1){?>
				<input type="radio" name="is_show" value="1" checked="checked" /> 是        <input type="radio" name="is_show" value="0"  /> 否
			<?}else{?>
				<input type="radio" name="is_show" value="1" /> 是        <input type="radio" name="is_show" value="0"  checked="checked" /> 否
		<?}}?>
		(当品牌下还没有商品的时候，首页及分类页的品牌区将不会显示该品牌。)
		</td>
	  </tr>
	  <tr>
		<td colspan="2" align="center"><br />
		  <input type="button" class="butt_time" value=" 确定 " onclick="sub()" />
		  <input type="reset" class="butt_time" value=" 重置 "/>
		</td>
	  </tr>
	</table>
	</form>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
