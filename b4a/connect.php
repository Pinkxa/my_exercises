<?php 
$Error_msg = 'could not connect';

$host_name = 'localhost';
$User_name = 'root';
$password = '';

$db_name = 'b4all';

if(!@mysql_connect($host_name, $User_name, $password) || !@mysql_select_db($db_name)){

die($Error_msg);	
}

?>