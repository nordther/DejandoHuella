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

$(document).ready(function(){
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
	
	var coordenada = $("#btn-toolts-perfil").position();
	var x = coordenada.left;
	var y = coordenada.top;

	$("#btn-toolts-perfil").click(function(){
		
		if (($(document).width() <= 1600) || ($(document).width() >= 768)) {

			$("#menuPerfil").css({'top':(y+55)+'px','left':(x+1203)+'px'});
		}

		if ($(document).width() <= 768){
				
			$("#menuPerfil").css({'top':(y+55)+'px','left':(x-320)+'px'});
		}
		
		

		
	});
	

	
	

	
	


});

function classGuiMain(){
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