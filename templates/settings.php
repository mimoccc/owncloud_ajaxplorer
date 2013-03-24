<?php include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php'); 
OCP\Util::addStyle( "owncloud_ajaxplorer", "button" );
?>
<form id="ajaxplorer" >
	<fieldset class="personalblock">
		
		<strong>GlueCode.php Path</strong>
		<input type="text" name="gluecode" id="gluecode" value="<?php echo ajaxplorer_getgluecode(OCP\User::getUser()); ?>"  />
		
		<strong>Password</strong>
		<input type="text" name="gluecodepassword" id="gluecodepassword" value="<?php echo ajaxplorer_getgluecodepassword(OCP\User::getUser()); ?>"  />
		
		<strong>Ajaxplorer URL</strong>
		<input type="text" name="ajaxplorerurl" id="ajaxplorerurl" value="<?php echo ajaxplorer_getajaxplorerurl(OCP\User::getUser()); ?>"  />
		
		
		
        <a href="javascript:void(0)" class="ajaxplorerbutton">Speichern</a>
		<br />
	</fieldset>
	
</form>
