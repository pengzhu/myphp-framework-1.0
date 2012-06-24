<?
class HttpRequest{
	
	public $host= '';

	public $path = '/';

	public $port = 80;

	public $referer = '';

	public $cookie = '';

	function __construct(){}

	function post($post){

		$out = "POST ".$this->path." HTTP/1.0\r\n";

		$out .= "Accept: */*\r\n";

		$out .= "Referer: ".$this->referer."\r\n";

		$out .= "Accept-language: zh-cn\r\n";

		$out .= "Content-type: application/x-www-form-urlencoded\r\n";

		$out .= "User-agent: $_server[http_user_agent]\r\n";

		$out .= "Host: ".$this->host."\r\n";

		$out .= 'Content-length: '.strlen($post)."\r\n";

		$out .= "Connection: Close\r\n";

		$out .= "Cache-control: no-cache\r\n";

		$out .= "Cookie: ".$this->cookie."\r\n\r\n";

		$out .= $post;

		$receive = $this->send($out);

		return $receive;
	
	}

	function get(){
	
		$out = "GET ".$this->path." HTTP/1.1\r\n";

		$out .= "Host: ".$this->host."\r\n";

		$out .= "Connection: Close\r\n\r\n";

		$receive = $this->send($out);

		return $receive;

	}

	function send($out){

		$fp = @fsockopen($this->host, $this->port, $errno, $errstr, 30);

		if(!$fp){

			return "$errstr ($errno)<br />n";

		}else{

			fwrite($fp, $out);

			$in = "";

			while (!feof($fp)){

				$in.=fgets($fp,128);

			}

			fclose($fp);

			$data_arr = split("\n\r", $in, "2");

			$in = trim($data_arr["1"]);

			return $in;

		}

	}
	
}
?>