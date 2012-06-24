<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>白送潘币，夺神器;充值返利，抢现金</title>
<link type="text/css" href="/Public/images/20110519/css.css" rel="stylesheet" />
<script src="/Public/images/20110519/jquery-1.5.js" type="text/javascript"></script>
<script type="text/javascript" src="http://pdl.126play.com/js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<script>
$(document).ready(function() {
	$("a#movie").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.8'   
	});
	$("a#movie1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.8'   
	});
});
function startMovie(){
	$("#movie").click(); 
}
function startMovie1(){
	$("#movie1").click(); 
}
function closeMovie(){$.fancybox.close();}
</script>
<script>
	var number = new Array();
	function zfb_in(obj){
		if(obj==6){document.getElementById("a_"+obj).style.backgroundPosition="-800px 1px";}
		if(obj==5){document.getElementById("a_"+obj).style.backgroundPosition="-641px 1px";}
		if(obj==4){document.getElementById("a_"+obj).style.backgroundPosition="-482px 1px";}
		if(obj==3){document.getElementById("a_"+obj).style.backgroundPosition="-323px 1px";}
		if(obj==2){document.getElementById("a_"+obj).style.backgroundPosition="-164px 1px";}
		if(obj==1){document.getElementById("a_"+obj).style.backgroundPosition="-5px 1px";}
	}
	function zfb_out(obj){
		if(obj==6){document.getElementById("a_"+obj).style.backgroundPosition="500px 1px";}
		if(obj==5){document.getElementById("a_"+obj).style.backgroundPosition="200px 1px";}
		if(obj==4){document.getElementById("a_"+obj).style.backgroundPosition="200px 1px";}
		if(obj==3){document.getElementById("a_"+obj).style.backgroundPosition="200px 1px";}
		if(obj==2){document.getElementById("a_"+obj).style.backgroundPosition="200px 1px";}
		if(obj==1){document.getElementById("a_"+obj).style.backgroundPosition="200px 1px";}
	}
	function on_click(i){
		$.post("/A20110519/index.html",{act:'post'},function(data){
			if(data==-5){alert('登录后才能进行此操作！');location.href="http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110519";return;}
			if(data==201){
				if(i==1){number[1]="1.003";}
				if(i==2){number[1]="1.002";}
				$("#ab_1").css("z-index","1");
				$("#ab_2").css("z-index","2");		
			}
		});
		
	}
	var n=0;
	function toact(){
		if(n==1){alert('数据处理中...');return;}
		n=1;
		$.post("/A20110519/index.html",{act:"post",cate:"new"},function(data){
				if(data==-5){alert('登录后才能进行此操作！');location.href="http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110519";return;}
				if(data==-1){alert('您的账号已经处于激活状态！不能重复操作！');return;}
				if(data==200){location.href='http://u.126play.com/Index/activate.html';}
				n=0;
		});
	}
	
	var m=0;
	function toprice(){
		if(m==1){alert('数据处理中...');return;}
		m=1;
		$.post("/A20110519/index.html",{act:"post",cate:"level",server:number[1]},function(data){
				if(data==-5){alert('登录后才能进行此操作！');location.href="http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110519";return;}
				if(data==522){alert('请选择您的服务器！');return;}
				if(data==533){alert('该服务器下您还没有创建任何角色！');return;}
				if(data==544){alert('您的等级还不到30级，赶紧练级吧！');return;}
				if(data==555){alert('新人王礼包您已经领取过了，每个账号只能领取一次！');return;}
				if(data==200){alert('恭喜您获得了新人王礼包，点此查看礼包信息！');location.href="http://u.126play.com/Prop/info.html";return;}
				m=0;
		});
	}
	</script>
</head>

<body>
<div class="body">
	<?Temp("Public::top");?>
	<div class="m">
		<div class="m_div1">
			<div class="mdiv">
				<div>2011.5.26--测试结束</div>
				<div class="mmdiv">本次测试新激活的账号</div>
				<div class="mmdiv">
					活动规则<br />
					1、本次活动只针对本次测试新激活的账号。<br />
					2、可以通过<a href="http://u.126play.com/Prop/info.html">兑换信息</a>查看兑换码，进入<a href="http://u.126play.com/Prop/index.html">帐号兑换</a>页面兑换礼包兑换需要登录您的帐号。<br />
					3、每个帐号两礼包各限领一次。<br />
					<span>4、“浮云礼包”只要<strong>本次测试新激活的用户</strong>，激活后自动获取“浮云礼包”兑换码，无需手动领取。<br />
					5、“新人王礼包”需要在<strong>新服角色等级达到30级，手动点击</strong>“领取新人王礼包”才能获得“新人王礼包”兑换码。<br />
					6、浮云礼包与新人王礼包内道具只能兑换到新服，电信或者网通，请谨慎选择。</span>
				</div>
			</div>
			
		</div>
		<div class="m_div2">
			<div id="ab_1" style="position:absolute; z-index:2; width:530px;background:url(/Public/images/20110519/kuang_.jpg) center top no-repeat;">
			<table cellpadding="0" cellspacing="0" >
				<tr>
					<td width="120" height="35" align="right"><a href="javascript:void(0)" onclick="on_click(1)"><img src="/Public/images/20110519/b2.jpg" height="35" width="95" border="0" align="absmiddle" /></a></td>
					<td width="80" height="35">&nbsp;</td>
					<td width="120" height="35"><a href="javascript:void(0)" onclick="on_click(2)"><img src="/Public/images/20110519/b3.jpg" height="34" width="92" border="0" align="absmiddle" /></a></td>
				</tr>
				<tr>
					<td height="120">&nbsp;</td>
					<td height="120">&nbsp;</td>
					<td height="120">&nbsp;</td>
				</tr>
				<tr>
					<td height="20">&nbsp;新用户激活就送你</td>
					<td>&nbsp;</td>
					<td align="center">&nbsp;&nbsp;LVUP↑30再送你</td>
				</tr>
			</table>
			</div>
			<div id="ab_2" style="position:absolute; z-index:1; width:530px;background:url(/Public/images/20110519/kuang.jpg) center top no-repeat;">
				<table cellpadding="0" cellspacing="0" >
				<tr>
					<td width="120" height="35" align="right"><a href="javascript:void(0)" onclick="on_click(1)"><img src="/Public/images/20110519/b2.jpg" height="35" width="95" border="0" align="absmiddle" /></a></td>
					<td width="80" height="35">&nbsp;</td>
					<td width="120" height="35"><a href="javascript:void(0)" onclick="on_click(2)"><img src="/Public/images/20110519/b3.jpg" height="34" width="92" border="0" align="absmiddle" /></a></td>
				</tr>
				<tr>
					<td height="120"><div class="td_div1" onclick="startMovie()"></div></td>
					<td height="120">&nbsp;</td>
					<td height="120"><div class="td_div2" onclick="startMovie1()"></div></td>
				</tr>
				<tr>
					<td height="20">&nbsp;新用户激活就送你</td>
					<td>&nbsp;</td>
					<td align="center">&nbsp;&nbsp;LVUP↑30再送你</td>
				</tr>
			</table>
			</div>
		</div>
		
	</div>
</div>

<!--浮云礼包-->
<a id="movie" href="#spnjy_dl"></a>
<div style="display:none">
	<div id="spnjy_dl">
		<div style="background:url(/Public/images/20110519/fylb.jpg) center top no-repeat; width:635px; height:783px;">
			<div style=" margin:20px auto; width:160px; height:52px; cursor:pointer;" onclick="toact()"></div>
		</div>
	</div>
</div>
<!--新人王礼包-->
<a id="movie1" href="#spnjy_dl1"></a>
<div style="display:none">
	<div id="spnjy_dl1">
		<div style="background:url(/Public/images/20110519/xrwlb.jpg) center top no-repeat; width:635px; height:516px;">
			<div style=" margin:20px auto; width:203px; height:52px; cursor:pointer;" onclick="toprice()"></div>
		</div>
	</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
