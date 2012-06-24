<?
class Upload{
	
	Public $Direct;

	Public $FileName;

	Public $Type;

	Public $Files;

	public function __construct($file,$dir='/Upload/',$filename='001'){
		
		$this->Type = array("jpg","gif","png");

		$this->Direct = $dir;

		$this->FileName = $filename;

		$this->Files = $file; 

	}

	public function monthDir(){
	
		$month = date('m');

		$this->Direct.=$month."/";

		$dir = $_SERVER['DOCUMENT_ROOT'].$this->Direct;

		if(!is_dir($dir)){
			mkdir($dir,0700);
		}
		return $this;
	
	}

	public function dayDir(){
	
		$day = date('d');

		$this->Direct.="/".$day;

		$dir = $_SERVER['DOCUMENT_ROOT'].$this->Direct;

		if(!is_dir($dir))
			mkdir($dir);

		return $this;
	
	}

	public function save(){

		if($_FILES[$this->Files]['name']==''){

			return "-1";

		}

		$ext = substr(strrchr($_FILES[$this->Files]['name'],'.'),1);

		if(!in_array(strtolower($ext),$this->Type)){
			
			return "-3";

		}else{

			$uploadfile = $_SERVER['DOCUMENT_ROOT'].$this->Direct.$this->FileName.".".$ext;

//			echo $uploadfile; exit();

			move_uploaded_file($_FILES[$this->Files]['tmp_name'],$uploadfile);
			
			return $this->Direct.$this->FileName.".".$ext;
		}

	}

}
?>