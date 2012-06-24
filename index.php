<?
header("content-type:text/html;charset=utf-8");
session_start();
date_default_timezone_set('PRC');
define("NOW",date("Y-m-d H:i:s"));
require "Class/System/Classes/Inc/Config.inc.php";
define("IP",get_client_ip());
$dispatcher = new Dispatch();
?>
