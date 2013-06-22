<?php include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php'); 
OCP\Util::addStyle( "owncloud_ajaxplorer", "button" );
?>
<form id="ajaxplorer" >
	<fieldset class="personalblock">
	<strong>Ajaxplorer:</strong>
	
	    <strong>AuthUser</strong>
		<input type="text" name="AuthUser" id="AuthUser" value="<?php echo ajaxplorer_getAuthUser(OCP\User::getUser()); ?>"  />
		
		<strong>AuthPW</strong>
		<input type="text" name="AuthPW" id="AuthPW" value="<?php echo ajaxplorer_getAuthPW(OCP\User::getUser()); ?>"  />
		
        <a href="javascript:void(0)" class="ajaxplorerbutton">Speichern</a>
		<br />
	</fieldset>
	
</form>