<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>打卡记录</title>
<link href="/Public/images/20110628/css.css" rel="stylesheet" type="text/css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	var my = new Array(31);
	<?foreach($list as $val){?>
		my[<?=date('d',strtotime($val['dt']))-1?>]="ck";
	<?}?>
	var d = new Date();
	//$("#c"+d.getDate()).click(function(){abc($(this).attr("id")); location.href='/A20110628/sign.html';});
	
	for(var i=0;i<=30;i++){
		if(my[i]=="ck")$("#c"+(parseInt(i)+1)).css("background","url(/Public/images/20110628/qddk.jpg) center bottom no-repeat")
	}
	if((d.getMonth()+1)==7){$(".a1").css("","")}
})
function abc(i){
	$("#"+i).css("background","url(/Public/images/20110628/qddk.jpg) center bottom no-repeat")
}
</script>
</head>

<body>
<div class="body">
	<div><div style=" position:absolute; cursor:pointer; margin:25px 0 0 0; width:120px; height:40px;" title="官网" onclick="location.href='http://pdl.126play.com'"></div>
	<div style=" position:absolute; cursor:pointer; margin:60px 0 0 100px; width:120px; height:30px;" title="互动中心" onclick="location.href='http://bbs.pdl.126play.com/'"></div></div>
	<Div class="t">
		<div class="a">
			活动对象：所有注册用户<br />
			活动细节：<br />
			1、每天登录官网签到页面，每人每天打卡一次，多打不计。<br />
			2、玩家当天签到以后将会到日历日期标签下增加一个标识。<br />
			3、活动结束后根据打卡累积的次数，分别给与不同的奖励。<br />
			4、奖励通过序列号兑换劵形式发送，请注意查收“页面道具仓库”。<br />
			5、序列号兑换券在活动结束后7个工作日内发送。
		</div>
		<div class="b">
			<div style="margin-left:15px;">奖励兑换的方式</div>
			<Div>
				（1）登录http://u.126play.com/Prop/info.html<br />
				（2）查看您获得的序列号。<br />
				（3）登录游戏，打开商城页面。点击输入序列号。<br />
				（4）前往“商城道具管理员”兑换
			</Div>
		</div>
	</Div>
	<table cellpadding="0" cellspacing="0" border="0" class="tb">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td id="c1" title="1"></td>
			<td id="c2" title="2"></td>
		</tr>
		<tr>
			<td id="c3" title="3"></td>
			<td id="c4" title="4"></td>
			<td id="c5" title="5"></td>
			<td id="c6" title="6"></td>
			<td id="c7" title="7"></td>
			<td id="c8" title="8"></td>
			<td id="c9" title="9"></td>
		</tr>
		<tr>
			<td id="c10" title="10"></td>
			<td id="c11" title="11"></td>
			<td id="c12" title="12"></td>
			<td id="c13" title="13"></td>
			<td id="c14" title="14"></td>
			<td id="c15" title="15"></td>
			<td id="c16" title="16"></td>
		</tr>
		<tr>
			<td id="c17" title="17"></td>
			<td id="c18" title="18"></td>
			<td id="c19" title="19"></td>
			<td id="c20" title="20"></td>
			<td id="c21" title="21"></td>
			<td id="c22" title="22"></td>
			<td id="c23" title="23"></td>
		</tr>
		<tr>
			<td id="c24" title="24"></td>
			<td id="c25" title="25"></td>
			<td id="c26" title="26"></td>
			<td id="c27" title="27"></td>
			<td id="c28" title="28"></td>
			<td id="c29" title="29"></td>
			<td id="c30" title="30"></td>
		</tr>
		<tr>
			<td id="c31" title="31"></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
	<div class="f">
	<?if(!isset($_SESSION['loginid2'])){?>
	<form action="/A20110628/sign.html" method="post">
		<div class="p">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td>帐号：<input type="text" name="loginid" /></td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;密码：<input type="password" name="password" /></td>
				</tr>
			</table>
		</div><br />
		<Div align="center"><input type="image" src="/Public/images/20110628/butt.jpg" /></Div>
	</form>
	<?}else{?>
		<Div align="center"><a href="/A20110628/loginout.html"><img src="/Public/images/20110628/logout.jpg" border="0" /></a></Div>
	<?}?>
	</div>
</div>
<?Temp("Public::foot");?>
<script>alert('该活动已到期！');</script>
</body>
</html>
