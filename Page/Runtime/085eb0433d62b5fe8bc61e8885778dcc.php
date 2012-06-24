<div style="width:749px; margin:0 auto;">
	<div class="size_close"><a onclick="size_close()"></a></div>
	<div class="size_c">
		<div class="size_photot"></div>
		<div class="size_photom">
			<div class="size_photoRec"><img src="<?=$model['src']?>" /></div>
		</div>
		<div class="size_photof" style="background:#000000; height:100px;">
			<div><h3><?=$model['title']?></h3></div>
			<div style="background:#FFFFFF; height:4px; margin-top:3px;"></div>
			<div style="background:#FFFFFF; height:2px; margin-top:3px;"></div>
		</div>
		<div class="size_photof"></div>
	</div>
	<div class="size_photoDown">
		<a class="adown"></a>
		<?foreach($list as $val){?>
		<a href="/Public/photo_download?path=<?=$val['paper_url']?>" target="_blank"><?=$val['paper_width']?>*<?=$val['paper_height']?></a>
		<?}?>
	</div>
	<div class="size_photoTag">
		<div class="l">
			<ul>
				<li class="photoT">Tag标签：</li>
				<?$tags = $model['tags'];
				$arr = split(',',$tags);
				foreach($arr as $val){?>
				<li><a href="#"><?=$val?></a></li>
				<?}?>
			</ul>
		</div>
		<div class="r">
			<div style="width:160px;"><img src="/Public/img/photo_img10.jpg" /></div>
			<div style="width:71px;"><img src="/Public/img/photo_img11.jpg" /></div>
		</div>
	</div>
	<div style="height:10px;"></div>
</div>