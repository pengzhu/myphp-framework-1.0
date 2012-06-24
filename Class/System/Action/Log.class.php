<?php
class log{

	/*return:-1(不能创建或打开文件)  -2(不能写入文件) 200(成功)*/
	public static function save($content,$path='data'){

		if($path=='data'){$path = '/Log/Error/Data/'.date('Ymd').'.txt';}

		if($path=='http'){$path = '/Log/Error/Http/'.date('Ymd').'.txt';}

		if($path=='excep'){$path = '/Log/Error/Excep/'.date('Ymd').'.txt';}

		if($path=='web'){$path = '/Log/Visit/'.date('Ymd').'.txt';}
		
		$dirs = explode("/",$path);

		$dir = $_SERVER['DOCUMENT_ROOT'];

		for($i=0;$i<count($dirs);$i++){
			
			$val = $dirs[$i];

			if($val=="")
				continue;
			

			$dir .= "/".$val;

			if($i!=count($dirs)-1){
			
				if(!is_dir($dir)){
				
					mkdir($dir);

				}

			}
		
		}

		$ip = $_SERVER['REMOTE_ADDR'];

		$time = date('Y-m-d H:i:s');

		$referer="";

		if(isset($_SERVER['HTTP_REFERER']))
			$referer = $_SERVER['HTTP_REFERER'];

		$content = $time." ".$ip." ".$content." referer:".$referer;

		if(!$handle=fopen($dir,'a+'))
			return "-1";

		$content.="\r\n";

		if(fwrite($handle,$content)==FALSE)
			return "-2";
		else{
			return "200"; fclose($handle);
		}

	}

}
?>