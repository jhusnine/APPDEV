document.getElementById("btnupdatestudent").addEventListener("click", function (e) {
	e.preventDefault();

	let id     = document.getElementById("id").value;
	let lname  = document.getElementById("lname").value;
	let fname  = document.getElementById("fname").value;
	let mname  = document.getElementById("mname").value;
	let gender = document.getElementById("gender").value;
	let bday   = document.getElementById("bday").value;

	fetch("edit_controller.php?id=" + encodeURIComponent(id)
		+ "&lname="  + encodeURIComponent(lname)
		+ "&fname="  + encodeURIComponent(fname)
		+ "&mname="  + encodeURIComponent(mname)
		+ "&gender=" + encodeURIComponent(gender)
		+ "&bday="   + encodeURIComponent(bday), {
		method: "GET"
	})
	.then(response => response.text())
	.then(result => {
		if (result === "SUCCESS") {
			window.location.href = "search_view.php";
		} else {
			let msg = document.getElementById("message");
			msg.style.color = "#c95a5a";
			msg.innerHTML = result;
		}
	});
});