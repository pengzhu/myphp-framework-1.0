<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>寻找潘多拉公主-打开梦想的魔盒</title>
<link href="/Public/images/20110629/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery-1.5.js"></script>
<link href="/Public/js/fancybox/skin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/Public/js/fancybox/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js/fancybox/jquery.fancybox-1.3.1.css" media="screen" />
<script>
var order = "2";
var src_=new Array();
$(document).ready(function(){
	for(var i=1;i<=3;i++)
	{
		$("#img_"+i).click(function(){abc($(this).attr("name"))});
	}
	$("#img_1").click();
	//$("#photolist").html("asfadsf");
	page(1);
});

function page(i){
	$.get("/A20110629/photo?order="+order+"&page="+i,function(data){
		$("#photos").html(data);
	});
	$.get("/A20110629/pagelist?page="+i,function(data){
		$("#pagelist").html(data);
	});
}

function topage(x){
	order = x; page(1);
}

function vote(id){
	$.post("/A20110629/vote.html",{girlid:id},function(data){
		if(data==-1){alert('参数错误！');return;}
		if(data==-2){alert('不存在的MM编号！');return;}
		if(data==-3){alert('每个账号或IP每天只有两次投票机会！');return;}
		if(data==-4){alert('不能两次都对同一个MM投票！');return;}
		if(data==-500){alert('登录后才能进行投票操作！');location.href="http://u.126play.com/Index/login.html?url=http://act.126play.com/A20110629";return;}
		if(data==200){alert('投票成功!');return;}
	});
}

function startMovie(){
	$("#movie").click(); 
}
function closeMovie(){$.fancybox.close();}
function abc(i){
	if(i==1)src_[0]="http://player.youku.com/player.php/sid/XMjc0NDA1NTY0/v.swf";
	if(i==2)src_[0]="http://player.youku.com/player.php/sid/XMjc2MDM0MDUy/v.swf";
	if(i==3)src_[0]="http://player.youku.com/player.php/sid/XMjc4NDU4Nzcy/v.swf";
	for(var j=1;j<=3;j++)
	{
		$("#void"+j).animate({width:"0px"},{queue:false,duration:700});
		document.getElementById("void"+j).innerHTML="";
	}
	$("#void"+i).animate({width:"351px"},{queue:false,duration:700});
	var movie="<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='348' height='291'><param name='movie' value='"+src_+"' /><param name='quality' value='high' /> <param name='wmode' value='transparent' /><embed src='"+src_+"' wmode='transparent' allowFullScreen='true' quality='high' width='348' height='291' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'></embed></object>";
	document.getElementById("void"+i).innerHTML=movie;
}
</script>
<script type="text/javascript">
function mycarousel_initCallback(carousel)
{
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
jQuery(document).ready(function() {
    jQuery('#mycarousel').jcarousel({
        auto: 2,
        wrap: 'last',
        initCallback: mycarousel_initCallback
    });
});
</script>
</head>

<body>
<div class="body">
  	<div class="tt">
		<a href="http://pdl.126play.com" target="_blank"></a>
	</div>
  <div class="t">
		<a href="javascript:void(0)" class="w" id="img_1" name="1"><img src="/Public/images/20110629/gx_img1.jpg" /></a>
		<a class="void" id="void1">这粒放视频</a>
		<a href="javascript:void(0)" class="w" id="img_2" name="2"><img src="/Public/images/20110629/gx_img2.jpg" /></a>
		<a class="void" id="void2" style=" width:0px;"></a>
		<a href="javascript:void(0)" class="w" id="img_3" name="3"><img src="/Public/images/20110629/gx_img3.jpg" /></a>
		<a class="void" id="void3" style=" width:0px;"></a>
  </div>
	<div class="m1">
		<div class="left w1">
			网游《潘多拉》携手全国知名团队，在暑假强势推出“寻找开启魔盒的公主”活动。无论你在哪个城市，只要报名参加，即有机会享受免费全新的改变。<br />每周都有机会<br />
			<table cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td><span>报名时间：</span></td>
					<td> 每周五12：00开始报名，到下周五12:00结束为一轮</td>
				</tr>
				<tr>
					<td valign="top"><span>报名方式：</span></td>
					<td>玩家通过“我要报名”填写自己的资料并且上传生活照即可参与报名<br />通过工作人员后台审核后，在官网显示自己照片的为报名成功</td>
				</tr>
			</table>
		</div>
		<div class="right w2">
			<div title="我要报名"><a href="/A20110629/reg.html" target="_blank"></a></div>
		</div>
	</div>
	<div class="m2">
		<div class="t">
			<div class="left w1">
				&nbsp;&nbsp;为自己心目中的潘多拉投<br />票吧。投票即获得抽取时尚数码大奖的机会哦。<br />每天2次惊喜等着你！<br />抽中数码奖品后，我们的工作人员会在5个工作日内和你联系。
			</div>
			<div class="right w2">
				<div class="p1">
					<div id="activities-ad" style="width:520px;">
					  <ul id="mycarousel" class="jcarousel-skin-tango">
						<li><img src="/Public/images/20110629/jp1.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp2.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp3.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-bjb.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-i4.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-sbd.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-up.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-shub.jpg"  border="0" /></li>
						<li><img src="/Public/images/20110629/jp-qq.jpg"  border="0" /></li>
					  </ul>
					</div>
				</div>
				<div class="p2">
					<a href="/A20110629/getprice" title="立即抽奖"><script>for(var i=1;i<=100;i++){document.write("&nbsp;")}</script></a>
				</div>
			</div>
		</div>
	</div>
	<div class="man">
		<a href="javascript:void(0);" onclick="topage(2)" title="按更新时间" class="r"></a>
		<a href="javascript:void(0);" onclick="topage(1)"title="按票数高低"></a>
	</div>
	<ul class="m3" id="photos">
		
	</ul>
	<div class="page" id="pagelist">
		asdfasfdfas
	</div>
	<div class="m4">
		<div class="left w1">
			<div>为公主投票<br />每天两次机会抽取Iphone4</div>
			<div class="marginT"><img src="/Public/images/20110629/iphne4.gif" height="192" width="283" /></div>
		</div>
		<div class="right w2">
			<div>选出的MM后，我们会精心包装，参加之后的评比。而最终获胜的MM不仅签约我们潘多拉代言人，还可获得万元大奖，同时有更多的机会获得港澳、三亚游。</div>
		</div>
	</div>
	<ul class="m5">
		<li>
			<div><img src="/Public/images/20110629/maomi1.jpg" height="218" width="174" /></div>
			<div class="bg">
				<div>小訫</div>
			</div>
		</li>
		<li>
			<div><img src="/Public/images/20110629/maomi2.jpg" height="218" width="174" /></div>
			<div class="bg">
				<div>小楠</div>
			</div>
		</li>
		<li>
			<div><img src="/Public/images/20110629/maomi3.jpg" height="218" width="174" /></div>
			<div class="bg">
				<div>无道夏昕</div>
			</div>
		</li>
		<li>
			<div><img src="/Public/images/20110629/maomi4.jpg" height="218" width="174" /></div>
			<div class="bg">
				<div>敬请期待</div>
			</div>
		</li>
	</ul>
</div>
</div>
<!--弹出领取-->
<?Temp("Public::foot");?>
<!--Passit BUTTON BEGIN-->
<script type="text/javascript">
var passit_title = "";//自定义分享标题，删除和留空表示使用默认
var passit_url = "";//自定义分享网址，删除和留空表示使用默认
var passit_content= "";//自定义分享内容，删除和留空表示使用默认Meta中的描述
var passit_image= "";//自定义分享图片，删除和留空表示不分享图片
</script>
<script type="text/javascript">
bookmark_service="qqkj,sinaweibo,xnzt,qq,kxzt,qqxy,baiduHi,bookmark,baidu,douban,sohuweibo,163weibo,qqweibo,fhwwb,mhrs,more";</script>
<script type="text/javascript" src="http://www.passit.cn/js/passit_float_new.js?pub=0&img_src=btn15&simple=1" charset="UTF-8"></script>
<!--Passit BUTTON END-->
</body>
</html>
