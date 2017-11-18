var btn_function_slider = new sliderClass();
var btn_selector = "button[type=button]";
var btn_click_boolean = false;
var timeOutConstan = 17000;
var ActionIntervalFunction =  setInterval(function(){
			btn_function_slider.nextSlider();	
			},timeOutConstan);
$(document).ready(function(){
	setTimeout(function(){
			$("#element_topic_1").fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
		},500);
	$("button[name=v_formCtrl_btn_topic_left]").click(function(){
		btn_function_slider.beforeSlider();
		ActionIntervalFunction =  setInterval(function(){
			btn_function_slider.nextSlider();	
			},timeOutConstan);
	});
	$("button[name=v_formCtrl_btn_topic_right]").click(function(){
		btn_function_slider.nextSlider();
		ActionIntervalFunction =  setInterval(function(){
			btn_function_slider.nextSlider();	
			},timeOutConstan);
	});
	$(".content-slider "+btn_selector).each(function(indx,element){
		btn_function_slider.eventClickTopicBtn(element.id);

	});
	
});



function sliderClass(){

	this.beforeSlider = function(){

		var Imgsize = $('.content-slider').find('.element_slider').size();
		var Topicsize = $('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').size();

		btn_click_boolean = false;
		$(".content-slider "+btn_selector).each(function(indx,element){
			if (($("#"+element.id).attr('id') !== 'v_formCtrl_btn_topic_left')||($("#"+element.id).attr('id') !== 'v_formCtrl_btn_topic_right')) {
				console.log($("#"+element.id).attr('id'));
				$("#"+element.id).css({'transform':'rotate(180deg)','transition':'all .5s ease-in'});
				btn_function_slider.resetContentArticle($(element).attr('data_content'));
			}		
		});

		 $('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').each(function(index,element){
			if($(element).hasClass('content-topic-wrap-active')){
					$(element).hide();
					$(element).removeClass('content-topic-wrap-active');
					if(index==0){						
						setTimeout(function(){
							$($('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').get(Topicsize-1)).fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
						},500);
						return false;
					}else{						
						setTimeout(function(){
							$($('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').get(index-1)).fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
						},500);
						return false;
					}

				}
		});
		$('.content-slider').find('.element_slider').each(
			function(index,value){				
				if($(value).hasClass('element_slider_show')){

					$(value).hide();
					$(value).removeClass('element_slider_show');

					if(index==0){

						$($('.content-slider').find('.element_slider').get(Imgsize-1)).fadeIn('slow');
						$($('.content-slider').find('.element_slider').get(Imgsize-1)).addClass('element_slider_show');

						return false;
					}else{
						
						$($('.content-slider').find('.element_slider').get(index-1)).fadeIn('slow');
						$($('.content-slider').find('.element_slider').get(index-1)).addClass('element_slider_show');
						return false;
					}
				}
		});
	}

	this.nextSlider = function(){

		var Imgsize = $('.content-slider').find('.element_slider').size();
		var Topicsize =  $('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').size();
		btn_click_boolean = false;
		$(".content-slider "+btn_selector).each(function(indx,element){
			if (($("#"+element.id).attr('id') !== 'v_formCtrl_btn_topic_left')||($("#"+element.id).attr('id') !== 'v_formCtrl_btn_topic_right')) {
				console.log($("#"+element.id).attr('id'));
				$("#"+element.id).css({'transform':'rotate(180deg)','transition':'all .5s ease-in'});
				btn_function_slider.resetContentArticle($(element).attr('data_content'));
			}		
		});

		$('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').each(function(index,element){
			
			if($(element).hasClass('content-topic-wrap-active')){
					$(element).hide();					
					$(element).delay(1000).removeClass('content-topic-wrap-active');
					if(index+1 < Topicsize){											
						setTimeout(function(){
							$($('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').get(index+1)).fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
						},500);
						return false;
					}else{						
						setTimeout(function(){
							$($('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').get(0)).fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
						},500);
						return false;
					}
				}
		});
		$('.content-slider').find('.element_slider').each(
			function(index,value){	
			/**/			
				if($(value).hasClass('element_slider_show')){
					$(value).hide();
					$(value).removeClass('element_slider_show');
					if(index+1 < Imgsize){						
						$($('.content-slider').find('.element_slider').get(index+1)).fadeIn('slow');
						$($('.content-slider').find('.element_slider').get(index+1)).addClass('element_slider_show');

						return false;
					}else{
						
						$($('.content-slider').find('.element_slider').get(0)).fadeIn('slow');
						$($('.content-slider').find('.element_slider').get(0)).addClass('element_slider_show');
						return false;
					}
				}
		});	
	}
	this.eventClickTopicBtn = function(id){
		$("#"+id).click(function(){
			
			if (btn_click_boolean == false) {
				var article = $(this).attr('data_content');
				btn_function_slider.showContentArticle(article);
				$(this).delay(100).css({'transform':'rotate(0deg)','transition':'all .5s ease-in'});
				btn_click_boolean = true;
				clearInterval(ActionIntervalFunction);
			}else{
				if (btn_click_boolean == true) {
					var article = $(this).attr('data_content');
					btn_function_slider.showContentArticle(article);
					$(this).delay(100).css({'transform':'rotate(180deg)','transition':'all .5s ease-in'});
					btn_click_boolean = false;
					ActionIntervalFunction =  setInterval(function(){
						btn_function_slider.nextSlider();	
					},timeOutConstan);
				}
			}
			console.log(btn_click_boolean);
			
		});
	}
	this.resetContentArticle = function(id){
		if (($("#"+id).css('display') == 'none')||($("#"+id).css('display') == 'block')) {
			$("#"+id).slideUp('slow');
		}
	}
	this.showContentArticle = function(id){
		console.log(id);
		if ($("#"+id).css('display') == 'none') {
			$("#"+id).slideDown('slow');
		}else{
			if($("#"+id).css('display') == 'block'){
				$("#"+id).slideUp('slow');
			}
		}

		
	}


}