<?php
class Webmemcache{

	public $mem;
	
	public $host = "127.0.0.1";

	public $port = "12000";

	public $MEMCACHE_COMPRESSED = 0;

	
	public function __construct(){
	
		$this->mem = new Memcache;

		$this->mem->connect($this->host, $this->port)or die ("Could not connect memcache");

	}
	
	/*
		param: $time 单位是秒 如为0，则永久保存
				$memcache_compressed 压缩参数 0为不压缩 2为压缩
		return: STORED(保存成功) NOT_STORED(保存失败)
	*/
	public function _set($key='',$object='',$time=0){
	
		$statu = $this->mem->set($key,$object,$this->MEMCACHE_COMPRESSED,$time);

		return $statu;
	}

	public function _get($key){

		$object = $this->mem->get($key);

		return $object;

	}

	public function get($key,$object,$time){

		if($this->mem->get($key)==null){

			$this->mem->set($key,$object,Webmemcache::$MEMCACHE_COMPRESSED,$time);
				
		}

		$object = $this->mem->get($key);

		return $object;

	}

	/*
		param:$time为0则立即删除，为N则超时N秒后删除
		return:DELETED 删除数据成功！ NOT_FOUND 没有在服务器上找到
	*/
	public function delete($key,$time=0){
	
		$statu = $this->mem->delete($key,$time);

		return $statu;
	
	}

	//return:OK 则数据全部删除
	public function flush_all(){
	
		$statu = $this->mem->flush_all();

		return $statu;

	}

}
?>