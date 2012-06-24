<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>《潘多拉》OL，期待您的驾临—9月1日！3位潘多拉公主静候您的光临，2011最受期待的新网游，现在即将拉开帷幕！</title>
<link href="/Public/images/20110830/css.css" type="text/css" rel="stylesheet" />
<style type="text/css">
	.gt{ width:100%; height:43px; background:url(/Public/images/20110830/ms_1.jpg) left top no-repeat; text-align:center;}
	.gt ul{ margin-left:10px;}
	.gt li{ float:left; margin-left:5px; display:inline; margin-top:10px;}
</style>
<script src="http://pdl.126play.com/Public/js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script>
var muber=<?=$_SESSION['click_q']?>;
var mui=new Array();

$(document).ready(function(){
	for(var i=1;i<=9;i++){
		mui[i]=0;
		$(".td_"+i).click(function(){
			
			abc($(this).attr("title"));
		})
		
	};

});
function abc(i){
			
			<?if($_SESSION['loginid2']==""){?>
			alert("请登录");
			<?}else{?>
            if(muber!=0){
				if(mui[i]==1){return;}
				//$(".td_"+i).css({background:"url(/Public/images/20110830/td1.jpg)"});
				$(".td_"+i).html("<img src='/Public/images/20110830/tr.jpg' border='0' height='155' width='168'/>")
				
				
				muber=muber-1;
				$.post("/A20110830/prize",{area:muber},function(data){alert(data);});
				mui[i]=1;
				//
				
			}else{
			 alert("抽奖次数已用完");
			 }
			 <?}?>
}

</script>
</head>
<body>

<div class="top">
	<div class="dh">
		<a href="http://pdl.126play.com/" class="sy" title="官方首页"><span>官方首页</span></a>
		<a href="http://www.56mc.com/" style="width:1px; height:1px"><span>全民战歌网</span></a>
		<a href="http://u.126play.com/Index/reg.html" class="zhzc" title="帐号注册"><span>帐号注册</span></a>
		<a href="http://bbs.pdl.126play.com/" class="gflt" title="官方论坛"><span>官方论坛</span></a>
		<a href="http://pdl.126play.com/Download/" class="yxxz" title="游戏下载"><span>游戏下载</span></a>
		<a href="http://u.126play.com/Index/activate.html" class="jhyx" title="激活游戏"><span>激活游戏</span></a>
		<a href="http://pdl.126play.com/Game/" class="yxzl" title="游戏资料"><span>游戏资料</span></a>
	</div>
</div>
<!--middle-->

<div class="m">
	<Div class="m_1">
		<div class="m_l m_l1"><img src="http://act.126play.com/Public/images/20110518/l_bg.jpg" height="154" width="210" /></div>
		<div class="m_l mbg2">
			<?if($_SESSION['loginid2']==""){?>
			<div class="gt"><form action="/A20110830/sign.html" method="post">
			<ul>
			    <li>通行证:<input type="text" name="loginid"/></li>&nbsp;<li>密码:<input type="password" name="password"></li>&nbsp;<li><input type="submit" value="登陆"/></li><li></li>
			</ul></form>
			</div><?}else{?>
			
			<div class="gt">
			<ul>
			    <li><?=$_SESSION['loginid2']?> 欢迎您的登陆</li>&nbsp;<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li><li><a href="/A20110830/loginout">登&nbsp;&nbsp;出</a></h3></li>
			</ul>
			</div>			
			<?}?>
			
			<div>
				<div class="m2_div1">
					<div>
						进新服迎接崭新的开始，冲级同时每天还可以抽奖，等级越高抽奖次数越多哦~！
					</div>
				</div>
				<div class="m_div3">
					<table cellpadding="0" cellspacing="0">
						<tr>
							<td width="100" align="right" height="40">活动时间：</td>
							<td width="400">9月1日——9月8日</td>
						</tr>
						<tr>
							<td align="right" valign="top">活动规则：</td>
							<td>1、抽奖前请登录您的通行证账号，每天都可以进行抽奖。<br />
2、抽奖次数按照您账号内在新服“亚斯蒂亚”等级最高的角色进行判定。每10级增加一次抽奖机会。<br />
（例如：50级角色每天能抽5次奖励，49级角色只能每天抽取4次奖励）<br />
3、等级为登录页面后即刻判定，建议49级用户可以先提升到50级再去抽奖。<br />
4、实物奖励我们将主动联系中奖用户，敬请留意。<br />
5、道具奖励将直接发送“礼包码”。<br />
6、礼包码兑换流程：登录游戏-打开商城-输入序列日并兑换-前往商城管理员-领取礼包奖励。</td>
						</tr>
					</table>
				</div>
				<table cellpadding="0" cellspacing="6" class="m2_div2">
					<tr>
						<td class="td_1" id="td_1" title="1" valign="top"></td>
						<td class="td_2" id="td_2" title="2" valign="top"></td>
						<td class="td_3" id="td_3" title="3" valign="top"></td>
					</tr>
					<tr>
						<td class="td_4" id="td_4" title="4" valign="top"></td>
						<td class="td_5" id="td_5" title="5" valign="top"></td>
						<td class="td_6" id="td_6" title="6" valign="top"></td>
					</tr>
					<tr>
						<td class="td_7" id="td_7" title="7" valign="top"></td>
						<td class="td_8" id="td_8" title="8" valign="top"></td>
						<td class="td_9" id="td_9" title="9" valign="top"></td>
					</tr>
				</table>
				<!--<div class="m2_div_1">
								<input type="text" value="123456789asdasdasd" />
							</div>
							<div class="m2_div_2" title="复制">
								
							</div>-->
				<div style="height:200px; width:770px; margin:auto; ">
				    <div style="width:100%;width:770px; height:18px;"> 奖励内容：</div>
					<div style="width:100%;width:770px; height:auto; line-height:17px;">
<p style="color:#FDF799;">一等奖：
IPAD2                        价值3688元 <br/>
           
二等奖：
重甲马具一套        价值699元 <br/>

三等奖：
风咏蒲扇*1             价值299元 <br/>

四等奖：
锻造礼包（工匠金槌*1、三级火符石[物理，魔法]各*1） <br/>
</p>      
<p> 
您还可能得到如下奖励其中一种：
</p>
<p style="color:#FDF799;">
1、升级礼包（小型生命药剂*10、小型魔力药剂*10）<br/>          
2、红包*1                      <br/>
3、蝙蝠之翼*2              <br/>
4、试用装物理攻击香油*2         <br/>        
5、试用装生命香油*2            <br/>
</p>			
				    </div>
				</div>
			</div>
			
			<div align="right"><img src="http://act.126play.com/Public/images/20110518/m_bgf.jpg" width="975" height="16" /></div>
		</div>
		<div class="m_l m_l1"><img src="http://act.126play.com/Public/images/20110518/r_bg.jpg" height="154" width="230" /></div>
	</Div>
</div>

</body>
</html>
<?Temp("Public::foot");?>