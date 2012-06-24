<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>个人资料</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#profile_info").css("background","#000000");
	$("#profile_info").css("color","#fff");
})
function chkform(){
	var hobby = "0,";
	var occupation = "0,";
	for(var i=0;i<document.myform.elements.length;i++){
		if(document.myform.elements[i].type=="checkbox"&&document.myform.elements[i].name=="hobby"&&document.myform.elements[i].checked==true){
			hobby += document.myform.elements[i].value + ",";
		}
		if(document.myform.elements[i].type=="checkbox"&&document.myform.elements[i].name=="occupation"&&document.myform.elements[i].checked==true){
			occupation += document.myform.elements[i].value + ",";
		}

	}
	$("#hobbys").val(hobby);
	$("#occupations").val(occupation);
	return true;
}
function toload(dir){
	location.href = "save_face?dir="+dir;
}
function showcitys(){
	var city = $("#province").val();
	$.post("/Member/get_city",{pro:city},function(data){
		$("#citys").html(data);
	});
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
			<form name="myform" action="/Member/profile.html" method="post" onsubmit="return chkform();">
			<input type="hidden" name="post" value="post" />
			<input type="hidden" id="hobbys" name="hobbys" value="" />
			<input type="hidden" id="occupations" name="occupations" value="" />
			<div class="profile_info">
				<div class="t"><h2>PROFILE <font>个人信息</font></h2></div>
				<ul>
					<li class="liinfoa">
						<div>
							<P class="noleft">EMAIL<font class="f1">邮箱</font></P>
							<p><?=$model['email']?> <a>修改密码</a></p>
						</div>
						<div>
							<P class="noleft">SEX<font class="f2">性别</font></P>
							<p>
								<input type="checkbox" checked="checked" name="sex" value="0" <?if($model['sex']=="0"){echo "checked";}?> /> 男 &nbsp;&nbsp;
								<input type="checkbox" name="sex" value="1" <?if($model['sex']=="1"){echo "checked";}?> /> 女
							</p>
						</div>
						<div>
							<P class="noleft">BIRTHDAY<font class="f3">生日</font></P>
							<p>
								
								<select name="birth_year">
								<?for($i=1960;$i<=2020;$i++){?>
								<option value="<?=$i?>" <?if(date('Y',strtotime($model['birthday']))==$i){echo "selected";}?>><?=$i?></option>
								<?}?>
								</select> 年
								
								<select name="birth_month">
								<?for($i=1;$i<=12;$i++){?>
								<option value="<?=$i?>" <?if(date('m',strtotime($model['birthday']))==$i){echo "selected";}?>><?=$i?></option>
								<?}?>
								</select> 月
								
								<select name="birth_day">
								<?for($i=1;$i<=31;$i++){?>
								<option value="<?=$i?>" <?if(date('d',strtotime($model['birthday']))==$i){echo "selected";}?>><?=$i?></option>
								<?}?>
								</select> 日 <em>*</em>
							</p>
						</div>
						<div>
							<P class="noleft">PHONE<font class="f4">手机号码</font></P>
							<p><font class="font1" style="width:150px; text-align:left;"><input name="mobile" style="border:0px" value="<?=$model['mobile']?>" /></font></p>
						</div>
						<div>
							<P class="noleft">LOCATION<font class="f1">所在地</font></P>
							<p>
								<select name="province" id="province" onchange="showcitys()">
									<option value="">请选择</option>
									<?foreach($prolist as $val){?>
									<option value="<?=$val['city']?>" <?if($model['province']==$val['city']){echo "selected";}?>><?=$val['city']?></option>
									<?}?>
								</select> 省
								<span id="citys">
								<select name="city">
									<option value="">请选择</option>
									<?foreach($citylist as $val){?>
									<option value="<?=$val['city']?>" <?if($model['city']==$val['city']){echo "selected";}?>><?=$val['city']?></option>
									<?}?>
								</select>  市 <em>*</em>
								</span>
							</p>
						</div>
						<div>
							<P class="noleft">ADDRESS<font class="f5">住址</font></P>
							<p>
								<font class="font1" style="width:230px; text-align:left;"><input name="address" style="border:0px" value="<?=$model['address']?>" /></font>
							</p>
						</div>
						<div>
							<P class="noleft">ZIP CODE<font class="f6">邮编</font></P>
							<p>
								<font class="font1" style="width:230px; text-align:left;"><input name="zipcode" style="border:0px" value="<?=$model['zipcode']?>" /></font>
							</p>
						</div>
						<div>
							<P class="noleft">HOME NUMBER<font class="f7">宅电</font></P>
							<p>
								<font class="font1" style="width:230px; text-align:left;"><input name="telephone" style="border:0px" value="<?=$model['telephone']?>" /></font>
							</p>
						</div>
						<div style="height:10px;"></div>
					</li>
					<li class="liinfob">
						<img src="<?=$model['face']?>" width="109" height="109" />
						<object id="myflash" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="50" height="20">
						  <param name="movie" value="/Public/face.swf?22" />
						  <param name="quality" value="high" />
						  <embed src="/Public/face.swf?22" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="50" height="20"></embed>
						</object>
					</li>
				</ul>
			</div>
			<div class="profile_info" style="margin-top:10px;">
				<div class="t"><h2>WHAT IS YOUR HOBBY? <font>你喜爱什么运动</font></h2></div>
				<table>
					<tr>
					<?
					$i = 1;
					foreach($hobbylist as $val){?>
						<td width="230">
							<div class="hobby_l"><input type="checkbox" value="<?=$val['id']?>" <?if(strpos($model['hobbys'],",".$val['id'].",")>0){ echo "checked";}?> name="hobby" /> <?=$val['hobby_en']?></div>
							<div class="hobby_r"><?=$val['hobby_cn']?></div>
						</td>
					<?
						if($i%3==0){echo "</tr><tr>";}
						$i++;
					}?>
					</tr>	
				</table><br />
				<div class="t"><h2>WHAT IS YOUR OCCUPATION? <font>你的职业是什么</font></h2></div>
				<table>
					<tr>
					<?
					$i = 1;
					foreach($occulist as $val){?>
						<td width="230">
							<div class="hobby_l"><input type="checkbox" value="<?=$val['id']?>" <?if(strpos($model['occupation'],",".$val['id'].",")>0){ echo "checked";}?> name="occupation" /> <?=$val['occupation_en']?></div>
							<div class="hobby_r"><?=$val['occupation_cn']?></div>
						</td>
					<?
						if($i%3==0){echo "</tr><tr>";}
						$i++;
					}?>
					</tr>	
				</table>
				<div style="height:20px;"></div>
			</div>
			<div class="profile_info" style="margin-top:10px;">
				<div class="hobby_t"><h3>WOULD YOU LIKE TO RECEIVE THE INFORMATION FROM US <font> 你愿意接收来自鞋报的信息吗？</font></h3></div>
				<div class="hobby_f">
					<h3><input type="radio" name="allowletter" value="1" <?if($model['allowletter']=="1"){echo "checked";}?> /> YES 
					<input type="radio" name="allowletter" value="0" <?if($model['allowletter']=="0"){echo "checked";}?> /> NO</h3>
				</div>
				<div style="width:700px; margin:0px auto; margin-top:20px;"><input type="image" src="/Public/img/profile_img3.jpg" /></div>
				<div style="height:20px;"></div>
			</div>
			<div style="height:80px;"></div>
		</div>
		</form>
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
