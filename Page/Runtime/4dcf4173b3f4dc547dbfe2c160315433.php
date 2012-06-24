<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<?Temp("Public::css");?>
<script>
$(document).ready(function(){
	$("#off").click(function(){
		dis();
	})
	for(var i=1;i<=$("div[class='left_a_title']").length;i++){
		$("#left_navigation_"+i).click(function(){
			play($(this).attr("id"));
		})
	}
	
});
function dis(){
	for(var i=1;i<=$("div[class='left_a_title']").length;i++){
		$("#left_navigation"+i).slideToggle();
	}
}
function play(i){
	var j=i.replace("left_navigation_","");
	$("#left_navigation"+j).slideToggle()
}
</script>


</head>

<body style=" background:#80BDCB;">
	<div class="left_title">
		<div class="left_width">
		<div class="left"><?=$_SESSION['liefeng_loginid']?> 欢迎您</div>
		<div class="right"><a style="cursor:pointer;" id="off"><img src="/Public/images/menu_minus.gif" /></a></div>
		</div>
	</div>
	<?
		$i=1;
		$j=1;
		foreach($arr as $value){?>
			<Div class="left_navigation" id="page_<?=$i?>">
				<div>
					<?
					foreach($value as $kk=>$v_value){
					echo "<div class='left_a_title' id='left_navigation_".$j."'><img src='/Public/images/menu_plus.gif' align='absmiddle' id='left_menu' /> ".$kk."</div><div class='marginT' id='left_navigation".$j."'>";
						foreach($v_value as $c_value){
							echo "<a href='".$c_value[1]."' target='main'><img src='/Public/images/menu_minus.gif' align='absmiddle' /> ".$c_value[0]."</a>";
						}
					echo "</div>";
					$j++;
					}
					?>
					
					
				</div>
			</Div>
			
		<?$i++;
		}?>

	<script>
	for(var i=1;i<=$("div[class='left_navigation']").length;i++){
		$("#page_"+i).css("display","none");
    }
	var k=location.search.replace("?","")
	if(k==""){$("#page_1").css("display","");}else{$("#"+k).css("display","");}
	</script>
</body>
</html>
