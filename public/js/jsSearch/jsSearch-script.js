var eventoClick = new ClassSearchDinamy();
var result;
var timeLoad = 0;
var cant = 0;

$(document).ready(function(){

		var dataStatusAuths = null;

		var v_Height_content = screen.height - 355;
		var v_Height = screen.height - 195;
		var url = location.href;
		var numerId = location.href;
		var dataId_1 = numerId.replace(location.protocol+"//"+location.host+"/Admin/perfil/","");
		var dataId_2 = numerId.replace(location.protocol+"//"+location.host+"/Admin/MyFiles/","");

		var urlDato = null;
			if (dataId_1 == numerId.replace(location.protocol+"//"+location.host+"/Admin/perfil/","")) {
				var idData = dataId_1;
				urlDato = numerId.replace(dataId_1,"");				
			}
			if(dataId_2 == numerId.replace(location.protocol+"//"+location.host+"/Admin/MyFiles/","")){
				var idData = dataId_2;
				urlDato = numerId.replace(dataId_2,"");				
			}



		console.log(urlDato);

		
		
		
		//console.log(url);
		
		if(url == location.protocol+"//"+location.host+"/Admin"){			
			$(".content-perfil-header").css({'margin-top':'-52px'});
			console.log('index');
		}else if( url == location.protocol+"//"+location.host+"/Admin/buscar-usuario") {			
			$(".content-perfil-header").css({'margin-top':'-202px'});
			console.log('buscar');
		}else if(url== location.protocol+"//"+location.host+"/Admin/crear/usuario"){
			$(".content-perfil-header").css({'margin-top':'-52px'});
			console.log('crear usuario');
		}else if(url== urlDato+idData){
			$(".content-perfil-header").css({'margin-top':'-52px'});
			console.log('crear usuario');
		}
		
		

		$('#form-content-search-user').css({'width':'1255px','height':'550px'});

		$(".form-content-search").css({'height':'250px','top':'40px','left':'185px','position':'fixed'});

		$(".form-article-search").css({'height':''+(v_Height_content-100)+'px','top':'-4px','position':'relative'});

		$(".form-content-toolt-search").css({'height':''+(v_Height+36)+'px','top':'35px'})

		$(".form-toolt-hide-show").css({'height':''+(v_Height+33)+'px','top':'35px'});

		$(".form-search-agenda").css({'height':''+(v_Height)+'px'});

		$("#TooltsSearch").css({'top':'52px'});

		$("#TooltsSearchShowHide").css({'top':'52px'});

		$("div[id^=targetItem]").click(function(){
		   		
		   });	
		$("#btnShowToolts").click(function(){
		   		eventoClick.tooltSearchShow();
		   });

		$("#v_frmUserToolts_status_active").click(function(){
			eventoClick.searhFunctionShowInformation();
		});	

		$("#v_frmUserToolts_status_inhable").click(function(){
			eventoClick.searhFunctionShowInformation();
		});	

		if ($("#v_search-buscar-usuario").val() != null) {
				$("#v_search-buscar-usuario").keyup(function(){			
						eventoClick.searhFunctionShowInformation();				
				});
			}
		
		$("#v_frmCrtUs_roll").change(function(){

				//console.log($(this).val());

					console.log($("#gamemode option:selected").text());
				

				

				eventoClick.searhFunctionShowInformation();
		});

		if ($("#v_frmCrtUs_roll").selectedIndex != -1 ) {eventoClick.searhFunctionShowInformation();}
		
			
	}); 



function ClassSearchDinamy(){
	
	var status_session;

	this.confirmAuth = function(id){
		var search = $("#v_search-buscar-usuario").val();	
		var token = $("input[name=_token]").val();
		var route = location.protocol+"//"+location.host+"/Admin/buscar-usuario/authConfirm";
		var id = id;
		var appendData = $('#formSearchIncludeInformation'); 
		var dataJSON = $.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"GET",
			dataType:'json',
			data:{
				v_formIdUser: id
			},
			success:function(data){
				dataJSON = data['datosAuth'];
				console.log(dataJSON);	
				dataStatusAuths = "{value:"+dataJSON+", usersId:"+id+"}";
			}					
									
		});
		return dataJSON;	
	}

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
				
		var search = $("#v_search-buscar-usuario").val();	
		var token = $("input[name=_token]").val();		
		var route = location.protocol+"//"+location.host+"/Admin/buscar-usuario/get";
		var namesearch = $("input[name=v_search-buscar-usuario").val();
		if ($("#v_frmUserToolts_status_active").is(':checked')) {var status = 1;}else if($("#v_frmUserToolts_status_inhable").is(':checked')){var status = 0;}
		var status_user = status;		
		var roll = $("#v_frmCrtUs_roll").val();
		var appendData = $('#formSearchIncludeInformation');
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
				appendData.html('<div class="loader" style="top:115px;">Cargando...</div>');	
				setTimeout(function(){				
					cant = $(us).length;
					console.log('Cantidad de registro:'+cant);
					timeLoad = cant*75/100;
					console.log('Cantidad de tiempo  :'+timeLoad);
					eventoClick.EventClickSearch();
					console.log('Tiempo:'+(1000+timeLoad));
					setTimeout(function(){
						appendData.empty();
						$.each(us,function(i,r){
						if (r.estp_activeordesable == 0){
							var dataHTML = '<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3 align-items-center">'+'<div class="input-group-btn button-dm-2">'+'<button type="button" id="btnEnable" class="button-form-tool-enable button-align-items" data="'+r.dp_id+'"></button>'+'</div>'+'</div>';
						}else if (r.estp_activeordesable == 1){
							var dataHTML = '<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3 align-items-center">'+'<div class="input-group-btn button-dm-2">'+'<button type="button" id="btnDisable" class="button-form-tool-disabled button-align-items" data="'+r.dp_id+'"></button>'+'</div>'+'</div>';
						}
						if (r.pp_src_filename == '') {
							var photo = '<img src="'+location.protocol+'//'+location.host+'/'+'img/icon/header/userDefault.png" class="img-dm-8 cicle-bisel-1" style="margin-top:6.5px;">';
						}else{
							var photo = '<img src="'+location.protocol+'//'+location.host+'/'+r.pp_src_dir+'/'+r.pp_src_filename+'" class="img-dm-8 cicle-bisel-1" style="margin-top:6.5px;">';
						}
						appendData.append('<div class="form-search-row-effect-cardview form-search-col-dm-h-3">'+
							'<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-3">'+photo+'</div>'+
							'<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.dp_nombre+'</label></div>'+
							'<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.dp_telefono+'</label></div>'+
							'<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-3"><label class="label-font-size-8 label-font-family-neutro">'+r.us_email+'</label></div>'+
							'<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3 align-items-center">'+'<div class="input-group-btn button-dm-2">'+'<button type="button" id="btnEdit" class="button-form-tool-edit button-align-items" ></button>'+'</div>'+'</div>'+
							'<div class="form-search-col form-search-col-small-dm-w-1 form-search-col-dm-h-3 align-items-center">'+'<div class="input-group-btn button-dm-2">'+'<button type="button" id="btnMore" class="button-form-tool-more button-align-items" ></button>'+'</div>'+'</div>'+
							dataHTML+'</div>');
					});				

					
					},(1000+timeLoad));
					
				},100);
					

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

	this.EnableFunction = function(id,status){
		var search = $("#search").val();	
		var token = $("input[name=_token]").val();		
		var route = location.protocol+"//"+location.host+"/Admin/buscar-usuario/setUpdateEnableUser";
		var id = id;
		var status = status;
		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"POST",
			dataType:'json',
			data:{
				v_formIdUser : id,
				v_formUserStatus: status
			},
		success:function(){
			eventoClick.searhFunctionShowInformation();
		}	
		});
		
	}
	this.DisableFunction = function(id,status){
		var search = $("#search").val();	
		var token = $("input[name=_token]").val();		
		var route = location.protocol+"//"+location.host+"/Admin/buscar-usuario/setUpdateDisableUser";
		var id = id;
		var status = status;
		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"POST",
			dataType:'json',
			data:{
				v_formIdUser : id,
				v_formUserStatus: status
			},
		success:function(){
			eventoClick.searhFunctionShowInformation();
		}	
		
	});

	}	

	

	this.EventClickSearch = function(){
		$("button[id=btnEnable]").click(function(){
			if ( confirm("Esta seguro de habilitar este usuario")) {
	   		eventoClick.EnableFunction($(this).attr('data'),1);
	   		}
	   	});
		$("button[id=btnDisable]").click(function(){
			/*eventoClick.confirmAuth($(this).attr('data'));*/	
			eventoClick.confirmAuth($(this).attr('data'));
			

		/*if (confirm("Esta seguro de deshabilitar este usuario")) {
			eventoClick.DisableFunction($(this).attr('data'),0);
		} */  
					
	   		
  		});
	  
	}
}

