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
		<h1>Search Student</h1>
		<button id="closebtn">Back</button>
	</div>
	<div style="padding: 15px;">
		<input type="text" id="txtstudentlistsearch" placeholder="Search by name..."/>
		<button id="btnsearchstudent">Search</button>
	</div>
	<div id="divsearch" class="divsearch">
		<div id="divstudentlistlabel">Student List</div>
		<table id="tblstudentlist">
			<thead>
				<tr>
					<th>ID</th>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Gender</th>
					<th>Birthday</th>
				</tr>
			</thead>
			<tbody id="studentTable">
			</tbody>
		</table>
	</div>
	<p id="message"></p>
</body>
<script src="search_script.js?v=<?= time() ?>"></script>