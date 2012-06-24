<?
set_include_path($_SERVER['DOCUMENT_ROOT']);
//日志类
require_once "Class/System/Action/Log.class.php";
//数据库连接类注册
require_once "Class/System/Classes/Data/Data.class.php";
require_once "Class/System/Model/Model.class.php";
require_once "Class/System/Model/Model/ViewModel.class.php";
require_once "Class/System/Model/Model/CommonModel.class.php";

//加载系统函数集
require_once "Class/System/Classes/Inc/Common.inc.php";
require_once "Class/System/Classes/Inc/Check.inc.php";

//加载用户函数集
if(is_file($_SERVER['DOCUMENT_ROOT']."/Inc/Common.php")){
	require_once "Inc/Common.php";
}



//页面类基类
require_once "Class/System/Action/Action.class.php";

//URL控制类
require_once "Class/System/Action/Dispatch.class.php";

//空类
require_once "Page/EmptyAction.class.php";

//空类
require_once "Page/ErrorAction.class.php";



?>