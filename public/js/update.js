$(document).ready(function(){
	// setting up ajax
  
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
	console.log(elem);
  });
  $("form").submit(function(event){
	event.preventDefault();
	param = "";
	action  = $(this).attr("action");
	method  = $(this).attr("method");
        $("form[action='"+action+"'] input").each(function(inp){
	// each input
	  name = $(this).attr("name");
	  val = $(this).val();
	  param = param+name+"="+val+"&";
	});
	$.ajax({
	method:method, 
	url:action,
	data:param,
	success:function(ret){
		if(ret.length != 0){
		$(".alert").show();
		$(".alert ul").html("<li>"+ret.address+"</li>");
		}
		else {
			document.location = "/dashboard/updretail/1";
		}
	}
  });
  	
  });
});
