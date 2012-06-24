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
<script type="text/javascript" src="/Public/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="/Public/js/jquery.lightbox-0.5.js"></script>
<link href="/Public/images/20110519/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
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

	$('.light_box').lightBox();
});
	</script>
</head>

<body>
<div class="body" style="background:url(/Public/images/20110519/body_4.jpg) center top no-repeat;">
	<?Temp("Public::top");?>
	<div class="m">
		<div class="m_div1" style="width:500px;">
			<div class="mdiv">
				<div>2011.05.27——测试结束</div>
				<div class="mmdiv">所有用户</div>
				<div class="mmdiv">
					活动细节<br />
					1、开服后，每天固定时间段（15：00-16：00，19：00-22：00），商城将随时以随机形式会出现限量稀有武器。<br />
					2、用户在这个时间进行抢购，限量稀有武器价格为<a>1潘币</a>。
					
				</div>
			</div>
			
		</div>
		<div class="m_div2" style="width:428px;">
			<div style="margin:10px 0 0 100px; background:url(/Public/images/20110519/img_4.jpg) center top; width:217px; height:172px;">
				<a href="http://pdl.126play.com/game/102.html" style="display:block; width:207px; height:52px; margin:120px 0 0 0px;" title="划拨潘币"></a>
			</div>
		</div>
		
	</div>
	<div style="background:url(/Public/images/20110519/wq_4.jpg) center top no-repeat; width:579px; height:105px; margin:30px auto;">
		<table cellpadding="0" cellspacing="0" border="0" height="55" style="margin:25px auto; width:460px;">
			<Tr>
				<td align="center"><a href="/Public/images/20110519/yc_da.jpg" class="light_box"><img src="/Public/images/20110519/wq1_4.jpg" height="55" width="97" border="0" /></a></td>
				<td align="center"><a href="/Public/images/20110519/ch_da.jpg" class="light_box"><img src="/Public/images/20110519/wq2_4.jpg" height="55" width="97" border="0" /></a></td>
				<td align="center"><a href="/Public/images/20110519/fs_da.jpg" class="light_box"><img src="/Public/images/20110519/wq3_4.jpg" height="55" width="97" border="0" /></a></td>
				<td align="center"><a href="/Public/images/20110519/zs_da.jpg" class="light_box"><img src="/Public/images/20110519/wq4_4.jpg" height="55" width="97" border="0" /></a></td>
			</Tr>
		</table>
	</div>
	<div align="center">
		【点击图片察看原图】<br />图片仅提供预览，实际出售物品效果请以当天活动规则为准
	</div>
</div>
<?Temp("Public::foot");?>

</body>
</html>
