<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="/Public/style/newslist.css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/js/calendar.php?lang="></script>
<link href="/Public/js/calendar/calendar.css" rel="stylesheet" type="text/css" />
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
	if($("#goods_name").val()==""){alert("填写商品名称");return;};
	if($("#cat_id").val()==""){alert("选择商品类别");return;};
	if($("#brand_id").val()==""){alert("选择商品品牌");return;};
	if($("#shop_price").val()==""){alert("填写商品售价");return;};
	$("#source_select2").children().each(function(){$(this).attr("selected","selected")});
	$("#target_select2_").val($("#source_select2").val());
	$("#goods_sn").val($("#goods_sn_id").html());
	document.addgoods.submit();
}
function cle(){
	document.addgoods.reset();
}
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="goods_list.html">商品列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 添加商品 </span>
</h1>
<!-- 商品搜索 -->

<div class="addimg-div" id="listDiv">
	<table cellpadding="3" cellspacing="1" id="addgoods">
		<tr>
			<th class="th1">通用信息</th>
			<th class="th2">信息描述</a></th>
			<th class="th3">商品相册</a></th>
			<th class="th4">关联信息</a></th>
			<th class="th5">其他信息</th>
		</tr>
		<tr>
			<td colspan="5">
				<div class="goods1" style="display:;">
					<?if($goods=="add"){?>
						<form action="edit.html?goods=add" method="post" name="addgoods">
					<?}
					if($goods=="update"){?>
						<form action="edit.html?goods=update&id=<?=$cid ?>" method="post" name="addgoods">
					<?}?>
					<table>
						<tr>
							<td align="right">商品名称：</td>
							<td align="left">
								<?if($goods=="add"){?>
									<input type="text" size="25" name="goods_name" id="goods_name">
								<?}
								if($goods=="update"){?>
									<input type="text" size="25" name="goods_name" value="<?=$goods_value[0]['goods_name'] ?>" id="goods_name">
								<?}?>
								 <span>*</span>
							</td>
						</tr>
						<tr>
							<td align="right">商品编码：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<div id="goods_sn_id"><?=date("YmdHis").rand(100,199)?></div><input type="hidden" id="goods_sn" name="goods_sn">
							<?}
							if($goods=="update"){?>
								<div id="goods_sn_id"><?=$goods_value[0]['goods_sn']?></div><input type="hidden" id="goods_sn" name="goods_sn">
							<?}?>
							</td>
						</tr>
						<tr>
							<td align="right">商品类别：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<select name="cat_id" id="cat_id">
								<option value="">--</option>
								<option value="0">手电筒</option>
								</select>
							<?}
							if($goods=="update"){?>
								<select name="cat_id" id="cat_id">
								<option value="">--</option>
								<option value="0" selected=selected>手电筒</option>
								</select>
							<?}?>
								  <span>*</span>
							</td>
						</tr>
						<tr>
							<td align="right">商品品牌：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<select name="brand_id" id="brand_id">
								<option value="">--</option>
								<option value="0">艾玛</option>
								</select>
							<?}
							if($goods=="update"){?>
								<select name="brand_id" id="brand_id">
								<option value="">--</option>
								<option value="0">艾玛</option>
								</select>
							<?}?>
								 <span>*</span>
							</td>
						</tr>
						<tr>
							<td align="right">本店售价：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="shop_price" id="shop_price">
							<?}
							if($goods=="update"){?>
								<input type="text" name="shop_price" id="shop_price" value="<?=$goods_value[0]['shop_price']?>">
							<?}?>
								 <span>*</span>
							</td>
						</tr>
						<tr>
							<td align="right">市场价：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="market_price"> 
							<?}
							if($goods=="update"){?>
								<input type="text" name="market_price" value="<?=$goods_value[0]['market_price']?>"> 
							<?}?>
								
							</td>
						</tr>
						<tr>
							<td align="right">商品货源地：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="provider_name">
							<?}
							if($goods=="update"){?>
								<input type="text" name="provider_name" value="<?=$goods_value[0]['provider_name']?>">
							<?}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">商品数量：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="goods_number">
							<?}
							if($goods=="update"){?>
								<input type="text" name="goods_number" value="<?=$goods_value[0]['goods_number']?>">
							<?}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">商品重量：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="goods_weight">
							<?}
							if($goods=="update"){?>
								<input type="text" name="goods_weight" value="<?=$goods_value[0]['goods_weight']?>">
							<?}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">
							<?if($goods=="add"){?>
								<input type="checkbox" class="sb" id="checkbox_pro" name="is_promote" value="1" onclick="checkbox_pr()">
							<?}
							if($goods=="update"){
								if($goods_value[0]['is_promote']==1){?>
								<input type="checkbox" class="sb" checked="checked" id="checkbox_pro" name="is_promote" value="1" onclick="checkbox_pr()">
								<?}else{?>
								<input type="checkbox" class="sb" id="checkbox_pro" name="is_promote" value="1" onclick="checkbox_pr()">
								<?}?>
							<?}?>
							 商品促销价：
							</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" class="ipt_time" id="input-pro" style="display:none;" name="promote_price">
							<?}
							if($goods=="update"){
								if($goods_value[0]['is_promote']==1){?>
								<input type="text" class="ipt_time" id="input-pro" name="promote_price" value="<?=$goods_value[0]['promote_price']?>">
								<?}else{?>
								<input type="text" class="ipt_time" id="input-pro" style="display:none;" name="promote_price" value="<?=$goods_value[0]['promote_price']?>">
								<?}
							}?>
							</td>
						</tr>
						<?if($goods=="add"){?>
							<tr id="tr-pro" style="display:none;">
								<td align="right">促销日期：</td>
								<td align="left">
									<input name="promote_start_date" type="text" id="promote_start_date" size="12" value='' readonly="readonly" class="ipt_time"/>
									<input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');" value="选择" class="butt_time"/> - 
									<input name="promote_end_date" type="text" id="promote_end_date" size="12" value='' readonly="readonly" class="ipt_time"/>
									<input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');" value="选择" class="butt_time"/>
								</td>
							</tr>
						<?}
						if($goods=="update"){
							if($goods_value[0]['is_promote']==1){?>
							<tr id="tr-pro">
								<td align="right">促销日期：</td>
								<td align="left">
									<input name="promote_start_date" type="text" id="promote_start_date" size="12" readonly="readonly" class="ipt_time" value="<?=$goods_value[0]['promote_start_date']?>">
									<input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');" value="选择" class="butt_time"/> - 
									<input name="promote_end_date" type="text" id="promote_end_date" size="12" readonly="readonly" class="ipt_time" value="<?=$goods_value[0]['promote_end_date']?>">
									<input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');" value="选择" class="butt_time"/>
								</td>
							</tr>
							<?}else{?>
							<tr id="tr-pro" style="display:none;">
								<td align="right">促销日期：</td>
								<td align="left">
									<input name="promote_start_date" type="text" id="promote_start_date" size="12" readonly="readonly" class="ipt_time" value="<?=$goods_value[0]['promote_start_date']?>">
									<input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('promote_start_date', '%Y-%m-%d', false, false, 'selbtn1');" value="选择" class="butt_time"/> - 
									<input name="promote_end_date" type="text" id="promote_end_date" size="12" readonly="readonly" class="ipt_time" value="<?=$goods_value[0]['promote_end_date']?>">
									<input name="selbtn2" type="button" id="selbtn2" onclick="return showCalendar('promote_end_date', '%Y-%m-%d', false, false, 'selbtn2');" value="选择" class="butt_time"/>
								</td>
							</tr>
							<?}
						}?>
							<script>function checkbox_pr(){$("#input-pro").slideToggle();$("#tr-pro").slideToggle();}</script>


						<tr>
							<td align="right">商品关键字：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" name="keywords">
							<?}
							if($goods=="update"){?>
								<input type="text" name="keywords" value="<?=$goods_value[0]['keywords']?>">
							<?}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">商品排序：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="text" class="ipt_time" name="goods_sort">
							<?}
							if($goods=="update"){?>
								<input type="text" class="ipt_time" name="goods_sort" value="<?=$goods_value[0]['goods_sort']?>">
							<?}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">商品推荐：</td>
							<td align="left">
								<?if($goods=="add"){?>
									<input type="checkbox" name="is_best" class="sb" value="1">精品 
									<input type="checkbox" name="is_new" class="sb" value="1">新品
									<input type="checkbox" name="is_hot" class="sb" value="1">热卖
								<?}
								if($goods=="update"){
									if($goods_value[0]['is_best']==1)
									{
										echo "<input type='checkbox' checked='checked' name='is_best' class='sb' value='1'>精品 ";
									}else{
										echo "<input type='checkbox' name='is_best' class='sb' value='1'>精品 ";
									}
									if($goods_value[0]['is_new']==1){
										echo "<input type='checkbox' checked='checked' name='is_new' class='sb' value='1'>新品 ";
									}else{
										echo "<input type='checkbox' name='is_new' class='sb' value='1'>新品 ";
									}
									if($goods_value[0]['is_hot']==1){
										echo "<input type='checkbox' checked='checked' name='is_hot' class='sb' value='1'>热卖 ";
									}else{
										echo "<input type='checkbox' name='is_hot' class='sb' value='1'>热卖 ";
									}
								}?>
								
							</td>
						</tr>
						<tr>
							<td align="right">商品回收：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="radio" name="is_delete" value="1" class="sb">是 <input type="radio" checked="checked" name="is_delete" value="0" class="sb">否
							<?}
							if($goods=="update"){
								if($goods_value[0]['is_delete']==1){
									echo "<input type='radio' name='is_delete' checked='checked' value='1' class='sb'>是 <input type='radio' name='is_delete' value='0' class='sb'>否";
								}
								if($goods_value[0]['is_delete']==0){
									echo "<input type='radio' name='is_delete' value='1' class='sb'>是 <input type='radio' checked='checked' name='is_delete' value='0' class='sb'>否";
								}
							}?>
							
							</td>
						</tr>
						<tr>
							<td align="right">商品状态：</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input type="radio" checked="checked" name="is_on_sale" value="1" class="sb">上架 <input type="radio" name="is_on_sale" class="sb" value="0">下架
							<?}
							if($goods=="update"){
								if($goods_value[0]['is_on_sale']==1){
									echo "<input type='radio' checked='checked' name='is_on_sale' value='1' class='sb'>上架 <input type='radio' name='is_on_sale' class='sb' value='0'>下架";
								}
								if($goods_value[0]['is_on_sale']==0){
									echo "<input type='radio' name='is_on_sale' value='1' class='sb'>上架 <input type='radio' name='is_on_sale' checked='checked' class='sb' value='0'>下架";
								}
							}?>
							 <span>*</span>
							</td> 
						</tr>
						<tr>
							<td align="right">上传商品图片：</td>
							<td align="left">
							  <script type="text/javascript">
							  function AddText(str)
							  {
								document.getElementById("txtRecpic0").value=str;
							  }
							  </script>
							 <iframe src="/Web/Public/upload?script=AddText&&path=/Upload/Goods/" height="30" frameborder="0" scrolling="no" style="float:left;display:inline"></iframe>
							</td>
						</tr>
						<tr>
							<td align="right">&nbsp;</td>
							<td align="left">
							<?if($goods=="add"){?>
								<input name="goods_img" type="text" maxlength="100" id="txtRecpic0" class="input" style="width:200px;" />
							<?}
							if($goods=="update"){?>
								<input name="goods_img" type="text" maxlength="100" id="txtRecpic0" class="input" style="width:200px;" value="<?=$goods_value[0]['goods_img']?>">
							<?}?>
							
							</td>
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
						<table>
							<tr>
								<td align="right" width="62">商品简介：</td>
								<td align="left"><div class="edit1">
								<?if($goods=="add"){?>
								<textarea name="goods_brief"></textarea>
								<?}
								if($goods=="update"){?>
									<textarea name="goods_brief"><?=$goods_value[0]['goods_brief']?></textarea>
								<?}?>
								
								</div></td>
								
							</tr>
							<tr>
								<td align="right">商品描述：</td>
								<td align="left">
									<div class="edit">
									<?if($goods=="add"){?>
									<input type="hidden" id="FCKeditor1" name="goods_desc" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
									<?}
									if($goods=="update"){?>
									<input type="hidden" id="FCKeditor1" name="goods_desc" value="<?=$goods_value[0]['goods_desc']?>" /><input type="hidden" id="FCKeditor1___Config" value="HtmlEncodeOutput=true" /><iframe id="FCKeditor1___Frame" src="/public/fckeditor/editor/fckeditor.html?InstanceName=FCKeditor1&amp;Toolbar=Default" width="100%" height="300px" frameborder="no" scrolling="no"></iframe>
									<?}?>
									
									</div>
								</td>
							</tr>
							<tr>
								<td colspan="2" align="center"><input type="button" value="确定" onclick="sub()"  class="butt_time"> <input type="button" value="取消"  onclick="cle()"  class="butt_time"> </td>
							</tr>
						</table>
					</div>
				</div>

				<div class="goods3" style="display:none;">
					<div class="addimt">
						<table>
							<?if($goods=="add"){?>
								<tr>
									<td> 
										<script type="text/javascript">function AddText16(str){document.getElementById("txtRecpic16").value=str;}</script>
										<a style="cursor:pointer;" onclick="tr_img_o()">[+]</a> 图片描述 <input name="photo_recpic16" type="text" id="photo_txtRecpic16" class="addimg" />
									</td>
									<td>
										<input name="recpic16" type="hidden" id="txtRecpic16" class="addimg" />
										<iframe src="/Web/Public/upload?script=AddText16&path=/Upload/Goods/" height="30" frameborder="0" scrolling="no" style="float:left;display:inline"></iframe>
									</td>
								</tr>
								<?
									for($img_i=1;$img_i<=15;$img_i++)
									{?>
											<tr style="display:none;" id="tr_img<?=$img_i ?>">
												<td> 
													<script type="text/javascript">function AddText<?=$img_i?>(str){document.getElementById("txtRecpic<?=$img_i?>").value=str;}</script>
													<a style="cursor:pointer;" onclick="tr_img_f(<?=$img_i ?>)">[-]</a> 图片描述 <input name="photo_recpic<?=$img_i?>" type="text" id="photo_txtRecpic<?=$img_i?>" class="addimg" />
												</td>
												<td>
													<input name="recpic<?=$img_i?>" type="hidden" id="txtRecpic<?=$img_i?>" class="addimg" />
													<iframe src="/Web/Public/upload?script=AddText<?=$img_i?>&path=/Upload/Goods/" height="30" frameborder="0" scrolling="no" style="float:left;display:inline"></iframe>
												</td>
											</tr>
									<?}
								?>
							<?}
							if($goods=="update"){?>
								<a style="cursor:pointer;" onclick="tr_img_o()">[+]添加图片</a><?
								$img_imgid=1;
								foreach($goods_gallery as $gallery_value){
									echo "<tr><td><script type='text/javascript'>function AddText".$img_imgid."(str){document.getElementById('txtRecpic".$img_imgid."').value=str;}</script> 图片描述 <input name='photo_recpic".$img_imgid."' type='text' id='photo_txtRecpic".$img_imgid."' class='addimg' value=".$gallery_value['img_desc']." /></td><td><input name='recpic".$img_imgid."' type='hidden' value=".$gallery_value['img_url']." id='txtRecpic".$img_imgid."' class='addimg' /><iframe src='/Web/Public/upload?script=AddText16&path=/Upload/Goods/' height='30' frameborder='0' scrolling='no' style='float:left;display:inline'></iframe></td></tr>";
									$img_imgid++;
								}
									for($img_i=$img_imgid;$img_i<=15;$img_i++)
									{?>
											<tr style="display:none;" id="tr_img<?=$img_i ?>">
												<td> 
													<script type="text/javascript">function AddText<?=$img_i?>(str){document.getElementById("txtRecpic<?=$img_i?>").value=str;}</script>
													<a style="cursor:pointer;" onclick="tr_img_f(<?=$img_i ?>)">[-]</a> 图片描述 <input name="photo_recpic<?=$img_i?>" type="text" id="photo_txtRecpic<?=$img_i?>" class="addimg" />
												</td>
												<td>
													<input name="recpic<?=$img_i?>" type="hidden" id="txtRecpic<?=$img_i?>" class="addimg" />
													<iframe src="/Web/Public/upload?script=AddText<?=$img_i?>&path=/Upload/Goods/" height="30" frameborder="0" scrolling="no" style="float:left;display:inline"></iframe>
												</td>
											</tr>
									<?}
							}?>
							
							<script>
								var img_arr=1;
								function tr_img_o(){
									$("#tr_img"+img_arr).css("display","");
									img_arr++;
								}
								function tr_img_f(i){
									$("#txtRecpic"+i).val("");
									$("#tr_img"+i).css("display","none");
								}
							</script>
						</table>

						<div align="center">
						<input type="button" value="确定" onclick="sub()"  class="butt_time"> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" value="取消"  onclick="cle()"  class="butt_time">
						</div>
					</div>
				</div>

				<div class="goods4" style="display:none;">
					<div class="addimt">
						<!-- 关联商品 -->
						<table width="90%" id="linkgoods-table" align="center">
						  <!-- 商品搜索 -->
						  <tr>
							<td colspan="3">
							  <img src="/Public/images/icon_search.gif" width="26" height="22" border="0" alt="SEARCH" />
							  <select name="cat_id1" id="cat_id1"><option value="">--</option><option value="0">所有分类</option></select>
							  <select name="brand_id1" id="brand_id1"><option value="">--</option><option value="0">所有品牌</option></select>
							  <input type="text" name="keyword1" id="keyword1" />
							  <input type="button" value="搜索 "  class="butt_ss" onclick="butt_ss()" />
							</td>
							<script>
							function butt_ss(){
								if($("#cat_id1").val()==""){alert('请选择分类');return;}
								if($("#brand_id1").val()==""){alert('请选择品牌');return;}
								if($("#keyword1").val()==""){alert('请输入内容');return;}
								//$.get("ajax.html",{cat_id1:$("#cat_id1").val(),brand_id1:$("#brand_id1").val(),keyword1:$("#keyword1").val()},function(data){$("#source_select1").append(data);});
								$.get("ajax.html",function(data){$("#source_select1").append(data);});
							}
							</script>
						  </tr>
						  <!-- 商品列表 -->
						  <tr>
							<th>可选商品</th>
							<th>操作</th>
							<th>跟该商品关联的商品</th>
						  </tr>
						  <tr>
							<td width="42%">
							  <select name="source_select1" id="source_select1" size="20" style="width:100%"  multiple="true" ></select>
							  <script>
								function sel(i){
									if(i==1){
										if($("#source_select1").val()==null)return;
										var s_value=$("#source_select1").val();
										var option_value=$("#source_select1 option[selected]").text();
										if(s_value.toString().indexOf(",")!=-1){
											var arr=new Array();
											var arr_option=new Array();
											var arr=s_value.toString().split(",");
											for(var str=0;str<=arr.length-1;str++)
											{
												$("#source_select2").append("<option value='"+arr[str]+"'>"+$("#source_select1 option[value='"+arr[str]+"']").text()+"</option>");
												$("#source_select1 option[value='"+arr[str]+"']").remove();
											}
											return;
										};
										var sel_v="<option value='"+s_value+"'>"+option_value+"</option>";
										$("#source_select2").append(sel_v);
										$("#source_select1 option[value='"+s_value+"']").remove();
									}
									if(i==2){
										if($("#source_select2").val()==null)return;
										var s_value=$("#source_select2").val();
										var option_value=$("#source_select2 option[selected]").text();
										if(s_value.toString().indexOf(",")!=-1){
											var arr=new Array();
											var arr=s_value.toString().split(",");
											for(var str=0;str<=arr.length-1;str++)
											{
												$("#source_select1").append("<option value='"+arr[str]+"'>"+$("#source_select2 option[value='"+arr[str]+"']").text()+"</option>");
												$("#source_select2 option[value='"+arr[str]+"']").remove();
											}
											return;
										};
										var sel_v="<option value='"+s_value+"'>"+option_value+"</option>";
										$("#source_select1").append(sel_v);
										$("#source_select2 option[value='"+s_value+"']").remove();
									}
									if(i==3){
										var sell=$("#source_select1").html();
										$("#source_select2").append(sell);
										$("#source_select1").empty();
									};
									if(i==4){
										var sell=$("#source_select2").html();
										$("#source_select1").append(sell);
										$("#source_select2").empty();
									}
									
								}
							  </script>
							</td>
							<td align="center">
							  <!--<p><input name="is_single" type="radio" value="1" checked="checked" />单向关联<br />
							  <input name="is_single" type="radio" value="0" />双向关联</p>-->
							  <p><input type="button" value=">>" class="button" onclick="sel(3)"/></p>
							  <p><input type="button" value=">" class="button"  onclick="sel(1)"/></p>
							  <p><input type="button" value="<" class="button" onclick="sel(2)"/></p>
							  <p><input type="button" value="<<" class="button" onclick="sel(4)"/></p>
							</td>
							<td width="42%">
							  <?if($goods=="add"){?>
								 <select name="target_select2" id="source_select2" size="20" style="width:100%" multiple ></select>
							  <?}?>
							  <?if($goods=="update"){?>
									<select name="target_select2" id="source_select2" size="20" style="width:100%" multiple >
									<?
									foreach($goods_link as $link_value){
										echo "<option value='".$link_value['link_goods_id']."'>".$link_value['goods_name']."</option>";
									}
									?>
									</select>
							  <?}?>
							 
							  <input type="hidden" name="target_select2_goods_link" id="target_select2_">
							</td>
						  </tr>
						</table>
						<div align="center">
							<input type="button" value="确定" onclick="sub()"  class="butt_time"> &nbsp;&nbsp;&nbsp;&nbsp;
							<input type="button" value="取消"  onclick="cle()"  class="butt_time">
						</div>
					</div>
				</div>
				<div class="goods5" style="display:none;">
					<div class="addimt">
						

						<div align="center">
						<input type="button" value="确定" onclick="sub()"  class="butt_time"> &nbsp;&nbsp;&nbsp;&nbsp;
						<input type="button" value="取消"  onclick="cle()"  class="butt_time">
						</div>
					</div>
					</form>
				</div>


			</td>
		</tr>
	</table>
</div>
<div id="footer"><?Temp("Public::foot");?></div>
</body>
</html>
