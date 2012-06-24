<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我的信息</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#profile_info").css("background","#000000");
	$("#profile_info").css("color","#fff");
})
function del(){
	var ids = "0";
	for(var i=0;i<document.myform.elements.length;i++){
		if(document.myform.elements[i].type=="checkbox"&&document.myform.elements[i].name=="messageid"&&document.myform.elements[i].checked==true){
			ids += ","+document.myform.elements[i].value;
		}
	}
	$("#ids").val(ids);
	if(ids=="0"){
		alert('请先选择您要删除的信件'); return;
	}
	document.myform.submit();
}
function input_checkbox(i){
	for(var c=0;c<document.myform.elements.length;c++){
		if(i==1)
			document.myform.elements[c].checked=true;
		else
			document.myform.elements[c].checked=false;
	}
}
</script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/member_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--reg con-->
	<div class="profile">
		<div class="profile_c">
			<div class="profile_t">
			<?Temp("Public::member_menu");?>
			</div>
			<div class="favourite_info">
				<div class="favourite" style="height:810px;">
					<div class="message_a">
						<a href="?t=in"><h3>INBOX 收信件</h3></a>
						<a href="?t=out"><h3>OUTBOX 发件件</h3></a>
						<a href="?t=draft"><h3>CRAFTS 草稿件</h3></a>
					</div>
					<div class="favourite_b"></div>
					<form action="/Member/message_delete" method="post" name="myform" id="myform">
					<input type="hidden" name="ids" value="" />
					<input type="hidden" name="t" value="<?=$t?>" />
					<table><!--pagesize=19-->
						<tr style=" border:0;">
							<td width="120"><h4>来自</h4></td>
							<td width="250"><h4>标题</h4></td>
							<td width="150"><h4>时间</h4></td>
							<td width="80" align="center"><h4>选择</h4></td>
						</tr>
						<?foreach($list as $val){?>
						<tr>
							<td><?=$val['nickname']?></td>
							<td><?=$val['title']?></td>
							<td><?=$val['dt']?></td>
							<td align="center"><input type="checkbox" name="messageid" value="<?=$val['id']?>" /></td>
						</tr>
						<?}?>
					</table>
					<div class="message_b">
						<a class="magc" onclick="del()"></a>
						<a class="magb" onclick="input_checkbox(2)"></a>
						<a class="maga" onclick="input_checkbox(1)"></a>
					</div>
					</form>
					<div align="center" style="margin-top:10px;">
						<?$page->pagehtml("t=".$t);?>
					</div>
				</div>
			</div>
			<div style="height:30px;"></div>
		</div>
	</div>
	<!--reg con-->
	<div style="height:12px;"></div>
	<div style="border:1px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
<!--弹出框-->
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div class="size_c">
			<img src="/Public/img/events_rec.jpg" />
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
