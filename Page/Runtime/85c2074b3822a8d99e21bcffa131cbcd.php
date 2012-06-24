<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>新手问答</title>
<link href="/Public/images/20110708/css.css" rel="stylesheet" type="text/css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
var my = new Array();
for(var k=0; k<=5;k++)
{
	my[k]=2;
}
$(document).ready(function(){
	for(var i=1;i<=3;i++)
	{
		$("#a"+i).click(function(){abc($(this).attr("id"),"a");})
		$("#b"+i).click(function(){abc($(this).attr("id"),"b");})
		$("#c"+i).click(function(){abc($(this).attr("id"),"c");})
		$("#d"+i).click(function(){abc($(this).attr("id"),"d");})
		$("#e"+i).click(function(){abc($(this).attr("id"),"e");})
		$("#f"+i).click(function(){abc($(this).attr("id"),"f");})
	}
});
function abc(i,j){
	if(j=="a"){if(i=="a3"){$("#a").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[0]=1;}else{$("#a").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[0]=0;}}
	if(j=="b"){if(i=="b1"){$("#b").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[1]=1;}else{$("#b").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[1]=0;}}
	if(j=="c"){if(i=="c2"){$("#c").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[2]=1;}else{$("#c").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[2]=0;}}
	if(j=="d"){if(i=="d3"){$("#d").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[3]=1;}else{$("#d").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[3]=0;}}
	if(j=="e"){if(i=="e3"||i=="e1"||i=="e2"){$("#e").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[4]=1;}else{$("#e").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[4]=0;}}
	if(j=="f"){if(i=="f3"){$("#f").html("<img src='/Public/images/20110708/yes.jpg' align='absmiddle'>");my[5]=1;}else{$("#f").html("<img src='/Public/images/20110708/no.jpg' align='absmiddle'>");my[5]=0;}}
}
function abc_(){
	for(var p=0;p<=5;p++){
		if(my[p]==2){alert("请选择第"+(p+1)+"题");break;}
		if(my[p]==0){alert("第"+(p+1)+"到题答错,请修改");break;}
	}
	
}
function a(){
	abc_()
	if(my[0]==1&&my[1]==1&&my[2]==1&&my[3]==1&&my[4]==1&&my[5]==1)
	{
		//alert("恭喜完成答题~！点击确定查看礼包序列号。");
		window.location.href="/A20110708/submit.html";
	}
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
			1、每账号只能成功参与一次，登录后方可进行答题。<br />
			2、问答一共是6个题目，全部是单项选择题。<br />
			3、当你选错答案的时候会明确显示<span style="color:#FF0000">×</span>，正确显示<span style="color:#00FF00">√</span>。<br />
			4、全部正确的回答完毕，才可以获得一个礼包序列号。
		</div>
		<div class="b">
			<div>奖励兑换的方式</div>
			<Div>
				（1）登录http://u.126play.com/Prop/info.html<br />
				（2）查看您获得的序列号。<br />
				（3）登录游戏，打开商城页面。点击输入序列号。<br />
				（4）前往“商城道具管理员”兑换
			</Div>
		</div>
	</Div>
	<div class="m">
		<div class="user">
			<?if(!isset($_SESSION['loginid0708'])){?>
			<form action="/A20110708/login.html" method="post">
			帐号：&nbsp;<input type="text" name="loginid" maxlength="30" />&nbsp;&nbsp;密码：<input type="password" name="password" maxlength="30" /><br /><br />
			<input type="image" src="/Public/images/20110708/but1.jpg" class="inp" />&nbsp;
			<a href="http://u.126play.com/Index/reg.html?url=http://act.local126play.com/A20110708" target="_blank"><img src="/Public/images/20110708/but2.jpg" border="0" /></a>
			</form>
			<?}else{?>
			<!--退出登录的-->
			当前答题账号为：<?=$_SESSION['loginid0708']?><br><br>
			<a href="/A20110708/loginout.html"><img src="/Public/images/20110708/but1_1.jpg" border="0" /></a>
			<?}?>
		</div>
	</div>
	<div class="m">
		<div><img src="/Public/images/20110708/wenti.jpg" /></div>
		<div class="wenti">
			<table cellpadding="0" cellspacing="0" border="0" width="600">
				<tr>
					<td colspan="2" class="o">1、找哪个NPC可以获取支线任务信息？<span id="a" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="a" id="a1" align="absmiddle" /> </td>
					<td width="570">A.苍井空</td>
				<tr>
					<td><input type="radio" name="a" id="a2" align="absmiddle" /> </td>
					<td>B.周杰伦</td>
				</tr>
				<tr>
					<td><input type="radio" name="a" id="a3" align="absmiddle" /> </td>
					<td>C.任务引导员</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="2" class="o" valign="bottom">2、马匹兑换卷怎么用？<span id="b" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="b" id="b1" align="absmiddle" /> </td>
					<td width="570">A.到城外的“坐骑贩子”NPC处兑换马匹</td>
				<tr>
					<td><input type="radio" name="b" id="b2" align="absmiddle" /> </td>
					<td>B.到4S实体店兑换</td>
				</tr>
				<tr>
					<td><input type="radio" name="b" id="b3" align="absmiddle" /> </td>
					<td>C.到“上海烈风”去兑换</td>
				</tr>
			</table>
			<table cellpadding="0" class="o">
				<tr>
					<td colspan="2" class="o" valign="bottom">3、主线任务如何接取？<span id="c" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="c" id="c1" align="absmiddle" /> </td>
					<td width="570">A.没有主线任务</td>
				<tr>
					<td><input type="radio" name="c" id="c2" align="absmiddle" /> </td>
					<td>B.新角色进入游戏移动后，自动触发</td>
				</tr>
				<tr>
					<td><input type="radio" name="c" id="c3" align="absmiddle" /> </td>
					<td>C.找GM接取</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="2" class="o" valign="bottom">4、20级后怎么转职？<span id="d" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="d" id="d1" align="absmiddle" /> </td>
					<td width="570">A.原地转三圈即可转职</td>
				<tr>
					<td><input type="radio" name="d" id="d2" align="absmiddle" /> </td>
					<td>B.拿起武器，对着屏幕大吼一声“我要转职”</td>
				</tr>
				<tr>
					<td><input type="radio" name="d" id="d3" align="absmiddle" /> </td>
					<td>C.前往国家主城，寻找相应职业的职业导师，接取转职任务</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="2" class="o" valign="bottom">5、如何分配属性点和技能点？<span id="e" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="e" id="e1" align="absmiddle" /> </td>
					<td width="570">A.按“Y”键</td>
				<tr>
					<td><input type="radio" name="e" id="e2" align="absmiddle" /> </td>
					<td>B.按“Y”键</td>
				</tr>
				<tr>
					<td><input type="radio" name="e" id="e3" align="absmiddle" /> </td>
					<td>C.还是按“Y”键</td>
				</tr>
			</table>
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td colspan="2" class="o" valign="bottom">6、游戏中角色出现卡地图现象怎么办？<span id="f" style="display:;"></span></td>
				</tr>
				<tr>
					<td width="30"><input type="radio" name="f" id="f1" align="absmiddle" /> </td>
					<td width="570">A.大声呼救</td>
				<tr>
					<td><input type="radio" name="f" id="f2" align="absmiddle" /> </td>
					<td>B.按下机箱电源键</td>
				</tr>
				<tr>
					<td><input type="radio" name="f" id="f3" align="absmiddle" /> </td>
					<td>C.输入“/escape”</td>
				</tr>
			</table>
			<div align="center">
			<?if(isset($_SESSION['loginid0708'])){?>
			<img src="/Public/images/20110708/buut.jpg" style="cursor:pointer;" onclick="a()" border="0" />
			<?}else{?>
			<img src="/Public/images/20110708/buut.jpg" style="cursor:pointer;" onclick="alert('登录后才能进行答题！');" border="0" />
			<?}?>
			</div>
		</div>
	</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
