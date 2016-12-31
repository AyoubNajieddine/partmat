$(document).ready(function(){
	elem = $("#wrapper");
	data = document.getElementById("upd").getElementsByTagName("tr");
	$(data[3]).click(function(){
		// delete view
		document.location= "/delcnt/"		
	});
	$(data[0]).click(function(){
		// get the data from ajax // EMAIL CHANGE
		document.location = "/upd/updeml";
	});
	$(data[1]).click(function(){
		// PASSWORD CHANGE
		document.location = "/upd/updpwd";
	});
	$(data[2]).click(function(){
		// FULL CHANGE
		document.location = "/upd/updnm";

	});
});
