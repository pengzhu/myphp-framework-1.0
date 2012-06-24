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
function icon(a){$("#icon").val(a);}
function photo(a){$("#photo").val(a);}
function pic(a){$("#pic").val(a);}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="brand_list.html">品牌展区</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新品牌 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">品牌信息</th>
			<th class="th2">品牌介绍</th>
			<th class="th3">球鞋科技</th>
			
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="brand_add.html" method="post" name="addgoods">
				<input type="hidden" name="post" value="post" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">标题：</td>
							<td align="left">
							<input type="text" name="name" value="">
							</td>
						</tr>
						
						<tr>
							<td align="right" valign="top">品牌icon：</td>
							<td align="left">
							<input type="text" id="icon" name="icon" value=""> (尺寸：96 * 49)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Brand/&script=icon" width="300" height="26"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">品牌宣传图：</td>
							<td align="left">
							<input type="text" id="photo" name="photo" value=""> (尺寸：689 * 364)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Brand/&script=photo" width="300" height="26"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">品牌介绍图：</td>
							<td align="left">
							<input type="text" id="pic" name="pic" value=""> (尺寸：201 * 自定义)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Brand/&script=pic" width="300" height="26"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right">排序：</td>
							<td align="left">
							<input type="text" name="brand_index" value="">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
							<input type="submit" value="确定" class="butt_time"> 
							<input type="reset" value="取消" class="butt_time"> 
							</td>
						</tr>
					</table>
				</div>
				<div class="goods2" style="display:none;">
					<div>
						<div>
						<input type="hidden" id="FCKeditor1" name="content" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/Public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						
						</div>
						<div align="center">
							<input type="submit" value="确定" class="butt_time"> <input type="reset" value="取消" class="butt_time"> 
						</div>
					</div>
				</div>
				<div class="goods3" style="display:none;">
					<div>
						<div><a>品牌添加后才可进行此项操作</a></div>
					</div>
				</div>
				</td>
			</tr>
		</table>
	</div>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>