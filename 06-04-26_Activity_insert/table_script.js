document.getElementById("studentTable").addEventListener("click", function (e) 
{
	if (e.target.classList.contains("add-btn")) 
	{
		alert(e.target.innerHTML);
    		let table = document.getElementById("studentTable");
		let row = table.insertRow(-1);
		row.insertCell(0).innerText = "New Name";
    		row.insertCell(1).innerText = "20";
		row.insertCell(2).innerHTML ='<button class="delete-btn">Delete</button>';
  	}
  	if (e.target.classList.contains("update-btn")) {
    		let row = e.target.closest("tr");
    		row.cells[0].innerText = "Updated";
  	}
  	if (e.target.classList.contains("delete-btn")) {
		if (confirm("Delete this row?")) {
  			let row = e.target.closest("tr");
    			row.remove();
		}
  	}
});