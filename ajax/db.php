<?php

function ajaxplorer_insert($gluecode,$gluecodepassword,$user,$ajaxplorerurl) {

$params2 = array($gluecode,$gluecodepassword,$user,$ajaxplorerurl);
$query=OC_DB::prepare("delete from *PREFIX*ajaxplorer where user ='admin' ");
$query2=OC_DB::prepare("insert into *PREFIX*ajaxplorer (gluecode,gluecodepassword,user,ajaxplorerurl) values (?,?,?,?)");
$result=$query->execute();
$result=$query2->execute($params2);

}
function ajaxplorer_insert2($authpw,$authuser,$user) {

$params2 = array($authpw,$authuser,$user);
$query=OC_DB::prepare("delete from *PREFIX*ajaxplorer where user ='".$user."' ");
$query2=OC_DB::prepare("insert into *PREFIX*ajaxplorer (authpw,authuser,user) values (?,?,?)");
$result=$query->execute();
$result=$query2->execute($params2);

}

function ajaxplorer_getgluecode() {
$query=OC_DB::prepare("select gluecode from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
if (isset($data[0]['gluecode'])) {return $data[0]['gluecode'];} else {return false;}; 
}
function ajaxplorer_getgluecodepassword() {
$query=OC_DB::prepare("select gluecodepassword from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
if (isset($data[0]['gluecodepassword'])) {return $data[0]['gluecodepassword'];} else {return false;}; 
}

function ajaxplorer_getajaxplorerurl() {
$query=OC_DB::prepare("select ajaxplorerurl from *PREFIX*ajaxplorer where user='admin'");
$result=$query->execute();
$data=$result->fetchAll();
if (isset($data[0]['ajaxplorerurl'])) {return $data[0]['ajaxplorerurl'];} else {return false;}; 
}
function ajaxplorer_getAuthPW($user) {
$query=OC_DB::prepare("select authpw from *PREFIX*ajaxplorer where user='".$user."'");
$result=$query->execute();
$data=$result->fetchAll();
if (isset($data[0]['authpw'])) {return $data[0]['authpw'];} else {return false;}; 
}
function ajaxplorer_getAuthUser($user) {
$query=OC_DB::prepare("select authuser from *PREFIX*ajaxplorer where user='".$user."'");
$result=$query->execute();
$data=$result->fetchAll();
if (isset($data[0]['authuser'])) {return $data[0]['authuser'];} else {return false;}; 
}
?>