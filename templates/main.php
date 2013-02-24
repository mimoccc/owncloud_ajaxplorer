<?php require_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php');

/*error_reporting(0); 
$url = getWikiURL(OCP\User::getUser()).'/api.php?action=login&format=xml';
$postData = array();
$postData['lgname'] = getUser(OCP\User::getUser());
$postData['lgpassword'] = getUserPW(OCP\User::getUser());
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, getAuthUser(OCP\User::getUser()).":".(getAuthPW(OCP\User::getUser())));

$xml = simplexml_load_string (curl_exec($ch));

$wikisessionname = $xml->login->attributes()->cookieprefix;
$wikisessionvalue = $xml->login->attributes()->sessionid;

$postData = array();
$postData['lgname'] = getUser(OCP\User::getUser());
$postData['lgpassword'] = getUserPW(OCP\User::getUser());
$postData['lgtoken'] = $xml->login->attributes()->token;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_COOKIE,"{$wikisessionname}_session={$wikisessionvalue}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
$xml = simplexml_load_string(curl_exec($ch));

$userid = $xml->login->attributes()->lguserid;
$username = $xml->login->attributes()->lgusername;
$token = $xml->login->attributes()->lgtoken;
$sessionid = $xml->login->attributes()->sessionid;

setcookie("{$xml->login->attributes()->cookieprefix}LoggedOut", "", time()-3600, "/");
setcookie($xml->login->attributes()->cookieprefix."UserID",$userid, time()+3600, "/", $_SERVER['HTTP_HOST']);
setcookie($xml->login->attributes()->cookieprefix."UserName",$username, time()+3600, "/", $_SERVER['HTTP_HOST']);
setcookie($xml->login->attributes()->cookieprefix."_session",$sessionid, time()+3600, "/", $_SERVER['HTTP_HOST']);
curl_close($ch);

if (getAuthPW(OCP\User::getUser()) <> "" and getAuthUser(OCP\User::getUser()) <> "") {
$WikiUrl = preg_match("/^(https?:\/\/)?(.+)$/",getWikiURL(OCP\User::getUser()),$WikiUrlArray);
$iframeinclude = "http://".getAuthUser(OCP\User::getUser()).":".getAuthPW(OCP\User::getUser())."@".$WikiUrlArray[2];
echo "<iframe src='".$iframeinclude."/' width='100%' height='100%'>";
echo "</iframe>";
}
else {
$iframeinclude = "http://".getAuthUser(OCP\User::getUser()).":".getAuthPW(OCP\User::getUser())."@".getWikiURL(OCP\User::getUser());
echo "<iframe src='".$iframeinclude."/' width='100%' height='100%'>";
echo "</iframe>";
}
?>

*/

$glueCode = "../ajaxplorer/plugins/auth.remote/glueCode.php";
	$secret = "myprivatesecret";
	define('AJXP_EXEC', true);

	global $AJXP_GLUE_GLOBALS;
	$AJXP_GLUE_GLOBALS = array();
	$AJXP_GLUE_GLOBALS["secret"] = $secret;
	//$AJXP_GLUE_GLOBALS["plugInAction"] = "logout";
	$AJXP_GLUE_GLOBALS["plugInAction"] = "login";
	$AJXP_GLUE_GLOBALS["login"] = array("name" => OCP\User::getUser()); 
	$AJXP_GLUE_GLOBALS["autoCreate"] = false;
	
	include($glueCode);
	echo "<iframe src='http://localhost/ajaxplorer' width='100%' height='100%'>";
echo "</iframe>";
	/*


delUser

    Deletes an AjaXplorer user
    Parameters
        « plugInAction » : « delUser »
        « userName »  : the user name.
*/
?>