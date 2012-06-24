<?php
class Model extends Data{

	public $tbname = "";

	public $sql = "";

	public $fields = "*";

	public $where = "";

	public $limit = "";

	public $order = "";

	public $lock = "";

	public function __construct($tablename='',$conn='web'){

		if($tablename!='')
			$this->tbname = $tablename;

		parent::__construct($conn);

	}

	public function where($w){

		$this->where = " where ".$w;

		return $this;

	}

	public function order($w){

		$this->order = " order by ".$w;

		return $this;

	}

	public function fields($w){

		$this->fields = $w;
	
		return $this;

	}

	public function limit($w){
	
		$this->limit = " limit ".$w;

		return $this;
	
	}

	public function lock($w){
	
		$this->lock = " ".$w;

		return $this;
	
	}

	public function add($data=array()){

		$sql = "insert into ".$this->tbname."(";

		$fields = "";

		$values = "";

		foreach($data as $key => $value){

			$fields.= $key.",";

			$values.="'".$value."',";

		}

		$fields = substr($fields,0,strlen($fields)-1);

		$values = substr($values,0,strlen($values)-1);

		$sql.= $fields.") values(".$values.")";

		$this->sql = $sql;

		$rowid = parent::add($sql);

		return $rowid;

	}

	public function save($data=array()){
	
		$sql = "update ".$this->tbname." set ";

		foreach($data as $key => $value){

			$sql.= $key."='".$value."',";

		}

		$sql = substr($sql,0,strlen($sql)-1);

		$sql.= " ".$this->where;

		$sql.= " ".$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$rowcount = parent::save($sql);

		return $rowcount;
	
	}

	public function delete(){

		$sql = "delete from ".$this->tbname." ".$this->where.$this->limit.$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$rowcount = parent::delete($sql);

		return $rowcount;

	}

	public function select(){
	
		$sql = "select ".$this->fields." from ".$this->tbname." ".$this->where." ".$this->order.$this->limit.$this->lock;

		$this->sql = $sql;

		$this->lock = "";
		
		$arr = parent::select($sql);

		return $arr;
	
	}

	public function find(){

		$sql = "select ".$this->fields." from ".$this->tbname." ".$this->where." ".$this->order." limit 1".$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$model = parent::find($sql);

		return $model;

	}

	public function selectobj(){

		$sql = "select ".$this->fields." from ".$this->tbname." ".$this->where." ".$this->order." limit 1".$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$val = parent::selectobj($sql);

		return $val;

	}

	public function count(){
	
		$sql = "select count(*) from ".$this->tbname." ".$this->where.$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$val = parent::selectobj($sql);

		return $val;
	
	}

	public function setInc($f,$w,$n){

		$sql = "update ".$this->tbname." set ".$f."=".$f."+".$n." where ".$w.$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$rowcount = parent::save($sql);

		return $rowcount;

	}

	public function setDec($f,$w,$n){
	
		$sql = "update ".$this->tbname." set ".$f."=".$f."-".$n." where ".$w.$this->lock;

		$this->sql = $sql;

		$this->lock = "";

		$rowcount = parent::save($sql);

		return $rowcount;
	
	}

	public function query($sql){

		$this->sql = $sql;
	
		$list = parent::select($sql);

		return $list;
	
	}

	public function execute($sql){

		$this->sql = $sql;
	
		$rowcount = parent::save($sql);

		return $rowcount;
	
	}

	public function getlastsql(){
	
		return $this->sql;
	
	}
}
?>