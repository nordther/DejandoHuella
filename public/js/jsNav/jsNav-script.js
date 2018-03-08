var btn_nav = new navFunction();
var colorTarger = "#6C6C6C";
var showHideMenu = false;
var showHidePerfil = false;
var selectorfrmlCtrl_closeWindows = "div[id=frmlCtrl_closeWindows],label[id=frmlCtrl_closeWindows],img[id=frmlCtrl_closeWindows]";

var ln = x=window.navigator.language||navigator.browserLanguage;

$(document).ready(function(){
	$("button[id=btn-toolts-nav]").click(function(){
		btn_nav.showMenu();
	});
	$("button[id=btn-toolts-back]").click(function(){
		window.location.href = "/";
	});
	$("img[id=btn-showPerfil").click(function(){
		btn_nav.showPerfil();

	});

	$(selectorfrmlCtrl_closeWindows).click(function(){
		btn_nav.hidePerfil();
	});
	$("li[id=targetGestionUsers]").click(function(){
		btn_nav.showSubMenuGesUsers();
	});

	$("li[id=targetGestionAgenda]").click(function(){
		btn_nav.showSubMenuGesAgenda();
	});

	$("li[id=targetGestionMultimedia]").click(function(){
		btn_nav.showSubMenuGesMulti();
	});


	$("#subMenuGestionUsers").css({'display':'none'});

	$("#subMenuGestionAgenda").css({'display':'none'});

	$("#subMenuGestionMultimedia").css({'display':'none'});

	$("#targetGestionUsers").css({'cursor':'pointer'});

	$("#targetGestionAgenda").css({'cursor':'pointer'});

	$("#targetGestionMultimedia").css({'cursor':'pointer'});

	$('#lang').attr({'lang':''+ln[0]+ln[1]+''});

	$('#frmlCtrl_perfil').click(function(){
		window.location.href= $("#v_frmlUrl_perfil").val();
	});

	$("#frmlCtrl_files").click(function(){
		window.location.href= $('#v_frmlUrl_files').val();
	});

	$('#frmlCtrl_logout').click(function(){
		window.location.href= $("#v_frmlUrl_logout").val();
	});


	$("#form-tooltip-information-user").css({'display':'none'});

	$("#form-tooltip-my-files").css({'display':'none'});

	$("#form-tooltip-close-session").css({'display':'none'});


	//==========================================================================================

	var v_Left = 1357;

	$('#form-click-profile-me').mouseover(function(){
		var v_IP = $('#form-click-profile-me').position();
		$("#form-tooltip-information-user").css({'display':'block','top':+75+'px','left':+v_Left+'px'});
	});

	$('#form-click-my-files').mouseover(function(){
		var v_IP = $('#form-click-my-files').position();
		$("#form-tooltip-my-files").css({'display':'block','top':+134+'px','left':+v_Left+'px'});
	});

	$('#form-click-profile-out').mouseover(function(){
		var v_IP = $('#form-click-profile-out').position();
		$("#form-tooltip-close-session").css({'display':'block','top':+190+'px','left':+v_Left+'px'});

	});

	//==========================================================================================

	$('#form-click-profile-me').mouseout(function(){
		$("#form-tooltip-information-user").css({'display':'none'});
	});

	$('#form-click-my-files').mouseout(function(){
		$("#form-tooltip-my-files").css({'display':'none'});
	});

	$('#form-click-profile-out').mouseout(function(){
		$("#form-tooltip-close-session").css({'display':'none'});
	});

});


function navFunction(){


	this.showMenu = function(){
		if (showHideMenu == false) {
			showHideMenu = true;
			$("#main-menu").css({'transform':'translateX(0%)'});
			$("#header").removeClass('bg-content-8-opacity').addClass("bg-content-neutro-opacity");
		}else{
			showHideMenu = false;
			$("#main-menu").css({'transform':'translateX(-100%)'});
			$("#header").removeClass('bg-content-neutro-opacity').addClass("bg-content-8-opacity");
		}
	}

	this.showPerfil = function(){
		setTimeout(function() {$("#frmlCtrl_closeWindows").css({'transform':'rotate(360deg)'});}, 500);

		$("#menuPerfil").css({'transform':'translateX(493%)'});
	}
	this.hidePerfil = function(){
		setTimeout(function() {$("#frmlCtrl_closeWindows").css({'transform':'rotate(270deg)'});}, 500);

		$("#menuPerfil").css({'transform':'translateX(600%)'});
	}

	this.showSubMenuGesUsers = function(){
		if ($("#subMenuGestionUsers").css('display') == 'none') {

			$("#subMenuGestionUsers").fadeIn();
			$("#subMenuGestionUsers").css({'display':'block'});
			$("#targetGestionUsers").fadeIn();
			$("#targetGestionUsers").css({'background-color':''+colorTarger+''});
		}else{
			$("#subMenuGestionUsers").fadeOut();
			$("#targetGestionUsers").css({'background-color':'#4B4B4B'});
		}
	}

	this.showSubMenuGesAgenda = function(){
		if ($("#subMenuGestionAgenda").css('display') == 'none') {

			$("#subMenuGestionAgenda").fadeIn();
			$("#subMenuGestionAgenda").css({'display':'block'});
			$("#targetGestionAgenda").fadeIn();
			$("#targetGestionAgenda").css({'background-color':''+colorTarger+''});
		}else{
			$("#subMenuGestionAgenda").fadeOut();
			$("#targetGestionAgenda").css({'background-color':'#4B4B4B'});
		}
	}

	this.showSubMenuGesMulti = function(){
		if ($("#subMenuGestionMultimedia").css('display') == 'none') {

			$("#subMenuGestionMultimedia").fadeIn();
			$("#subMenuGestionMultimedia").css({'display':'block'});
			$("#targetGestionMultimedia").fadeIn();
			$("#targetGestionMultimedia").css({'background-color':''+colorTarger+''});
		}else{
			$("#subMenuGestionMultimedia").fadeOut();
			$("#targetGestionMultimedia").css({'background-color':'#4B4B4B'});
		}
	}
}


function f_social_face(){
	alert('Facebook');
}
function f_social_twt(){
	alert('Twitter');
}
function f_social_inst(){
	alert('Instagram');
}
