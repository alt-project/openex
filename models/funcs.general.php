<?phpfunction browsercheck_index() {	if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {	//ignore	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE) {	//ignore	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE) {	//ignore	}else{		echo '<meta http-equiv="refresh" content="0; URL=browser_alert.php">';	}}function getChatStylesheet() {	if(isset($_SERVER['HTTP_USER_AGENT'])){		$agent = $_SERVER['HTTP_USER_AGENT'];	}	if(strlen(strstr($agent,"Firefox")) > 0 ){ 		echo '<link rel="stylesheet" type="text/css" href="assets/css/chatff.css" />';	}else{		echo '<link rel="stylesheet" type="text/css" href="assets/css/chat.css" />';	}}function optimizeTables() {	$res = mysql_query('SHOW TABLE STATUS WHERE Data_free / Data_length > 0.1 AND Data_free > 102400');	while($row = mysql_fetch_assoc($res)) {		mysql_query('OPTIMIZE TABLE ' . $row['Name']);	}}function mobile_listen() {	$useragent=$_SERVER['HTTP_USER_AGENT'];	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))	{		echo '<meta http-equiv="refresh" content="0; URL=https://openex.mobi">';	} }function memcache_init(){	include("ratelimiter.php");	//memcached listener 	$memcache_obj = new Memcache; 	$memcache_obj->addServer('memcache_host', 11211);	$rateLimiter = new RateLimiter(new Memcache(), $_SERVER["REMOTE_ADDR"]);	try {		$rateLimiter->limitRequestsInMinutes(15, 1);	} catch (RateExceededException $e) {		header("HTTP/1.0 529 Too Many Requests");		exit;	}}function getuseragent(){	if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == TRUE) {		$u_agent = "Internet Explorer";	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') == TRUE) {		$u_agent = "Google Chrome";	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') == TRUE) {		$u_agent = "Opera Mini";	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') == TRUE) {		$u_agent = "Opera";	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox/25.0') == TRUE) {		$u_agent = "Mozilla Firefox";	}	elseif(strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') == TRUE) {		$u_agent = "Safari";	}	else { 		$u_agent = "Unknown/Other";	}		return $u_agent;}function gettime(){	{	$tmvari = date("F j, Y, g:i a");	}	return $tmvari;}function load_monit_init(){	$load = sys_getloadavg();	$sleep=5;	$maxload=2;	if ($load[0] > $maxload) {		   sleep($sleep);		echo "Busy server - sleep $sleep seconds<br>";	}}function TakeMoney($amount, $user, $currency, $fs=false){    $sell = @mysql_query("SELECT * FROM balances WHERE `User_ID`='$user' AND `Wallet_ID`='$currency'");    $id   = @mysql_result($sell, 0, "id");        $old = mysql_result($sell, 0, "Amount");        if ($old >= $amount OR $fs == true) {            $new = $old - $amount;			$new = sprintf("%2.8f", $new);            mysql_query("UPDATE balances SET `Amount` = '$new' WHERE `User_ID` = '$user' AND `Wallet_ID` = '$currency';");            return true;        } else {		            return false;			        }}function AddMoney($amount, $user, $currency){	$acr = mysql_query("SELECT * FROM Wallets WHERE `Acronymn`='$currency'");	$acr_r = mysql_result($acr,0,"Id");	if($acr_r != "")	{		$currencys = $acr_r;	}	else	{		$currencys = $currency;	}    $sell = mysql_query("SELECT * FROM balances WHERE `User_ID`='$user' AND `Wallet_ID`='$currencys'");    $id   = mysql_result($sell, 0, "id");	$Amount = mysql_result($sell, 0, "Amount");    if ($Amount <= 0.00000001) {        mysql_query("INSERT INTO balances (`User_ID`,`Amount`,`Coin`,`Pending`,`Wallet_ID`) VALUES ('$user','$amount','$currency','0','$currencys');");    } else {	        $old = mysql_result($sell, 0, "Amount");        $new = $old + $amount;		$new = sprintf("%2.8f", $new);    mysql_query("UPDATE balances SET `Amount` = $new WHERE `User_ID` = '$user' AND `Wallet_ID` = '$currencys';");    }}function GetPosts($thread){    $sql = mysql_query("SELECT * FROM TicketReplies WHERE `ticket_id` = '$thread'");    $num = @mysql_num_rows($sql);    $x   = 0;    for ($i = 0; $i < $num; $i++) {        $x = $x + 1;    }    return $x;    }function GetUser($owner){        $sql = mysql_query("SELECT * FROM userCake_Users WHERE `User_ID`=$owner");        return mysql_result($sql, 0, "Username_Clean");    }function sanitize($str){        return strtolower(strip_tags(trim(($str))));    }function isValidEmail($email){        return preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", trim($email));    }function minMaxRange($min, $max, $what){        if (strlen(trim($what)) < $min)        return true;        else if (strlen(trim($what)) > $max)        return true;        else        return false;    }//@ Thanks to - http://phpsec.orgfunction generateHash($plainText, $salt = null){        if ($salt === null) {                $salt = substr(md5(uniqid(rand(), true)), 0, 25);            }        else {                $salt = substr($salt, 0, 25);            }                return $salt . hash('sha512', ($salt . $plainText));;    }function replaceDefaultHook($str){        global $default_hooks, $default_replace;                return (str_replace($default_hooks, $default_replace, $str));    }function getUniqueCode($length = ""){        $code = md5(uniqid(rand(), true));        if ($length != "")        return substr($code, 0, $length);        else        return $code;    }function errorBlock($errors){        if (!count($errors) > 0) {                return false;            }        else {                echo "<ul>";                foreach ($errors as $error) {                        echo "<li>" . $error . "</li>";                    }                echo "</ul>";            }    }function lang($key, $markers = NULL){        global $lang;                if ($markers == NULL) {                $str = $lang[$key];            }        else {                //Replace any dyamic markers                $str = $lang[$key];                                $iteration = 1;                                foreach ($markers as $marker) {                        $str = str_replace("%m" . $iteration . "%", $marker, $str);                                                $iteration++;                    }            }                //Ensure we have something to return        if ($str == "") {                return ("No language key found");            }        else {                return $str;            }    }function destorySession($name){        if (isset($_SESSION[$name])) {                $_SESSION[$name] = NULL;                                unset($_SESSION[$name]);            }    }function getIP(){    foreach (array(        'HTTP_CLIENT_IP',        'HTTP_X_FORWARDED_FOR',        'HTTP_X_FORWARDED',        'HTTP_X_CLUSTER_CLIENT_IP',        'HTTP_FORWARDED_FOR',        'HTTP_FORWARDED',        'REMOTE_ADDR'    ) as $key) {        if (array_key_exists($key, $_SERVER) === true) {            foreach (array_map('trim', explode(',', $_SERVER[$key])) as $ip) {                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {                    return $ip;                }            }        }    }}function isTORnode() {	$ipvart = getIP(); //this is the users ip address we are testing	$filename = "models/torlist.csv"; //the list of tor nodes	$data = file_get_contents($filename); //get the list	if(strpos($data,$ipvart) != false)	return true;	else	return false;}function isIPbanned() {	$ipvars = mysql_real_escape_string(getIP());	$sqlxyzr = mysql_query("SELECT * FROM bantables_ip WHERE `ip`='$ipvars'");	if (mysql_num_rows($sqlxyzr) > 0) {		return true;	}else{		return false;	}}function strip_tags_recursive( $str, $allowable_tags = NULL ){    if ( is_array( $str ) )    {        $str = array_map( 'strip_tags_recursive', $str, array_fill( 0, count( $str ), $allowable_tags ) );    }    else    {        $str = strip_tags( $str, $allowable_tags );    }    return $str;} /*begin configuration functions*///httpsfunction forceSSL() {	if(empty($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] !== "on") {		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);		exit();	}}//registrationfunction isRegistrationDisabled() {	$sqlxzfk = mysql_query("SELECT * FROM  `config` WHERE  `name` = 'registration' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfk)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableRegistration() {	$sqlrqkf = mysql_query("UPDATE `config` SET `setting` =  '1' WHERE `config`.`id` =1 LIMIT 1");}function enableRegistration() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET `setting` = '0' WHERE `config`.`id` =1 LIMIT 1");}function display_Reg_message() {	$registration_message = "Registrations are currently disabled.</br>However you can login with a test username if you like.</br><h4>Test Users</h4><h5>format: user | pass </h5>";	$testnamepair1 ="<h6>test123 | 12345678</h6>";	$testnamepair2 ="<h6>test2 | password</h6>";	$testnamepair3 ="<h6>test5 | password</h6>";	$testnamepair4 ="<h6>TraderBob | 12345678</h6>";	echo $registration_message;	echo "<pre>";	echo $testnamepair1;	echo $testnamepair4;	echo $testnamepair2;	echo $testnamepair3;	echo "</pre>";}//loginfunction isLoginDisabled() {	$sqlxzfk = mysql_query("SELECT * FROM `config` WHERE `name` = 'login' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfk)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableLogin() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =2 LIMIT 1");}function enableLogin() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =2 LIMIT 1");}//depositfunction isDepositDisabled() {	$sqlxzfkn = mysql_query("SELECT * FROM `config` WHERE `name` = 'deposit' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfkn)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableDeposits() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =6 LIMIT 1");}function enableDeposits() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =6 LIMIT 1");}//withdrawfunction isWithdrawalDisabled() {	$sqlxzfkg = mysql_query("SELECT * FROM `config` WHERE `name` = 'withdrawal' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfkg)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableWithdrawal() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =5 LIMIT 1");}function enableWithdrawal() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =5 LIMIT 1");}//maintenancefunction isMaintenanceDisabled() {	$sqlxzfkgg = mysql_query("SELECT * FROM `config` WHERE `name` = 'maintenance' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfkgg)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableMaintenance() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =3 LIMIT 1");}function enableMaintenance() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =3 LIMIT 1");}//mobile redirectionfunction isMobile_RedirectDisabled() {	$sqlxzfkk = mysql_query("SELECT * FROM `config` WHERE `name` = 'mobile_redirect' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfkk)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableMobileRedirect() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =7 LIMIT 1");}function enableMobileRedirect() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =7 LIMIT 1");}//debug navigationfunction isDebugDisabled() {	$sqlxzfkrr = mysql_query("SELECT * FROM `config` WHERE `name` = 'debug_nav' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfkrr)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableDebug() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =4 LIMIT 1");}function enableDebug() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =4 LIMIT 1");}//trade engine fail safe kill switchfunction isTradingDisabled() {	$sqlxzfk = mysql_query("SELECT * FROM `config` WHERE `name` = 'trade_engine' LIMIT 1");	while($row = mysql_fetch_assoc($sqlxzfk)) {		if($row['setting'] == 1){			return true;		}else{			return false;		}	}}function disableTrading() {	$sqlrqkf = mysql_query("UPDATE `config` SET  `setting` = '1' WHERE `config`.`id` =8 LIMIT 1");}function enableTrading() {	$sqlrqkf2 = mysql_query("UPDATE `config` SET  `setting` =  '0' WHERE  `config`.`id` =8 LIMIT 1");}?>