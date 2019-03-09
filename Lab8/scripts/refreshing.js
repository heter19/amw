$(document).ready(function(){
	$(setInterval(function(){
	$('#abc').load("blog.php #abc");
	},3000));
	});