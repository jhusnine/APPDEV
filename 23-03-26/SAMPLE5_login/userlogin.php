<?php
session_start();
$host = "10.70.0.55";
$dbname = "students";
$user = "boot";
$password = "boot";

try {
	$uname = $_GET["uname1"];
	$upass = $_GET["upass1"];
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT `cre_id` AS `id`, `cre_username` AS 'username'
	 FROM `credential`
	WHERE `cre_username` = ? AND `cre_password` =  SHA2(?,256);";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$uname,$upass]);
	$student = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$_SESSION["cre_id"] = "2";
	//header("Location: home.php");
	//exit;
	echo json_encode($student);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
