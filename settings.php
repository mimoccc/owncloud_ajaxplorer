<?php

OCP\User::checkLoggedIn();

OCP\Util::addScript( "owncloud_ajaxplorer", "admin" );

$tmpl = new OCP\Template( 'owncloud_ajaxplorer', 'settings');

return $tmpl->fetchPage();
