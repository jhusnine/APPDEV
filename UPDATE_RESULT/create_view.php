<?php 
	session_start();	
	if (!isset($_SESSION["id"])) {
		header("Location: index.php");
		exit;
	}
?>
<body>
	<link rel="stylesheet" href="style.css"/>
	<div style="display: flex; justify-content: flex-end;">
		<button id="closebtn">X</button>
	</div>
	<div class="centerer">
		<div class="box">
			<p id="message"></p>
			<label>Last name: <input type="text" id="info_lname"></label>
			<label>First name: <input type="text" id="info_fname"></label>
			<label>Middle name: <input type="text" id="info_mname"></label>
			<label>Suffix name: <input type="text" id="info_sname"></label>
			<label>Gender: <input type="text" id="info_gender"></label>
			<label>Birthdate: <input type="text" id="info_bdate"></label>
			<div style="display: flex; justify-content: center; gap: 10px; padding-top: 10px;">
				<button id="btnaddstudent">Add Student</button>
				<button id="backbtn" onclick="window.location.href='homepage.php'">Back</button>
			</div>
		</div>
	</div>
</body>
<script src="script.js?v=<?= time() ?>"></script>
<script src="create_script.js?v=<?= time() ?>"></script>