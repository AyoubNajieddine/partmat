function getForm(tp){
	$.get("/new/frm/"+tp, function(data){
		elem = $("#dynFrm");
		elem.html(data);
	});
}
$("#newpart").ready(function(){
	uploadFiles();
	$("select[name=ret_type]").change(function(){

			// in case the Type Is Changed
			type = $(this).val();
		        getForm(type);
	});
	delThumb();
});
