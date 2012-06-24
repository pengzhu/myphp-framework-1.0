<?
class IndexAction extends Object{

	public function index(){

		$sn = get("sn");

		$log = D("log_app_install");

		$data = array();

		$data['app_sn'] = $sn;

		$data['dt'] = NOW;

		$data['ip'] = IP;

		$log->add($data);

		$this->redirect("http://itunes.apple.com/us/app/id491392508");
	
	}

}
?>