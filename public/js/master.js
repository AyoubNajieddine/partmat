$(document).ready(function(){

});
function addImage(src, name, len){
			/* adding hidden fields with the name of 
			   the pictures so we can send them to database
			*/
		appData = "<input  type='hidden' name='pics[]' value='"+name+"'/>";
		$("#newpart form").append(appData);
			/*
			   adding picture division view
			   so we can delete theme 
			*/
		$("#img_div").append("<div class='thumb_div '"+len+" ><span class='glyphicon glyphicon-remove-sign thumb_cls text-danger' target-data='.thumb_div "+len+"' ></span><img class='img-thumbnail upl_list' width='100px' height='100px' src='"+src+"'></div>");
}
function uploadFiles(){
			// we need to make good css uploaded using javascript and ajax
		var reader = new FileReader();
		$("#upld").change(function(){
		obj = $(this)[0].files[0]; // we have one file here
		reader.onload = function(){
		src = reader.result;	
		}
		len = $(".thumb_div").length();
		addImage(src, obj.name, len);
		reader.readAsDataURL(obj);
		});
}
function delThumb(){
	$(document).on('click','.thumb_cls',function(){
		elem =  $(this)[0].parentElement;
		src = $(this).attr("target");
		$(elem).remove();
		$.get("/retail/delpic/"+src);// we still can do post method
	});
}
