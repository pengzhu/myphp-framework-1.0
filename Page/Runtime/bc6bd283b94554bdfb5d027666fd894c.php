<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>专题-名人堂</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/feature_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--star cont-->
	<div class="star">
		<!--star left-->
		<div class="star_l">
			<div class="star_inside">
				<div class="star_content">
					<div class="img"><img src="<?=$model['focuspic']?>" /></div>
					<div class="t"><h1 style="margin-top:10px;"><?=$model['title']?></h1></div>
					<div class="d">
						<h2 style="margin-top:10px;"><?=$model['addDate']?></h2>
						<ul style="margin-top:10px;">
							<li class="nbg">Tag标签：</li>
							<?
							$tags = $model['keyword'];
							$arr = split(',',$tags);
							foreach($arr as $val){?>
							<li><a href="#"><?=$val?></a></li>
							<?}?>
							<li class="nbg">&nbsp;&nbsp;</li>
							<li class="nbg">
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
					<div class="c">
						<?=htmldecode($model['content'])?>
					</div>
					<br />
					<!--<div class="img" style="height:166px;"><img src="/Public/img/star_img.jpg" /></div>-->
					<div style="height:0px; margin-top:20px; border-top:#000000 3px dotted;"></div>
					<div class="star_relat"></div>
					<div class="star_attr">
						<ul>
							<li class="li1"></li>
							<li class="li2">
								<?foreach($shoelist as $val){?>
								<div><a href="#"><img src="<?=$val['shoe_pic']?>" /></a></div>
								<?}?>
							</li>
							<li class="li3"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--star left-->
		<div class="star_m"></div>
		<script>$(".star_m").height($(".star_l").height())</script>
		<div class="star_r">
			<div class="star_rT">
				<div class="star_rTc">
					<div class="t">
						这粒就是相关专题
					</div>
					<div class="c">
						<ul>
							<li>
								<div class="c1"><a href="#"><img src="/Public/img/star_img5.jpg" /></a></div>
								<div class="c2"><a href="#">告别单身这是什么节日<br />可能是圣诞</a></div>
							</li>
							<li>
								<div class="c1"><a href="#"><img src="/Public/img/star_img5.jpg" /></a></div>
								<div class="c2"><a href="#">告别单身这是什么节日<br />可能是圣诞</a></div>
							</li>
							<li>
								<div class="c1"><a href="#"><img src="/Public/img/star_img5.jpg" /></a></div>
								<div class="c2"><a href="#">告别单身这是什么节日<br />可能是圣诞</a></div>
							</li>
							<li>
								<div class="c1"><a href="#"><img src="/Public/img/star_img5.jpg" /></a></div>
								<div class="c2"><a href="#">告别单身这是什么节日<br />可能是圣诞</a></div>
							</li>
							<li>
								<div class="c1"><a href="#"><img src="/Public/img/star_img5.jpg" /></a></div>
								<div class="c2"><a href="#">告别单身这是什么节日<br />可能是圣诞</a></div>
							</li>
							<li class="lic"><a href="#">more▲</a>&nbsp;&nbsp;&nbsp;</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="star_rC">
				<div><img src="/Public/img/star_img6.jpg" /></div>
				<div><img src="/Public/img/star_img6.jpg" /></div>
				<div><img src="/Public/img/star_img6.jpg" /></div>
				<div><img src="/Public/img/buy2.jpg" /></div>
			</div>
			<div style=" border-top:5px #000000 solid; margin-top:10px;"></div>
			
		</div>
	</div>
	<!--star cont-->
	<div style="height:12px;"></div>
	<div style="border:1px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
