<?php
/*
 Date: 2015-04-28
 Authore: Coding5
 Purpose: php 建立 runDelete 呼叫 
 Websit: http://www.coding5.com/works?transno=1000000008
*/

require_once("DBConnCRUD.php");

$db = new DB(); 
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);

$sql = "DELETE coding5 WHERE codeA = 'bb' ";

$db->runDelete($sql); 

$db->closeDB();

?>
