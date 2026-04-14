<?php 
	session_start();
	if (!isset($_SESSION["id"])) {
		header("Location: index.php");
		exit;
	}
?>
<body>
	<link rel="stylesheet" href="style.css"/>
	<div class="header">
		<h1 style="text-align: center; width: 100%;">Home</h1>
	</div>
	<div class="homebtns">
		<button id="searchbtn">Search Student</button>
		<button id="createbtn">Create Student</button>
		<button id="logoutbtn">Log-out</button>
	</div>
</body>
<script src="homepage_script.js?v=<?= time() ?>"></script>