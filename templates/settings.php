<?php include_once(OC_App::getAppPath('owncloud_ajaxplorer').'/ajax/db.php'); ?>
<form id="wiki" >
	<fieldset class="personalblock" style="background-color:#C2E0FF">
		<strong>Wiki Username</strong>
		<input type="text" name="wikiusername" id="wikiusername" value="<?php echo getUser(OCP\User::getUser()); ?>"  />
		<strong>Wiki Passwort</strong>
		<input type="text" name="wikipassword" id="wikipassword" value="<?php echo getUserPW(OCP\User::getUser()); ?>"  />
		<strong>Wiki URL</strong>
		<input type="text" name="wikiurl" id="wikiurl" value="<?php echo getWikiURL(OCP\User::getUser()); ?>"  />
		<br /><strong>Auth User</strong>
		<input type="text" name="authuser" id="authuser" value="<?php echo getAuthUser(OCP\User::getUser()); ?>"  />
		<strong>Auth Password</strong>
		<input type="text" name="authpw" id="authpw" value="<?php echo getAuthPW(OCP\User::getUser()); ?>"  />
		
<style type="text/css">
.wikibutton {
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
        <a href="javascript:void(0)" class="wikibutton">Speichern</a>
		<br />
	</fieldset>
	
</form>
