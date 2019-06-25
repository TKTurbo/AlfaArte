<?php
session_start();
$dbHost = 'localhost';
$dbName = 'thomas_alfaarte';
$dbUser = 'root';
$dbPassword = '';
$db_connection = null;
$db_query = null;
$dsn = "mysql:host=$dbHost;dbname=$dbName";

function testFunction(){
	echo 'werkt!';
}

function dbConnect(){
	global $dsn, $dbUser, $dbPassword, $db_connection;
	try {
		$db_connection = new PDO($dsn, $dbUser, $dbPassword);
		$db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $error){
		$_SESSION['error'] = $error->getMessage();
		$error = $error->getMessage();
		echo "<script>console.log('$error');</script>";
		return false;
	}
	return true;
}
function dbQuery($sql, $array = []){
	global $db_connection, $db_query;
	$db_query = $db_connection->prepare($sql);
	return $db_query->execute($array);
}
function dbGet(){
	global $db_query;
	return $db_query->fetch(PDO::FETCH_ASSOC);
}
function dbGetAll(){
	global $db_query;
	return $db_query->fetchAll(PDO::FETCH_ASSOC);
}
function dbCount(){
	global $db_query;
	return $db_query->rowCount();
}