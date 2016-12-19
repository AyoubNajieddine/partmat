$(document).ready(function(){
	elem = $("#wrapper");
	data = document.getElementById("upd").getElementsByTagName("tr");
	console.log(data);
	$(data[0]).click(function(){
		// get the data from ajax // EMAIL CHANGE
		$.get("/updeml", function(data){
			elem.html(data);
		});
	});
	$(data[1]).click(function(){
		// PASSWORD CHANGE
		$.get("/updpwd", function(data){
			elem.html(data);
		});
	});
	$(data[2]).click(function(){
		// FULL CHANGE
		  $.get("/updnm", function(data){
		  	elem.html(data);
		  });
		
	});
});