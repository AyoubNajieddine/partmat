$(document).ready(function(){
	// setting up ajax
  
uploadFiles();
  $.ajaxSetup({
     headers: {
     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
  });
  $(".edit_opt").click(function(){
	elem = $(this).attr("data");
	$("#updpartma_menu").hide();
	$(elem).show();
	console.log(elem);	
  });
  $(".cancel").click(function(){
	elem = $(this).attr("data");
	$(elem).hide();	
	$("#updpartma_menu").show();
	$(".alert").hide();
	console.log(elem);
  });
  $("form").submit(function(event){
	event.preventDefault();
	param = $(this).serialize();
	action  = $(this).attr("action");
	method  = $(this).attr("method");
	$.ajax({
	method:method, 
	url:action,
	data:param,
	success:function(ret){
		if(ret.length != 0){
		prop = Object.keys(ret)[0];
		$(".alert").show();
		$(".alert ul").html("<li>"+ret[prop]+"</li>");
		}
		else {
			$(".alert").hide();
			document.location = "/dashboard/updretail/1";
		}
	}
  	});
	//console.log($(this).serializeArray());
  	
  });
	//delThumb();
});
