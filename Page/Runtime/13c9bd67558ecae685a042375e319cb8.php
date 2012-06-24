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
function tsrc(a){ document.getElementById("tsrc").value=a;}
function src(a){ document.getElementById("src").value=a;}

function paper1(a){ document.getElementById("paper1").value=a;}
function paper2(a){ document.getElementById("paper2").value=a;}
function paper3(a){ document.getElementById("paper3").value=a;}
function paper4(a){ document.getElementById("paper4").value=a;}
function paper5(a){ document.getElementById("paper5").value=a;}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="nlist.html">Photo集锦</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - Photo编辑 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">Photo信息</th>
			<th class="th2">壁纸下载</th>
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="edit_process.html" method="post" name="addgoods">
				<input type="hidden" name="id" value="<?=$model['id']?>" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">标题：</td>
							<td align="left">
							<input type="text" name="title" value="<?=$model['title']?>">
							</td>
						</tr>
						
						<tr>
							<td align="right" valign="top">小图显示：</td>
							<td align="left">
							<input type="text" id="thumb_src" name="thumb_src" value="<?=$model['thumb_src']?>"><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Photo/&script=tsrc" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">大图展示：</td>
							<td align="left">
							<input type="text" id="src" name="src" value="<?=$model['src']?>"><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Photo/&script=src" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right">Tags标签：</td>
							<td align="left">
							<input type="text" name="tags" value="<?=$model['tags']?>"></td>
						</tr>
						<tr>
							<td align="right">播放次数：</td>
							<td align="left">
							<input type="text" name="favorite" value="<?=$model['favorite']?>"></td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否显示：</td>
							<td align="left">
							<input type="radio" name="statu" value="1" class="sb" <?if($model['statu']=='1'){echo 'checked="checked"';}?>>是 
							<input type="radio" name="statu" value="0" class="sb" <?if($model['statu']=='0'){echo 'checked="checked"';}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否推荐：</td>
							<td align="left">
							<input type="radio" name="isrec" value="1" class="sb" <?if($model['isrec']=='1'){echo 'checked="checked"';}?>>是 
							<input type="radio" name="isrec" value="0" class="sb" <?if($model['isrec']=='0'){echo 'checked="checked"';}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否热点：</td>
							<td align="left">
							<input type="radio" name="ishot" value="1" class="sb" <?if($model['ishot']=='1'){echo 'checked="checked"';}?>>是 
							<input type="radio" name="ishot" value="0" class="sb" <?if($model['ishot']=='0'){echo 'checked="checked"';}?>>否
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
							<td align="left"><input name="w1" style="width:50px" value="<?=$imglist[0]['paper_width']?>" /> x <input name="h1" style="width:50px" value="<?=$imglist[0]['paper_height']?>" /> <input type="text" name="paper1" id="paper1" value="<?=$imglist[0]['paper_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper1" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸二：</td>
							<td align="left"><input name="w2" style="width:50px" value="<?=$imglist[1]['paper_width']?>" /> x <input name="h2" style="width:50px" value="<?=$imglist[1]['paper_height']?>" /> <input type="text" name="paper2" id="paper2" value="<?=$imglist[1]['paper_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper2" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸三：</td>
							<td align="left"><input name="w3" style="width:50px" value="<?=$imglist[2]['paper_width']?>" /> x <input name="h3" style="width:50px" value="<?=$imglist[2]['paper_height']?>" /> <input type="text" name="paper3" id="paper3" value="<?=$imglist[2]['paper_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper3" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸四：</td>
							<td align="left"><input name="w4" style="width:50px" value="<?=$imglist[3]['paper_width']?>" /> x <input name="h4" style="width:50px" value="<?=$imglist[3]['paper_height']?>" /> <input type="text" name="paper4" id="paper4" value="<?=$imglist[3]['paper_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Wallpaper/&script=paper4" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">壁纸五：</td>
							<td align="left"><input name="w5" style="width:50px" value="<?=$imglist[4]['paper_width']?>" /> x <input name="h5" style="width:50px" value="<?=$imglist[4]['paper_height']?>" /> <input type="text" name="paper5" id="paper5" value="<?=$imglist[4]['paper_url']?>"></td>
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
