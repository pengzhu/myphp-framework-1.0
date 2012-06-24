<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>争金夺银</title>
<link type="text/css" href="/Public/images/20110524/css.css" rel="stylesheet" />
</head>

<body>

<div class="body">
	<div class="top">
		<Div>
		<a href="http://pdl.126play.com/" title="官方首页"><span>官方首页</span></a>
		<a href="http://u.126play.com/Index/reg.html" title="注册帐号"><span>注册帐号</span></a>
		<a href="http://u.126play.com/Index/activate.html" title="游戏激活"><span>游戏激活</span></a>
		<a href="http://pdl.126play.com/download/" title="游戏下载"><span>游戏下载</span></a>
		<a href="http://bbs.pdl.126play.com/" title="互动中心"><span>互动中心</span></a>
		</Div>
	</div>
	<div class="middle">
		<div class="middle_b"></div>
		<div class="middle_m">
			<div class="left_l">
				<div style="height:300px;">
				<table cellpadding="0" cellspacing="0" border="0">
					<?$i=1;
					foreach($list as $val){?>
					<tr><td width="40" align="center"><?=$i?></td><td width="60">&nbsp;</td><td width="120"><div><?=substr($val['loginid'],0,2)?>******<?=substr($val['loginid'],strlen($val['loginid'])-2,2)?></div></td><td width="70" align="center"><?=$val['money']?></td></tr>
					<?$i++;}?>
					
				</table>
				</div>
				<div style="margin:15px auto; width:180px; height:55px; cursor:pointer;" onclick="location.href='http://pay.126play.com/Index/recharge.html'" title="我要充值">
				<img src="/Public/images/20110524/b2.jpg" height="57" width="165" border="0" onmouseover="m()" onmouseout="p()" id="buttom" />
				</div>
			</div>
			<div class="left_c">
				<div style="margin:340px auto; width:350px; height:50px; color:#FFFFFF; font-weight:bold; font-size:38px;">
				<span id="day_"></span><span id="hour_"></span>:<span id="minutes_"></span>:<span id="hsecond_"></span>
				</div>
			</div>
			<script>
				var starttime = new Date(<?=$st?>);
				var s = starttime.getTime();
				var now = new Date(<?=$n?>); 
				var n = now.getTime();
				var endtime = new Date(<?=$et?>)
				var e = endtime.getTime();
				
				function m(){document.getElementById("buttom").src="/Public/images/20110524/b1.jpg";}
				function p(){document.getElementById("buttom").src="/Public/images/20110524/b2.jpg";}
				clock();
				
				function clock(){
				//	document.write(b-a);
					if(s>n){
						tozero();
					}else if(n>e){
						tozero();
					}else{
						var day = parseInt(((e-n)/1000)/(3600*24));
						var hour = parseInt(((e-n)/1000)/3600)-24*day;
						var minute = parseInt(((e-n)/1000)/60)-24*day*60-hour*60;
						var sec = parseInt((e-n)/1000)-24*day*3600-hour*3600-minute*60;
						var hsec=parseInt((e-n)-24*day*3600*1000-hour*3600*1000-minute*60*1000)/1000;
	
						//document.getElementById("day_").innerHTML=hsec;
						document.getElementById("hour_").innerHTML=hour;
						document.getElementById("minutes_").innerHTML=minute;
						//document.getElementById("second_").innerHTML=sec;
						document.getElementById("hsecond_").innerHTML=hsec;
					}
					n+=1000;
					
					setTimeout("clock()",1000);
				}
				
				function tozero(){document.getElementById("hour_").innerHTML="0";document.getElementById("minutes_").innerHTML="0"; document.getElementById("hsecond_").innerHTML="0";}
				
			
			</script>
			<div class="left_r">
				<div style="margin-top:200px; width:100%; height:190px;"></div>
			</div>
		</div>
	</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
