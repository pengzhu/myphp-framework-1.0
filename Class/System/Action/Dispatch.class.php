<?
class Dispatch extends Object{

	public function __construct(){

		$logcontent = $_SERVER['REQUEST_URI'];

		//$scriptname = $_SERVER['SCRIPT_NAME'];

		//Log::save($logcontent,'web');
		//Log::save($logc);

		$_GET = $this->urlconvert();

		$group = $_GET['group'];

		$class = $_GET['class'];

		//echo $class; exit();

		$method = $_GET['method'];

		if($group==null){$group='';}

		if($class==null){$class='';}

		if(strlen($class)==0){ 
			
			$class = SC('DEFAULT_ACTION');

			$defact= C('DEFAULT_ACTION');

			if($defact!=''&&$defact!=null){ $class=$defact;}
			
		}

		if(strlen($method)==0){ 
		
			$method = SC('DEFAULT_METHOD');

			$defmed= C('DEFAULT_METHOD');

			if($defmed!=''&&$defmed!=null){ $method=$defmed;}
		
		}

		$grouplist = C('APP_GROUP_LIST');

		//echo $_GET['group']."<br>"; echo $_GET['class']."<br>"; echo $_GET['method']."<br>"; exit();

		if($grouplist!=''&&$grouplist!=null){
		
			if($group==''||$group==null)
				$group = C('DEFAULT_GROUP');

			$gp = explode(',',$grouplist);

			if(!in_array($group,$gp)){

				$method = $class; $class = $group; $group = C('DEFAULT_GROUP');

				if($_GET['class']=="")
					$method = "index";

			}

		}

		define("GROUP",$group);

		define("ACTION",$class);

		define("METHOD",$method);

		//echo $class; exit();

		if(strlen($group)>0){$group.="/";}

		$class.="Action";
		
		$root = "";//$_SERVER['DOCUMENT_ROOT'];

		$path = $root."Page/Action/".$group.$class.".class.php";

		//判断处理文件是否存在
		if(is_file($path)){

			require_once $path;

			$action = new $class();

			try{

				$action->$method();

			}catch(Exception $e){

				Log::save($e,'http');

				define("ERROR",$e);

				$error = new ErrorAction();

				$error->error();
	
			}

		}else{

			$empty = new EmptyAction();

			define("ACTION_NAME",$group.$class);

			$empty->error();
			
			//echo '模板不存在！'; //模板不存在时的处理方式

		}

	}

	public function urlconvert(){
		
		$url = $_SERVER['PATH_INFO'];

		$url = str_replace("//","/",$url);

		$mode = C("URL_MODE");

		$urlsep = SC('URL_SEP');

		$sep = $urlsep[$mode];

		if($sep==''){ return; }

		$urlarr = explode($sep,$url);

		$gmode = C("APP_GROUP_LIST");

		$grouplist = explode(',',$gmode);

		if($gmode==''||$gmode==null)
			$gmode=false;
		else
			$gmode=true;

		if(!$gmode){
			$urlarrnew = array('');
			$urlarr = array_merge($urlarrnew,$urlarr);
		}

		$params="";

		$suffix = C('URL_SUFFIX');

		for($i=0;$i<count($urlarr);$i++){
			if($i==(count($urlarr)-1)){ $urlarr[$i]=str_replace($suffix,'',$urlarr[$i]);}
			if($i==1){ $_GET['group']=$urlarr[$i]; }
			if($i==2){$_GET['class']=$urlarr[$i];}
			if($i==3){$_GET['method']=$urlarr[$i];}
			if($i>=4){
				if($j%2==0){
					if(count($urlarr)>$i+1){
						if(($i+1)==(count($urlarr)-1)){ $urlarr[$i+1]=str_replace($suffix,'',$urlarr[$i+1]);}
						$_GET[$urlarr[$i]]=$urlarr[$i+1];
					}
				}
			}
		}

		return $_GET;

	}

}
?>