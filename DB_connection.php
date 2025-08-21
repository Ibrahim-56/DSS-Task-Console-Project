<?php  

$sName = "localhost";
$uName = "root";
$pass  = "";
$db_name = "task_management_db";

try {
	$conn = new PDO(dsn: "mysql:host=$sName;dbname=$db_name", username: $uName, password: $pass);
	$conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
}
 catch (PDOException $e){
	echo "Connection failed: ". $e->getMessage();
	exit;
}