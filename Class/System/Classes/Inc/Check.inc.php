<?
function get($obj){
	if(isset($_GET[$obj])){
		return checkstr($_GET[$obj]);
	}
	else{
		return "";
	}
}

function post($obj){
	if(isset($_POST[$obj])){
		return checkstr($_POST[$obj]);
	}
	else{
		return "";
	}
}

function checkstr($obj){
	$obj=str_replace("'","",$obj);
	return $obj;
}

function isEmail($email){
	if(empty($email)||$email=='')
		return false;
	$pattern="/^([\w\.-]+)@([a-zA-Z0-9-]+)(\.[a-zA-Z\.]+)$/i";//包含字母、数字、下划线_和点.的名字的email
    if(preg_match($pattern,$email,$matches)) {
        return true;
    }else {
        return false;
    }
}

function hasChinese($str){

	$a=ereg('['.chr(0xa1).'-'.chr(0xff).']', $str);
	if($a){
		return true;
	}else{
		return false;
	}
}

function isDate($date){
	return preg_match("/^[0-9]{4}(\-|\/)[0-9]{1,2}(\\1)[0-9]{1,2}(|\s+[0-9]{1,2}(|:[0-9]{1,2}(|:[0-9]{1,2})))$/",$date);
}

function isMobile($mobilephone){
	if(preg_match("/^13[0-9]{1}[0-9]{8}$|15[0189]{1}[0-9]{8}$|189[0-9]{8}$/",$mobilephone)){
		return true;
	}else{
		return false;
	}
}

function inputStatu($str){
	$output='';
	$statu='0';
    $a=ereg('['.chr(0xa1).'-'.chr(0xff).']', $str);
    $b=ereg('[0-9]', $str);
    $c=ereg('[a-zA-Z]', $str);
    if($a && $b && $c){ $output='汉字数字英文的混合字符串';$statu='123';}
    elseif($a && $b && !$c){ $output='汉字数字的混合字符串';$statu='12';}
    elseif($a && !$b && $c){ $output='汉字英文的混合字符串';$statu='13';}
    elseif(!$a && $b && $c){ $output='数字英文的混合字符串';$statu='23';}
    elseif($a && !$b && !$c){ $output='纯汉字';$statu='1';}
    elseif(!$a && $b && !$c){ $output='纯数字';$statu='2';}
    elseif(!$a && !$b && $c){ $output='纯英文';$statu='3';}
    return $statu;

}

function isEnglish($str){
	$c=ereg('[a-zA-Z]', $str);
	if($c){
		return true;
	}else{
		return false;
	}
}


function isIddentity($id_card){ 
	if(strlen($id_card) == 18){ 
		return idcard_checksum18($id_card); 
	} 
	elseif((strlen($id_card) == 15)){
		$id_card = idcard_15to18($id_card);
		return idcard_checksum18($id_card);
	}else{ 
		return false; 
	} 
} 


function len($str) {
    $i = 0;
    $count = 0;
    $len = strlen ($str);
    while ($i < $len) {
        $chr = ord ($str[$i]);
        $count++;
        $i++;
        if($i >= $len) break;
        if($chr & 0x80) {
            $chr <<= 1;
            while ($chr & 0x80) {
                $i++;
                $chr <<= 1;
            }
        }
    }
    return $count;

}

function idcard_verify_number($idcard_base){ 
	if(strlen($idcard_base) != 17){ 
		return false; 
	}
	$factor = array(7,9,10,5,8,4,2,1,6,3,7,9,10,5,8,4,2); 
	$verify_number_list = array('1','0','X','9','8','7','6','5','4','3','2'); 
	$checksum = 0; 
	for ($i = 0; $i < strlen($idcard_base); $i++){ 
		$checksum += substr($idcard_base, $i, 1) * $factor[$i]; 
	} 
	$mod = $checksum % 11; 
	$verify_number = $verify_number_list[$mod];
	return $verify_number; 
} 

function idcard_15to18($idcard){ 
	if(strlen($idcard) != 15){ 
		return false; 
	}else{ 
		if (array_search(substr($idcard,12,3),array(’996’,’997’,’998’,’999’))!==false){ 
			$idcard = substr($idcard, 0, 6) . ’18’. substr($idcard, 6, 9); 
		}else{
			$idcard = substr($idcard, 0, 6) . ’19’. substr($idcard, 6, 9); 
		} 
	} 
	$idcard = $idcard.idcard_verify_number($idcard); 
	return $idcard; 
} 

function idcard_checksum18($idcard){ 
	if(strlen($idcard) != 18){ return false; } 
	$idcard_base = substr($idcard, 0, 17);
	
	if(idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))){ 
		return false; 
	}else{ 
		return true; 
	} 
}

function msgto($msg,$go){
	if($go=="-1"){
		echo "<script>alert('".$msg."');history.back();</script>";
	}else{
		echo "<script>alert('".$msg."');location.href='".$go."';</script>";
	}
	exit();
}
function msg($msg){
	echo "<script>alert('".$msg."');</script>";
	exit();
}

function msgfunc($msg,$target,$func,$param=''){
	echo "<script>alert('".$msg."');".$target.".".$func."(".$param.");</script>";
	exit();
}

function htmlEncode($string){

	$string = str_replace('&','&amp;',$string);

	$string = str_replace('"','&quot;',$string);

	$string = str_replace("'",'&#039;',$string);

	$string = str_replace('<','&lt;',$string);

	$string = str_replace('>','&gt;',$string);

	return $string;

}

function htmlDecode($string){

	$string = str_replace('&amp;','&',$string);

	$string = str_replace('&quot;','"',$string);

	$string = str_replace('&#039;',"'",$string);

	$string = str_replace('&lt;','<',$string);

	$string = str_replace('&gt;','>',$string);

	$string = str_replace('\"','"',$string);

	return $string;
	
}

function left($string, $beginIndex, $length){
    if(strlen($string) < $length){
        return substr($string, $beginIndex);
    }
 
    $char = ord($string[$beginIndex + $length - 1]);
    if($char >= 224 && $char <= 239){
        $str = substr($string, $beginIndex, $length - 1).'...';
        return $str;
    }
 
    $char = ord($string[$beginIndex + $length - 2]);
    if($char >= 224 && $char <= 239){
        $str = substr($string, $beginIndex, $length - 2).'...';
        return $str;
    }
 
    return substr($string, $beginIndex, $length).'...';
}
?>