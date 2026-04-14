<?php
	$id = $_GET["id"];
	$lname = $_GET["lname"];
	$gname = $_GET["gname"];
	$mname = $_GET["mname"];
	$gender = $_GET["gender"];
	$bday = $_GET["bday"];
?>
<link rel="stylesheet" href="style.css"/>
<div class="header">
	<h1>Update Student</h1>
	<button id="backbtn" onclick="window.location.href='homepage.php'">X</button>
	</div>
		<body>
	<link rel="stylesheet" href="style.css"/>
	<div class="centerer">
		<div class="box">
			Last Name<input type="text" value="<?= $lname ?>">
			Given Name<input type="text" value="<?= $gname ?>">
			Middle Name<input type="text" value="<?= $mname ?>">
			Gender<input type="text" value="<?= $gender ?>">
			Bday<input type="text" value="<?= $bday ?>">
		<div style="display: flex; justify-content: center; gap: 10px; padding-top: 10px;">
			<button id="btnaddstudent">Update Success</button>
			<button id="backbtn" onclick="window.location.href='homepage.php'">Back</button>
		</div>
		</div>
	</div>
</body>

