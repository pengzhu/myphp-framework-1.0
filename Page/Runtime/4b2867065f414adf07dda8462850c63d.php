<ul>
	<?foreach($list as $val){?>
	<li>
		<div class="t">
			<div class="lia">
				<h2><?=$val['name']?></h2>
				<h3><?=$val['smallname']?></h3>
			</div>
			<div class="lib"><img src="<?=$val['recpic']?>" /></div>
			<div class="lic">
				<h2>
					
					<div>￥<?=$val['nowprice']?></div>
					<div class="dd"><a href="/Shopping/content?id=<?=$val['id']?>">Check<br />Now</a></div>
					
				</h2>
			</div>
			<div class="lid">
				<div>原价：<span>￥<?=$val['oldprice']?></span></div>
				<div>现价：<font>￥<?=$val['nowprice']?></font></div>
				<div>团购：<?=$val['discount']?>折</div>
			</div>
			<div class="lie">
				本次团购剩余<br />
				<?=timespan($val['et'],'shopping')?>
			</div>
		</div>
	</li>
	<?}?>
</ul>
<div class="buy_page">
	<a href="#" class="pageb"></a><!--下一页-->
	<a href="#" class="pagea"></a><!--上一页-->
</div>