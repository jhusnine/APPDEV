<?php
	session_start();
	if (!isset($_SESSION["id"])) {
		header("Location: index.php");
		exit;
	}
	$id     = $_GET["id"];
	$lname  = $_GET["lname"];
	$gname  = $_GET["gname"];
	$mname  = $_GET["mname"];
	$gender = $_GET["gender"];
	$bday   = $_GET["bday"];
?>
<link rel="stylesheet" href="style.css"/>
<body>
	<div class="header">
		<h1>Update Student</h1>
		<button id="backbtn" onclick="window.location.href='search_view.php'">X</button>
	</div>
	<div class="centerer">
		<div class="box">
			<p id="message"></p>
			<input type="hidden" id="id" value="<?= htmlspecialchars($id) ?>">
			<label>Last Name: <input type="text" id="lname" value="<?= htmlspecialchars($lname) ?>"></label>
			<label>First Name: <input type="text" id="fname" value="<?= htmlspecialchars($gname) ?>"></label>
			<label>Middle Name: <input type="text" id="mname" value="<?= htmlspecialchars($mname) ?>"></label>
			<label>Gender: <input type="text" id="gender" value="<?= htmlspecialchars($gender) ?>"></label>
			<label>Birthday: <input type="text" id="bday" value="<?= htmlspecialchars($bday) ?>"></label>
			<div style="display: flex; justify-content: center; gap: 10px; padding-top: 10px;">
				<button id="btnupdatestudent">Update</button>
				<button id="backbtn2" onclick="window.location.href='search_view.php'">Back</button>
			</div>
		</div>
	</div>
</body>
<script src="edit_script.js?v=<?= time() ?>"></script>