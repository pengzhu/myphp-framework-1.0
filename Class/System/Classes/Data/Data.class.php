<?php
define('CLIENT_MULTI_RESULTS', 131072);

class Data{

	public $host = "";

	public $user = "";

	public $pwd = "";

	public $database = "";

	public $obj;

	public $encode = 'utf8';

	public $affect_id = 0;

	function __construct($conn='web'){

		$this->conns = C('CONNECTIONS');

		$this->host = $this->conns[$conn][0];

		$this->user = $this->conns[$conn][1];

		$this->pwd = $this->conns[$conn][2];

		$this->database = $this->conns[$conn][3];

		$this->connect();

	}

	function connect(){

		$this->obj = mysql_connect($this->host,$this->user,$this->pwd,true,CLIENT_MULTI_RESULTS) or die(Log::save(mysql_error()."无法连接数据库")>-5?mysql_error():"");

		mysql_select_db($this->database,$this->obj) or die(Log::save(mysql_error()."您所选择的数据库权限不够！")>-5?mysql_error():"");

		mysql_query("SET NAMES '".$this->encode."'",$this->obj);

	}

	function save($sql){

		$templink = '';

		mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '-5';}

		$rows = mysql_affected_rows();

		return $rows;

	}

	function delete($sql){

		$templink = '';

		mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '-5';}

		$rows = mysql_affected_rows();

		return $rows;

	}

	function select($sql){

		$templink = '';

		$queryID = mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '__SQLERROR__';}

		$rownums = mysql_num_rows($queryID);

		$result = array();

        if($rownums >0) {

            while($row = mysql_fetch_assoc($queryID)){

                $result[]   =   $row;

            }

            mysql_data_seek($queryID,0);
        }
        
		return $result;

	}

	function find($sql){

		$templink = '';

		$result = mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '__SQLERROR__';}

		if($row=mysql_fetch_array($result)){
			return $row;
		}else{
			return '';
		}

	}

	function selectobj($sql){

		$templink = '';

		$result = mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '__SQLERROR__';}

		if($row=mysql_fetch_row($result)){

			return $row[0];

		}else{

			return "";

		}

	}

	function add($sql){

		$templink = '';

		mysql_query($sql,$this->obj) or ($templink = $this->error(mysql_error(),$sql));

		if($templink=='ERROR'){ return '-5';}

		$insertid = mysql_insert_id();

		return $insertid;

	}

	function startTrans(){
	
		mysql_query('START TRANSACTION', $this->obj) or die(Log::save(mysql_error())>-5?mysql_error():"");

	}

	function commit(){
	
		mysql_query('COMMIT', $this->obj) or die(Log::save(mysql_error())>-5?mysql_error():"");
		
	}

	function rollback(){
	
		mysql_query('ROLLBACK', $this->obj) or die(Log::save(mysql_error())>-5?mysql_error():"");
	
	}

	function error($err,$sql=''){
	
		Log::save($err." sql:".$sql);

		return 'ERROR';

	}

	function close(){ mysql_close($this->obj) or die(Log::save("关闭数据库出错")>-5?"关闭数据库出错":""); }

}
?>