<?php
/**
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

OCP\JSON::callCheck();
include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php');
if (is_file($_POST['gluecode']) && 
preg_match('/^[a-zA-Z0-9]+$/',$_POST['gluecodepassword']) && 
preg_match("/^https?:\/\/([a-zA-Z0-9_\-]+:[^\s@:]+@)?((([a-zA-Z][a-zA-Z0-9\-]+\.)+[a-zA-Z\-]+)|((2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})\.(2(5[0-5]|[0-4][0-9])|[01][0-9]{2}|[0-9]{1,2})))(:[0-9]{1,5})?(\/[!~*'\(\)a-zA-Z0-9;\/\\\?:\@&=\+\$,%#\._-]*)*$/",$_POST['ajaxplorerurl'])) {
ajaxplorer_insert($_POST['gluecode'],$_POST['gluecodepassword'],OCP\User::getUser(),$_POST['ajaxplorerurl']);
echo 'true';
}

else {echo 'Illegale Zeichen entdeckt';}


?>