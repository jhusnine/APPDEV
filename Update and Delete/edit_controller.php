<?php
$host     = "10.70.0.55";
$dbname   = "students";
$user     = "boot";
$password = "boot";

try {
	session_start();
	if (!isset($_SESSION["id"])) {
		echo "UNAUTHORIZED";
		exit;
	}

	$id     = $_GET["id"];
	$lname  = $_GET["lname"];
	$fname  = $_GET["fname"];
	$mname  = $_GET["mname"];
	$gender = $_GET["gender"];
	$bday   = $_GET["bday"];

	$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "UPDATE `basicinformation`
			SET `basicinfo_lname`  = ?,
			    `basicinfo_fname`  = ?,
			    `basicinfo_mname`  = ?,
			    `basicinfo_gender` = ?,
			    `basicinfo_bday`   = ?
			WHERE `basicinfo_id`   = ?";

	$stmt = $pdo->prepare($sql);
	$stmt->execute([$lname, $fname, $mname, $gender, $bday, $id]);
	echo "SUCCESS";
} catch (PDOException $e) {
	echo "FAIL: " . $e->getMessage();
}
?>