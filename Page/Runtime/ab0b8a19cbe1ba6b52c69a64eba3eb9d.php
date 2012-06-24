<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
function sub(){
	if($("#cat_name").val()==""){alert("填写分类名称");return;};
	document.edit_cate.submit();
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="cate_list.html">返回品牌列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加品牌 </span>
</h1>
<!-- 商品搜索 -->

<div class="addbrand-div" id="listDiv">
	<?
		if($cate=='add'){?>
			<form action="cate_edit.html?cate=add" method="post" name="edit_cate">
		<?}?>
	<?
		if($cate=='update'){?>
			<form action="cate_edit.html?cate=update" method="post" name="edit_cate">
		<?}
	?>
	
	<table cellspacing="1" cellpadding="3">
	  <tr>
		<td class="label" align="right">分类名称：</td>
		<td align="left">
		<?
			if($cate=='add'){?>
				<input type="text" name="cat_name" maxlength="60" />
			<?}?>
		<?
			if($cate=='update'){?>
				<input type="text" name="cat_name" maxlength="60" value='<?=$cate_value[0]['cat_name'] ?>' />
			<?}
		?>
		 <span>*</span></td>
	  </tr>
	  <tr>
		<td class="label" align="right">上级分类：</td>
		<td><select name="parent_id"><option value="0"> -无上级分类- </option>
		<?=$contents ?>
		</select></td>
	  </tr>
	  <tr>
		<td class="label" align="right">排序：</td>
		<td>
		<?
			if($cate=='add'){?>
				<input type="text" name="sort_order" maxlength="60" value="" />
			<?}?>
		<?
			if($cate=='update'){?>
				<input type="text" name="sort_order" maxlength="60" value='<?=$cate_value[0]['sort_order'] ?>' />
			<?}
		?>
		</td>
	  </tr>
	  <tr>
		<td class="label" align="right">是否显示：</td>
		<td>
		<?
			if($cate=='add'){?>
				<input type="radio" name="is_show" checked="checked" value="1" />是 <input type="radio" name="is_show" value="0"  />否
			<?}?>
		<?
			if($cate=='update'){
				if($cate_value[0]['is_show']==1){
			?>
				<input type="radio" name="is_show" checked="checked" value="1" />是 <input type="radio" name="is_show" value="0"  />否
				<?}
				if($cate_value[0]['is_show']==0){?>
				<input type="radio" name="is_show" value="1" />是 <input type="radio" name="is_show" value="0"  checked="checked" />否
				<?}
			}
		?>
		</td>
	  </tr>
	  <tr>
		<td class="label" align="right">是否显示在导航栏：</td>
		<td>
		<?
			if($cate=='add'){?>
				<input type="radio" name="show_in_hot" value="1" />是 <input type="radio" name="show_in_hot" value="0" checked="checked"  />否
			<?}?>
		<?
			if($cate=='update'){
				if($cate_value[0]['show_in_hot']==1){
			?>
				<input type="radio" name="show_in_hot" value="1" checked="checked" />是 <input type="radio" name="show_in_hot" value="0"  />否
				<?}
				if($cate_value[0]['show_in_hot']==0){?>
				<input type="radio" name="show_in_hot" value="1" />是 <input type="radio" name="show_in_hot" value="0" checked="checked"  />否
				<?}
			}
		?>
		
		</td>
	  </tr>
	  <tr>
		<td class="label" align="right">设置为首页推荐：</td>
		<td>
			<?
				if($cate=='add'){?>
					<input type="checkbox" name="is_rec" class="sb" value="1">推荐
					<input type="checkbox" name="is_hot" class="sb" value="1">热卖
			<?
				}
			
				if($cate=='update'){
					if($cate_value[0]['is_rec']==1){
			?>
						<input type="checkbox" name="is_rec" class="sb" value="1" checked="checked">推荐
			<?		
					}else{
			?>
						<input type="checkbox" name="is_rec" class="sb" value="1">推荐
			<?		
					}
					if($cate_value[0]['is_hot']==1){
			?>
						<input type="checkbox" name="is_hot" class="sb" value="1" checked="checked">热卖
			<?
					}else{
			?>
						<input type="checkbox" name="is_hot" class="sb" value="1">热卖
			<?
					}
				}
			?>
			
		</td>
	  </tr>
	  <tr>
		<td class="label" align="right">关键字：</td>
		<td>
		<?
			if($cate=='add'){?>
				<input type="text" name="keywords" maxlength="60" value="" />
			<?}?>
		<?
			if($cate=='update'){?>
				<input type="text" name="keywords" maxlength="60" value='<?=$cate_value[0]['keywords'] ?>' />
			<?}
		?>
		</td>
	  </tr>
	  <tr>
		<td class="label" align="right">分类描述：</td>
		<td>
		<?
			if($cate=='add'){?>
				<textarea cols="40" name="cat_desc" rows="8"></textarea>
			<?}?>
		<?
			if($cate=='update'){?>
				<textarea cols="40" name="cat_desc" rows="8"><?=$cate_value[0]['cat_desc'] ?></textarea>
			<?}
		?>
		</td>
	  </tr>
	  <tr>
		<td colspan="2" align="center"><br />
		  <input type="submit" class="butt_time" value=" 确定 " />
		  <input type="reset" class="butt_time" value=" 重置 " />
		</td>
	  </tr>
	</table>
	</form>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
