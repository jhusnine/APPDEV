<?php
$host = "10.70.0.55";
$dbname = "students";
$user = "boot";
$password = "boot";
try {
    $id = $_GET["id"];
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "DELETE FROM `basicinformation` WHERE `basicinfo_id`=?";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$id]);
	echo "SUCCESS";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>