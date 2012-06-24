<?php
class Game{

	public $serverlist = array('1'=>array("203.156.192.190:3307","pnddbuser","whyop","pnd_world","测试服务器"),'2'=>array("203.156.192.152","pnddbuser","whyop","pnd_world","测试服务器"));

	public $server = '1';

	public $job = array(0=>"战士","斥候","圣职者","法师","角斗士","骑士","弓箭手","密探","牧师","苦修士","术士","巫师","狂战士","龙骑士","重装骑士","圣骑士","狙击手","狩猎者","刺客","机关师","主教","吟游诗人","武僧","驱魔人","元素师","德鲁伊","幻术师","咒术师",29=>"战士系","斥候系","圣职者系","法师系","全职");
	
	public $race = array(1=>"人类","精灵","矮人","暗精灵","巨人","拉比");
	
	public $rank = array(0=>"平民","见习骑士","骑士","爵士","勋爵","男爵","子爵","伯爵","侯爵");

	
	function __construct(){

		
	
	}

	//游戏库的搜索
	function select($sql){

		$server = $this->server;

		$data = new Data($this->serverlist[$server][0],$this->serverlist[$server][1],$this->serverlist[$server][2],$this->serverlist[$server][3]);

		$data->sqlconnect();

		$list = $data->select($sql);

		return $list;

	}

	function selectobj($sql){

		$server = $this->server;

		$data = new Data($this->serverlist[$server][0],$this->serverlist[$server][1],$this->serverlist[$server][2],$this->serverlist[$server][3]);

		$data->sqlconnect();

		$obj = $data->selectobj($sql);

		return $obj;

	}


	/*return:-1(账号不存在或不在所选的游戏服务器内) -5(请退出游戏后再进行兑换操作) -2(没有足够的仓库空间存放兑换的道具) 200(兑换成功)*/
	public function addItem($loginid,$serialid,$num){

		//账号处于登录状态不能进行装备兑换
		$data = new Data();

		$data->selpndcommon();

		$userarr = $data->selectarray("select userid,date_lastlogin,date_lastlogout from user where loginid='".$loginid."'");

		if($userarr==''){ return '-1';}

		if(strtotime($userarr['date_lastlogin'])>strtotime($userarr['date_lastlogout'])){ return '-5';}
		
		$server = $this->server;

		$data = new Data($this->serverlist[$server][0],$this->serverlist[$server][1],$this->serverlist[$server][2],$this->serverlist[$server][3]);

		$data->sqlconnect();
	
		$userid = $data->selectobj("select userid from user where loginid='".$loginid."'");

		if($userid==''){ return '-1';}

		$itemid = $data->selectobj("select max(itemid) from item where itemid<100000000");

		if($itemid==''||$itemid=='0'){ $itemid=20;}

		$itemid = $itemid+1;

		//找出仓库空位

		$emptylist = $data->select("select slot from item where userid=".$userid." and place=1");

		$emptyarr = array();

		for($i=0;$i<=34;$i++){ array_push($emptyarr,$i);}

		while($r=mysql_fetch_row($emptylist)){
		
			unset($emptyarr[$r[0]]);

		}

		$emptyarr = array_values($emptyarr);

		if(count($emptyarr)==0){ return "-2";}
		
		$data->add("insert into item(itemid,userid,place,slot,serialid,num,date_create,date_get) values('".$itemid."',".$userid.",1,".$emptyarr[0].",".$serialid.",".$num.",now(),now())");

		return "200";

	}

}
?>