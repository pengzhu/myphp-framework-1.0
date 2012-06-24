<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
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
function onn(){$("#page2_kuang_1").click(); tab(); }
function recode(){$("#page2_kuang_2").click(); tab();  }
function closeMovie(){$.fancybox.close();}
function abc(i){
   if(i==1){
      $(".gs").css("display","");
	  $(".n").attr("src","/Public/images/20110818/l3.jpg");
	  $(".gt").css("display","none");
	  $(".m").attr("src","/Public/images/20110818/l4.jpg");
	  $("#uuu1").css("display","");
	  $("#uuu2").css("display","none");
   }else{
    $(".gs").css("display","none");
	$(".n").attr("src","/Public/images/20110818/l_3.jpg");
	$(".gt").css("display","");
	$(".m").attr("src","/Public/images/20110818/l_4.jpg");
	$("#uuu2").css("display","");
	$("#uuu1").css("display","none");
   }
}
</script>
</head>

<body>
<div class="div1">
		<div class="div2">
			<div class="div3">
				<div class="div4">
                    <div class="h"></div>
				    <div class="g">
							<?if($_SESSION['loginid2']==""){?>
							 <div class="gi">
							
								      <div class="gl">
									  <ul><form action="/A20110818/sign.html" method="post">
									       <li>通行证：<input type="text" name="loginid"/>&nbsp;<input src="/Public/images/20110818/l7.jpg" type="image" align="middle"  style="margin-top:-5px;"/></li>
										   <li>&nbsp;&nbsp;密码：<input type="password" name="password"/>&nbsp;<a href="http://u.126play.com/Index/reg.html"><img src="/Public/images/20110818/l6.jpg"  align="absmiddle" border="0"/></a></li>
									  </ul></form>
									  </div>
									  <div class="gr"><img src="/Public/images/20110818/l1.jpg" border="0" /></div>
							</div><?}else{?>
							
							 <div class="lgn">
							          <div class="gu">
									  <ul>
									       <li><?=$_SESSION['loginid2']?>用户你好！</li>
										   <li>使用功能时请确认您的<span style="color:#FFFF00">烈风点券余额</span></li>
									  </ul>
									  </div>
									  <div class="gn"><a onclick="recode()"  href="javascript:void(0)"><img src="/Public/images/20110818/l0.jpg" border="0" /></a><a onclick="onn()" href="javascript:void(0)"><img src="/Public/images/20110818/l9.jpg" border="0" /></a></div>
							 </div><?}?>
							 <div class="m">
								<div class="gm">
									  <a href="/A20110818/choose.html" class="a1"><img src="/Public/images/20110818/l3.jpg"  class="n" border="0" /></a>
									  <a href="/A20110818/choose_name.html" class="a1"><img src="/Public/images/20110818/l4.jpg" class="m" border="0" /></a>
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
<div class="gt" style="display:none;">
<p><span style=" font-weight:bolder;">《更换名称注意事项》：</span><br />
1、由于不可抗因素和非用户个人行为导致名称问题，我们会提供用户“减免”费用优待。<br />
2、不得利用改名谋取不正当事宜，事宜包括但不限于BUG，欺诈，恶意字符名称，扰乱次序。
<br />
3、发生突发事件时候，大陆事务所有权对其账户进行相应处理，并有权临时关闭相关服务项目。<span style="color:#FFF600;">转化名称半个自然月变化一次。</span><br />
4、修改名称费用为<span style="color:#FFF600;">“60”烈风点券。更名受理时间周一~周五。</span>
</p></div>
							 <div class="g1">
							 <p><form action="/A20110818/nat.html" method="post" name="myu">
							 <input type="hidden" name="hedd" value="" id="hedd">
							 <select id="select1" onchange="sel()">
							 <option value="请选择区服">请选择区服</option>
							 <option value="电信一区一服">电信一区一服</option>
							 <option value="电信一区二服">电信一区二服</option>
							 <option value="电信一区三服">电信一区三服</option>
							 <option value="电信一区四服">电信一区四服</option>
							 <option value="电信二区一服">电信二区一服</option>
							 <option value="电信二区二服">电信二区二服</option>
							 <option value="网通一区一服">网通一区一服</option>
							 <option value="网通一区二服">网通一区二服</option>
							 </select>
							 <select id="select2">
							 <option value="请选择角色">请选择角色</option>
							 
							 </select>
							 <script>
							 function sel(){
								if($("#select1").val()=="请选择区服"){$("#select2").html("<option>请选择角色</option>");
								}else{
								$.post("/A20110818/ajax_user.html",{area:$("#select1").val()},function(data){$("#select2").html(data)})
								}
								
							 }
							 </script>
							 </p>
							 <a href="#" onclick="ccc()"><img id="uuu1" src="/Public/images/20110818/l5.jpg" align="middle" style="float:right; margin-top:-43px; margin-right:5px;" border="0"/></a>
							 </div>
							 </form>
					<script>
						function ccc(){
							if($("#select1").val()=="请选择区服"){alert('请选择区服');return;}
							if($("#select2").val()=="请选择角色"){alert('请选择角色');return;}
							document.getElementById("hedd").value=$("#select2").val();
							document.myu.submit();
						}
					</script>
					</div>
					<div class="i"></div>
				</div>
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
