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
</script>
</head>

<body style=" background:#DDEEF2;">
<h1>
	<span class="action-span"><a href="nlist.html">用户列表</a></span>
	<span class="action-span1"><a href="">管理中心</a> </span><span id="search_id" class="action-span1"> - 用户查看 </span>
</h1>
<!-- 商品搜索 -->
<div align="center">
<div class="addimg-div" id="listDiv" style=" width:800px" align="center">
	<table cellpadding="0" cellspacing="0" id="addgoods" border="1">
		<tr>
			<th class="th1">基本信息</th>
		</tr>
		<tr>
			<td colspan="3">
				<div class="goods1" style="display:;">
					<table cellpadding="5" cellspacing="5" id="tab">
						<tr>
							<td align="right">帐号：</td>
							<td align="left"><?=$model['email']?></td>
						</tr>
						<tr>
							<td align="right">昵称：</td>
							<td align="left"><?=$model['nickname']?></td>
						</tr>
						<tr>
							<td align="right" valign="top">手机号码：</td>
							<td align="left"><?=($model['mobile']==""?"-------":$model['mobile'])?></td>
						</tr>
						<tr>
							<td align="right" valign="top">性别：</td>
							<td align="left"><?=($model['sex']=="0"?"男":"女")?></td>
						</tr>
						<tr>
							<td align="right" valign="top">生日：</td>
							<td align="left"><?=($model['birthday']==""?"-------":$model['birthday'])?></td>
						</tr>
						<tr>
							<td align="right" valign="top">省市：</td>
							<td align="left">
							<?=($model['province']==""?"-----":($model['province']."省"))?>
							<?=($model['city']==""?"-----":($model['city']."市"))?></td>
						</tr>
						<tr>
							<td align="right" valign="top">地址：</td>
							<td align="left"><?=($model['address']==""?"-------":$model['address'])?></td>
						</tr>
						<tr>
							<td align="right" valign="top">邮编：</td>
							<td align="left"><?=($model['zipcode']==""?"-------":$model['zipcode'])?></td>
						</tr>
						<tr>
							<td align="right" valign="top">固定电话：</td>
							<td align="left"><?=($model['telephone']==""?"-------":$model['telephone'])?></td>
						</tr>
						<tr>
							<td align="right" valign="top">hobbys：</td>
							<td align="left"><?foreach($hobbylist as $val){echo $val['hobby_cn']." ";}?></td>
						</tr>
						<tr>
							<td align="right" valign="top">occupation：</td>
							<td align="left"><?foreach($occulist as $val){echo $val['occupation_cn']." ";}?></td>
						</tr>
						<tr>
							<td align="right" valign="top">注册日期：</td>
							<td align="left"><?=$model['regdate']?></td>
						</tr>
						<tr>
							<td align="right" valign="top">注册IP：</td>
							<td align="left"><?=$model['regip']?></td>
						</tr>
						<tr>
							<td align="right" valign="top">是否允许收信：</td>
							<td align="left"><?=($model['allowletter']=='1'?"<span style='color:green'>允许</span>":"<span style='color:red'>不允许</span>")?></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
							<input type="button" value="返回" onclick="location.href='/Root/Member/nlist'" class="butt_time"> 
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
