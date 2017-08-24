var eventoClick = new ClassSearchDinamy();

$(document).ready(function(){
	var v_Height = screen.height - 195;

	$('#form-content-search-user').css({'width':'1255px','height':'550px'});

	$(".form-content-search").css({'height':''+v_Height+'px','top':'52px','position':'relative'});

	$(".form-article-search").css({'height':''+(v_Height-100)+'px','top':'-4px','position':'relative'});

	$(".form-content-toolt-search").css({'height':''+(v_Height+36)+'px','top':'35px'})

	$(".form-toolt-hide-show").css({'height':''+(v_Height+33)+'px','top':'35px'});

	$(".form-search-agenda").css({'height':''+(v_Height)+'px'});

	$("#TooltsSearch").css({'top':'52px'});

	$("#TooltsSearchShowHide").css({'top':'52px'});

	$("div[id^=targetItem]").click(function(){
	   		
	   });

	$("button[id=btnEdit]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnMore]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnDisable]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnSearch]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnShowToolts]").click(function(){
	   		eventoClick.tooltSearchShow();
	   });

	
		var appendData = $('#formSearchIncludeInformation');
		
		var search = $("#search").val();		
		
		var token = $("input[name=_token]").val();
		var port = '8000';
		var route = "http://localhost:"+port+"/Admin/buscar-usuario/get";
		var namesearch = $("input[name=v_search-buscar-usuario").val();

		if ($("#v_frmUserToolts_status_active").is(':checked')) {var status = 1;}else if($("#v_frmUserToolts_status_inhable").is(':checked')){var status = 0;}

		var status_user = status;

		
		
		var nombre, telefono, email;
		

		/*$.getJSON(route,{v_formUserSearch:search,v_formUserStatus:status_user}).done(function(data,textStatus,jqXHR){
				$.each(res)
					appendData.append('<div class="form-search-row-effect-cardview form-search-col-dm-h-3">');
					appendData.append('<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label>'+usersSearch+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label>'+usersSearch+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-3"><label>'+usersSearch+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-edit button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-more button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-disabled button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('</div>');
		});*/

		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"GET",
			dataType:'json',
			data:{
				v_formUserSearch:search,
				v_formUserStatus:status_user},
			beforeSend: function (){
				appendData.append('<div class="form-search-row-effect-cardview form-search-col-dm-h-3">');
				appendData.append('<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">'+'procesando'+'</div>');
				appendData.append('</div>');
			},	
			success: function(usersSearch){							
					appendData.append('<div class="form-search-row-effect-cardview form-search-col-dm-h-3">');
					appendData.append('<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label>'+usersSearch.dp_nombre+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label>'+usersSearch.dp_telefono+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-3"><label>'+usersSearch.us_email+'</label></div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-edit button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-more button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-disabled button-dm-2 cicle-bisel-1"></button>'+'</div>');
					appendData.append('</div>');				
			}	
			
		});

		
		
				
	}); 



function ClassSearchDinamy(){
	
	

	this.tooltSearchShow = function(){
		if ($("#TooltsSearch").css('display') == 'none') {			
			$("#btnShowToolts").css({'transform':'rotate(180deg)'});
			$("#TooltsSearch").fadeIn();
			$("#TooltsSearch").css({'left':'25px'});	

		}else{			
			$("#btnShowToolts").css({'transform':'rotate(0deg)'});
			$("#TooltsSearch").fadeOut();
			
		}
	}

	this.hexc = function(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');

    return color;
	}
}
