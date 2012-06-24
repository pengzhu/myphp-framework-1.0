<ul>
	<?foreach($list as $val){?>
	<li>
		<div class="buy_po">
			<div class="za">
				<h4><?=$val['name']?></h4>
				<p>
					现价：<span>￥<?=$val['oldprice']?></span><br />
					原价：<font>￥<?=$val['nowprice']?></font><br />
					团购：<?=$val['discount']?>折
				</p>
			</div>
			<div class="zb">
				<img src="<?=$val['recpic']?>" />
			</div>
		</div>
		<div class="buy_pr">
			<div class="l">
				￥<?=$val['nowprice']?>
			</div>
			<div class="r">
				<p>现价：<span>￥<?=$val['oldprice']?></span></p>
				<p>原价：<font>￥<?=$val['nowprice']?></font></p>
				<p>团购：<?=$val['discount']?>折</p>
			</div>
		</div>
	</li>
	<?}?>
</ul>
<div class="buy_page">
	<a href="#" class="pageb"></a><!--下一页-->
	<a href="#" class="pagea"></a><!--上一页-->
</div>