$("#searchData").ready(function(){
	lnkret = $(".lnkRet");
	changeOrientation();
	window.screen.orientation.onchange = changeOrientation;
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
$(window).scroll(function(){
        y = window.scrollY;
	headerHeight = $("#header").height();
	if(y >  headerHeight){
		$("#extSearch").addClass("pinSearch");
	}else {
		$("#extSearch").removeClass("pinSearch");
	}
});
