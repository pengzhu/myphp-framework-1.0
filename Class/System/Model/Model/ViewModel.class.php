<?php
class ViewModel extends Model{

	protected $viewfields = array();

	protected $connect = 'web';

	public function __construct(){

		$tabs = array();

		$fields = array();

		$_on = "";
		
		foreach($this->viewfields as $key => $val){
		
			array_push($tabs,$key);

			foreach($val as $k => $value){

				if($k=='_on'&&$k!='0'){

					$_on = $value;

				}else{

					array_push($fields,$key.".".$value); 

				}
			
			}

		}

		if($_on!="")
			$_on = " on ".$_on;

		if(count($tabs)>0){
		
			$tables = implode(" join ",$tabs);

			$this->tbname = $tables.$_on;
		
		}
		
		if(count($fields)>0){

			$field = implode(",",$fields);

			$this->fields = $field;

		}

		parent::__construct($this->tbname,$this->connect);
		
	}

	

	
}
?>