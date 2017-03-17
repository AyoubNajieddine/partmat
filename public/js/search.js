$("#searchData").ready(function(){
	lnkret = $(".lnkRet");
	hideAdd();
	changeOrientation();
	window.screen.orientation.onchange = changeOrientation;
	showAdvanced();
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
/*$(window).scroll(function(){
        y = window.scrollY;
	headerHeight = $("#header").height();
	if(y >  headerHeight){
		$("#extSearch").addClass("pinSearch");
	}else {
		$("#extSearch").removeClass("pinSearch");
	}
});
*/
