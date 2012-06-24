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
		if(i=="org1")my[0]=38;//人类男;
		if(i=="org2")my[0]=39;//人类女;
		if(i=="org3")my[0]=34;//精灵男;
		if(i=="org4")my[0]=35;//精灵女;
		if(i=="org5")my[0]=33;//暗精灵;
		if(i=="org6")my[0]=37;//拉比;
		if(i=="org7")my[0]=36;//巨人;
		if(i=="org8")my[0]=32;//矮人;
	}
}
function url(cid){
	if(cid==null){alert("请选择奖品");return;}
	location.href="/A20110731/xmlc?mm=588&pid="+cid;
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
			<div class="m588_ml"></div>
			<div class="m48_mr">
				<div class="m98_mm">
					<div class="m588_mm">
						<div class="m588_lr">
							<table cellpadding="0" cellspacing="0" border="0" class="tb588">
								<tr>
									<td width="106"><img src="/Public/images/20110731/588-img1.jpg" border="0" /></td>
									<td width="106"><img src="/Public/images/20110731/588-img2.jpg" border="0" /></td>
								</tr>
								<tr>
									<td>30天储物箱ex1×1</td>
									<td>30天旅行包ex1×1</td>
								</tr>
								<tr>
									<td colspan="2"><span>仓库背包必扩！</span></td>
								</tr>
								<tr>
									<td><img src="/Public/images/20110731/588-img3.jpg" border="0" /></td>
									<td><img src="/Public/images/20110731/588-img4.jpg" border="0" /></td>
								</tr>
								<tr>
									<td>快速生命药剂×30</td>
									<td>快速魔力药剂×30</td>
								</tr>
								<tr>
									<td colspan="2"><span>练级打怪必用！</span></td>
								</tr>
								<tr>
									<td><img src="/Public/images/20110731/588-img6.jpg" border="0" /></td>
									<td><img src="/Public/images/20110731/588-img5.jpg" border="0" /></td>
								</tr>
								<tr>
									<td>绿色皮甲马鞍×1</td>
									<td>绿色皮甲缰绳×1</td>
								</tr>
								<tr>
									<td colspan="2"><span>代步跑图必要！</span></td>
								</tr>
							</table>
						</div>
						<div class="m588_rr">
							<div class="m588_rr1">
								<div class="m588_div1">
									<div class="m588_div_1">
										<img src="/Public/images/20110731/588-img7.jpg" border="0" /><br />
										暮光·种族套装×1<br /><br />
										<span>20级的种族套装。<br />
										比5级套更给力，更耐用。</span>
									</div>
									<div class="m588_div_2">
										<img src="/Public/images/20110731/588-img8.jpg" border="0" /><br />
										跳鼠坠饰×1<br /><br />
										<span>这个东西告诉你<br />
										什么叫真正的跑小人，<br />
										还有，这个东西是珍藏品哦。</span>
									</div>
									<div class="m588_div_3">
										<img src="/Public/images/20110731/588-img9.jpg" border="0" /><br />
										藏有灵魂的宝箱×1<br /><br />
										<span>随机开出一个魂魄石，可<br />
										以100%赋予装备武器特殊属性</span>
									</div>
								</div>
							</div>
							<div class="m588_rr2">
								<div class="m588_div2">
									<div class="m588_div3">
									【请根据自身种族点击下方按钮选择一套】<br />
									选择后无法更改，请谨慎选择
									</div>
									<div class="m588_div4">
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
