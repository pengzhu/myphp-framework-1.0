
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
<?Temp("Public::css");?>
<script>
$(document).ready(function(){
	$(".a1").css("background","#80BDCB");
	for(var i=1;i<=$("a[target='mainLeft']").length;i++)
	{
		$(".a"+i).mouseover(function(){
			abc($(this).attr("class"));
		})
	}
});
function abc(j){
	for(var i=1;i<=$("a[target='mainLeft']").length;i++)
	{
		$(".a"+i).css("background","#9CCBD6");
	}
	$("."+j).css("background","#80BDCB");
}
</script>
</head>

<body>
<div class="top_body">
	<div class="left"><img src="/Public/images/logo.gif" /></div>
	<div class="right marginT">
		<div>
			<a href="/">首页</a> | 
			<a href="javascript:top.location.reload();">刷新</a> | 
			<a href="#">关于我们</a>
		</div>
		<div align="right">
			<table cellspacing="5">
				<tr>
					<td>清除缓存</td>
					<td><a href="/Root/Admin/logout.html" style="color:#298396;">退出</a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
<div class="top_navigation">
	<a class="ac"></a>
	<?
		$i=1;
		foreach($arr as $kk=>$value){
		echo "<a href='left.html?page_".$i."' target='mainLeft' class='a".$i."'>".$kk."</a>";
		$i++;
	}?>
	
</div>
</body>
</html>
