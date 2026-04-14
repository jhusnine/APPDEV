<?php
$host = "10.70.0.55";
$dbname = "students";
$user = "boot";
$password = "boot";
try {
	session_start();
	$name = $_GET["uname"];
	$pass = $_GET["upass"];
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT `cre_id` AS `id`,
            `cre_isactive` AS `active`
			FROM `credential`
			WHERE `cre_username` = ? AND `cre_password` = SHA2(?,256);";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name, $pass]);
	$student = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if ($student) {
			$_SESSION["id"] = $student[0]["id"];
	}
	echo json_encode($student);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>