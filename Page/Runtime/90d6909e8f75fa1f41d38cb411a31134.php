<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>博物馆球鞋详情</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
function showtec(id){
	$.get("/Museum/tec_info?id="+id,function(data){
		$(".museumSearch_cc").html(data);
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
			<div class="museumSearchrec">
				<img src="<?=$model['brand_photo']?>" />
			</div>
			<!---->
			<div class="detail_x">
				<div id="details1" onclick="details(1)"><b>BRAND STORY</b> 品牌介绍</div>
				<div id="details2" onclick="details(2)"><b>SHOSE ROOM</b> 球鞋大全</div>
				<div id="details3" onclick="details(3)"><b>TEC INTRO</b> 球鞋科技</div>
			</div>
			<script>
			$("#details1").css("height","38px");
			$("#details1").css("border","2px #000000 solid");
			$("#details1").css("border-bottom","2px #ffffff solid");
			for(var i=1;i<=3;i++){
				$("#details"+i).css("position","absolute");
				$("#details"+i).css("margin-left",(228*(i-1)+10)+"px");
			}
			function details(i){
				for(var j=1;j<=3;j++){
					$("#details"+j).css("height","30px")
					$("#details"+j).css("border","0px");
					$("#details"+j).css("border-bottom","2px #000000 solid");
					$("#details"+j).css("border-top","2px #000000 solid");
					$("#details_"+j).css("display","none");
				}
				$("#details"+i).css("height","38px");
				$("#details"+i).css("border","2px #000000 solid");
				$("#details"+i).css("border-bottom","2px #ffffff solid");
				$("#details_"+i).css("display","");
				$(".museumDetailm").height($(".detail").height());
			}
			</script>
			<div class="detail_c">
				<!--one-->
				<div id="details_1" style="display:; color:#5A5A5A; line-height:20px;">
					<div class="museumSearchrel"><img src="<?=$model['brand_pic']?>" width="100%" /></div>
					<div class="museumSearchrer">
						<?=htmldecode($model['brand_intro'])?>
					</div>
				</div>
				<!--two-->
				<div id="details_2" style="display:none; color:#5A5A5A">
					<ul class="museumSearchul">
						<?foreach($serieslist as $val){?>
						<li><a href="#"><?=$val['series_name']?></a></li>
						<?}?>
					</ul>
					<div class="museumSearchhr"></div>
					<ul class="museumSearchful">
						<?foreach($shoelist as $val){?>
						<li>
							<div class="t"><a href="/Museum/detail.html?id=<?=$val['id']?>"><img src="<?=$val['shoe_pic']?>" /></a></div>
							<div class="f">
								<a href="/Museum/detail.html?id=<?=$val['id']?>"><?=$val['shoe_name']?></a>
							</div>
						</li>
						<?}?>
					</ul>
				</div>
				<!--three-->
				<div id="details_3" style="display:none;">
					<div class="museumSearch_dt">
						<ul>
							<li><a class="acc" onclick="scroll_img(1)"></a></li>
							<li class="w">
								<div class="addshow">
									<?
									$i=1;
									foreach($teclist as $val){?>
									<div id="addshow<?=$i?>"><a href="javascript:showtec(<?=$val['id']?>);"><img src="<?=$val['tec_logo']?>" width="100%" /></a></div>
									<?$i++;}?>
								</div>
							</li>
							<li><a class="acc" onclick="scroll_img(2)"></a></li>
						</ul>
						<script>
							for(var addshow=1;addshow<=$(".addshow div").length;addshow++){
								$("#addshow"+addshow).css("margin-left",(((addshow-1)*116)+((addshow-1)*9))+"px");
							}
							function scroll_img(i){
								if(i==2){
									for(var ck=1;ck<=$(".addshow div").length;ck++){
										var marginL=$("#addshow"+ck).css("margin-left");
										$("#addshow"+ck).animate({marginLeft:(marginL.replace("px","")-125)+"px"},{queue:false,duration:300});
									}
								}
								if(i==1){
									for(var ck=1;ck<=$(".addshow div").length;ck++){
										var marginL=$("#addshow"+ck).css("margin-left");
										$("#addshow"+ck).animate({marginLeft:parseInt(marginL.replace("px",""))+parseInt(125)+"px"},{queue:false,duration:300});
										//$("#li"+ck).animate({marginLeft:$("#li"+(ck+1)).css("margin-left")},{queue:false,duartion:500});
									}
								}
							}
						</script>
					</div>
					<div class="museumSearch_dt_a">
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
					<div class="museumSearch_cc">
						<!--<div class="l"><img src="/Public/img/museum_img8.jpg" /></div>
						<div class="r">
							<?=htmldecode($tecmodel['tec_intro'])?>
							<?=htmldecode($tecmodel['tec_intro'])?>
						</div>-->
						
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

