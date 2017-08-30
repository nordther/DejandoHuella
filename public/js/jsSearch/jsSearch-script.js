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

		
			
				if ($("#search").val() != null) {
				$("#search").keyup(function(){			
					eventoClick.searhFunctionShowInformation();				
				}).keydown(function(){
					eventoClick.searhFunctionShowInformation();
				});
				}
			
		
		
	
		$("#v_frmCrtUs_roll").change(function(){
			eventoClick.searhFunctionShowInformation();
		});

		if ($("#v_frmCrtUs_roll").selectedIndex != -1 ) {eventoClick.searhFunctionShowInformation();}
		
		
				
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

	this.searhFunctionShowInformation = function(){
		var appendData = $('#formSearchIncludeInformation');		
		var search = $("#search").val();	
		var token = $("input[name=_token]").val();
		var port = '8000';
		var route = "http://localhost:"+port+"/Admin/buscar-usuario/get";
		var namesearch = $("input[name=v_search-buscar-usuario").val();
				if ($("#v_frmUserToolts_status_active").is(':checked')) {var status = 1;}else if($("#v_frmUserToolts_status_inhable").is(':checked')){var status = 0;}
		var status_user = status;		
		var roll = $("#v_frmCrtUs_roll").val();

		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"GET",
			dataType:'json',
			data:{
				v_formUserSearch:search,
				v_formUserStatus:status_user,
				v_formCrtUs_roll:roll},					
			success: function(us){	

					appendData.empty();
					$.each(us,function(i,r){
						appendData.append('<div class="form-search-row-effect-cardview form-search-col-dm-h-3">'+
							'<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">'+'</div>'+
							'<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.dp_nombre+'</label></div>'+
							'<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.dp_telefono+'</label></div>'+
							'<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.us_email+'</label></div>'+
							'<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-edit button-dm-2 cicle-bisel-1"></button>'+'</div>'+
							'<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-more button-dm-2 cicle-bisel-1"></button>'+'</div>'+
							'<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3">'+'<button class="button-form-tool-disabled button-dm-2 cicle-bisel-1"></button>'+'</div>'+'</div>');
					});

		}
	});

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
