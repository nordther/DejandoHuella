var btn_actionEvents = new classGuiMain();
var inputElements = null;
var v_JSON_inputElements = null;
var inputElements = [];
var selectorInput = "input[type='text'],input[type='password'],input[type='email'],input[type='number'],input[type='search'],textarea";

$(document).ready(function(){
	btn_actionEvents.inputMaterialize();	
	$("form[name=formHTML] "+selectorInput).each(function(indx,element){		
		var id = $(element).attr('id');		
		inputElements[indx] = id;
	});
	$.each(inputElements,function(indx,element){
		btn_actionEvents.validityInputEmptyOrFull(element);
	});	
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
	
	this.validityInputEmptyOrFull = function(id){
		
		$("form[name='formHTML'] label").each(function(i,k){
		if (($('#'+id).val().length > 0)|| ($('#'+id).attr('placeholder') !== undefined)) {			
			if(($('#'+id).attr('id') === $(k).attr('for')) ) {	
			    				
				$(k).addClass('active');

			}				
		}else if($('#'+id).attr('id') === $(k).attr('for')) {
							
			 $(k).removeClass('active');
		}
		});
	}

	this.inputMaterialize = function(){
		 $("form[name='formHTML'] label").each(function(i,k){		 	
		  	$(selectorInput).focus(function(){
		  		var $this = $(this);
		  		var label = $(k);
				if ($this.attr('id') === $(label).attr('for')) {
									
					$(label).addClass('active');				
				}
			});
			$(selectorInput).focusout(function(){
				var $this = $(this);
				var label = $(k);
								
				if (($this.val().length > 0)|| ($this.attr('placeholder') !== undefined)) {
					if(($this.attr('id') === $(label).attr('for')) ) {					
						$(label).addClass('active');	
						}
					
				}else if($(this).attr('id') === $(label).attr('for')) {					
						$(label).removeClass('active');
					}				
							
			});				

		 });		

	}
	
} 