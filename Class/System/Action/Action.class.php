<?
class Object{

	public $vars = array();

	public $values = array();

	public function __construct(){

		set_error_handler(array(&$this, 'errorhandler'));

	}

	//2:E_WARNING  8:E_NOTICE  256:E_USER_ERROR 512:E_USER_WARNING 1024:E_USER_NOTICE 4096:E_RECOVERABLE_ERROR 8191:E_ALL 
	final public function errorhandler($errlevel,$errmessage,$errfile,$errline,$errcontext){
	
		$content = "错误级别：".$errlevel." 信息：".$errmessage." 文件：".$errfile." 行数：".$errline;

		Log::save($content,'http');

	}
	final public function nocache(){
	
		header("content-type:text/html;charset=utf-8");

		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

		header("Pragma: no-cache");
	
	}
	final public function display($modelless=''){ 

		for($i=0;$i<count($this->vars);$i++){

			eval('$'.$this->vars[$i].'=$this->values[$i];');

		}

		if($modelless=='')
			$modelless=ACTION."/".METHOD.".html";
		else
			$modelless=ACTION."/".$modelless.".html";

		

		if(GROUP!=null&&GROUP!=''){$modelless=GROUP."/".$modelless;}

		$path = ""; //$_SERVER['DOCUMENT_ROOT'];

		$modelpath = $path."Page/Tpl/".$modelless;

		if(is_file($modelpath)){

			$runfile = $path."Page/Runtime/".md5($modelless).".php";
			
			if(!is_file($runfile)||C("CACHEHTML")==false){

				$content = file_get_contents($modelpath);

				$f = fopen($runfile, 'w');

				fwrite($f, $content);
				
				fclose($f);

			}

			require $runfile;

		}else{

			echo $modelpath.'不存在的模板文件';

		}

	}

	final public function assign($var,$value){

		array_push($this->vars,$var);

		array_push($this->values,$value);

		return $this;

	}

	final public function redirect($url){

		header("Location:".$url);

		exit();

	}

	public function __call($mname,$argu){

		if(method_exists($this,'_empty')){

			define("METHOD_NAME",$mname);

			$this->_empty();

		}else{

			echo $mname."方法不存在！";

			exit();

		}

	}

}
?>