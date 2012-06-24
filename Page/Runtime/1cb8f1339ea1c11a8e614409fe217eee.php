<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>博物馆-球鞋搜索</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
function chk_series(){
	
	var id = $("#brand_id").val();

	$.get("/Museum/getSeries?id="+id,function(data){
		$("#seriesdiv").html(data);
	});

}
</script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/museum_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--detail-->
	<div class="detail" style="width:725px; float:left;">
		<div class="detail_m">
			<div id="details_3" class="museumSearch_mmw">
				<div class="museumSearch_dt_b">
						<a class="cad">&nbsp;&nbsp;字母索引搜索：</a>
						<a>A</a>
						<a>B</a>
						<a>C</a>
						<a>D</a>
						<a>E</a>
						<a>F</a>
						<a>G</a>
						<a>H</a>
						<a>I</a>
						<a>J</a>
						<a>K</a>
						<a>L</a>
						<a>M</a>
						<a>N</a>
						<a>O</a>
						<a>P</a>
						<a>Q</a>
						<a>R</a>
						<a>S</a>
						<a>T</a>
						<a>U</a>
						<a>V</a>
						<a>W</a>
						<a>X</a>
						<a>Y</a>
						<a>Z</a>
				</div>
				<div class="museumSearchhr" style="margin:0;"></div>
				<div class="museumSearch_dt_c">
					<div class="l">
						<ul>
							<form action="/Museum/shoes.html" method="get">
							<li><select id="brand_id" name="brand_id" onchange="chk_series()"><option value=""> Brand 品牌</option>
							<?foreach($brandlist as $val){?><option value="<?=$val['id']?>" <?if($brand_id==$val['id']){echo 'selected';}?>><?=$val['brand_name']?></option><?}?></select></li>
							<li><select name="style_id"><option value=""> Type 类型</option>
							<?foreach($stylelist as $val){?><option value="<?=$val['id']?>" <?if($style_id==$val['id']){echo 'selected';}?>><?=$val['style_name']?></option><?}?></select></li>
							<li id="seriesdiv"><select name="series_id"><option value=""> Series 系列</option>
							<?foreach($serieslist as $val){?><option value="<?=$val['id']?>" <?if($series_id==$val['id']){echo 'selected';}?>><?=$val['series_name']?></option><?}?></select></li>
							<li><select name="sex_id"><option value=""> Gender 性别</option><?foreach($sexlist as $val){?><option value="<?=$val['id']?>" <?if($sex_id==$val['id']){echo 'selected';}?>><?=$val['sex_name']?></option><?}?></select></li>
							<li><input type="image" src="/Public/img/betterprice_img.jpg" /></li>
							</form>
						</ul>
					</div>
					<div class="rr">
						<ul class="museum_searchb">
							<?foreach($list as $val){?>
							<li>
								<div><a href="/Museum/detail.html?id=<?=$val['id']?>"><img src="<?=$val['shoe_pic']?>"/></a></div>
								<div class="ctr"><a href="/Museum/detail.html?id=<?=$val['id']?>"><?=$val['shoe_name']?></a></div>
							</li>
							<?}?>
						</ul>
						<div align="center";>
							<?$page->pagehtml("brand_id=$brand_id&style_id=$style_id&series_id=$series_id&sex_id=$sex_id");?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="museumDetailm"></div>
	<script>$(".museumDetailm").height($(".detail").height())</script>
	<div class="museumDetailr">
		<div style="height:4px; margin:0;"></div>
		<div class="museumDetail_ia"><a href="#"><img src="/Public/img/museum_img5.jpg" /></a></div>
		<div style="height:4px;"></div>
		<div class="museumDetail_ia"><a href="#"><img src="/Public/img/museum_img5.jpg" /></a></div>
	</div>
	<!--detail-->
	<div style="height:12px; clear:both;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>

