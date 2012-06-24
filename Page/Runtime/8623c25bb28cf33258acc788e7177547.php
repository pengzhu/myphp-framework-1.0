<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<style>
.da{ border:0px; border_bottom:1px solid; width:50px; background:transparent;}
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
function recpic(a){ $("#recpic").val(a); }
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
	<span class="action-span"><a href="shoe_list.html">商品列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加商品 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">基本信息</th>
			<th class="th2">商品简介</th>
			<!--<th class="th3">相关图片</th>-->

		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
				<form action="shoe_add.html" method="post" name="addgoods">
				<input type="hidden" name="post" value="post" />
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">商品名称：</td>
							<td align="left">
							<input type="text" name="name" value="">
							</td>
						</tr>
						<tr>
							<td align="right">商品宣传词：</td>
							<td align="left">
							<input type="text" name="smallname" value="">
							</td>
						</tr>
						<tr>
							<td align="right">Tags：</td>
							<td align="left">
							<input type="text" name="tags" value=""></td>
						</tr>
						<tr>
							<td align="right" valign="top">商品图：</td>
							<td align="left">
							<input type="text" id="recpic" name="recpic" value=""> (尺寸：107 * 95)<br>
							<iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shopping/&script=recpic" width="300" height="30"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right">原价：</td>
							<td align="left">
							<input type="text" name="oldprice" value="0">
							</td>
						</tr>
						<tr>
							<td align="right">现价：</td>
							<td align="left">
							<input type="text" name="nowprice" value="0">
							</td>
						</tr>
						<tr>
							<td align="right">折扣：</td>
							<td align="left">
							<input type="text" name="discount" value="0">
							</td>
						</tr>
						<tr>
							<td align="right">团购时间：</td>
							<td align="left">
							<input type="text" name="st" value="<?=NOW?>"> - <input type="text" name="et" value="<?=NOW?>">
							</td>
						</tr>
						<tr>
							<td align="right">开团购买底限：</td>
							<td align="left">
							<input type="text" name="least" value="10">
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
							<td align="right"><span>*</span> 状态：</td>
							<td align="left">
							<input type="radio" name="statu" value="1" class="sb" checked="checked">开启
							<input type="radio" name="statu" value="0" class="sb">关闭
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
							<input type="button" value="确定" class="butt_time"> <input type="reset" value="取消" class="butt_time"> 
						</div>
					</div>
				</div>

				<div class="goods3" style="display:none;">
					<table cellpadding="2" cellspacing="2" id="tab">
						<tr>
							<td align="right">图片一：</td>
							<td align="left"><input type="text" id="pic1" name="pic1" value=""> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic1" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片二：</td>
							<td align="left"><input type="text" id="pic2" name="pic2" value=""> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic2" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片三：</td>
							<td align="left"><input type="text" id="pic3" name="pic3" value=""> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic3" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片四：</td>
							<td align="left"><input type="text" id="pic4" name="pic4" value=""> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic4" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片五：</td>
							<td align="left"><input type="text" id="pic5" name="pic5" value=""> (尺寸：449 * 328)</td>
							<td align="left"><iframe frameborder="0" scrolling="no" src="/Web/Public/upload?path=/Upload/Shoe/&script=pic5" width="300" height="30"></iframe></td>
						</tr>
						<tr>
							<td align="right">图片六：</td>
							<td align="left"><input type="text" id="pic6" name="pic6" value=""> (尺寸：449 * 328)</td>
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
