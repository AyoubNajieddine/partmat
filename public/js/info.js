$(".infoDiv").ready(function(){
	obj = JSON.parse($("#picslnk").val()); // parsing into json array
	// detection clicking on right and left nav
		// if the counter reach zero we
		// we return back to count of array
	currentPic = 0;
	$("#countImg").text((currentPic+1));
	nbPics = obj.length;
	pic = null;
	$(".navRight").click(function(){
		// deincrement by 1
		if(currentPic != (nbPics - 1)) { currentPic++; }
		else { currentPic = 0; }
		$("#countImg").text((currentPic+1));	
		pic = obj[currentPic].picture_name;
		$(".infoPics").attr("src", "/thumbs/"+pic);
	});	
	$(".navLeft").click(function(){
		// increment by 1
		if(currentPic != 0) { currentPic--; }
		else { currentPic = nbPics-1 };
		$("#countImg").text((currentPic+1));	
		pic = obj[currentPic].picture_name;
		$(".infoPics").attr("src", "/thumbs/"+pic);
	});
	show = false;
	var text = $(".phn").text();
	$(".phn").click(function(){
	
		if(show == false){
		$(this).text($(this).val()).removeClass("glyphicon-phone");	
		show = true
		}
		else {
		$(this).text(text).addClass("glyphicon-phone");		
		show = false;
		}
	});	
});
