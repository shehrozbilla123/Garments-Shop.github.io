<?php
$Sourcename ="localhost:3309";
$Username ="root";
$Password ="";

$coon =mysqli_connect($Sourcename,$Username,$Password);

if(!$coon){
	die("Not Connected");
}
	$dbquery = "create database if not exists testecom";
$databaseresponse = mysqli_query($coon, $dbquery);
	
if(!$databaseresponse){
	die("Database not Connected");
}

else{mysqli_select_db($coon,"testecom");
	$tablequery = "create table if not exists studentaa(
		id int primary key auto_increment,
		full_name varchar(100),
		last_name varchar(100),
		email_address varchar(100) unique,
		password varchar(100),
		age int,
		created_at datetime
		);";
	
$tableresponse = mysqli_query($coon, $tablequery);
	
if(!$tableresponse){
	die("Table not Connected");
}
	
}
	

?>