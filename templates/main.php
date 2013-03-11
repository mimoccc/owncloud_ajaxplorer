<?php require_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php');

error_reporting(0); 

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
	
echo "<iframe src='".$ajaxplorerurl."' width='100%' height='100%'></iframe>";


?>