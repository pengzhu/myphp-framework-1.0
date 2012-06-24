<?php
class Wr{
	
	public $host = "";

	public $user = "";

	public $pwd = "";

	public $database = "";

	public $obj;

	public $encode = 'utf8';

	function __construct($host='203.156.192.190',$user='postgres',$pwd='whyop',$database='whiterock'){

		$this->host = $host;

		$this->user = $user;

		$this->pwd = $pwd;

		$this->database = $database;

		//$this->connect();

	}

	function connect(){
	
		$this->obj = pg_connect("host=$this->host port=5434 dbname=$this->database user=$this->user password=$this->pwd") or die('无法连接数据库');

		pg_query($this->obj,"SET NAMES '".$this->encode."'");

	}

	function select($sql){

		$queryID = pg_query($this->obj,$sql) or die("数据库查询错误！");

		$rownums = pg_num_rows($queryID);

		$result = array();

        if($rownums >0) {

            while($row = pg_fetch_assoc($queryID)){

                $result[]   =   $row;

            }

        }
        
		return $result;

	}

	function find($sql){

		$result = pg_query($this->obj,$sql) or die("数据库查询错误！");

		if($row=pg_fetch_array($result)){
			return $row;
		}else{
			return '';
		}

	}

	function selectobj($sql){

		$result = pg_query($this->obj,$sql) or die("数据库查询错误！");

		if($row=pg_fetch_row($result)){

			return $row[0];

		}else{

			return "";

		}

	}

	function save($sql){
	
		$queryID = pg_query($this->obj,$sql) or die("数据库查询错误！");

		$row = pg_affected_rows($queryID);

		return $row;
	
	}

	function close(){ }

	function addpoint($loginid,$point){
	
		import("HttpRequest");

		$http = new HttpRequest();

		$post = 'data=<?xml version="1.0" encoding="UTF-8"?><request><method>add_point</method><params><gameid>'.$loginid.'</gameid><point>'.$point.'</point></params></request>';

		$http->host = "trans.pdl.126play.com";

		$http->path = "/external.action";

		$data = $http->post($post);

		$data = substr($data,strpos($data,'<?xml'));

		$doc = new DOMDocument();

		$result = $doc->loadXML($data);

		if(!$result)
			return "500";

		$point = $doc->getElementsByTagName("code");

		$code = $point->item(0)->nodeValue;

		return $code;
	
	}

	function addUser($loginid,$password,$adult){
	
		import("HttpRequest");

		$http = new HttpRequest();

		$post = 'data=<?xml version="1.0" encoding="UTF-8"?><request><method>add_update_member</method><params><exec_type>add</exec_type>';

		$post.= '<gameid>'.$loginid.'</gameid><password>'.$password.'</password><member_type>User</member_type><adult>'.$adult.'</adult></params></request>';

		$http->host = "trans.pdl.126play.com";

		$http->path = "/external.action";

		$data = $http->post($post);

		$data = substr($data,strpos($data,'<?xml'));

		$doc = new DOMDocument();

		$result = $doc->loadXML($data);

		if(!$result)
			return "500";

		$point = $doc->getElementsByTagName("code");

		$code = $point->item(0)->nodeValue;

		return $code;
	
	}

}
?>