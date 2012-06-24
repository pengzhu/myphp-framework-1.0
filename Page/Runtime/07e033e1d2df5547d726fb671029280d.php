<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>博物馆-球鞋详情</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script>
function show(u){
	$("#recpic").attr("src",u);
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
	<div class="detail">
		<div class="detail_m">
			<div class="detail_dd">
				<div class="l"></div>
				<div class="m"><img id="recpic" src="<?=$photolist[0]['shoe_pic_url']?>" alt="" width="449" height="328" /></div>
				<div class="r">
					<div class="t"><?=$model['shoe_name']?></div>
					<div class="mm">
						<ul>
							<?foreach($photolist as $val){?>
							<li><a href="javascript:show('<?=$val['shoe_pic_url']?>');"><img src="<?=$val['shoe_pic_url']?>" width="100%" /></a></li>
							<?}?>
						</ul>
					</div>
					<div class="f">
						<ul>
							<li class="lid">标签：</li>
							<?
							$tags = $model['tag'];
							$arr = split(',',$tags);
							foreach($arr as $val){?>
							<li><a href="#"><?=$val?></a></li>
							<?}?>
							<li class="li_share">
							<!-- JiaThis Button BEGIN -->
							<div id="ckepop">
								<span class="jiathis_txt">分享到：</span>
								<a class="jiathis_button_qzone"></a>
								<a class="jiathis_button_tsina"></a>
								<a class="jiathis_button_tqq"></a>
								<a class="jiathis_button_renren"></a>
								<a class="jiathis_button_kaixin001"></a>
								<a class="jiathis_counter_style"></a>
							</div>
							<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
							<!-- JiaThis Button END -->
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!---->
			<div class="detail_x">
				<div id="details1" onclick="details(1)"><b>SHOSE INFO</b> 球鞋简介</div>
				<?if($model['iseval']=='1'){?>
				<div id="details2" onclick="details(2)"><b>SHOSE REVIEW</b> 球鞋评测</div>
				<div id="details3" onclick="details(3)"><b>BEST PRICE</b> 球鞋比价</div>
				<?}else{?>
				<div id="details2" onclick="details(2)"><b>BEST PRICE</b> 球鞋比价</div>
				<?}?>
			</div>
			<script>
			$("#details3").css("height","38px");
			$("#details3").css("border","2px #000000 solid");
			$("#details3").css("border-bottom","2px #ffffff solid");
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
			}
			</script>
			<div class="detail_c">
				<!--one-->
				<div id="details_1" style="display:none; color:#5A5A5A; line-height:20px;">
					<?=htmldecode($model['shoe_info'])?>
				</div>
				<!--two-->
				<?if($model['iseval']=='1'){?>
				<div id="details_2" style="display:none; color:#5A5A5A">
					<div>
						<div class="evalua_l" style=" height:40px">
							<?        
										$vote1=$option_f[0]['option1']*10;
										$vote2=$option_f[0]['option2']*10;
										$vote3=$option_f[0]['option3']*10;
										$vote4=$option_f[0]['option4']*10;
                                        $count=round(($vote1+$vote2+$vote3+$vote4)/4);
                                        if($vote1==100)$vote1=99;
                                        if($vote2==100)$vote2=99;
                                        if($vote3==100)$vote3=99;
                                        if($vote4==100)$vote4=99;
										
										
							?>
							<h1 class="h">
                            <?
                                if($count>90){
                                    echo '★★★★★';
                                }else if($count>0&&$count<20){
                                    echo '★☆☆☆☆';
                                }else if($count>=20&&$count<40){
                                    echo '★★☆☆☆';
                                }else if($count>=40&&$count<60){
                                    echo '★★★☆☆';
                                }else if($count>=60&&$count<91){
                                    echo '★★★★☆';
                                }else if($count==0){
                                    echo '☆☆☆☆☆';
                                }
                                echo $count/10;
                            ?>
                             </h1>
						</div>
						<div class="museum_evat">
							大众评语：很完美，绝对不能错过
						</div>
					</div>
					<div class="museum_evam">
						<div class="evalua_r" style="float:left;">
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img1.jpg" /></li>
									<li class="lie2"><div style="width:<?=$vote1?>%;">&nbsp;</div></li>
									<li class="lie1"><?=$option_f[0]['option1']?></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img2.jpg" /></li>
									<li class="lie2"><div style="width:<?=$vote2?>%;">&nbsp;</div></li>
									<li class="lie1"><?=$option_f[0]['option2']?></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img3.jpg" /></li>
									<li class="lie2"><div style="width:<?=$vote3?>%;">&nbsp;</div></li>
									<li class="lie1"><?=$option_f[0]['option3']?></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img4.jpg" /></li>
									<li class="lie2"><div style="width:<?=$vote4?>%;">&nbsp;</div></li>
									<li class="lie1"><?=$option_f[0]['option4']?></li>
								</ul>
							</div>
						</div>
						<div class="museum_evamm"></div>
						<div class="evalua_r" style="float:left; margin-left:30px; width:270px;">
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img1.jpg" /></li>
									<li class="lie2"><h2><a id="ax1" class="a1">★</a> <a id="ax2" class="a2">★</a> <a id="ax3" class="a3">★</a> <a id="ax4" class="a4">☆</a> <a id="ax5" class="a5">☆</a></h2></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img2.jpg" /></li>
									<li class="lie2"><h2><a id="ax1_1" class="a1">★</a> <a id="ax2_2" class="a2">★</a> <a id="ax3_3" class="a3">★</a> <a id="ax4_4" class="a4">☆</a> <a id="ax5_5" class="a5">☆</a></h2></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img3.jpg" /></li>
									<li class="lie2"><h2><a id="ax1_1_1" class="a1">★</a> <a id="ax2_2_2" class="a2">★</a> <a id="ax3_3_3" class="a3">★</a> <a id="ax4_4_4" class="a4">☆</a> <a id="ax5_5_5" class="a5">☆</a></h2></li>
								</ul>
							</div>
							<div class="evalua_s">
								<ul>
									<li class="lie1"><img src="/Public/img/evalua_img4.jpg" /></li>
									<li class="lie2"><h2><a id="ax1_1_1_1" class="a1">★</a> <a id="ax2_2_2_2" class="a2">★</a> <a id="ax3_3_3_3" class="a3">★</a> <a id="ax4_4_4_4" class="a4">☆</a> <a id="ax5_5_5_5" class="a5">☆</a></h2></li>
								</ul>
							</div>
						</div>
						<script>
							var xa=1;
							function scor(i,q,t){
								if(xa==0){return;}
								var k=t.replace("a","");
								for(var j=1;j<=5;j++){
									if(q==1){$("#ax"+j).html("☆");}
									if(q==2){$("#ax"+j+"_"+j).html("☆");}
									if(q==3){$("#ax"+j+"_"+j+"_"+j).html("☆");}
									if(q==4){$("#ax"+j+"_"+j+"_"+j+"_"+j).html("☆");}
								}
								for(var ii=1;ii<=k;ii++){
									if(q==1){$("#ax"+ii).html("★");}
									if(q==2){$("#ax"+ii+"_"+ii).html("★");}
									if(q==3){$("#ax"+ii+"_"+ii+"_"+ii).html("★");}
									if(q==4){$("#ax"+ii+"_"+ii+"_"+ii+"_"+ii).html("★");}
								}
								//$("#score").html(k+".0");
							}
							function scoring(i,q,t){
								if(xa==0){return;}
								var k=t.replace("a","");
								for(var j=1;j<=5;j++){
									if(q==1){$("#ax"+j).html("☆");}
									if(q==2){$("#ax"+j+"_"+j).html("☆");}
									if(q==3){$("#ax"+j+"_"+j+"_"+j).html("☆");}
									if(q==4){$("#ax"+j+"_"+j+"_"+j+"_"+j).html("☆");}
								}

								//$("#score").html("0");
							}
							function click_scor(i,q,t){
								var k=t.replace("a","");
								for(var ii=1;ii<=k;ii++){
									if(q==1){$("#ax"+ii).html("★");}
									if(q==2){$("#ax"+ii+"_"+ii).html("★");}
									if(q==3){$("#ax"+ii+"_"+ii+"_"+ii).html("★");}
									if(q==4){$("#ax"+ii+"_"+ii+"_"+ii+"_"+ii).html("★");}
								}
								//$("#score").html(k+".0");
								$("#shoe_c"+q).html(k);
								xa=0;
							}
						</script>
						<div class="museum_evamr">
							<div class="t"><textarea id="commented"></textarea></div>
							<div class="f"><a onclick="comment_ajax()">评 论</a></div>
						</div>
					</div>
					<div class="eventsAuction">
					<div style="display:none"><div id="shoe_c1">3</div><div id="shoe_c2">3</div><div id="shoe_c3">3</div><div id="shoe_c4">3</div><div id="comment_shoe_id"></div></div>
						<ul>
							<li style="height:20px; font-size:14px;">最新用户评论</li>
						</ul>
                        <ul id="eventsAuction">
						</ul>
					</div>
					<script>
					$(document).ready(function(){
						$.get('detail_ajax',{shoe_id:'<?=$shoe_id?>'},function(data){$("#eventsAuction").html(data)});
						for(var i=1;i<=5;i++){
							$("#ax"+i).mouseover(function(){scor($(this).attr("id"),1,$(this).attr("class"));});
							$("#ax"+i+"_"+i).mouseover(function(){scor($(this).attr("id"),2,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i).mouseover(function(){scor($(this).attr("id"),3,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i+"_"+i).mouseover(function(){scor($(this).attr("id"),4,$(this).attr("class"));});

							$("#ax"+i).mouseout(function(){scoring($(this).attr("id"),1,$(this).attr("class"));});
							$("#ax"+i+"_"+i).mouseout(function(){scoring($(this).attr("id"),2,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i).mouseout(function(){scoring($(this).attr("id"),3,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i+"_"+i).mouseout(function(){scoring($(this).attr("id"),4,$(this).attr("class"));});
							//点击
							$("#ax"+i).click(function(){click_scor($(this).attr("id"),1,$(this).attr("class"));});
							$("#ax"+i+"_"+i).click(function(){click_scor($(this).attr("id"),2,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i).click(function(){click_scor($(this).attr("id"),3,$(this).attr("class"));});
							$("#ax"+i+"_"+i+"_"+i+"_"+i).click(function(){click_scor($(this).attr("id"),4,$(this).attr("class"));});
						}
					})
					function comment_ajax(){
						$.get('detail_comment_ajax',
						{
						shoe_id:'<?=$shoe_id?>',
						content:$("#commented").val(),
						option1:$("#shoe_c1").html(),
						option2:$("#shoe_c2").html(),
						option3:$("#shoe_c3").html(),
						option4:$("#shoe_c4").html(),
						},
						function(data){
							if(data!=200){
								alert(data);
							}
							$.get('detail_ajax',
                            {shoe_id:'<?=$shoe_id?>'},
                            function(datad){
                                    $("#eventsAuction").html(datad);
                            });
						})
					}
					function comment_mored(){
						$.get('comment_ajax_more',{shoe_id:'<?=$shoe_id?>',comment_id:$("#comment_shoe_id").html()},function(data){$("#eventsAuction").html()+data});
					}
					</script>
					<div style="margin-top:10px;"><a id="comment_more" onclick="comment_mored()">▼显示更多评论结果</a></div>
					
				</div>
				
				<!--three-->
				<div id="details_3" style="display:;">
				<!--<table cellpadding="0" cellspacing="0">
					<tr class="trc">
						<td width="158">商城</td>
						<td width="200">产品名称</td>
						<td width="120">支付方式</td>
						<td width="80">人气</td>
						<td width="100">优惠活动</td>
						<td width="120">价格</td>
						<td width="100">操作</td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img3.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img4.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img5.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img6.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img7.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
				</table>-->
				<div class="detail_more"><a href="#">▼显示所有比价结果</a></div>
				</div>
				<?}else{?>
				<div id="details_2" style="display:;">
				<!--<table cellpadding="0" cellspacing="0">
					<tr class="trc">
						<td width="158">商城</td>
						<td width="200">产品名称</td>
						<td width="120">支付方式</td>
						<td width="80">人气</td>
						<td width="100">优惠活动</td>
						<td width="120">价格</td>
						<td width="100">操作</td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img3.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img4.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img5.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img6.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
					<tr>
						<td><img src="/Public/img/detail_img7.jpg" /></td>
						<td><div>耐克NIKE SHOSE REVIEW詹姆斯9代战靴，恭候你的大驾，亲，你还在等什么？</div></td>
						<td><a href="#"><img src="/Public/img/detail_img8.jpg" /></a></td>
						<td>117人</td>
						<td>9.5折</td>
						<td><h1>11191.00</h1></td>
						<td><a href="#"><img src="/Public/img/detail_img9.jpg" /></a></td>
					</tr>
				</table>-->
				<div class="detail_more"><a href="#">▼显示所有比价结果</a></div>
				</div>
				<?}?>
			</div>
		</div>
	</div>
	<!--detail-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
	<script>details(1);</script>
</div>
</body>
</html>

