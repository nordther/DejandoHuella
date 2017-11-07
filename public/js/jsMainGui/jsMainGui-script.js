/*$(document).ready(function(){

// Consultar de forma estándar el permiso
Notification.permission
// Pedimos permiso (el navegador nos preguntará)
Notification.requestPermission();

var title = "exito";
var extra = {
	"icon": "../../img/icon/nav/about.png",
	"body": "Prueba de notificaciones"
};

new Notification( title, extra);

});*/

var btn_actionEvents = new classGuiMain();

$(document).ready(function(){

	$("div[id=content-noticias]").hide();
	$("div[id=content-about]").hide();


     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 400);

                 return false;

            }

       }

   });

     /*$("a[id=mdls_newtopics").click(function(){
     	btn_actionEvents.showNewTopics();
     });

     $("a[id=mdls_about_us").click(function(){
     	btn_actionEvents.showAbout();
     });*/

     $("#start-noticias").click(function() {

     	btn_actionEvents.showNewTopics();
     });

     $("#start-about").click(function() {
     	btn_actionEvents.showAbout();
     });


	var actionClassDinamyForm =  new classGuiMain();
	$("#v_frmCrtUs_typeusers").change(function(){
		actionClassDinamyForm.showFormAssistan();
	});

	/*$("#v_frmCrtUs_checklessjob_yea").click(function(){
		alert($("#v_frmCrtUs_checklessjob_yea").val());
	});
	$("#v_frmCrtUs_checklessjob_not").click(function(){
		alert($("#v_frmCrtUs_checklessjob_not").val());
	});*/

	//form-user-sistem
	if ($("#v_frmCrtUs_typeusers").val() == "1") {
		$("#form-user-sistem").show();
		$("#form-user-beneficier").hide();
		$("#form-user-profesor").hide();
		
	}

	$("#v_frmUserToolts_type_user_assistan").click(function(){
		$("#formAssistanSistem").show();
		$("#formUsersNormals").hide();
	});
	$("#v_frmUserToolts_type_user_normal").click(function(){
		$("#formAssistanSistem").hide();
		$("#formUsersNormals").show();

	});

	if ($("#v_frmUserToolts_type_user_assistan").is(':checked')) {
		$("#formUsersNormals").hide();
	}
	
	/*var coordenada = $("#btn-toolts-perfil").position();
	var x = coordenada.left;
	var y = coordenada.top;

	$("#btn-toolts-perfil").click(function(){
		
		if (($(document).width() <= 1600) || ($(document).width() >= 768)) {

			$("#menuPerfil").css({'top':(y+55)+'px','left':(x+1203)+'px'});
		}

		if ($(document).width() <= 768){
				
			$("#menuPerfil").css({'top':(y+55)+'px','left':(x-320)+'px'});
		}
		
		

		
	});*/

	
	
	 $("form[name='formHTML'] label").each(function(i,k){
	  	$("input[type=text]").focus(function(){
			if ($(this).attr('id') === $(k).attr('for')) {
				var label = $(k);
				$(label).addClass('active');				
			}
		});
		$("input[type=text]").focusout(function(){
			console.log($(this).attr('id'));
			if ($(this).val().length > 0) {
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).addClass('active');
				}
			}else{
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).removeClass('active');
				}
			}
		});	
		
		$("input[type=password]").focus(function(){
			if ($(this).attr('id') === $(k).attr('for')) {
				var label = $(k);
				console.log($(label).addClass('active'));
			}
		});
		$("input[type=password]").focusout(function(){
			console.log($(this).attr('id'));
			if ($(this).val().length > 0) {
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).addClass('active');
				}
			}else{
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).removeClass('active');
				}
			}
		});		
		$("input[type=email]").focus(function(){
			if ($(this).attr('id') === $(k).attr('for')) {
				var label = $(k);
				console.log($(label).addClass('active'));
			}
		});
		$("input[type=email]").focusout(function(){
			console.log($(this).attr('id'));
			if ($(this).val().length > 0) {
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).addClass('active');
				}
			}else{
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).removeClass('active');
				}
			}
		});	
		$("input[type=number]").focus(function(){
			if ($(this).attr('id') === $(k).attr('for')) {
				var label = $(k);
				console.log($(label).addClass('active'));
			}
		});
		$("input[type=number]").focusout(function(){
			console.log($(this).attr('id'));
			if ($(this).val().length > 0) {
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).addClass('active');
				}
			}else{
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).removeClass('active');
				}
			}
		});	
		$("textarea").focus(function(){
			if ($(this).attr('id') === $(k).attr('for')) {
				var label = $(k);
				console.log($(label).addClass('active'));
			}
		});
		$("textarea").focusout(function(){
			console.log($(this).attr('id'));
			if ($(this).val().length > 0) {
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).addClass('active');
				}
			}else{
				var label = $(k);
				if ($(this).attr('id') === $(k).attr('for')) {					
					$(label).removeClass('active');
				}
			}
		});
	});


});

function classGuiMain(){
	this.showNewTopics = function(){
		console.log('algo');
     	if ($("#content-noticias").css('display') == 'none') {
     		$("#content-noticias").fadeIn('slow'); 
     		$('#start-noticias').css({'transform':'rotate(0deg)','transition':'transform 1s'});    		
     	}else{
     		$("#content-noticias").hide();
     		$('#start-noticias').css({'transform':'rotate(180deg)','transition':'transform 1s'}); 
     	}
	}
	this.showAbout = function(){
		console.log('algo');
     	if ($("#content-about").css('display') == 'none') {
     		$("#content-about").fadeIn('slow');
     		$('#start-about').css({'transform':'rotate(0deg)','transition':'transform 1s'});     		
     	}else{
     		$("#content-about").hide();
     		$('#start-about').css({'transform':'rotate(180deg)','transition':'transform 1s'});
     	}
	}
	this.showFormAssistan = function(){
		if ($("#v_frmCrtUs_typeusers").val() == "1") {
			$("#form-user-sistem").show();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "2") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").show();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "3") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").show();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "4") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "5") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
	}

	
} 