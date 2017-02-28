var offset = 0;
function loadData(){
	$.get("/list/"+offset, function(data){
		$("#listPartma").append(data);
	});
}
$(document).ready(function(){
		// we need to load all the latest files	
	//loadData();
});

