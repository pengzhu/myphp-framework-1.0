<div style="width:749px; margin:0 auto;">
	<div class="size_close"><a onclick="size_close()"></a></div>
	<div class="size_newsImg">
	<!--im<img src="<?=$list[0]['img_url']?>" />g-->
	
			<div class="newsImg_l" onclick="newsImger(1,0)"></div>
			<div class="newsImg_m">
				<?
				$i=1;
				foreach($list as $val){?>
				<img id="newsImg<?=$i?>" src="<?=$val['img_url']?>" <?if($i>1){echo 'style="display:none"';}?> alt="<?=$i?>"/>
				<?$i++;}?>
			</div>
			<div class="newsImg_r" onclick="newsImger(2,0)"></div>
			<div class="newsImg_tit">
				<?$i=1;
				foreach($list as $val){?>
				<span id="newsImg_tit<?=$i?>" onclick="newsImger(3,<?=$i?>)"><?if($i==1){echo "○";}else{echo "●";}?></span> 
				<?$i++;}?>
			</div>
	
	</div>
	<script>var newsImg=1;function newsImger(i,k){if(i==1){newsImg=newsImg-1;if(newsImg<1){newsImg=$(".newsImg_m img").length;}for(var j=1;j<=$(".newsImg_m img").length;j++){$("#newsImg"+j).css("display","none");$("#newsImg_tit"+j).html("●");}$("#newsImg"+newsImg).fadeIn(200);$("#newsImg_tit"+newsImg).html("○");}if(i==2){newsImg=newsImg+1;if(newsImg>$(".newsImg_m img").length){newsImg=1;}for(var j=1;j<=$(".newsImg_m img").length;j++){$("#newsImg"+j).css("display","none");$("#newsImg_tit"+j).html("●");}$("#newsImg"+newsImg).fadeIn(200);$("#newsImg_tit"+newsImg).html("○");}if(i==3){for(var j=1;j<=$(".newsImg_m img").length;j++){$("#newsImg"+j).css("display","none");$("#newsImg_tit"+j).html("●");}$("#newsImg"+k).fadeIn(200);$("#newsImg_tit"+k).html("○");}}</script>
	<div class="size_newsT1">
		<div class="size_newsT2">
			<h1><?=$model['title']?></h1>
		</div>
	</div>
	<div class="size_newsTag">
		<ul class="size_tagW">
			<li class="noneTag">标签：</li>
			<?
			$tags = $model['keyword'];
			$arr = split(',',$tags);
			foreach($arr as $val){?>
			<li><a href="/Index/search?_c=News&_s=<?=$val?>" target="_blank"><?=$val?></a></li>
			<?}?>
			<li class="noneTag"> | </li>
			<li class="noneTag"> 作者：<?=($model['author']==''?'isize':$model['author'])?> </li>
			<li class="noneTag"> | </li>
			<li class="noneTag"> <?=$model['addDate']?></li>
		</ul>
		<div class="size_newsShare">
			<!-- JiaThis Button BEGIN -->
				<div id="ckepop">
					<span class="jiathis_txt">分享到：</span>
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_tqq"></a>
					<a class="jiathis_button_renren"></a>
					<a class="jiathis_button_kaixin001"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
					<a class="jiathis_counter_style"></a>
				</div>
				<script type="text/javascript" src="http://v2.jiathis.com/code/jia.js" charset="utf-8"></script>
				<!-- JiaThis Button END -->
		</div>
	</div>
	<div class="size_newsContent">
	<?=htmldecode($model['content'])?>
	</div>
	<div class="size_newsSource">
		资料源于：<?=($model['from']==''?'isize':$model['from'])?>
	</div>
	<div style="height:20px;"></div>
</div>
