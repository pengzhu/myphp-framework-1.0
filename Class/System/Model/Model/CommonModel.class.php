<?php
class CommonModel extends Model{

	protected $connect = 'web';

	public function __construct(){

		parent::__construct($this->tbname,$this->connect);
		
	}

	

	
}
?>