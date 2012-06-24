<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>努纳尼亚斯大陆居民事务所</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="/Public/images/20110818/css.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://act.126play.com/Public/js/jquery-1.5.js"></script>
<script type="text/javascript" src="/Public/js/jquery.fancybox-1.3.1.js"></script>
<link rel="stylesheet" type="text/css" href="/Public/js/jquery.fancybox-1.3.1.css" />
<script>
$(document).ready(function(){
	$("a#page2_kuang_1").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.9'   
	});
	$("a#page2_kuang_2").fancybox({
		'titlePosition'		: 'inside',
		'transitionIn'		: 'fade',
		'transitionOut'		: 'fade',
		'centerOnScroll'    : 'true',
		'overlayOpacity'    : '0.9'   
	});
});
function onn(){
	if($("#ccue").val()==0){alert('请选择你要更换的国家');return;}
	$("#page2_kuang_1").click(); 
}
function recode(){$("#page2_kuang_2").click(); }
function closeMovie(){$.fancybox.close();}
</script>
</head>
<body>
<div class="div1">
		<div class="div2">
			<div class="div3">
				<div class="div4">
                    <div class="h"></div>
				    <div class="g">
							 <div class="lgn">
							          <div class="gu">
									  <ul>
									       <li><?=$_SESSION['loginid2']?>用户你好！</li>
										   <li>使用功能是请确认您的<span style="color:#FFFF00">烈风点券余额</span></li>
									  </ul>
									  </div>
									  <div class="gn"><a onclick="buka(1)"><img src="/Public/images/20110818/l0.jpg" border="0" /></a><a onclick="buka(2)"><img src="/Public/images/20110818/l9.jpg" border="0" /></a></div>
							 </div>
							 
							 <div class="m">
							     <div class="gm">
									  <a class="a1"><img src="/Public/images/20110818/l3.jpg" border="0" /></a>
									  <a href="/A20110818/choose.html" class="a1"><img src="/Public/images/20110818/l4.jpg" border="0" /></a>
								  </div>
								  
							 </div>
							 
						<div class="gs">
<p><span style=" font-weight:bolder;">《更换国籍注意事项》：</span><br />
1、更换国籍事务受理登记时间为<span style="color:#FFF600;">每周二14:00——周三14:00</span>;例行维护后您将更新为最新国民身份。<br />
2、更换国籍后，<span style="color:#FFF600;">您必须脱离目前所在的公会（如是公会会长，公会将被解散）</span>，请自行考虑优劣。<br />
3、更换国籍后，<span style="color:#FFF600;">爵位往下自动降一级</span>，最低降为见习骑士。相应的原爵位奖励道具和待遇都将清除。<br />
4、更换国籍前，<span style="color:#FFF600;">请您务必删掉执行中的种族套装任务，名誉挽回任务，公会任务。</span><br />
5、国籍变更后，人物将位于亚斯蒂亚中央广场，<span style="color:#FFF600;">我们将原国籍证明删除，并补发新国籍证明。</span><br />
6、<span style="color:#FFF600;">转化国籍限半个自然月变化一次。</span><br />
7、更改国籍收取服务费用<span style="color:#FFF600;">“60”烈风点券。</span></p>
							 </div>
							 <div class="g3">
							 <p class="p1"><form action="/A20110818/ntl.html" method="post" name="myt">
							<select id="ccue" name="ccue">
							
							 <option value="0">想要更换的国籍</option>
							 <option value="1">王国</option>
							 <option value="2">联盟</option>
							 <option value="3">帝国</option>

							 </select>
							 </form>
							 </p>
							 <p style="margin-top:6px;">原角色名：<span><?=$_SESSION['hedd']?></span> 区服名称：<span><?=$_SESSION['area']?></span></p>
							 <a href="javascript:void(0)" onclick="onn()"><img src="/Public/images/20110818/l8.jpg" border="0" align="middle"/></a>
							 </div>	 
					
					</div>
					<div class="i"></div>
				</div>
			</div>
		</div>
</div>

<a href="#page2_kuang1" id="page2_kuang_1"></a>
<div style="display:none;">
	<div id="page2_kuang1">

		<div class="page2_kuang1">
			<div class="close"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110818/bo.jpg" border="0" /></a></div>
			<div style="margin-top:50px;text-align:center;">别嫌我唠叨啊~！真的要转换吗？</div>
			<div style="margin-top:50px;text-align:center;"><a href="javascript:void(0)" onclick="ccc()"><img src="/Public/images/20110818/x2.jpg" border="0"/></a></div>
			<script>function ccc(){
							if($("#ccue").val()==0){alert('请选择想要更换的国籍');return;};
							document.myt.submit();
					}
			</script>
		</div>
	</div>
</div>

<a href="#page2_kuang2" id="page2_kuang_2"></a>

<div style="display:none;">
	<div id="page2_kuang2">
		<div class="page2_kuang2">
			<div class="close"><a href="javascript:void(0)" onclick="closeMovie()"><img src="images/close.jpg" border="0" /></a></div>
			<div style="margin-top:50px;text-align:center;">转换失败。
请务必查看《更换国籍注意事项》</div>
		</div>
	</div>
</div>





<a href="#page2_kuang1" id="page2_kuang_1"></a>
<div style="display:none;">
	<div id="page2_kuang1">
	<div class="pg">
	<div class="cl"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110818/bo.jpg" border="0" /></a></div>
    <div class="tt">
		<div class="scrol">
	    <table cellpadding="0" cellspacing="0"  class="tab">
		<?if($_SESSION['loginid2']!=""){
		foreach($record_name as $r_name){
		
		echo "<tr><td width='80'><div>".$r_name['loginid']."</div></td><td width='70'><div>".$r_name['server_name']."</div></td><td width='70'><div>".$r_name['before_name']."</div></td><td width='70'><div>".$r_name['after_name']."</div></td><td width='90'><div>正常</div></td></tr>";
		}
		}
		?>

	     </table>
	    </div>
	</div>
	<div class="ts">  <img src="/Public/images/20110818/p2.jpg" border="0"/></div>
	</div>
	</div>
</div>

<a href="#page2_kuang2" id="page2_kuang_2"></a>

<div style="display:none;">
	<div id="page2_kuang2">
	<div class="pa">
	<div class="cl"><a href="javascript:void(0)" onclick="closeMovie()"><img src="/Public/images/20110818/bo.jpg" border="0" /></a></div>
    <div class="tt">
	<div class="scrol">
	<table cellpadding="0" cellspacing="0"  class="tab">
		<?if($_SESSION['loginid2']!=""){
		foreach($record_nat as $r_nat){
		
		echo "<tr><td width='80'><div>".$r_nat['loginid']."</div></td><td width='70'><div>".$r_nat['server_nat']."</div></td><td width='70'><div>".$r_nat['before_nat']."</div></td><td width='70'><div>".$r_nat['after_nat']."</div></td><td width='90'><div>正常</div></td></tr>";
		}
		}
		?>

	</table>
	</div>
	<script>
	function tab(){
		if($(".scrol").css("height").replace("px","")>=475)
		{
			$(".scrol").css("height","470px");
			$(".scrol").css("overflow","scroll");
		}
	}
	</script>
	</div>
	<div class="ts">  <img src="/Public/images/20110818/p1.jpg" border="0"/></div>
	</div>
	</div>
</div>
</body>
</html>
