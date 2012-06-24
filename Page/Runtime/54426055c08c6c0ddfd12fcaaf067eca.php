<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值回馈</title>
<link href="/Public/images/20110731/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<script>
var my = new Array();
$(document).ready(function(){
	for(var i=1;i<=8;i++){
		$(".org"+i).mouseover(function(){
			abc($(this).attr("class"),1);
		});
		$(".org"+i).mouseout(function(){
			abc($(this).attr("class"),2);
		});
		$(".org"+i).click(function(){
			abc($(this).attr("class"),3);
		});
	}
	
})
function abc(i,j){
	if(j==1){
		$("."+i).css("background","url(/Public/images/20110731/m98_butt1.jpg)");
		$("."+i).css("color","#000000");
	}
	if(j==2){
		$("."+i).css("background","url(/Public/images/20110731/m98_butt.jpg)");
		$("."+i).css("color","#FC00DD");
	}
	if(j==3){
		$(".m98_mf1").html("您选择了“<span>"+$("."+i).html()+"</span>”");
		if(i=="org1")my[0]=1;//人类男;
		if(i=="org2")my[0]=2;//人类女;
		if(i=="org3")my[0]=3;//精灵男;
		if(i=="org4")my[0]=4;//精灵女;
		if(i=="org5")my[0]=5;//暗精灵;
		if(i=="org6")my[0]=6;//拉比;
		if(i=="org7")my[0]=7;//巨人;
		if(i=="org8")my[0]=8;//矮人;
	}
}
function url(cid){
	if(cid==null){alert("请选择奖品");return;}
	location.href="/A20110731/xmlc.html?mm=188&pid="+cid;
}
</script>
</head>
<body>
<div class="body">
<!---------------------->
<div class="left"></div>
<div class="mide">
     <div class="h"></div>
<!---------------------->
	 <div class="m538">
      	<div class="g"></div>
		<div class="m8_t"></div>
		<div class="m8_bg">
			<div class="m188_ml"></div>
			<div class="m48_mr">
				<div class="m98_mm">
					<div class="m588_mm">
						<div class="m188_mbg"></div>
						<div class="m188_mbg1"></div>
						<div class="m188_mbg2">
							<div class="m188_div1">
								<div><img src="/Public/images/20110731/188-img1.jpg" border="0" /><br />洛格戒指</div>
								<div><img src="/Public/images/20110731/188-img2.jpg" border="0" /><br />夏洛特戒指</div>
								<div><img src="/Public/images/20110731/188-img3.jpg" border="0" /><br />号角耳环</div>
								<div><img src="/Public/images/20110731/188-img4.jpg" border="0" /><br />日落杀手耳环</div>
							</div>
							<div class="m188_div2">(你可能随机得到以上一种首饰)</div>
							<div class="m188_div3">
								<div class="m188_div_1">
									<div class="m188_divt">TIPS：种族套装的优势</div>
									<div class="m188_divm">
									1、5级套装就有15级普通装备的属性，前期告别商店货。<br />
									2、附带各种珍贵属性，打怪练级BOSS副本竞技场，妥妥的。<br />
									3、量身定制种族套装，不管是外观还是针对属性上都有所不同。<br />
									4、游戏珍贵套装之一，极具珍藏价值，绝对物超所值。
									</div>
								</div>
								<div class="m188_div_2">
									<div class="m188_divt1">
									【请根据自身种族点击下方按钮选择一套】<br />
									选择后无法更改，请谨慎选择
									</div>
									<div class="m188_divt2">
										<a href="javascript:void(0)" class="org1">人类（男）</a>
										<a href="javascript:void(0)" class="org2">人类（女）</a>
										<a href="javascript:void(0)" class="org3">精灵（男）</a>
										<a href="javascript:void(0)" class="org4">精灵（女）</a>
										<a href="javascript:void(0)" class="org5">暗精灵</a>
										<a href="javascript:void(0)" class="org6">拉比</a>
										<a href="javascript:void(0)" class="org7">巨人</a>
										<a href="javascript:void(0)" class="org8">矮人</a>
									</div>
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
				<div class="m98_mf">
					<div class="m98_mf1"></div>
					<div class="m98_mf2">
						<a href="/A20110731"><img src="/Public/images/20110731/m_btn1.jpg" border="0"/></a> &nbsp;&nbsp;&nbsp;&nbsp;
						<a href="javascript:void(0)" onclick="url(my[0])"><img src="/Public/images/20110731/m_btn2.jpg" border="0"/></a>
					</div>
				</div>
			</div>
		</div>
	 </div>
<!---------------------->
	 <div class="f"></div>
</div>
<!---------------------->
<div class="right"></div>
</div>
</body>
</html>
