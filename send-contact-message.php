<?php 
require 'connect.php';

if(isset($_POST['submit'])){
	
$name = $_POST['name'];
$email = $_POST['email'];
$about_us = $_POST['source'];
$comments = $_POST['comments'];

$query = "INSERT INTO messages(Name,Email,About_us,Comment) VALUES('".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($about_us)."','".mysql_real_escape_string($comments)."')";

mysql_query($query);
}
?>