document.getElementById("loginbtn").addEventListener
(
	"click", 
	function(){
		let uname = document.getElementById("uname").value;
		let pass = document.getElementById("upass").value;
		fetch("controller.php?uname="+uname+ "&upass="+ pass, {
			method: "GET"
		})
		.then(response => response.json())
		.then(result => {
			if (result.length > 0) {
                if (result[0].active == 0) {
                    document.getElementById("prompt").innerHTML = "Inactive Account"
                } else {
                    window.location.href = "homepage.php"
                }
			} else {
				document.getElementById("prompt").innerHTML = "WRONG USERNAME OR PASSWORD"
			}			
		});
	}
);