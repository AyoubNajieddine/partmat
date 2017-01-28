	// Global Variables
	offset = 0;
	
function loadMore(){
	$.get("dashboard/mylist/"+offset, function(data){
		$("#partma_list").append(data);
	});

}
$(document).ready(function(){
	loadMore();
});
	// for Scrolling Effect
$(window).scroll(function(ev){
	DocHeight = $(document).height();
	winHeight = $(window).height();
	scrollHeight = DocHeight - winHeight;
	scrollPosition = $(this).scrollTop();
	if(scrollHeight != 0){
	if(scrollPosition == scrollHeight){
		offset = offset + 10;
		loadMore(); 	
	}
	}
});
