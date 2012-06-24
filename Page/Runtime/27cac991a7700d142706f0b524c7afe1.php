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
function logo(a){$("#logo").val(a);}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="cate_list.html">球鞋分类展区</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加新类别 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">基本信息</th>
			<th class="th2">详细介绍</th>
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="tec_edit.html" method="post" name="addgoods">
				<input type="hidden" name="id" value="<?=$model['id']?>" />
				<input type="hidden" name="post" value="post" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">球鞋科技名称：</td>
							<td align="left">
							<input type="text" name="tec_title" value="<?=$model['tec_title']?>">
							</td>
						</tr>
						<tr>
							<td align="right">所属品牌：</td>
							<td align="left">
							<select name="brand_id"><option value="">请选择品牌</option>
							<?foreach($brandlist as $val){?>
							<option value="<?=$val['id']?>" <?if($model['brand_id']==$val['id']){echo "selected";}?>><?=$val['brand_name']?></option>
							<?}?>
							</select>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">球鞋科技icon：</td>
							<td align="left">
							<input type="text" id="logo" name="tec_logo" value="<?=$model['tec_logo']?>"><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Tec/&script=logo" width="300" height="26"></iframe>
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
						<input type="hidden" id="FCKeditor1" name="content" value="<?=$model['tec_intro']?>" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/Public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						
						</div>
						<div align="center">
							<input type="submit" value="确定" class="butt_time"> <input type="reset" value="取消" class="butt_time"> 
						</div>
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
