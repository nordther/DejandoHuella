var btn_function_slider = new sliderClass();
var btn_selector = "button[type=button]";
var btn_click_boolean = false;
setInterval(function(){
	btn_function_slider.nextSlider();
	btn_click_boolean = false;
	$(".content-slider "+btn_selector).each(function(indx,element){
		$("#"+element.id).css({'transform':'rotate(180deg)','transition':'all .5s ease-in'});
		btn_function_slider.resetContentArticle($(element).attr('data_content'));
	});
	},15000);
setTimeout(function(){
	$("#element_topic_1").fadeIn('slow').delay(500).addClass('content-topic-wrap-active');
},500);

$(document).ready(function(){
	$("button[id=btn-at]").click(function(){
		btn_function_slider.beforeSlider();
	});
	$("button[id=btn-sg]").click(function(){
		btn_function_slider.nextSlider();
	});
	$(".content-slider "+btn_selector).each(function(indx,element){
		btn_function_slider.eventClickTopicBtn(element.id);

	});
});



function sliderClass(){

	this.beforeSlider = function(){

		var Imgsize = $('.content-slider').find('.element_slider').size();
		var Topicsize = $('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').size();
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

						$($('.content-slider').find('.element_slider').get(Imgsize-1)).show(300);
						$($('.content-slider').find('.element_slider').get(Imgsize-1)).addClass('element_slider_show');

						return false;
					}else{
						
						$($('.content-slider').find('.element_slider').get(index-1)).show(300);
						$($('.content-slider').find('.element_slider').get(index-1)).addClass('element_slider_show');
						return false;
					}
				}
		});
	}

	this.nextSlider = function(){

		var Imgsize = $('.content-slider').find('.element_slider').size();
		var Topicsize =  $('.content-slider').find('.element_slider').find('.content-topic-main').find('.content-topic-wrap').size();

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
			}else{
				if (btn_click_boolean == true) {
					var article = $(this).attr('data_content');
					btn_function_slider.showContentArticle(article);
					$(this).delay(100).css({'transform':'rotate(180deg)','transition':'all .5s ease-in'});
					btn_click_boolean = false;
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