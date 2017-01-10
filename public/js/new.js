function getForm(tp){
	$.get("/new/frm/"+tp, function(data){
		elem = $("#dynFrm");
		elem.html(data);
	});
}
$("#newpart").ready(function(){
	uploadFiles();
	$(".thumb_cls").click(function(){
		console.log("clicked");
		dt = $(this).attr("dt");
		console.log(dt);
		$(".thumb_div img[src='"+dt+"']").remove();
	});	
	$("select[name=ret_type]").change(function(){

			// in case the Type Is Changed
			type = $(this).val();
		        getForm(type);
	});
function updProgress(evt){
		if(evt.lengthComputable){
			var percent = Math.round((evt.loaded / evt.total) * 100);
			$("#cur").text(percent+"%");
			$("#prg").css("width", percent+"%");
			//console.log("Upload Is : "+percent);
		}
}
function uploadFiles(){
			// we need to make good css uploaded using javascript and ajax
		$("#upld").change(function(){
		obj = $(this)[0].files;
		var frm = new FormData();
		for(var i =0 ; i < obj.length; i++){
			frm.append("img", obj[i], obj[i].name);
		}
			frm.append("_token", $("#upld").attr("cs"));
		xhr = new XMLHttpRequest();
		xhr.upload.onprogress = updProgress;
		xhr.open("POST","/retail/upl", true);
		xhr.send(frm);
		name = xhr.responseText.trim(); 
		$("form").append("<input  typ='hidden' name='pics[]' value='"+name+"'");
		//$("#img_div").append("<div class='thumb_div'><span class='glyphicon glyphicon-remove-sign thumb_cls text-danger' dt='"+e.target.result+"'></span><img class='img-thumbnail upl_list' width='100px' height='100px' src='"+e.target.result+"'/></div>");
			
		});
//$("#img_div").append("<div class='thumb_div'><span class='glyphicon glyphicon-remove-sign thumb_cls text-danger' dt='"+e.target.result+"'></span><img class='img-thumbnail upl_list' width='100px' height='100px' src='"+e.target.result+"'/></div>");
/*

		type = data.type.split("/")[0];
	if(type == "image"){
		reader.readasdataurl(data);
	}
*/
}
});
