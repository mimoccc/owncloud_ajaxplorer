<?php
OCP\User::checkLoggedIn();

OCP\Util::addScript( "owncloud_ajaxplorer", "personal" );

$tmpl = new OCP\Template( 'owncloud_ajaxplorer', 'settings2');

return $tmpl->fetchPage();