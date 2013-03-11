<?php

function ajaxplorer_insert($gluecode,$gluecodepassword,$user,$ajaxplorerurl) {


$params = array($user);
$params2 = array($gluecode,$gluecodepassword,$user,$ajaxplorerurl);

$query=OC_DB::prepare("delete from *PREFIX*ajaxplorer where user =?");
$query2=OC_DB::prepare("insert into *PREFIX*ajaxplorer (gluecode,gluecodepassword,user,ajaxplorerurl) values (?,?,?,?)");

$result=$query->execute($params);
$result=$query2->execute($params2);

}
function ajaxplorer_getgluecode($user) {
$params = array($user);
$query=OC_DB::prepare("select gluecode from *PREFIX*ajaxplorer where user=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['gluecode']; 
}
function ajaxplorer_getgluecodepassword($user) {
$params = array($user);
$query=OC_DB::prepare("select gluecodepassword from *PREFIX*ajaxplorer where user=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['gluecodepassword']; 
}

function ajaxplorer_getajaxplorerurl($user) {
$params = array($user);
$query=OC_DB::prepare("select ajaxplorerurl from *PREFIX*ajaxplorer where user=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['ajaxplorerurl']; 
}
?>