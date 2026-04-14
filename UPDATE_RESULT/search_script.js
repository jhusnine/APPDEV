document.getElementById("btnsearchstudent").addEventListener
(
	"click", 
	function(){
		let name = document.getElementById("txtstudentlistsearch").value;
		fetch("load_students.php?uname="+name, {
			method: "GET"
		})
		.then(response => response.json())
		.then(result => {
			let content = "";
			result.forEach(student => {
				content = content +  "<tr>";
				content = content + "<td id='id'>" + student.Id + "</td>";
				content = content + "<td id='lname'>" + student.Lastname + "</td>";
				content = content + "<td id='gname'>" + student.Firstname + "</td>";
				content = content + "<td id='mname'>" + student.Middlename + "</td>";
				content = content + "<td id='gender'>" + student.Gender + "</td>";
				content = content + "<td id='bday'>" + student.Bday + "</td>";
				content = content + "<td>";
				content = content + "<button class='btnupdate' value='" + student.Id + "'>UPDATE</button>";
				content = content + "<button class='btndelete' value='" + student.Id + "'>DELETE</button>";
				content = content + "</td>";
				content = content +  "</tr>";
			});
			document.getElementById("studentTable").innerHTML = content;
		});
	}
);
document.getElementById("studentTable").addEventListener("click", function(e) {
    // UPDATE
    if (e.target.classList.contains("btnupdate")) {
		let row = e.target.closest("tr");
		let id = row.cells[0].innerText;
		let lname = row.cells[1].innerText;
		let gname = row.cells[2].innerText;
		let mname = row.cells[3].innerText;
		let gender = row.cells[4].innerText;
		let bday = row.cells[5].innerText;
		fetch("edit_view.php?id=" + id +"&lname=" + lname  +"&gname="+ gname +"&mname="+ mname 
			+"&gender="+ gender +"&bday="+ bday,{
			method: "GET"
		})
		.then(response => response.text())
		.then(result => {
			document.open();
			document.write(result);
			document.close();
		});
		}
		// DELETE
		if (e.target.classList.contains("btndelete")) {
		   let id2 = e.target.value;
		if (confirm("Delete this row?")) {
			deleteevent(id2, e.target);
		}
		}
	});
	function deleteevent(id, btn)
	{
		let id1 = id;
	fetch("delete_student.php?id="+ id1, {
		method: "GET"
	})
	.then(response => response.text())
	.then(result => {
		document.getElementById("message").innerHTML = result;
		let row = btn.closest("tr");
		row.remove();
	});
};
function updateevent(id)
{
	alert(id);
};
document.getElementById("closebtn").addEventListener
(
	"click", 
	function(){
		window.location.href = "homepage.php"
	}
);