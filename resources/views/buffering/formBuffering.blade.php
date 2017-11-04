<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cargando...</title>
	{!! Html::style('css/main_css/effects/style-effects.css') !!}
	{!! Html::script('js/jsJQUERY/jquery-3.2.1.min.js') !!}
	<script type="text/javascript">
		function render(id){
			setTimeout(function(){
				var url = document.location=location.protocol+"//"+location.host+'/'+id;
				console.log(url);
			}, 2000);
		}
		
	</script>
</head>
<body onLoad="render('{{$viewId['id']}}')">

	<main>
	   <div class="dank-ass-loader">
	      <div class="row">
	         <div class="arrow up outer outer-18"></div>
	         <div class="arrow down outer outer-17"></div>
	         <div class="arrow up outer outer-16"></div>
	         <div class="arrow down outer outer-15"></div>
	         <div class="arrow up outer outer-14"></div>
	      </div>
	      <div class="row">
	         <div class="arrow up outer outer-1"></div>
	         <div class="arrow down outer outer-2"></div>
	         <div class="arrow up inner inner-6"></div>
	         <div class="arrow down inner inner-5"></div>
	         <div class="arrow up inner inner-4"></div>
	         <div class="arrow down outer outer-13"></div>
	         <div class="arrow up outer outer-12"></div>
	      </div>
	      <div class="row">
	         <div class="arrow down outer outer-3"></div>
	         <div class="arrow up outer outer-4"></div>
	         <div class="arrow down inner inner-1"></div>
	         <div class="arrow up inner inner-2"></div>
	         <div class="arrow down inner inner-3"></div>
	         <div class="arrow up outer outer-11"></div>
	         <div class="arrow down outer outer-10"></div>
	      </div>
	      <div class="row">
	         <div class="arrow down outer outer-5"></div>
	         <div class="arrow up outer outer-6"></div>
	         <div class="arrow down outer outer-7"></div>
	         <div class="arrow up outer outer-8"></div>
	         <div class="arrow down outer outer-9"></div>
	      </div>
   </div>
</main>
</body>
</html>