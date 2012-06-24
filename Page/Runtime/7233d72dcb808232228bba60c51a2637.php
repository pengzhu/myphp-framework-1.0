<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>SIZE活动</title>
<link type="text/css" href="/Public/style/css.css" rel="stylesheet" />
<script src="/Public/js/jquery-1.6.2.min.js" type="text/javascript"></script>
</head>

<body>
<div class="nbody">
	<!--head-->
	<?Temp("Public::login");?>
	<div class="nhead vhead">
		<div><img src="/Public/img/betterprice_logo.jpg" /></div>
	</div>
	<div class="dh" style="margin-top:5px;">
	<?Temp("Public::bar");?>
	</div>
	<!--head-->
	<!--events-->
	<div class="events">
		<div class="events_rec">
			<div class="l"><a href="/Events/url?id=<?=$recmodel['id']?>"><img src="<?=$recmodel['focuspic']?>" /></a></div>
			<div class="r">
				<div><a href="/Events/url?id=<?=$hotmodel['id']?>"><img src="<?=$hotmodel['recpic']?>" /></a></div>
				<div>
					<ul>
						<li class="liea"><?=date('m月d日',strtotime($hotmodel['st']))?> |</li>
						<li class="lieb"><?=$hotmodel['title']?></li>
					</ul>
				</div>
			</div>
		</div>
		<!---->
		<div class="events_c">
			<?foreach($list as $val){?>
			<div class="events_left">
			<div class="l">
				<div><a href="/Events/url?id=<?=$val['id']?>"><img src="<?=$val['recpic']?>" /></a></div>
				<div>
					<ul>
						<li class="liea"><?=date('m月d日',strtotime($val['st']))?> |</li>
						<li class="lieb"><?=$val['title']?></li>
					</ul>
				</div>
			</div>
			</div>
			<?}?>
		</div>
		<!--page-->
		<div class="events_page">
			<?$page->pagehtml();?>
		</div>
	</div>
	
	<!--events-->
	<div style="height:12px;"></div>
	<!--news_index-->
	<div style="border:2px #000000 solid; height:0;"></div>
	<div style="background:#000000; height:20px; margin:8px auto;"></div>
</div>
</body>
</html>
