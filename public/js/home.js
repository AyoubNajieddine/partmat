$(document).ready(function(){
$("form[action=search]").submit(function(event){
	console.log(this);
	event.preventDefault();
	sel = $("select");
	CityVal = sel[0].value;
	rentType= sel[1].value;
	retailType = sel[2].value; 
	window.location = "/search/"+CityVal+"/"+retailType+"/"+rentType;
});
});
