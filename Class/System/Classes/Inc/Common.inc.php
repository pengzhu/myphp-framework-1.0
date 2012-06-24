<?
define("ROOT",$_SERVER['DOCUMENT_ROOT']);
function D($tbname='',$conn='web'){ 

	$path = ROOT."/Page/Model/".$tbname."Model.class.php";
	
	if($tbname!=''&&is_file($path)){
	
		require_once $path;
		
		$tbname.="Model";

		return new $tbname();
	
	}
	
	return new Model($tbname,$conn);
	
}

function M($tbname='',$conn='web'){

	return new Model($tbname,$conn);

}

function R($url){ return file_get_contents($_SERVER['DOCUMENT_ROOT']."/".$url);}

function import($url){ require_once $_SERVER['DOCUMENT_ROOT']."/Page/Org/".$url.".class.php";}

function C($key,$url='/Conf/config.php'){
	
	$_config = include($_SERVER['DOCUMENT_ROOT'].$url);

	return $_config[$key];

}

function SC($key,$url='/Class/System/Classes/Inc/Config.web.php'){

	$_config = include($_SERVER['DOCUMENT_ROOT'].$url);

	return $_config[$key];

}

function Temp($action){

	$action = str_replace("::","/",$action);

	require $_SERVER['DOCUMENT_ROOT']."/Page/Tpl/".GROUP."/".$action.".html";

}

?>