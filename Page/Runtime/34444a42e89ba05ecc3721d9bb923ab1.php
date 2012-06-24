<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>新手指引</title>
<link type="text/css" href="/Public/images/20110714/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.5.js"></script>
<script src="/Public/js/20110714.js"></script>
<script>
var userid=<?=$userid?>;
var my=new Array();
$(document).ready(function(){
	
	$(".js_title").click(function(){abc2($(this).attr("class"))});
	$(".js_title_jn").click(function(){abc2($(this).attr("class"))});
	$(".js_title_jn2").mouseout(function(){abc2($(this).attr('class'))});
	
	$(".haoyou").click(function(){abc3($(this).attr("class"))});
	$(".hyzx").click(function(){abc3($(this).attr("class"))});
	$(".hyfl").click(function(){abc3($(this).attr("class"))});
	$(".hygn").click(function(){abc3($(this).attr("class"))});
	
	$(".qbfp").click(function(){abc4($(this).attr("class"))});
	$(".spqd").click(function(){abc5($(this).attr("class"))});
	$(".o1").click(function(){
		if(userid==0){alert("请登录");return;}
		if($(".o1_1").css("display")=="none"){
			$(".o1_1").fadeIn(0);
		}else{
			$(".o1_1").fadeOut(0);
		}
	})
	$(".o2").click(function(){
		if(userid==0){alert("请登录");return;}
		if($(".o2_2").css("display")=="none"){
			$(".o2_2").fadeIn(0);
		}else{
			$(".o2_2").fadeOut(0);
		}				
	})
	$(".o3").click(function(){
		if(userid==0){alert("请登录");return;}
		if($(".o3_3").css("display")=="none"){
			$(".o3_3").fadeIn(0);
		}else{
			$(".o3_3").fadeOut(0);
		}
	})
	$(".o4").click(function(){
		if(userid==0){alert("请登录");return;}
		if($(".o4_4").css("display")=="none"){
			$(".o4_4").fadeIn(0);
		}else{
			$(".o4_4").fadeOut(0);
		}
	})
	$(".o5").click(function(){
		if(userid==0){alert("请登录");return;}
		if($(".o5_5").css("display")=="none"){
			$(".o5_5").fadeIn(0);
		}else{
			$(".o5_5").fadeOut(0);
		}
	})
	for(var divt=1;divt<=5;divt++)
	{
		$("#div"+divt).css("display","none");
		$(".o"+divt).click(function(){
			
			abc1($(this).attr("class"));
		});
	}
	$("#div1").css("display","");
});
function abc1(i){
if(i=="o1"){my[1]=1;};if(i=="o2"){my[2]=1;};if(i=="o3"){my[3]=1;};if(i=="o4"){my[4]=1;};if(i=="o5"){my[5]=1;};if(my[1]==1&&my[2]==1&&my[3]==1&&my[4]==1&&my[5]==1){
alert("进入下一指引");for(var divt=1;divt<=5;divt++){$("#div"+divt).css("display","none");}$(".position").css("display","none");$(".position").fadeIn(200);$("#div2").fadeIn(200);}else{return;}}
function abc2(i){if(i=="js_title"){my[6]=1;};if(i=="js_title_jn"){my[7]=1;};if(i=="js_title_jn2"){my[8]=1;};if(my[6]==1&&my[7]==1&&my[8]==1){alert("进入下一指引");for(var divt=1;divt<=5;divt++){$("#div"+divt).css("display","none");}$(".position").css("display","none");$(".position").fadeIn(200);$("#div3").fadeIn(200);}else{return;}}
function abc3(i){if(i=="haoyou"){my[9]=1;};if(i=="hyzx"){my[10]=1;};if(i=="hyfl"){my[11]=1;};if(i=="hygn"){my[12]=1;};if(my[9]==1&&my[10]==1&&my[11]==1&&my[12]==1){alert("进入下一指引");for(var divt=1;divt<=5;divt++){$("#div"+divt).css("display","none");}$(".position").css("display","none");$(".position").fadeIn(200);$("#div4").fadeIn(200);}else{return;}}
function abc4(i){
	if(i=="qbfp"){my[12]=1;};
	if(my[12]==1){
		alert("进入下一指引");
		for(var divt=1;divt<=5;divt++)
		{
			$("#div"+divt).css("display","none");
		}
		$(".position").css("display","none");
		$(".position").fadeIn(200);
		$("#div5").fadeIn(200);
	$(".ks_img").css("display","none");
	}else{
		return;
	}
}
function abc5(i){
	if(i=="spqd"){my[13]=1;};
	if(my[13]==1){
		for(var divt=1;divt<=5;divt++)
		{
			$("#div"+divt).css("display","none");
		}
	}else{
		return;
	}
	setTimeout("z()",2000);
}
function z(){
	var m=1;
	for(var k=1;k<=13;k++)
	{
		if(my[k]!=1){
			m=0;alert(k);
		}
	}
	if(m==1){alert("指引完成");location.href="/A20110714/size?loginid=<?=$loginid?>";}
	else if(m==0){alert("指引未完成")}
}
</script>
</head>

<body>
<div style="margin:450px auto; width:1024px; height:967px;">
	<?if(islogin()){?>
	<div style=" margin-left:824px; top:350px; position:absolute;  width:200px; height:36px;">
		<a href="http://u.126play.com/Index/loginout.html?url=http://act.126play.com/A20110714"><img src="/Public/images/20110714/page21_5.gif" border="0"></a>
	</div>
	<?}else{?>
	<div style=" margin-left:764px; top:350px; position:absolute;  width:200px; height:36px;">
		<a href="http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110714"><img src="/Public/images/20110714/page21_3.gif" border="0"></a> 
		<a href="http://u.126play.com/Index/reg.html?url=http://act.126play.com/A20110714"><img src="/Public/images/20110714/page21_4.gif" border="0"></a>
	</div>
	<?}?>
	<div>
		<div class="position">
			<Div id="div1">
			<!---->
			<div class="br_title">
				<div class="o1" title="目标信息"></div>
				<div class="o2" title="发送密语"></div>
				<div class="o3" title="邀请入队"></div>
				<div class="o4" title="交易"></div>
				<div class="o5" title="加为好友"></div>
			</div><!--目标人物菜单按钮-->
			<div class="o1_1" style="display:none;"></div>
			<div class="o2_2" style="display:none;"></div>
			<div class="o3_3" style="display:none;"></div>
			<div class="o4_4" style="display:none;"></div>
			<div class="o5_5" style="display:none;"></div>
			<!--目标人物信息说明，鼠标-->
			</Div>
			<Div id="div2">
				<div class="js_title" title="角色菜单按钮"></div><!--角色菜单按钮-->
				<div class="js_title_bg" style="display:none;"></div>
				<div class="js_title1" style="display:none;">
					<div class="js_title_jn" title="技能按钮"></div>
					<div class="js_title1_" title="属性点说明"></div>
				</div>
				<div class="js_title_jn1" style="display:none;">
					<div class="js_title_jn2" title="属性说明"></div>
					<div class="js_title_jn1_bg" style="display:none;"></div>
					<div class="js_title_jn3" title="角色按钮"></div>
				</div>
				<div class="js_title1_bg" style="display:none;"></div>
				<!---->
			</Div>
			<Div id="div3">
				<div class="haoyou_bg" style="display:none;"></div>
				<div class="haoyou" title="好友菜单"></div><!--好友菜单按钮-->
				<div class="haoyou1" style=" margin-top:190px; display:none; left:165px;"><!--好友信息框-->
					<div class="gbhy" title="关闭"></div>
					<div class="hyzx" title="在线"></div>
					<div style="display:none;" class="hyzx_"><img src="/Public/images/20110714/hyzx_.gif" /></div>
					<div class="hyfl" title="建立分类"></div>
					<div class="hygn" title="功能"></div>
					<div class="hygn_" style="display:none;"><img src="/Public/images/20110714/hygn_.gif" /></div>
				</div>
				<div class="hyfl_" style="display:none;"><img src="/Public/images/20110714/hyfl_.gif" /></div>
			</Div>
			<Div id="div4">
				<div class="kss" style="display:none;"></div>
				<div class="ks" title="开始菜单"></div><!--开始按钮-->
				<div class="ks_img" id="ks_img1" style="display:none;"><!--开始菜单-->
					<div class="c1" title="队伍"></div><!--队伍按钮-->
				</div>
				<div class="duiwu" style="display:none;"><!--队伍菜单-->
					<div title="建立队伍" class="d1"></div>
				</div>
				<div class="duiwu1" style="display:none;"><!--确认建立-->
					<div class="jl" title="建立"></div>
				</div>
				<div class="duiwu2" style="display:none;"><!--组队邀请确认-->
					<div class="yq" title="邀请"></div>
					<div class="fq" title="放弃"></div>
				</div>
				<div class="duiwu3" style="display:none;"><!--组队分配设置-->
					<div class="qbfp" title="全部分配"></div>
				</div>
			</Div>
			<Div id="div5">
				<div class="kss" style="display:none;"></div>
				<div class="ks" title="开始菜单"></div><!--开始按钮-->
				<div class="ks_img" id="ks_img2" style="display:none;"><!--开始菜单-->
					<div class="c2" title="摆摊"></div><!--摆摊按钮-->
				</div>
				<div class="baitan" style="display:none;"><!--开始摆摊-->
					<div class="bt" title="开始摆摊"></div>
				</div>
				<div class="shangpin" style="display:none;"><!--选择商品-->
					<!--<div class="sp1_gb" title="关闭"></div>
					<div class="sp2_gb" title="关闭"></div>-->
					<div class="shangpin1">
						<div class="spqd" title="确认摆摊" style="display:none;"></div>
					</div>
					<div class="shangpin2">
						<div class="shangpin21" title="放入物品"></div>
					</div>
				</div><!--摆摊选择商品-->
			</Div>
		</div>
	</div>
</div>

</body>
</html>
