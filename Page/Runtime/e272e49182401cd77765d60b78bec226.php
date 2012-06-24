<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>团购内容</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/buy_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--buyContent-->
	<div class="buyContent">
		<div class="buyContent_bg">
			<div class="buyContent_t">
				<div class="l">
					<h1><?=$model['name']?></h1>
					<h2>
					<?=$model['smallname']?>
					</h2>
				</div>
				<div class="r">
					<p><img src="<?=$model['recpic']?>" /></p>
					<p align="right"><a href="<?=$model['rel_link']?>"></a></p>
				</div>
			</div>
			<div class="buyContent_m">
				<ul>
					<li>
						<h2>
							本次团购剩余<br />
							<?=timespan($model['et'],'shopping')?>
						</h2>
						<h3><span><?=$model['sold']?></span>人已购买</h3>
						<h4>
							<img src="/Public/img/buyContent_img2.jpg" align="absmiddle" /> 团购已成功，可继续购买
						</h4>
						<h5>0点56分到达最低团购人数：29人</h5>
					</li>
					<li>
						<p>
							<span>亮点</span><br />
							全国独家首发<br />
							赠送精美携带一双<br />
							加套原装鞋带<br />
							7天不满意全额退款
						</p>
					</li>
					<li>
						<p>
							<span>提示</span><br />
							全国独家首发<br />
							赠送精美携带一双<br />
							加套原装鞋带<br />
							7天不满意全额退款<br />
							活动时间:<?=date('Y-m-d',strtotime($model['st']))?><br />
							结束时间:<?=date('Y-m-d',strtotime($model['et']))?><br />
							
						</p>
					</li>
				</ul>
			</div>
			<div class="buyContent_f">
				<ul>
					<li class="buylia">
						<table>
							<tr>
								<td><h1>￥<?=$model['nowprice']?><</h1></td>
								<td><a href="/Shopping/order_ready?id=<?=$model['id']?>"><h2>buy<br />now</h2></a></td>
							</tr>
						</table>
					</li>
					<li class="buylib">
						<h2>
							现价：<span>￥<?=$model['nowprice']?></span><br />
							原价：<font>￥<?=$model['oldprice']?></font><br />
							折扣：<?=$model['discount']?>折
						</h2>
					</li>
					<li class="buylic">
						<a href="#" style="margin-top:30px;"></a>
						<a href="#" style="margin-top:10px;"></a>
					</li>
					<li class="buylid">
						<div>已参与人数：<span><?=$model['sold']?></span>人</div><br />
						<!-- JiaThis Button BEGIN -->
						<div id="ckepop">分享到：
						<br />
						<a class="jiathis_button_qzone"></a>
						<a class="jiathis_button_tsina"></a>
						<a class="jiathis_button_tqq"></a>
						<a class="jiathis_button_renren"></a>
						<a class="jiathis_button_kaixin001"></a>
						</div>
						<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
						<!-- JiaThis Button END -->
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--buyContent-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
