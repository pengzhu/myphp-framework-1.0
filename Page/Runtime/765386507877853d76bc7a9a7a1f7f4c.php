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
function tsrc(a){ document.getElementById("thumbpic").value=a;}
function src(a){ document.getElementById("pic").value=a;}

function paper1(a){ document.getElementById("paper1").value=a;}
function paper2(a){ document.getElementById("paper2").value=a;}
function paper3(a){ document.getElementById("paper3").value=a;}
function paper4(a){ document.getElementById("paper4").value=a;}
function paper5(a){ document.getElementById("paper5").value=a;}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="join_pic_list.html?event_id=<?=$event_id?>">会员活动图片列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 发布新活动图片 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">会员活动图片信息</th>
			<!--<th class="th2">壁纸下载</th>-->
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="join_pic_add.html" method="post" name="addgoods">
				<input type="hidden" name="post" value="post" />
				<input type="hidden" name="event_id" value="<?=$event_id?>" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right" valign="top">小图显示：</td>
							<td align="left">
							<input type="text" id="thumbpic" name="thumbpic" value=""> (尺寸：254 * 130)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Event/&script=tsrc" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">大图展示：</td>
							<td align="left">
							<input type="text" id="pic" name="pic" value=""> (尺寸：664 * 376)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Event/&script=src" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">排序：</td>
							<td align="left">
							<input type="text" name="cindex" value=""><br>
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
					<table cellpadding="2" cellspacing="2" id="tab">
						<tr>
							<td align="right">壁纸一：</td>
							<td align="left"><input name="w1" style="width:50px" /> x <input name="h1" style="width:50px" /> <input type="text" name="paper1" id="paper1" value=""></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper1" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸二：</td>
							<td align="left"><input name="w2" style="width:50px" /> x <input name="h2" style="width:50px" /> <input type="text" name="paper2" id="paper2" value=""></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper2" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸三：</td>
							<td align="left"><input name="w3" style="width:50px" /> x <input name="h3" style="width:50px" /> <input type="text" name="paper3" id="paper3" value=""></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper3" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸四：</td>
							<td align="left"><input name="w4" style="width:50px" /> x <input name="h4" style="width:50px" /> <input type="text" name="paper4" id="paper4" value=""></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper4" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸五：</td>
							<td align="left"><input name="w5" style="width:50px" /> x <input name="h5" style="width:50px" /> <input type="text" name="paper5" id="paper5" value=""></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper5" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td colspan="3" align="center">
							<input type="submit" value="确定" class="butt_time"> 
							<input type="reset" value="取消" class="butt_time"> 
							</td>
						</tr>
					</table>
					</form>
				</div>
			</td>
		</tr>
	</table>
</div>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
