<?foreach($list as $val){
$url = $val['photo'.$val['photosel']];
$webname = $val['webname'];
?>
<li>
	<div>
		<div class="po"><div class="poo"><div><?=$webname?></div></div></div>
		<div style="width:181px; height:189px; padding:0 0 0 10px;"><a href="/A20110629/girl.html?id=<?=$val['id']?>" target="_blank"><img src="<?=$url?>" width="100%" border="0" /></a></div>
	</div>
	<div class="tit">
		<div class="left"><a href="javascript:void(0);" onclick="vote(<?=$val['id']?>)"><img src="/Public/images/20110629/toupiao.jpg" height="27" width="68" /></a></div>
		<div class="right piaoshu">票数：<?=$val['votes']?></div>
	</div>
</li>
<?}?>