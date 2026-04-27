<?php
$host = "10.70.0.55";
$dbname = "students";
$user = "boot";
$password = "boot";
try {
	session_start();
	$name = $_GET["uname"];
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT `basicinfo_id` AS `Id`,
		`basicinfo_lname` AS `Lastname`,
		`basicinfo_fname` AS `Firstname`,
		`basicinfo_mname` AS `Middlename`,
		`basicinfo_gender` AS `Gender`,
		`basicinfo_bday` AS `Bday`
	 FROM `basicinformation`
	WHERE CONCAT(`basicinfo_lname`,`basicinfo_fname`,`basicinfo_mname`)
	LIKE  CONCAT('%',?,'%');";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name]);
	$student = $stmt->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($student);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>