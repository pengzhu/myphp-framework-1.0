<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>多玩专题</title>
<link href="/Public/images/20110802/css.css" rel="stylesheet" type="text/css" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script>
function abc(i){
	var act=i;
	$("#act").val(act);
	buka()
}
function buka(){
	$("#kuang_buka").fadeIn(200);
}
function abc_(){
	if($("#loginid").val().length>16){alert("姓名字符在8个字内");return;}
	if($("#addr").val().length>100){alert("地址字符在50个字内");return;}
	if($("#qq").val().length>20){alert("QQ字符在20个数字内");return;}
	if($("#phone").val().length>12){alert("电话必须在11个数字内");return;}
	document.my.submit();
}
window.onload = function(){
	var scrc=document.documentElement.scrollTop + document.body.scrollTop;
	document.getElementById("kuang_buka").style.top=(scrc + 150)+"px";
	window.onscroll = function(){
		var scrollTop = document.documentElement.scrollTop + document.body.scrollTop;
		if(scrollTop){
			document.getElementById("kuang_buka").style.top=(scrollTop + 150)+"px";
		}
	}
	
};
</script>
</head>
<body>
<div class="body">
  <div class="l">
  <div class="l2"></div>
  </div>
  <div class="m">
	<!--弹出-->
  <div id="kuang_buka" style="display:none;">

		<form action="/A20110802/act.html" method="post" name="my">
		<input id="act" type="text" name="act" style="display:none;">
		<table cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td align="center" colspan="2">请填写您的资料，以便我们发送奖品</td>
			</tr>
			<tr>
				<td align="right">您的姓名：</td>
				<td align="left"><input type="text" id="loginid" name="loginid"></td>
			</tr>
			<tr>
				<td align="right">您的地址：</td>
				<td align="left"><input type="text" id="addr" name="addr"></td>
			</tr>
			<tr>
				<td align="right">您的QQ号：</td>
				<td align="left"><input type="text" id="qq" name="qq"></td>
			</tr>
			<tr>
				<td align="right">您的电话：</td>
				<td align="left"><input type="text" id="phone" name="phone"></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><img style="cursor:pointer;" onclick="abc_()" src="/Public/images/20110802/buka_butt.jpg" border="0"></td>
			</tr>
		</table>
		</form>

  </div>
    <div class="m1">
	  <div class="n3">
	      <div class="n4"><a href="#" class="n5"></a><a href="#"class="n6" ></a></div>
		  <div class="n4"><a href="#" class="n7"></a><a href="#"class="n8" ></a></div>
	  </div>
	</div>
    <div class="m2">
      <div class="m3"></div>
      <div class="m4"></div>
    </div>
    <div class="mh">

      <div class="m5">
	  	 
        <div class="ma">活动时间：8月03日~8月17日&nbsp;&nbsp;&nbsp;&nbsp;</div>
        <div class="mc"> 1、投票给自己最喜欢的潘多拉种族填写正确的个人资料。<br/>
          2、活动结束后在每个职业中抽取10名玩家赠送10元Q币<br/>
          3、活动结束后会在所有玩家中挑选5个玩家送雷蛇鼠标一个<br/>
          4、活动结束后，在所有玩家中抽取3名玩家赠送潘多拉拉杆箱一个<br/>
          5、每天每个IP地址只能投一次票<br/>
          6、活动结束后，由多玩进行奖品发放，请正确填写地址<br/>
        </div>
        <div class="md"><img src="/Public/images/20110802/m5_b.jpg" border="0"/></div>
      </div>
      <div class="m6">
        <div class="mc"> 《潘多拉》是以策略对抗为主要玩点的日系网络
          游戏产品。其游戏画面采用3D写实风格。游戏背景建立在有
          中世纪欧洲风格的世界中，同时其丰富的系统和职业自由性
          也深受玩家的喜爱。 </div>
        <div class="me">活动最终解释权归上海烈风和多玩拥有</div>
      </div>
    </div>
    <div class="mm">
<!--	  1                                                          -->
      <div class="m7">
        <div class="mi">
          <span>人类</span><br/>
          推荐职业：	战士 圣职者<br/>
          战士：均衡的发展潜力和药物<br/>
          运用能力，能够完全体现战士的攻防兼备的特色。<br/>
          圣职者：	均衡的成长加上抵抗，无不是持
          久作战队伍支援的最佳人选。<br/>
        </div>
        <div class="mh"><img src="/Public/images/20110802/c1.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act1?> 票</div>&nbsp;<img onclick="abc(1)" src="/Public/images/20110802/m0.jpg" border="0" />
		</div>
      </div>
<!--	  2                                                             -->	  
     <div class="m7">
        <div class="mi">
          <span>精灵</span><br/>
          推荐职业：斥候 魔法师<br/>
          斥候：	他的远望天赋技能使得他在作为斥候攻击敌人的时候射程范围更广，准确率更高。<br/>
          魔法师：	自然调和的天赋技能可以使他们的MP值增加，使得他们能更好的发挥控制和持续作战。	<br/>

        </div>
        <div class="mh"><img src="/Public/images/20110802/c2.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act2?> 票</div>&nbsp;<img onclick="abc(2)" src="/Public/images/20110802/m0.jpg" border="0" />
		</div>
      </div>
<!--	  5                                                            -->	  
	  <div class="m7">
        <div class="mi">
          <span>暗精灵	</span><br/>
          推荐职业：斥候<br/>
          斥候：	灵敏的感觉，与高直觉的回避，
		除了让他们在攻击中增加致命攻
		击的发生率的同时，也在一定机
		率里回避敌人的攻击。作为斥候
		暗精灵是一个不二人选。<br/>
        </div>
        <div class="mh"><img src="/Public/images/20110802/c3.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act3?> 票</div>&nbsp;<img onclick="abc(3)" src="/Public/images/20110802/m0.jpg" border="0" />
		</div>
      </div>
<!--	  3                                                             -->
	  <div class="m7">
        <div class="mi">
          <span>拉比</span><br/>
          推荐职业：	魔法师<br/>
          魔法师：	天生的魔法抵抗与魔法输出，让
		他们能够将魔法攻击的效果最大
		化。这也似乎预示着他们生来就
		是魔法师的不二人选。<br/>
        </div>
        <div class="mh"><img src="/Public/images/20110802/c4.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act4?> 票</div>&nbsp;<img onclick="abc(4)" src="/Public/images/20110802/m0.jpg" border="0" />
		</div>
      </div>
<!--	  4                                                             -->
	   <div class="m7">
        <div class="mi">
          <span>巨人</span><br/>
          推荐职业：	战士<br/>
          战士：	巨人天生坚硬的皮肤能有效的抵
		挡敌人的攻击，灵活的手腕也可
		给予敌人有效的攻击。视为为队
		伍冲锋陷阵抵挡伤害的首选。<br/>
        </div>
        <div class="mh"><img src="/Public/images/20110802/c5.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act5?> 票</div>&nbsp;<img onclick="abc(5)" src="/Public/images/20110802/m0.jpg" border="0" />
		</div>
       </div>

<!--	  6                                                             -->	  
	  <div class="m7">
        <div class="mi">
          <span> 矮人</span><br/>
          推荐职业：	&nbsp;战士 圣职者	<br/>
          战士：	 &nbsp;   天生怪力让他运用钝器攻击敌人
                时更加得心应手。<br/>
          圣职者：&nbsp;	坚强的意志与保护同伴的决心让
		&nbsp;&nbsp;&nbsp;他成为了攻击系圣职者的最佳人
		选。<br/>
        </div>
        <div class="mh"><img src="/Public/images/20110802/c6.jpg" border="0"/></div>
		<div class="mj">
		<div class="u1"><?=$act6?> 票</div>&nbsp;<img src="/Public/images/20110802/m0.jpg"  onclick="abc(6)" border="0" />
		</div>
      </div>
<!--	  a                                                             -->	  
    </div>
    <div class="mb">
	  <div class="m8">
	       <div class="m9"><a><img src="/Public/images/20110802/c8.jpg" border="0" /></a></div>
		   <div class="m0"><a><img src="/Public/images/20110802/c9.jpg" border="0" /></a></div>
	  </div>
	  <div class="n">
	       <div class="n0"><a><img src="/Public/images/20110802/c0.jpg" border="0" /></a></div>
		   <div class="n1"><a><img src="/Public/images/20110802/c11.jpg" border="0" /></a></div>
		   <div class="n2"><a><img src="/Public/images/20110802/c10.jpg" border="0" /></a></div>
	  </div>
	</div>
    <div class="mf"></div>
  </div>
  <div class="r">
       <div class="r1"></div>
  </div>
</div>

<!--弹出-->

</body>
</html>
﻿