<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>道具转换 - 潘多拉活动专题</title>
<link type="text/css" rel="stylesheet" href="/Public/images/20110729/css.css" />
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<script type="text/javascript" src="/Public/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js/fancybox/jquery.fancybox-1.3.1.css" />
<script>
$(document).ready(function(){
	$("a#page2_kuang_1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.9'   
	});
	$("a#page2_kuang_2").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.9'   
	});
	$("a#page2_kuang_3").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.9'   
	});
});
var my = new Array();
my[1]=1;
var varm=0;
var arm;
function onn(c){
	if(varm==0){
	varm=1;
	if(document.getElementById("q1").style.display==""){arm=$("#arm1").val();}
	if(document.getElementById("q2").style.display==""){arm=$("#arm2").val();}
	if(document.getElementById("q3").style.display==""){arm=$("#arm3").val();}
	if(arm==""){alert('请选择转换的武器');varm=0;return;}
	
	$.post("/A20110729/convert_1",{cid:c,act:'post',server:$("#sell").val(),arm:arm},function(data){
		varm=0;
		if(data==-9){alert('请先登录');location.href="/A20110729";return;}
		if(data==-2){$("#page2_kuang_1").click();return;}
		if(data==-7){alert('仓库空间不够！');return;}
		if(data==200){$("#page2_kuang_2").click();return;}
		//$("#sell").val();
		if(data==-1){alert('您在本服务器没有游戏帐号');return;}
		//alert(data);

		$("#page2_kuang_3").click();
	});
	}
}
function closeMovie(){$.fancybox.close();}
$(document).ready(function(){
	for(var i=1;i<=10;i++)
	{
		$("#u"+i).click(function(){
			abc($(this).attr("id"));
		});
	}
});
function abc(i){
	for(var j=1;j<=13;j++)
	{
		$("#q"+j).css("display","none");
	}
	var k=i.replace("u","")
	$("#q"+k).css("display","");
	my[1]=k;
}
</script>
</head>

<body>
<Div class="body">
	<div class="left l"></div>
	<div class="left w">
		<div class="t">
			<div>
				<a href="http://pdl.126play.com/" target="_blank" title="进入官网"></a>
				<a href="http://bbs.pdl.126play.com/" target="_blank" title="互动中心"></a>
			</div>
		</div>
		<div class="time">
			<div>
				
			</div>
		</div>
		<div class="bg_m"></div>
		<div class="page_t">
			<div class="page_t1"><a href="/A20110729"><img src="/Public/images/20110729/page_f.jpg" border="0" /></a></div>
			<div class="page_t2">
				<div id="u1" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_1.gif" /><br>×1</div>
				<div id="u2" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_2.jpg" /><br>×1</div>
				<div id="u3" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_3.jpg" /><br>×1</div>
				
				<div id="u4" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_4.jpg" /><br>×1</div>
				<div id="u5" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a5.jpg" /><br>×50</div>
				<div id="u6" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_6.jpg" /><br>×1</div>
				<div id="u7" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a_7.jpg" /><br>×1</div>
				<div id="u8" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a8.jpg" /><br>×1</div>
				<div id="u9" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a9.jpg" /><br>×1</div>
				<div id="u10" style="cursor:pointer; text-align:center; padding-top:8px;"><img src="/Public/images/20110729/a10.jpg" /><br>×50000</div>
			</div>
		</div>
		<div class="page_m">
			<div class="page_mc">
				<div class="page_m1" id="u1">
					<div><a href="javascript:void(0)" id="u1"><img src="/Public/images/20110729/page_b1.jpg" border="0" /></a></div>
					<div><a href="javascript:void(0)" id="u2"><img src="/Public/images/20110729/page_b2.jpg" border="0" /></a></div>
					<div><a href="javascript:void(0)" id="u3"><img src="/Public/images/20110729/page_b3.jpg" border="0" /></a></div>
				</div>
				<div class="page_m2">
					<div class="page_c1" id="q1">
						奖励道具：<br><br>
						<div style="margin-left:30px">+7属性武器一把（火属性）<br>
						说明：一把+5火属性双手剑，5把+6火属性短剑可兑换一把+7火属性双手剑。
						</div><br>
						 
						兑换需求道具：<br>
						<div style="margin-left:30px">+5属性武器一把（火属性）<br>
						+6短剑*5（火属性）<br></div><br>
						需要转换成物品：<br><br>
						<div style="margin-left:30px">
						<select id="arm1">
							<option value="">请选择转换的武器</option>
							<option value="252">炎剑·亚克西</option>
							<option value="452">炎剑·勒布</option>
							<option value="652">炎斧·阿克斯</option>
							<option value="852">炎斧·梅尔特</option>
							<option value="1052">炎锤·伊拉普</option>
							<option value="1252">炎锤·玛格丽特</option>
							<option value="1493">炎枪·弗雷阿斯</option>
							<option value="1652">炎枪·米利昂</option>
							<option value="1862">炎剑·萨马乌斯匕首</option>
							<option value="2042">炎爪·布雷克</option>
							<option value="2262">炎弓·菲尼克斯</option>
							<option value="2442">炎弩·伊芙利特</option>
							<option value="2652">炎杖·巴斯特</option>
							<option value="2852">炎杖·依古尼特</option>
						</select>
						</div>


					</div>
					<div class="page_c1" id="q2" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">+7属性武器一把（冰属性）<br>
						说明：一把+5冰属性双手剑，5把+6冰属性短剑可兑换一把+7冰属性双手剑。
						</div><br>
						 
						兑换需求道具：<br>
						<div style="margin-left:30px">+5属性武器一把（冰属性）<br>
						+6短剑*5（冰属性）<br></div><br>
						需要转换成物品：<br><br>
						<div style="margin-left:30px">
						<select id="arm2">
							<option value="">请选择转换的武器</option>
							<option value="251">冰剑·艾希克</option>
							<option value="451">冰剑·贝尔克</option>
							<option value="651">冰斧·波尔特</option>
							<option value="851">冰斧·伊兰特</option>
							<option value="1051">冰锤·弗利金</option>
							<option value="1251">冰锤·弗洛泽</option>
							<option value="1492">冰枪·斯丁卡</option>
							<option value="1651">冰枪·赛依兰</option>
							<option value="1861">冰剑·格拉菲斯匕首</option>
							<option value="2041">冰爪·鲁西亚</option>
							<option value="2261">冰弓·吉特姆</option>
							<option value="2441">冰弩·美人鱼</option>
							<option value="2651">冰杖·弗罗斯特</option>
							<option value="2851">冰杖·布里萨特</option>
						</select>
						</div>
					</div>
					<div class="page_c1" id="q3" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">+7属性武器一把（毒属性）<br>
						说明：一把+5毒属性双手剑，5把+6毒属性短剑可兑换一把+7毒属性双手剑。
						</div><br>
						 
						兑换需求道具：<br>
						<div style="margin-left:30px">+5属性武器一把（毒属性）<br>
						+6短剑*5（毒属性）<br></div><br>
						需要转换成物品：<br><br>
						<div style="margin-left:30px">
						<select id="arm3">
							<option value="">请选择转换的武器</option>
							<option value="255">毒剑·维诺姆</option>
							<option value="455">毒剑·古兰</option>
							<option value="655">毒斧·达姆奈特</option>
							<option value="855">毒斧·格雷姆</option>
							<option value="1055">毒锤·卡洛斯</option>
							<option value="1255">毒锤·特雷德</option>
							<option value="1496">毒枪·佛彼得</option>
							<option value="1655">毒枪·索卡特</option>
							<option value="1865">毒剑·凡特姆匕首</option>
							<option value="2045">毒爪·布拉德萨</option>
							<option value="2265">毒弓·埃尔法</option>
							<option value="2445">毒弩·大蛇</option>
							<option value="2655">毒杖·贝里</option>
							<option value="2855">毒杖·约鲁姆恩</option>
						</select>
						</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q4" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">精准眼镜×1<br>种类:护头类&nbsp;&nbsp;装备部位:头部&nbsp;&nbsp;防御力:5&nbsp;&nbsp;装备等级:1可装备<br>说明:技巧+1 射程距离增加
强化值为+7以上时，魅惑抗性+5%</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">浑浊的体液×100<br>
						荒蛮勋章×400<br>
						断牙×200</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q5" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">热情眼镜×1<br>种类:护头类&nbsp;&nbsp;装备部位:头部&nbsp;&nbsp;防御力:5&nbsp;&nbsp;装备等级:1<br>力量+1 暴击率+1%
强化值+7以上时，灼伤抗性+5%</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">荒蛮勋章×400<br><br>
						皴裂了的爪子×100<br><br>
						粉碎的化石×30</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q6" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">奔放项链×1<br>种类：护符 &nbsp;&nbsp;装备部位：颈部&nbsp;&nbsp;防御力：0  &nbsp;&nbsp; 装备等级：20<br>说明:力量+1 命中+7 击倒抗性+5%
</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">无救的精灵×100<br><br>
						历战勋章×50<br><br>
					贪吃的精灵×100</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q7" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">漂亮眼镜×1<br>种类：护头类 &nbsp;&nbsp;装备部位：头部&nbsp;&nbsp;防御力：1&nbsp;&nbsp;装备等级：1<br>说明:智慧+1 灵感+1</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">荒蛮勋章×400<br><br>
						粉碎的骨头×100<br><br>
						银小耀石×30</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q8" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">言灵项链×1<br>种类：护符&nbsp;&nbsp;装备部位：颈部&nbsp;&nbsp;防御力：0                   装备等级：20<br>说明:技巧+1 智慧+1 魔法攻击力+2%</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">徘徊的精灵×100<br><br>
						历战勋章×50<br><br>
						略熟的精灵×100
						</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q9" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">智慧眼镜×1<br>种类：护头类&nbsp;&nbsp;装备部位：头部&nbsp;&nbsp;防御力：5&nbsp;&nbsp;装备等级：1<br>说明:灵感+1 吟唱速度+3%
强化值+7以上时，晕眩抗性+5%</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">荒蛮勋章×400<br><br>
						有黏性的体液×100<br><br>
						味道很好的肉×20</div>
					</div>
					<!--*-->
					<div class="page_c1" id="q10" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">游戏币×50000</div><br>
						 
						兑换需求道具：<br><br>
						<div style="margin-left:30px">酸性体液×15<br><br>
						挥发性体液×20<br><br>
						黑暗宝珠×1</div>
					</div>
					<div style="margin-top:10px; text-align:center;">
					<div class="left" style="width:300px; text-align:right; padding-top:5px;">选择服务器：<select id="sell"><?foreach($servers as $key => $val){?><option value="<?=$key?>"><?=$val?></option><?}?></select></div>
					<div class="right" style="width:300px; text-align:left;"><a href="javascript:void(0)" onclick="onn(my[1])"><img src="/Public/images/20110729/page_b.jpg" border="0" /></a></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="bg_f">
			<div>
			健康游戏忠告：抵制不良游戏，拒绝盗版游戏，注意自我保护，谨防受骗上当，适度游戏益脑，沉迷游戏伤身，合理安排时间，享受健康生活。<br />
			·<a href="http://pdl.126play.com/zp.html" target="_blank">招贤纳士</a> 
			·<a href="http://pdl.126play.com/xieyi.html" target="_blank">用户协议</a> 
			·<a href="http://kf.126play.com/Home/Index/question" target="_blank">常见问题</a> 
			·<a href="http://bbs.pdl.126play.com/" target="_blank">互动中心</a> 
			·<a href="http://kf.126play.com/" target="_blank">客服中心</a><br />
			文网进字[2011]021号 | 新出审字[2011]460号 <br />
			增值电信业务许可证编号：沪B2-20110055 | 《版署电子出版》编号:ISBN 978-7-89989-019-6 <br />
			Copyright @ 2010 pdl.126play.com All Rights Reserved
			</div>
		</div>
	</div>
	<div class="left r"></div>
</Div>
<!--弹 1 2 3-->
<a href="#page2_kuang1" id="page2_kuang_1"></a>
<div style="display:none;">
	<div id="page2_kuang1">
		<div class="page2_kuang1">
			<div class="close"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110729/close.jpg" border="0" /></a></div>
		</div>
	</div>
</div>

<a href="#page2_kuang2" id="page2_kuang_2"></a>
<div style="display:none;">
	<div id="page2_kuang2">
		<div class="page2_kuang2">
			<div class="close"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110729/close.jpg" border="0" /></a></div>
		</div>
	</div>
</div>

<a href="#page2_kuang3" id="page2_kuang_3"></a>
<div style="display:none;">
	<div id="page2_kuang3">
		<div class="page2_kuang3">
			<div class="close"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110729/close.jpg" border="0" /></a></div>
		</div>
	</div>
</div>
<?Temp("Public::foot");?>
</body>
</html>
