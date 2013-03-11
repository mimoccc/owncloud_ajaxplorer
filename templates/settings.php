<?php include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php'); ?>
<form id="ajaxplorer" >
	<fieldset class="personalblock" style="background-color:#FFCCCC">
		<strong>GlueCode.php Path</strong>
		<input type="text" name="gluecode" id="gluecode" value="<?php echo ajaxplorer_getgluecode(OCP\User::getUser()); ?>"  />
		<strong>Password</strong>
		<input type="text" name="gluecodepassword" id="gluecodepassword" value="<?php echo ajaxplorer_getgluecodepassword(OCP\User::getUser()); ?>"  />
		
		<strong>Ajaxplorer URL</strong>
		<input type="text" name="ajaxplorerurl" id="ajaxplorerurl" value="<?php echo ajaxplorer_getajaxplorerurl(OCP\User::getUser()); ?>"  />
		
		
<style type="text/css">
.ajaxplorerbutton {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
   background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 8px;
   -moz-border-radius: 8px;
   border-radius: 8px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 14px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
   .green {color:green;}
   .red {color:red;}
</style>		
        <a href="javascript:void(0)" class="ajaxplorerbutton">Speichern</a>
		<br />
	</fieldset>
	
</form>
