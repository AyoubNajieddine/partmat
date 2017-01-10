function selected(){
		var path = document.location.pathname;
		$("#menu .fl a[href='"+path+"'").addClass("selected");
}
$(document).ready(function(){
		selected();
$("#langmnu td").click(function(){
		lang = $(this).attr("value");
		console.log(lang);
		$.get("/lang/"+lang, function(){});
		//document.location.reload();
});
});
