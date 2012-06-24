<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>充值回馈</title>
<link href="/Public/images/20110731/css.css" rel="stylesheet" type="text/css" />
<script>
function abc(i){
	<?if(!isset($_SESSION['loginid2'])){
		echo "alert('请先登录')";
	}else{
		echo "lingqu(i)";
	}?>
}

</script>
</head>
<body>
<div class="body">
<!---------------------->
<div class="left"></div>
<div class="mide">
     <div class="h"></div>
<!---------------------->
	 <div class="m">
	    <div class="lg"><form action="/A20110731/sign.html" method="post">
		      <ul><?if(!isset($_SESSION['loginid2'])){?><li class="t">通行证:<input type="text" name="loginid"/></li><li class="t">&nbsp;密码:<input type="password" name="password"/></li><li>&nbsp;<input type="image" src="/Public/images/20110731/login.jpg" style="width:94px; height:33px;"/></li>
			  <?}else{?> <li class="t"><?=$_SESSION['loginid2']?> 欢迎您</li><li class="t"><a href="/A20110731/loginout.html"><img src="/Public/images/20110726/logout.jpg" border="0" /></a></li><?}?>
 		</ul><form>
		</div>
		
		<div class="ng">
		     <div class="a"><a href="#"><img src="/Public/images/20110731/log.jpg" border="0"/></a></div>
			 <div class="b">
			     <div>
				    <p>一次性充值<br/>
					 满<img src="/Public/images/20110731/5888.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p>
                    <a href="/A20110731/act5888.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act5888.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>
				 </div>
			 </div>
			 <div class="c">
       			 <div style="margin-top:80px;">
			         <a href="http://pdl.126play.com/index.html"></a>
			         <a href="http://u.126play.com/Index/reg.html"></a>
			     </div>
			 </div>
		</div>
		<div class="mg">
             <div class="d">
			        <div class="lt">
					<p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/588.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act588.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act588.html" ><img src="/Public/images/20110731/get.jpg" border="0"/></a>
					</div>
					<div class="lt">
					<p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/1888.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act1888.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act1888.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>
					</div>
					<div class="ld">
					<p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/3888.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act3888.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act3888.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>
					</div>
			 </div>
		</div>
	    <div class="zg">
            <div class="v">
			     <div class="to" >
				    <p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/8.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act8.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act8.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>				 
				 </div>
				 <div class="to">
				    <p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/48.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act48.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act48.html"><img src="/Public/images/20110731/get.jpg" border="0"/>	</a>			 
				 </div>
				 <div class="to" style="margin-left:30px;">
				    <p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/98.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act98.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act98.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>
					
				 </div>
				 <div class="to">
				      <p>&nbsp;&nbsp;&nbsp;一次性充值<br/>
					 满<img src="/Public/images/20110731/188.jpg" border="0"/>元以上<br/>
					  即可获赠
					</p><br/>
					<a href="/A20110731/act188.html"><img src="/Public/images/20110731/take.jpg" border="0"/></a>
                    <a href="/A20110731/act188.html"><img src="/Public/images/20110731/get.jpg" border="0"/></a>
				 
				 </div>
			</div>
		</div>
	 </div>
<!---------------------->
	 <div class="f"></div>
</div>
<!---------------------->
<div class="right"></div>
</div>
</body>
</html>
