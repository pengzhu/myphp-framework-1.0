
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>《潘多拉》OL，亲待您的驾临—5月26日！3位潘多拉公主静候您的光临，2011最受期待的新网游，现在即将拉开帷幕！</title>
<link href="/Public/images/20110518/css.css" type="text/css" rel="stylesheet" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
</head>

<body>

<div class="top">
	<div class="dh">
		<a href="http://pdl.126play.com/" class="sy" title="官方首页"><span>官方首页</span></a>
		<a href="http://www.56mc.com/" style="width:1px; height:1px"><span>全民战歌网</span></a>
		<a href="http://u.126play.com/Index/reg.html" class="zhzc" title="帐号注册"><span>帐号注册</span></a>
		<a href="http://bbs.pdl.126play.com/" class="gflt" title="官方论坛"><span>官方论坛</span></a>
		<a href="http://pdl.126play.com/download/" class="yxxz" title="游戏下载"><span>游戏下载</span></a>
		<a href="http://u.126play.com/Index/activate.html" class="jhyx" title="激活游戏"><span>激活游戏</span></a>
		<a href="http://pdl.126play.com/game/" class="yxzl" title="游戏资料"><span>游戏资料</span></a>
	</div>
</div>
<!--middle-->
<script>
$(document).ready(function(){
	
	/*for(var i=1;i<=9;i++){
		$("#td_"+i).mouseover(function(){
			$(this).css({border:"#ff0000 1px solid",cursor:"pointer"});
		})
	}
	for(var i=1;i<=9;i++){
		$("#td_"+i).mouseout(function(){
			$(this).css({border:"#0F2D38 1px solid"})
		})
	}*/
	for(var i=1;i<=9;i++){
		$("#td_"+i).click(function(){
			abc($(this).attr("title"));
		})
	};
});
function abc(i){
	if($("#td_"+i).html()!=""){
	}else{
		$.post("/A20110518/price.html",{act:'post'},function(data){
			if(data==-1){alert('请先登录！');location.href="http://u.126play.com/Index/login?url=http://act.126play.com/A20110518/price.html";return;}
			if(data==-2){alert('一个账号一天最多抽3次！');return;}
			if(data==-3||data==0){
				$("#td_"+i).css({background:"url(/Public/images/20110518/m2_tdwu.jpg) center top"})
				$("#td_"+i).html("&nbsp;");
				return;
			}
			if(data==-4){alert('活动将在26号开始进行，敬请关注！');return;}
			$("#td_"+i).css({background:"url(/Public/images/20110518/m2_tdbu.jpg) center top"})
			$("#td_"+i).html("<div class='m2_div_1'><input type='text' id='txt"+i+"' value='"+data+"' /></div><div class='m2_div_2'><img src='/Public/images/20110518/m2_5.jpg' height='23' width='68' onclick='test("+i+")'></div>");

		});
	}
}
function test(i)
{
	var htm = document.getElementById("txt"+i).value;
    window.clipboardData.setData('text', htm);
	alert("复制成功")
}
</script>
<div class="m">
	<Div class="m_1">
		<div class="m_l m_l1"><img src="/Public/images/20110518/l_bg.jpg" height="154" width="210" /></div>
		<div class="m_l mbg2">
			<div><img src="/Public/images/20110518/m_1.jpg" height="43" width="976" /></div>
			<div>
				<div class="m2_div1">
					<div>
						魔盒将选择守护《潘多拉》世界的勇士，每位勇士开启魔盒时将会受到魔盒释放出的小小魔力，如果您是注定的勇士，魔力将会带您进入《潘多拉》的神秘世界！
					</div>
				</div>
				<div class="m_div3">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td width="100" align="right" height="40">活动时间：</td>
							<td width="400">5月25日-5月30日</td>
						</tr>
						<tr>
							<td align="right" valign="top">活动规则：</td>
							<td>在活动时间内，每天每个IP的注册用户可以有3次机会打开魔盒。<br />如果当天的机会全部用完，玩家可以等到24点后再来参与。<br />魔盒里藏有潘多拉激活码。</td>
						</tr>
					</table>
				</div>
				<table cellpadding="0" cellspacing="6" class="m2_div2">
					<tr>
						<td id="td_1" title="1" valign="top"></td>
						<td id="td_2" title="2" valign="top"></td>
						<td id="td_3" title="3" valign="top"></td>
					</tr>
					<tr>
						<td id="td_4" title="4" valign="top"></td>
						<td id="td_5" title="5" valign="top"></td>
						<td id="td_6" title="6" valign="top"></td>
					</tr>
					<tr>
						<td id="td_7" title="7" valign="top"></td>
						<td id="td_8" title="8" valign="top"></td>
						<td id="td_9" title="9" valign="top"></td>
					</tr>
				</table>
				<!--<div class="m2_div_1">
								<input type="text" value="123456789asdasdasd" />
							</div>
							<div class="m2_div_2" title="复制">
								
							</div>-->
				<div style="height:200px;"></div>
			</div>
			
			<div align="right"><img src="/Public/images/20110518/m_bgf.jpg" width="975" height="16" /></div>
		</div>
		<div class="m_l m_l1"><img src="/Public/images/20110518/r_bg.jpg" height="154" width="230" /></div>
	</Div>
</div>

</body>
</html>
<?Temp("Public::foot");?>