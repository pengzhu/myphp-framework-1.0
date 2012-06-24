<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>道具换金币 - 潘多拉活动专题</title>
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
function onn(c){
	if(varm==0){
	varm=1;
	$.post("/A20110729/convert_2",{cid:c,act:'post',server:$("#sell").val()},function(data){
		varm=0;
		if(data==-9){alert('请先登录');location.href="/A20110729";return;}
		if(data==-2){$("#page2_kuang_1").click();return;}
		if(data==-7){alert('仓库空间不够！');return;}
		if(data==200){$("#page2_kuang_2").click();return;}
		if(data==-1){alert('您在本服务器没有游戏帐号');return;}
		alert(data);

		//$("#page2_kuang_3").click();
	});
	}
}
function closeMovie(){$.fancybox.close();}
var t=new Array();

$(document).ready(function(){
	for(var i=1;i<=5;i++)
	{
		$("#u"+i).click(function(){
			abc($(this).attr("id"));
		});
	}
});
function abc(j){
	//alert(j);return;
	for(var i=1;i<=10;i++)
	{
		$("#q"+i).css("display","none")
		t[i]=1;
	}
	//$("."+j).css("border","red 1px solid")
	var k=j.replace("u","")
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
				<div id="u1" style="cursor:pointer;"><img src="/Public/images/20110729/sss.gif" class="b1" style="cursor:pointer;"/></div>
				<div id="u2" style="cursor:pointer;"><img src="/Public/images/20110729/sss.gif" class="b2" style="cursor:pointer;"/><br>×5</div>
				<div id="u3" style="cursor:pointer;"><img src="/Public/images/20110729/sss.gif" class="b3" style="cursor:pointer;"/><br>×10</div>
				<div id="u4" style="cursor:pointer;"><img src="/Public/images/20110729/sss.gif" class="b4" style="cursor:pointer;"/><br>×20</div>
				<div id="u5" style="cursor:pointer;"><img src="/Public/images/20110729/sss.gif" class="b5" style="cursor:pointer;"/><br>×50</div>
				<div id="u6"><img src="/Public/images/20110729/no.gif" class="b6" style="cursor:pointer;"/></div>
				<div id="u7"><img src="/Public/images/20110729/no.gif" class="b7" style="cursor:pointer;"/></div>
				<div id="u8"><img src="/Public/images/20110729/no.gif" class="b8" style="cursor:pointer;"/></div>
				<div id="u9"><img src="/Public/images/20110729/no.gif" class="b9" style="cursor:pointer;"/></div>
				<div id="u10"><img src="/Public/images/20110729/no.gif" class="b10" style="cursor:pointer;"/></div>
			</div>
		</div>
		
		<div class="page_m">
			<div class="page_mc">
				<div class="page3_m1">
					<div><a href="javascript:void(0)"><img src="/Public/images/20110729/page3_1.jpg" border="0" /></a></div>
					<div><a href="javascript:void(0)"><img src="/Public/images/20110729/page3_2.jpg" border="0" /></a></div>
					<div><a href="javascript:void(0)"><img src="/Public/images/20110729/page3_3.jpg" border="0" /></a></div>
					<div><a href="javascript:void(0)"><img src="/Public/images/20110729/page3_4.jpg" border="0" /></a></div>
				</div>
				<div class="page_m2">
					<div class="page_c1"  id="q1">
						奖励道具：<br><br>
						<div style="margin-left:30px">gacha币 200点<br><br>
						平庸玉牙 ×1
						</div><br><br>
						兑换需求道具：<br><br>
						<div style="margin-left:30px">潘币 200点</div>
					</div>
					<div class="page_c1" id="q2" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">gacha币 1000点<br><br>
						平庸玉牙 ×5
						</div><br><br>
						兑换需求道具：<br><br>
						<div style="margin-left:30px">潘币 1000点</div>
					</div>
					<div class="page_c1" id="q3" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">gacha币 2000点<br><br>
						平庸玉牙 ×10
						</div><br><br>
						兑换需求道具：<br><br>
						<div style="margin-left:30px">潘币 2000点</div>
					</div>
					<div class="page_c1" id="q4" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">gacha币 4000点<br><br>
						平庸玉牙 ×20
						</div><br><br>
						兑换需求道具：<br><br>
						<div style="margin-left:30px">潘币 4000点</div>
					</div>
					<div class="page_c1" id="q5" style="display:none;">
						奖励道具：<br><br>
						<div style="margin-left:30px">gacha币 10000点<br><br>
						平庸玉牙 ×50
						</div><br><br>
						兑换需求道具：<br><br>
						<div style="margin-left:30px">潘币 10000点</div>
					</div>
					<div class="page_c1" id="q6" style="display:none;">
				
					</div>
					<div class="page_c1" id="q7" style="display:none;">
					
					</div>
					<div class="page_c1" id="q8" style="display:none;">
					
					</div>
					<div class="page_c1" id="q9" style="display:none;">
					
					</div>
					<div class="page_c1" id="q10" style="display:none;">
					
					</div>
					<div class="left" style="width:300px; text-align:right; padding-top:5px;">选择服务器：<select id="sell"><?foreach($servers as $key => $val){?><option value="<?=$key?>"><?=$val?></option><?}?></select></div>
					<div class="right" style="width:300px; text-align:left;"><a href="javascript:void(0)" onclick="onn(my[1])"><img src="/Public/images/20110729/page_b.jpg" border="0" /></a></div>
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
