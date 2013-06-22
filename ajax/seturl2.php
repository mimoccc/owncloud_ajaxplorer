<?php
/**
 * This file is licensed under the Affero General Public License version 3 or later.
 * See the COPYING-README file.
 */

OCP\JSON::callCheck();
include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php');
if ((preg_match('/^[a-zA-Z0-9]+$/',$_POST['AuthPW']) && 
preg_match('/^[a-zA-Z0-9]+$/',$_POST['AuthUser'])) or ($_POST['AuthPW'] == '' && ($_POST['AuthUser'] == ''))) {
ajaxplorer_insert2($_POST['AuthPW'],$_POST['AuthUser'],OCP\User::getUser());
echo 'true';
}

else {echo 'Illegale Zeichen entdeckt';}


?>