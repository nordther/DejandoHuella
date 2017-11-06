var btn_login = new Login();
var colorTarger = {active:"#6C6C6C",desactive:'#4B4B4B'};
var articleActivate,articleDesactive;

$(document).ready(function(){

	

	$("#content-login-user").css({'display':'none'});
	$("#form-article").css({'height':'0px','display':'none'});	

	$("a[id=nav_btn_login]").click(function(){
		btn_login.showFormLoginUser();
	});

	$("#close").click(function(){
		btn_login.closeLogin();
	});

	$("button[id=btn-submit-user").mouseover(function(){
		if($("#btn-submit-user").hasClass('input-content-submit')){
			$("#btn-submit-user").removeClass("input-content-submit");
			$("#btn-submit-user").addClass("input-content-submit-hover").fadeIn("slow");
		}   
	});
	$("button[id=btn-submit-user").mouseout(function(){
		if($("#btn-submit-user").hasClass('input-content-submit-hover')){
			$("#btn-submit-user").removeClass("input-content-submit-hover");
			$("#btn-submit-user").addClass("input-content-submit").fadeIn("slow");

		}  
	});

	$("button[id=btn-submit-user]").click(function(){
		btn_login.showFormLoginPass();
	});

     /*$("button[id=btnLoginForm]").click(function(){
     	btn_login.loginFormFunction();
     });*/       
    
});

function Login(){
	this.showFormLoginUser = function(){
		var v_windows_h = $(window).height();	
		$("#form-article").css({'height':'0px'});	
		if($('#content-login-user').css('display') == 'none'){	
			
		    this.articleAnimate();		
				
			$("#content-login-user").toggle(300, function() {
				$("#content-login-user").css({'display':'block'}).slideDown(100);
				$(".content-blurt").css({'height':v_windows_h+'px'});
			$("#targetLoginUsers").fadeIn();
			$("#targetLoginUsers").css({'background-color':''+colorTarger['active']+''});
			});			
		}

	}
	this.articleAnimate = function(){
	var v_height = 0;

		articleActivate = setInterval(function(){
			
			v_height=v_height+5;

			if (v_height <= 150) {											
				$("#form-article").css({'height':v_height+'px'}).fadeIn('slow');
				console.log(v_height);
			}

		},13); 		
		
	}
	this.resetArticle = function(){
		var v_height = 0;
		articleDesactive = setInterval(function(){
			
			v_height=$("#form-article").height()-10;

			if (v_height == 0) {											
				$("#form-article").css({'height':v_height+'px'}).fadeIn('slow');
				console.log(v_height);
			}

		},10);
		
		
		clearInterval(articleActivate);
		clearInterval(articleDesactive);			
	}
	this.closeLogin = function(){
		if ($('#content-login-user').css('display') == 'block') {
			this.resetArticle();
			$("#targetLoginUsers").fadeIn();
			$("#targetLoginUsers").css({'background-color':''+colorTarger['desactive']+''});
			$('#content-login-user').hide();

		}
	}
	/*this.loginFormFunction = function(){
		var token = $("input[name=_token]").val();
		var port = '8000';
		var route = "http://localhost:"+port+"/login";
		var user = $("input[name=v_formUserNickEmail").val();
		var pass = $("input[name=v_formUserPass").val();

		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"POST",
			dataType:'json',
			data:{
				v_formUserNickEmail:user,
				v_formUserPass:pass},

				success:function(){
					window.location.href = "http://localhost:"+port+"/Admin"; 
				}
		});
	}*/	

}

