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
function pic(a){ document.getElementById("pic").value = a; }
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="nlist.html">Video展区</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 发布新Video </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">Video信息</th>
			
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="add_process.html" method="post" name="addgoods">
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">标题：</td>
							<td align="left">
							<input type="text" name="title" value="">
							</td>
						</tr>
						
						<tr>
							<td align="right" valign="top">视频图片：</td>
							<td align="left">
							<input type="text" id="pic" name="pic" value=""><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Video/&script=pic" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">视频来源：</td>
							<td align="left"><input type="radio" name="source" value="1" checked style="width:20px"> FTP上传
							<input type="radio" name="source" value="2" style="width:20px"> 优酷网
							<input type="radio" name="source" value="3" style="width:20px"> 土豆网</td>
						</tr>
						<tr>
							<td align="right">视频路径：</td>
							<td align="left">
							<input type="text" name="url" value="" />
							</td>
						</tr>
						<tr>
							<td align="right">Tags标签：</td>
							<td align="left">
							<input type="text" name="tags" value=""></td>
						</tr>
						<tr>
							<td align="right">播放次数：</td>
							<td align="left">
							<input type="text" name="favorite" value=""></td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否显示：</td>
							<td align="left">
							<input type="radio" name="statu" value="1" class="sb" checked="checked">是 
							<input type="radio" name="statu" value="0" class="sb">否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否推荐：</td>
							<td align="left">
							<input type="radio" name="isrec" value="1" class="sb" checked="checked">是 
							<input type="radio" name="isrec" value="0" class="sb">否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否热点：</td>
							<td align="left">
							<input type="radio" name="ishot" value="1" class="sb" checked="checked">是 
							<input type="radio" name="ishot" value="0" class="sb">否
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

				
			</td>
		</tr>
	</table>
</div>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
