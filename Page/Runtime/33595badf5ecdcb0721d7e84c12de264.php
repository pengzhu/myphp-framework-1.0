<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<link type="text/css" href="/Public/images/20110519/css.css" rel="stylesheet" />
<script src="/Public/images/20110519/jquery-1.5.js" type="text/javascript"></script>
<script type="text/javascript" src="http://pdl.126play.com/js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<script type="text/javascript" src="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="http://pdl.126play.com/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<script>
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
		if(i==1){number[1]="dianxin";}
		if(i==2){number[1]="wangtong"}
		$("#ab_1").css("z-index","1");
		$("#ab_2").css("z-index","2");
	}
	</script>
</head>

<body style="background:url(/Public/images/20110519/body_5.jpg) center top no-repeat;">
<div class="body" style="height:1600px;">
	<?Temp("Public::top");?>
	<div class="m">
		<div class="m_div1">
			<div class="mdiv" >
				<div>2011.5.26--测试结束</div>
				<div class="mmdiv">角色满20级，并且加入公会</div>
				<div class="mmdiv">
					活动规则<br />
					1、 人物角色满20级，并且加入公会。<br />
					2、 将根据角色进行判定，每个<span>角色</span>限领一次。<br />
					3、奖励通过道具码方式进行发送，金块只能在对应角色所在服务器使用，由于每个<span>角色</span>限领一次，所以，请谨慎选择需要发送的服务器。<br />
					4、请务必在达到要求后来页面点击“<span>我来领取金块啦</span>”，当天领取昨天的奖励。<br />
					5、奖励以<span>兑换码</span>方式发送至账号内，兑换后可以得到2个售店价高达10000/个的道具“金块”。<br />
					6、可以通过<a href="http://u.126play.com/Prop/info.html" target="_blank">我的兑换信息</a>查看兑换码→进入<a href="http://u.126play.com/Prop/info.html" target="_blank">道具兑换</a>页面兑换礼包（需要登录账号）。
				</div>
				
			</div>
			
		</div>
		<div class="m_div2">
			<div class="page_5">
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td width="113"><a onclick="on_click('1.001')" href="javascript:void(0)" title="双线测试专区"></a></td>
						<td width="113"><a onclick="on_click('1.003')" href="javascript:void(0)" title="电信测试专区"></a></td>
						<td width="113"><a onclick="on_click('1.002')" href="javascript:void(0)" title="网通测试专区"></a></td>
					</tr>
				</table>
				<script>
				var serv = '';
				var hasclick = 0;
				function on_click(i){
					if(hasclick==1){alert('请求处理中，请稍后..');return;}
					hasclick=1;
					serv = i;
					$.post("/A20110519/a5.html",{act:'post',server:i},function(data){
						if(data==-1){alert('请先登录！');location.href='http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110519/a5.html';}
						if(data==-3){alert('您在该服务器没有角色！请另外选择！');}
						if(data==201){
							$("#bu_5").html("<a href='javascript:getprice();'><img src='/Public/images/20110519/bu_5.jpg' height='44' width='136' border='0' /></a>");	
						}
						hasclick=0;
					});
				}
				function getprice(){
					$("#bu_5").html("<img src='/Public/images/20110519/bu_5.jpg' height='44' width='136' border='0' />");	
					$.post("/A20110519/a5.html",{act:'post',server:serv,p:1},function(data){
						if(data==-1){alert('请先登录！');location.href='http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110519/a5.html';}
						if(data==-3){alert('您在该服务器没有角色！请另外选择！'); return;}
						if(data==522){alert('每个账号最多只能领取5次该礼包，您已经不能再领了！');}
						if(data==201){alert('领取不成功，原因：您可能领取过了或还不够条件领取！');}
						if(data==200){
							alert('礼包领取成功！点击查看我的道具仓库！');
							location.href="http://u.126play.com/Prop/info.html";
						}
						$("#bu_5").html("<a href='javascript:getprice();'><img src='/Public/images/20110519/bu_5.jpg' height='44' width='136' border='0' /></a>");
					});	
				}
				</script>
			</div>
			<div id="bu_5" style="margin-top:85px; text-align:center;"><img src="/Public/images/20110519/bu_5_.jpg" height="44" width="136" border="0" /></div>
		</div>
		
	</div>
	<div  style="margin:80px 0 0 110px;">
		登录账号→选择服务器→点击“我来领取金块啦”→符合获奖条件→自动获得礼包兑换码→前往道具兑换页面→兑换道具→完成
	</div>
	<div style=" margin:80px 0 0 110px;"><img src="/Public/images/20110519/hj_5.jpg" height="34" width="43" align="absmiddle" /> *2 售店价高达10000/个的道具</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
