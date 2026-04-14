document.getElementById("btnaddstudent").addEventListener("click", function(e){
	e.preventDefault();
	let lname  = document.getElementById("info_lname").value;
	let fname  = document.getElementById("info_fname").value;
	let mname  = document.getElementById("info_mname").value;
	let sname  = document.getElementById("info_sname").value;
	let gender = document.getElementById("info_gender").value;
	let bdate  = document.getElementById("info_bdate").value;

	fetch("add_student.php?info_lname="+lname+"&info_fname="+fname+"&info_mname="+mname+"&info_sname="+sname+"&info_gender="+gender+"&info_bdate="+bdate, {
		method: "GET"
	})
	.then(response => response.text())
	.then(result => {
		document.getElementById("message").innerHTML = result;
	});
});