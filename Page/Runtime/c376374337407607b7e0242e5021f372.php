<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>半个宅女，热爱COS，最爱女仆装，所谓的小而强大，我就是潘多拉公主——小宅</title>
<link type="text/css" href="/Public/images/20110805/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.5.js" type="text/javascript"></script>
<script type="text/javascript" src="/Public/js/jquery.lightbox-0.5.js"></script>
<link href="/Public/js/jquery.lightbox-0.5.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){
	$(".p1").css("display","");
	setTimeout(function(){abc(1)},2000);
	$('.light_box').lightBox();
});
function abc(i){
	if(i==($(".ps img").length+1))
	{	i=0
		$(".p"+$(".ps img").length).css("display","none");
		$(".p"+(i+1)).fadeIn(500);
		setTimeout(function(){abc(i+1)},2000);
	}else if(i==$(".ps img").length){
		$(".p"+i).css("display","none");
		i=0;
		$(".p"+(i+1)).fadeIn(500);
		setTimeout(function(){abc(i+1)},2000);
	}else{
		$(".p"+i).css("display","none");
		$(".p"+(i+1)).fadeIn(500);
		setTimeout(function(){abc(i+1)},2000);
	}
}
</script>
</head>

<body>
<div class="width">
	<div class="body1">
		<div class="w">
			<div class="t">
				<div></div>
			</div>
			<div class="ps">
				<img src="/Public/images/20110805/p1.jpg" class="p1" />
				<img src="/Public/images/20110805/p2.jpg" class="p2" style="display:none;" />
				<img src="/Public/images/20110805/p3.jpg" class="p3" style="display:none;" />
			</div>
			<div class="dps">
				<a href="/Public/images/20110805/img1.jpg" class="light_box"></a>
				<a href="/Public/images/20110805/img2.jpg" class="light_box"></a>
				<a href="/Public/images/20110805/img3.jpg" class="light_box"></a>
				<a href="/Public/images/20110805/img4.jpg" class="light_box"></a>
			</div>
		</div>
	</div>
	<div class="body2"></div>
	<div class="body3">
		<div class="f">
		<Div class="r">
			<div class="r1">
				<p>票数：<?=$ert?></p>
				<a href="/A20110805/save"><img src="/Public/images/20110805/ding.jpg" border="0" /></a>
			</div>
			<div class="r2">
				<a href="http://act.126play.com/A20110629"><img src="/Public/images/20110805/move.jpg" border="0" /></a><br />
				<!--Passit BUTTON BEGIN-->
				<div class="passit_def_div" style=" width:180px;"><a style="width:48px; line-height:22px;">分享到：</a></div>
				<script type="text/javascript">
				var passit_title = "";//鑷畾涔夊垎浜爣棰橈紝鍒犻櫎鍜岀暀绌鸿〃绀轰娇鐢ㄩ粯璁?
				var passit_url = "";//鑷畾涔夊垎浜綉鍧€锛屽垹闄ゅ拰鐣欑┖琛ㄧず浣跨敤榛樿
				var passit_content= "";//鑷畾涔夊垎浜唴瀹癸紝鍒犻櫎鍜岀暀绌鸿〃绀轰娇鐢ㄩ粯璁eta涓殑鎻忚堪
				var passit_image= "";//鑷畾涔夊垎浜浘鐗囷紝鍒犻櫎鍜岀暀绌鸿〃绀轰笉鍒嗕韩鍥剧墖/*浠ヤ笂鑷畾涔夌殑鍙傛暟鍙互鐢╦s鍔ㄦ€佷慨鏀?/
				</script>
				<script type="text/javascript">
				bookmark_service_div="qqxy,baiduHi,bookmark,baidu,msn,feixin,tianysq,fhwwb,vivi,more";
				bookmark_service="sinaweibo,qqkj,sohuweibo,qqweibo,kxzt,xnzt";</script>
				<script type="text/javascript" src="http://www.passit.cn/js/passit_default_new.js?pub=0&simple=1" charset="UTF-8"></script>
				<!--Passit BUTTON END-->
			</div>
		</Div>
	</div>
	</div>
</div>
</body>
</html>
