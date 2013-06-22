<?php require_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php');

//error_reporting(0); 
if ((ajaxplorer_getgluecode(OCP\User::getUser()) == false) or (ajaxplorer_getgluecodepassword(OCP\User::getUser()) == false) or (ajaxplorer_getajaxplorerurl(OCP\User::getUser()) == false)) {echo 'No Gluecode, Password or URL found';} else {
$glueCode = ajaxplorer_getgluecode(OCP\User::getUser());
$secret = ajaxplorer_getgluecodepassword(OCP\User::getUser());
$ajaxplorerurl = ajaxplorer_getajaxplorerurl(OCP\User::getUser());

$loginname = OCP\User::getUser();
$loginpw = md5(OCP\User::getUser());
//$glueCode = "../ajaxplorer/plugins/auth.remote/glueCode.php";

	define('AJXP_EXEC', true);

	global $AJXP_GLUE_GLOBALS;
	$AJXP_GLUE_GLOBALS = array();
	$AJXP_GLUE_GLOBALS["secret"] = $secret;

	$AJXP_GLUE_GLOBALS["plugInAction"] = "login";
	$AJXP_GLUE_GLOBALS["login"] = array("name" => $loginname,"password" => $loginpw ); 
	$AJXP_GLUE_GLOBALS["autoCreate"] = false;
	
	include($glueCode); 
	
	if (ajaxplorer_getAuthPW($loginname) <> "" and ajaxplorer_getAuthUser($loginname) <> "") {
$WikiUrl = preg_match("/^(https?:\/\/)?(.+)$/",$ajaxplorerurl,$AjaxplorerUrlArray);
$ajaxplorerurl = "http://".ajaxplorer_getAuthUser($loginname).":".ajaxplorer_getAuthPW($loginname)."@".$AjaxplorerUrlArray[2];
echo "<iframe src='".$ajaxplorerurl."/' width='100%' height='100%'></iframe>";
}
else {
$WikiUrl = preg_match("/^(https?:\/\/)?(.+)$/",$ajaxplorerurl,$AjaxplorerUrlArray);
$ajaxplorerurl = "http://".$AjaxplorerUrlArray[2];
echo "<iframe src='".$ajaxplorerurl."/' width='100%' height='100%'></iframe>";
}

};
?>