document.getElementById("searchbtn").addEventListener
(
	"click", 
	function(){
		window.location.href = "search_view.php"
});
document.getElementById("createbtn").addEventListener
(
	"click", 
	function(){
		window.location.href = "create_view.php"
});
document.getElementById("logoutbtn").addEventListener
(
	"click", 
	function(){
		fetch("destroyer.php", {
			method: "GET"
		})
		window.location.href = "index.php"
	}
);