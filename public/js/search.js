$("#searchData").ready(function(){
	lnkret = $(".lnkRet");
	hideAdd();
	changeOrientation();
	window.screen.orientation.onchange = changeOrientation;
	showAdvanced();
	searchBox();
	closeSearchBox();
	newsearch();
	getSearchOptions();
	sortElements();	
	
});
function changeOrientation(){
	if(window.screen.orientation.angle == 90){
		lnkret.removeClass("col-xs-12");
		lnkret.addClass("col-xs-6");
	}
	else {
		lnkret.removeClass("col-xs-6");
		lnkret.addClass("col-xs-12");
	}
}
function showAdvanced(){
	$("a[data-toggle=collapse]").click(function(){
		$(this).find(".glyphicon.glyphicon-chevron-down").toggleClass("rotChev");
	});
}
function hideAdd(){
	$("select[name=ret_type]").change(function(){
		tp = $(this).val();
		console.log(tp);
		if(tp == "st" || tp == "la" || tp == -1){
			console.log("in if");
			$("#hideCase").hide();
			if($("#srchCase").hasClass("in") == true) {
			$("#srchCase").removeClass("in");
			}
		}
		else {	
			console.log("in else");
			$("#hideCase").show();
		}
	});
}
function searchBox() {
		/*
		1.hide exisiting document
		2.replace the document with current div
		*/
	$(".mnusearch a").click(function(){	
	$("#dynmRes").hide();
	$("#constMenu").css("display","block");
	//$(""+$(this).attr("href"))
	$("#constMenu #MenuTitle").text($(this).text());
	});
}
function closeSearchBox(){
	$("#closeMenu").click(function(){
	$("#constMenu").css("display", "none");
	$(".in").removeClass("in");
	$("#dynmRes").show();
	});
}
function newsearch(){
	$("form[action=search]").submit(function(event){
	event.preventDefault();
	sel = $(this).find("select");
	//console.log(sel[0]);
	//CityVal = sel[0].value;
	//rentType= sel[1].value;
	//retailType = sel[2].value; 
	window.location = "/search/"+sel.get(0).value+"/"+sel.get(2).value+"/"+sel.get(1).value;
	
});
}
function getSearchOptions(){
	elem = document.location.pathname.split("/");
	selects = $("form[action=search] select");
	selects.get(0).value = elem[2];	
	selects.get(1).value = elem[4];	
	selects.get(2).value = elem[3];	
}
function sortElements(){
	search = document.location.search.substring(1).split("&");
	for(i = 0 ; i < search.length; i++){
		elempara = search[i].split("=");
		if(elempara[0] == "srt"){
		selectedElem = 0;
		if(elempara[1] > 0) selectedElem = elempara[1] - 1;
		$("#sortRes input[type=radio]").get(selectedElem).checked = true;
			break;
		}
	}
		
	$("#sortRes input[type=radio]").click(function(){
		// get the value of the selected input 
		sortBy = $(this).val();
		document.location = document.location.origin+document.location.pathname+"?srt="+sortBy;
	});	
}
