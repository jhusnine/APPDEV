document.getElementById("btnupdatestudent").addEventListener("click", function(e){
	e.preventDefault();
	let id  = document.getElementById("id").value;
	let fname  = document.getElementById("fname").value;
	let mname  = document.getElementById("mname").value;
	let gender = document.getElementById("gender").value;
	let bday  = document.getElementById("bday").value;

	fetch("exit_controller?id="+id+"&fname="+fname+"&mname="+mname+"&gender="+gender+"&bday="+bday, {
		method: "GET"
	})
	.then(response => response.text())
	.then(result => {
		alert(result);
	});
});