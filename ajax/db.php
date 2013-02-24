<?php

function insert($userid,$userpw,$useraccount,$wikiurl,$wikiuser,$wikipassword) {


$params = array($useraccount);
$params2 = array(trim($userid),trim($userpw),trim($useraccount),trim($wikiurl),trim($wikiuser),trim($wikipassword));

$query=OC_DB::prepare("delete from *PREFIX*wiki where useraccount =?");
$query2=OC_DB::prepare("insert into *PREFIX*wiki (user,pw,useraccount,url,wikiuser,wikipassword) values (?,?,?,?,?,?)");

$result=$query->execute($params);
$result=$query2->execute($params2);

}
function getUser($useraccount) {
$params = array($useraccount);
$query=OC_DB::prepare("select user from *PREFIX*wiki where useraccount=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['user']; 
}
function getUserPW($useraccount) {
$params = array($useraccount);
$query=OC_DB::prepare("select pw from *PREFIX*wiki where useraccount=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['pw']; 
}
function getWikiURL($useraccount) {
$params = array($useraccount);
$query=OC_DB::prepare("select url from *PREFIX*wiki where useraccount=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['url']; 
}
function getAuthUser($useraccount) {
$params = array($useraccount);
$query=OC_DB::prepare("select wikiuser from *PREFIX*wiki where useraccount=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['wikiuser']; 
}
function getAuthPW($useraccount) {
$params = array($useraccount);
$query=OC_DB::prepare("select wikipassword from *PREFIX*wiki where useraccount=?");
$result=$query->execute($params);
$data=$result->fetchAll();
return $data[0]['wikipassword']; 
}
?>