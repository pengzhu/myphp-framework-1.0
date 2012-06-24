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
function shoe_pic(a){ $("#shoe_pic").val(a); }
function pic1(a){ $("#pic1").val(a); }
function pic2(a){ $("#pic2").val(a); }
function pic3(a){ $("#pic3").val(a); }
function pic4(a){ $("#pic4").val(a); }
function pic5(a){ $("#pic5").val(a); }
function pic6(a){ $("#pic6").val(a); }

function chk_series(){

	var brand_id = $("#brand_id").val();

	if(brand_id!=""){

		//alert(brand_id);
	
		$.get("/Root/Shoe/getSeries.html?id="+brand_id,function(data){ $("#series_div").html(data); });

	}

}

function showoption(i){
	if(i==1){$("#shoeoption").show();}
	if(i==2){$("#shoeoption").hide();}
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="shoe_list.html">球鞋列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加球鞋 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">基本信息</th>
			<th class="th2">球鞋简介</th>
			<th class="th3">相关图片</th>

		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="shoe_edit.html" method="post" name="addgoods">
				<input type="hidden" name="post" value="post" />
				<input type="hidden" name="id" value="<?=$model['id']?>" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">球鞋名称：</td>
							<td align="left">
							<input type="text" name="shoe_name" value="<?=$model['shoe_name']?>">
							</td>
						</tr>
						<tr>
							<td align="right">Tags：</td>
							<td align="left">
							<input type="text" name="tag" value="<?=$model['tag']?>"></td>
						</tr>
						<tr>
							<td align="right" valign="top">鞋子图标：</td>
							<td align="left">
							<input type="text" id="shoe_pic" name="shoe_pic" value="<?=$model['shoe_pic']?>"> (尺寸：107 * 95)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=shoe_pic" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right">品牌：</td>
							<td align="left">
							<select id="brand_id" name="brand_id" onchange="chk_series()"><option value="">请选择品牌</option>
							<?foreach($brandlist as $val){?>
							<option value="<?=$val['id']?>" <?if($val['id']==$model['brand_id']){echo "selected";}?>><?=$val['brand_name']?></option>
							<?}?>
							</select>
							</td>
						</tr>
						<tr>
							<td align="right">系列：</td>
							<td align="left">
							<div id="series_div">
							<select name="series_id"><option>请选择系列</option>
							<?foreach($serieslist as $val){?>
							<option value="<?=$val['id']?>" <?if($val['id']==$model['series_id']){echo "selected";}?>><?=$val['series_name']?></option>
							<?}?>
							</select>
							</div>
							</td>
						</tr>
						<tr>
							<td align="right">分类：</td>
							<td align="left">
							<select name="style_id"><option value="">请选择分类</option>
							<?foreach($stylelist as $val){?>
							<option value="<?=$val['id']?>" <?if($val['id']==$model['style_id']){echo "selected";}?>><?=$val['style_name']?></option>
							<?}?>
							</select>
							</td>
						</tr>
						<tr>
							<td align="right">性别：</td>
							<td align="left">
							<select name="sex_id"><option value="">请选择分类</option>
							<?foreach($sexlist as $val){?>
							<option value="<?=$val['id']?>" <?if($val['id']==$model['sex_id']){echo "selected";}?>><?=$val['sex_name']?></option>
							<?}?>
							</select>
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否推荐：</td>
							<td align="left">
							<input type="radio" name="isrec" value="1" class="sb" <?if($model['isrec']=='1'){echo "checked";}?>>是 
							<input type="radio" name="isrec" value="0" class="sb" <?if($model['isrec']=='0'){echo "checked";}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否热点：</td>
							<td align="left">
							<input type="radio" name="ishot" value="1" class="sb" <?if($model['ishot']=='1'){echo "checked";}?>>是 
							<input type="radio" name="ishot" value="0" class="sb" <?if($model['ishot']=='0'){echo "checked";}?>>否
							</td>
						</tr>
						<tr>
							<td align="right"><span>*</span> 是否评测：</td>
							<td align="left">
							<input type="radio" name="iseval" value="1" class="sb" onclick="showoption(1)" <?if($model['iseval']=='1'){echo "checked";}?>>是 
							<input type="radio" name="iseval" value="0" class="sb" onclick="showoption(2)" <?if($model['iseval']=='0'){echo "checked";}?>>否
							<table id="shoeoption" style="display:<?if($model['iseval']=='0'){echo "none";}?>;">
							<tr><td>舒适度<input name="option1" class="da" style="width:20px" value="<?=$model['option1']?>">
							缓震性<input name="option2" class="da" style="width:20px" value="<?=$model['option2']?>">
							裸保护<input name="option3" class="da" style="width:20px" value="<?=$model['option3']?>">
							抓地力<input name="option4" class="da" style="width:20px" value="<?=$model['option4']?>"></td></tr>
							</table>
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
						<input type="hidden" id="FCKeditor1" name="content" value="<?=contentEncode($model['shoe_info'])?>" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/Public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
						
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
							<td align="left"><input type="text" id="pic1" name="pic1" value="<?=$imglist[0]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic1" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片二：</td>
							<td align="left"><input type="text" id="pic2" name="pic2" value="<?=$imglist[1]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic2" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片三：</td>
							<td align="left"><input type="text" id="pic3" name="pic3" value="<?=$imglist[2]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic3" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片四：</td>
							<td align="left"><input type="text" id="pic4" name="pic4" value="<?=$imglist[3]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic4" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片五：</td>
							<td align="left"><input type="text" id="pic5" name="pic5" value="<?=$imglist[4]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic5" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片六：</td>
							<td align="left"><input type="text" id="pic6" name="pic6" value="<?=$imglist[5]['shoe_pic_url']?>"> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic6" width="300" height="30"></iframe></td>
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
</div>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
