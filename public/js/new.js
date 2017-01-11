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
function updProgress(evt){
		if(evt.lengthComputable){
			var percent = Math.round((evt.loaded / evt.total) * 100);
			$("#upld").text(percent+"%");
		}
}
function xhrChange(x){
	x.onreadystatechange = function (){
		if(x.readyState == 4){
		name = x.responseText;
		console.log(name);
		appData = "<input  type='hidden' name='pics[]' value='"+name+"'/>";
		$("#newpart form").append(appData);
		$("#img_div").append("<div class='thumb_div'><span class='glyphicon glyphicon-remove-sign thumb_cls text-danger' src='"+name+"'></span><img class='img-thumbnail upl_list' width='100px' height='100px' src='thumbs/"+name+"'/></div>");
		}
	};
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
		xhr.send(frm)
		xhrChange(xhr);
			
		});
}

	$(".thumb_cls").click(function(){ 
	src = $(this).attr("src");
	$(".thumb_div[src='"+src+"']").remove();
	});
	
function delThumb(){
	$(document).on('click','.thumb_cls',function(){
		elem =  $(this)[0].parentElement;
		src = $(this).attr("src");
		$(elem).remove();
		$.post("/retail/delpic/"+src);	
	});
}
