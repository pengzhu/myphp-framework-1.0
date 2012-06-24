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

function recpic(a){ document.getElementById("recpic").value=a; }
function focuspic(a){ document.getElementById("focuspic").value=a; }

function pic1(a){ document.getElementById("pic1").value=a; }
function pic2(a){ document.getElementById("pic2").value=a; }
function pic3(a){ document.getElementById("pic3").value=a; }
function pic4(a){ document.getElementById("pic4").value=a; }
function pic5(a){ document.getElementById("pic5").value=a; }
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="nlist.html">文章列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 文章编辑 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">基本信息</th>
			<th class="th2">文章内容</th>
			<th class="th3">相关图片</th>

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
							<input type="text" name="title" value="<?=contentEncode($model['title'])?>">
							</td>
						</tr>
						<tr>
							<td align="right">tags：</td>
							<td align="left">
							<input type="text" name="keyword" value="<?=$model['keyword']?>"></td>
						</tr>
						<tr>
							<td align="right" valign="top">鞋子ICON：</td>
							<td align="left">
							<input type="text" id="recpic" name="recpic" value="<?=$model['recpic']?>"><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rec/&script=recpic" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right" valign="top">焦点图：</td>
							<td align="left">
							<input type="text" id="focuspic" name="focuspic" value="<?=$model['focuspic']?>"><br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Focus/&script=focuspic" width="300" height="30"></iframe>
							</td>
						</tr>


						<tr>
							<td align="right" valign="top">简介：</td>
							<td align="left">
							<textarea name="brief" id="brief" cols="40" rows="5"><?=$model['brief']?></textarea></td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否显示：</td>
							<td align="left">
							<input type="radio" name="statu" value="1" class="sb" <?if($model['statu']=='1'){ echo "checked='checked'";}?>>是 
							<input type="radio" name="statu" value="0" class="sb" <?if($model['statu']=='0'){ echo "checked='checked'";}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否推荐：</td>
							<td align="left">
							<input type="radio" name="isrec" value="1" class="sb" <?if($model['isrec']=='1'){ echo "checked='checked'";}?>>是 
							<input type="radio" name="isrec" value="0" class="sb" <?if($model['isrec']=='0'){ echo "checked='checked'";}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否热点：</td>
							<td align="left">
							<input type="radio" name="ishot" value="1" class="sb" <?if($model['ishot']=='1'){ echo "checked='checked'";}?>>是 
							<input type="radio" name="ishot" value="0" class="sb" <?if($model['ishot']=='0'){ echo "checked='checked'";}?>>否
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
						<input type="hidden" id="FCKeditor1" name="content" value="<?=contentEncode($model['content'])?>" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/Public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						</div>
						<div align="center">
						<input type="submit" value="确定" class="butt_time"> <input type="reset" value="取消" class="butt_time"> 
						</div>
					</div>
				</div>

				<div class="goods3" style="display:none;">
					<table cellpadding="2" cellspacing="2" id="tab">
						<tr>
							<td align="right">图片一：</td>
							<td align="left"><input type="text" id="pic1" name="pic1" value="<?=$imglist[0]['img_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rel/&script=pic1" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片二：</td>
							<td align="left"><input type="text" id="pic2" name="pic2" value="<?=$imglist[1]['img_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rel/&script=pic2" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片三：</td>
							<td align="left"><input type="text" id="pic3" name="pic3" value="<?=$imglist[2]['img_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rel/&script=pic3" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片四：</td>
							<td align="left"><input type="text" id="pic4" name="pic4" value="<?=$imglist[3]['img_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rel/&script=pic4" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片五：</td>
							<td align="left"><input type="text" id="pic5" name="pic5" value="<?=$imglist[4]['img_url']?>"></td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/News/Rel/&script=pic5" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td colspan="3" align="center">
							<input type="submit" value="确定" class="butt_time"> 
							<input type="reset" value="取消" class="butt_time"> 
							</td>
						</tr>
					</table>
				</div>

			</td>
		</tr>
	</table>
	</form>
</div>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
