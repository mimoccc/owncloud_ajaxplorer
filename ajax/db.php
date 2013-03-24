<?php

function ajaxplorer_insert($gluecode,$gluecodepassword,$user,$ajaxplorerurl) {


$params2 = array($gluecode,$gluecodepassword,$user,$ajaxplorerurl);

$query=OC_DB::prepare("delete from *PREFIX*ajaxplorer where user ='admin' ");
$query2=OC_DB::prepare("insert into *PREFIX*ajaxplorer (gluecode,gluecodepassword,user,ajaxplorerurl) values (?,?,'admin',?)");

$result=$query->execute();
$result=$query2->execute($params2);

}
function ajaxplorer_getgluecode($user) {
$query=OC_DB::prepare("select gluecode from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
return $data[0]['gluecode']; 
}
function ajaxplorer_getgluecodepassword($user) {
$query=OC_DB::prepare("select gluecodepassword from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
return $data[0]['gluecodepassword']; 
}

function ajaxplorer_getajaxplorerurl($user) {
$query=OC_DB::prepare("select ajaxplorerurl from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
return $data[0]['ajaxplorerurl']; 
}
?>