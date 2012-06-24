<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	var count_th=document.getElementById('addgoods').getElementsByTagName('th').length;
	for(var i=1;i<=count_th;i++){
		$(".th"+i).click(function(){
			play($(this).attr("class"));
		});
	}
	$(".th1").css("background","#EEF8F9");
});
function play(k){
	var j=k.replace("th","");
	var count_th=document.getElementById('addgoods').getElementsByTagName('th').length;
	for(var i=1;i<=count_th;i++){
		$(".goods"+i).css("display","none");
		$(".th"+i).css("background","#BBDDE5");
	}
	$(".goods"+j).css("display","");
	$("."+k).css("background","#EEF8F9");
}

function sub(){
	$("#target_select").val($("#source_select2").html());
	if($("#cate").val()==""){alert("选择类别");return;}
	document.addgoods.submit();
}
function cle(){
	document.addgoods.reset();
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="news_list.html">文章列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加文章 </span>
</h1>
<!-- 商品搜索 -->

<div class="addimg-div" id="listDiv">
	<table cellpadding="3" cellspacing="1" id="addgoods">
		<tr>
			<th class="th1">通用信息</th>
			<th class="th2">文章内容</th>
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
					<?
						if($cate=='update'){?>
							<form action="edit.html?edit=update&cid=<?=$value[0]['id']?>" method="post" name="addgoods">
						<?}else{?>
							<form action="edit.html?edit=add" method="post" name="addgoods">
						<?}
					?>
					<table>
						<tr>
							<td align="right">文章标题：</td>
							<td align="left">
							<?if($cate=='update'){?><input type="text" name="title" value="<?=$value[0]['title']?>"><?}else{?><input type="text" name="title" value=""><?}?>
							</td>
						</tr>
						<tr>
							<td align="right">商品类别：</td>
							<td align="left">
								<select name="newcate" id="cate">
								<option value="">..</option>
								<option value="衣服" selected="selected">衣服</option>
								<option value="裤子">裤子</option>
								</select>
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否显示：</td>
							<td align="left">
								<?if($cate=='update'){
									if($value[0]['statu']==0){?>
									<input type="radio" checked="checked" name="statu" value="0" class="sb">是 <input type="radio" name="statu" value="1" class="sb">否
									<?}else{?>
									<input type="radio" name="statu" value="0" class="sb">是 <input type="radio" checked="checked" name="statu" value="1" class="sb">否
								<?}}?>
								
							</td>
						</tr>
						<tr>
							<td align="right">文章作者：</td>
							<td align="left">
							<?if($cate=='update'){?><input type="text" name="author" value="<?=$value[0]['author']?>"><?}else{?><input type="text" name="author" value=""><?}?>
							</td>
						</tr>
						<tr>
							<td align="right">关键字：</td>
							<td align="left">
							<?if($cate=='update'){?><input type="text" name="keyword" value="<?=$value[0]['keyword']?>"><?}else{?><input type="text" name="keyword" value=""><?}?></td>
						</tr>
						<tr>
							<td align="right">外部链接：</td>
							<td align="left">
							<?if($cate=='update'){?><input type="text" name="link" value="<?=$value[0]['link']?>"><?}else{?><input type="text" name="link" value=""><?}?>
							</td>
						</tr>
						<tr>
							<td align="right">网页表述</td>
							<td align="left">
							<?if($cate=='update'){?><textarea name="brief" id="description" cols="40" rows="5"><?=$value[0]['brief']?></textarea><?}else{?><textarea name="brief" id="description" cols="40" rows="5"></textarea><?}?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
							<input type="button" value="确定" onclick="sub()"  class="butt_time"> 
							<input type="button" value="取消" onclick="cle()"  class="butt_time"> 
							</td>
						</tr>
					</table>
				</div>

				<div class="goods2" style="display:none;">
					<div>
						<div class="edit">
						<?if($cate=='update'){?>
						<input type="hidden" id="FCKeditor1" name="content" value="<?=$value[0]['content']?>" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						<?}else{?>
						<input type="hidden" id="FCKeditor1" name="content" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						<?}?>
						</div>
						<div align="center">
							<input type="button" value="确定" onclick="sub()"  class="butt_time"> <input type="button" value="取消"  onclick="cle()"  class="butt_time"> 
						</div>
					</div>
				</div>



			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
