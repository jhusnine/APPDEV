<?php
$host = "10.70.0.55";
$dbname = "students";
$user = "boot";
$password = "boot";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$lname  = $_GET['info_lname'];
	$fname  = $_GET['info_fname'];
	$mname  = $_GET['info_mname'];
	$sname  = $_GET['info_sname'];
	$gender = $_GET['info_gender'];
	$bdate  = $_GET['info_bdate'];

	$sql = "INSERT INTO `basicinformation`
		(`basicinfo_lname`,
		`basicinfo_fname`,
		`basicinfo_mname`,
		`basicinfo_sname`,
		`basicinfo_gender`,
		`basicinfo_bday`)
		VALUES(?,?,?,?,?,?);";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$lname, $fname, $mname, $sname, $gender, $bdate]);
	echo "SUCCESS";
} catch(PDOException $e) {
    echo "FAIL: " . $e->getMessage();
}
?>