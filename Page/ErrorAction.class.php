<?
class ErrorAction extends Object{

	public function error(){

		Log::save(ERROR,'excep');

		exit();

	}

}
?>