	// Global Variables
	offset = 0;
function partmat(obj){
	len = obj.length;
	for(i = 0; i < len ; i++){
	var htmlCode ='<div class="panel panel-default"><div class="panel-body">'+obj[0].adresse_retail+'</div></div>';
	$("#partma_list").append(htmlCode);
	}
	return htmlCode;
}
function loadMore(){
	$.get("dashboard/mylist/"+offset, function(data){
	   if(data.length > 0){
		partmat(data);
	   }
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
