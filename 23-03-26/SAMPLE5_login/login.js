document.getElementById("btnlogin").addEventListener
(
	"click", 
	function(){
		const uname = document.getElementById("txtusername").value;
		const upass = document.getElementById("txtpassword").value;
		fetch("userlogin.php?uname1="+uname+"&upass1="+upass, {
			method: "GET"
		})
		.then(response => response.json())
		.then(result => {
			if (result.length > 0)
			{
				window.location.replace("home.php");
				//window.location.href("home.php");
			} else {
				document.getElementById("message").innerHTML = "Wrong username and password!";
			}
		});
	}
);
