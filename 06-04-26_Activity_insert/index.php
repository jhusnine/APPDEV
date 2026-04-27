<?php 
	session_start();
	if (isset($_SESSION["id"])) {
		header("Location: homepage.php");
		exit;
	}
?>
<body>
	<link rel="stylesheet" href="style.css"/>
	<div class="centerer">
		<div class="box">
			<p id="prompt"></p>
			<label>Username: <input type="text" id="uname"></label>
			<label>Password: <input type="password" id="upass"></label>
			<div style="display: flex; justify-content: center; padding-top: 10px;">
				<button id="loginbtn">Login</button>
			</div>
		</div>
	</div>
<script src="login_script.js?v=<?= time() ?>"></script>