$(document).ready(function(){
	elem = $("#wrapper");
	data = document.getElementById("upd").getElementsByTagName("tr");
	$(data[3]).click(function(){
		window.location.hash = Math.random();
		$.get("/delcnt", function(res){$(elem).html(res)});
	});
	$(data[0]).click(function(){
		// get the data from ajax // EMAIL CHANGE
		window.location.hash = Math.random();
		$.get("/updeml", function(res){
			elem.html(res);
		});
	});
	$(data[1]).click(function(){
		// PASSWORD CHANGE
		window.location.hash = Math.random();
		$.get("/updpwd", function(res){
			elem.html(res);
		});
	});
	$(data[2]).click(function(){
		// FULL CHANGE
		window.location.hash = Math.random();
		  $.get("/updnm", function(res){
		  	elem.html(res);
		  });
	});
	window.onhashchange = function(){
			if(window.location.hash == ""){
					document.location = "/upd/";
			}
	}
});