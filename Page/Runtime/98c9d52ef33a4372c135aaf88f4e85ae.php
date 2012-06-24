<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>我的最爱</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="/Public/js/size-1.0.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$("#profile_info").css("background","#000000");
	$("#profile_info").css("color","#fff");
})
</script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/member_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--reg con-->
	<div class="profile">
		<div class="profile_c">
			<div class="profile_t">
			<?Temp("Public::member_menu");?>
			</div>
			<div class="favourite_info">
				<div class="favourite">
					<div class="favourite_a" style="background:#000000;"><h2>MY FAVOURITE SHOES <font>我喜欢的球鞋</font></h2></div>
					<div class="favourite_b"></div>
					<ul id="shoes_id">
						<?foreach($shoelist as $val){?>
						<li>
							<div class="timg"><img src="<?=$val['shoe_pic']?>" /></div>
							<div class="tit">
								<h4><?=$val['brand_name']?></h4>
								<h4><?=$val['shoe_name']?></h4>
							</div>
						</li>
						<?}?>
						
					</ul>
					<div class="favourite_c" id="shoes"><a onclick="shoes(1)">▼ 显 示 全 部</a></div>
					<script>
					function shoes(i){
						if(i==1){$("#shoes_id").css("height","auto");$("#shoes").html('<a onclick="shoes(2)">▲ 收 起 全 部</a>');}
						if(i==2){$("#shoes_id").css("height","150px");$("#shoes").html('<a onclick="shoes(1)">▼ 显 示 全 部</a>');}
					}
					</script>
					<div class="favourite_d"></div>
				</div>
				<div class="favourite">
					<div class="favourite_a" style="background:#000000;"><h2>MY FAVOURITE BRANDS <font>我关注的品牌</font></h2></div>
					<div class="favourite_b"></div>
					<div class="favourite_e"><!--height:66-->
						<?foreach($brandlist as $val){?>
						<div><img src="<?=$val['brand_icon']?>" /></div>
						<?}?>
					</div>
					<div class="favourite_c" id="trademark"><a onclick="trademark(1)">▼ 显 示 全 部</a></div>
					<script>
					function trademark(i){
						if(i==1){$(".favourite_e").css("height","auto");$("#trademark").html('<a onclick="trademark(2)">▲ 收 起 全 部</a>');}
						if(i==2){$(".favourite_e").css("height","76px");$("#trademark").html('<a onclick="trademark(1)">▼ 显 示 全 部</a>');}
					}
					</script>
					<div class="favourite_d"></div>
				</div>
				<div class="favourite">
					<div class="favourite_a" style="background:#000000;"><h2>MY EVENTS <font>我关注的活动</font></h2></div>
					<div class="favourite_b"></div>
					<div class="favourite_f"><!--height:66-->
						<!--<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>
						<div><img src="/Public/img/favourite_img1.jpg" /></div>-->
					</div>
					<div class="favourite_c" id="activity"><a onclick="activity(1)">▼ 显 示 全 部</a></div>
					<script>
					function activity(i){
						if(i==1){$(".favourite_f").css("height","auto");$("#activity").html('<a onclick="activity(2)">▲ 收 起 全 部</a>');}
						if(i==2){$(".favourite_f").css("height","150px");$("#activity").html('<a onclick="activity(1)">▼ 显 示 全 部</a>');}
					}
					</script>
					<div class="favourite_d"></div>
				</div>
				
			</div>
			<div style="height:30px;"></div>
		</div>
	</div>
	<!--reg con-->
	<div style="height:12px;"></div>
	<div style="border:1px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
<!--弹出框-->
<div id="size_content" style="display:none;">
	<div style="width:749px; margin:0 auto;">
		<div class="size_close"><a onclick="size_close()"></a></div>
		<div class="size_c">
			<img src="/Public/img/events_rec.jpg" />
		</div>
		<div style="height:10px;"></div>
	</div>
</div>
</body>
</html>
