<?
require "Ip.php";
require "media.php";

function get_client_ip() {
	if (getenv ( "HTTP_CLIENT_IP" ) && strcasecmp ( getenv ( "HTTP_CLIENT_IP" ), "unknown" ))
		$ip = getenv ( "HTTP_CLIENT_IP" );
	else if (getenv ( "HTTP_X_FORWARDED_FOR" ) && strcasecmp ( getenv ( "HTTP_X_FORWARDED_FOR" ), "unknown" ))
		$ip = getenv ( "HTTP_X_FORWARDED_FOR" );
	else if (getenv ( "REMOTE_ADDR" ) && strcasecmp ( getenv ( "REMOTE_ADDR" ), "unknown" ))
		$ip = getenv ( "REMOTE_ADDR" );
	else if (isset ( $_SERVER ['REMOTE_ADDR'] ) && $_SERVER ['REMOTE_ADDR'] && strcasecmp ( $_SERVER ['REMOTE_ADDR'], "unknown" ))
		$ip = $_SERVER ['REMOTE_ADDR'];
	else
		$ip = "unknown";
	return ($ip);
}

function is_admin_login(){

	if(METHOD=='login'||METHOD=='cate')
			return;
	if(!isset($_SESSION['liefeng_loginid'])){
		if(isset($_COOKIE['liefeng_loginid'])&&isset($_COOKIE['liefeng_pwd'])){
			$login=D('');
			$user=$login->query("select * from manager where loginid='".$_COOKIE['liefeng_loginid']."' and passwrod='".$_COOKIE['liefeng_pwd']."' and ban='正常'");
			if(count($user)==0){
				$this->redirect('login.html');
			}
			$_SESSION['liefeng_loginid']=$_COOKIE['liefeng_loginid'];
		}else{
			$this->redirect('login.html');
		}
	}

}

function islogin(){

	if(isset($_SESSION['userid']))
		return true;
	else
		return false;
	
}



function ip_to_int($ip){ return bindec(decbin(ip2long($ip)));}

function int_to_ip($int){ return long2ip($int);}

function contentEncode($string){
	
	$string = str_replace('"',"&#34;",$string);

	$string = str_replace("'","&#39;",$string);

	return $string;
}

function model_name($c){

	if($c=='News'){return "新闻";}
	if($c=='Topics'){return "专题";}
	if($c=='Events'){return "活动";}
	if($c=='Shoe'){return "博物馆";}
	if($c=='Photo'){return "图片";}
	if($c=='Video'){return "视频";}

}

function url($c,$id){

	if($c=='News'){return "/News/index#$id";}
	if($c=='Topics'){return "/Topics/celebrity.html?id=$id";}
	if($c=='Events'){return "/Events/url.html?id=$id";}
	if($c=='Shoe'){return "/Museum/detail.html?id=$id";}
	if($c=='Photo'){return "/Visual/photo#$id";}
	if($c=='Video'){return "/Visual/video#$id";}

}

function timespan($et,$w='auction'){
	$timespan = strtotime($et) - time();
	$day = intval($timespan/(3600*24));
	$hour = intval(($timespan - $day*3600*24)/3600);
	$minute = intval(($timespan - $day*3600*24 - $hour*3600)/60);
	$sec = $timespan - $day*3600*24 - $hour*3600 - $minute*60;
	if($w=='shopping')
		return "<span>$day</span>天<span>$hour</span>小时<span>$minute</span>分";
	return $day."天".$hour."小时".$minute."分钟".$sec."秒";
}

function statu($st,$et){

	if(time()<strtotime($st)){ return '1'; }

	if(time()>=strtotime($st)&&time()<=strtotime($et)){ return '2'; }

	if(time()>strtotime($et)){ return '3'; }
}
?>