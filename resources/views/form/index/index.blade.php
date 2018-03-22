@section('content-text')

<div class="ancla-link" id="noticias"></div>

<div class="content bg-content" >

	<div class="card card-bg-white">

		<div class="header-topic-dm-2 label-start" >

			<h2>
				Novedades Nuevas
			</h2>
			<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top">
				{!! Form::button('',['class' => 'btn btn-arrow-down','id' => 'start-noticias']) !!}			
			</div>
				
				
		</div>


		
	</div>

	<div class="content-grid grid-2" id="content-noticias" style="margin-top: 70px;">
		@for($i = 1 ; $i<=3; $i++)
			<div class="card card-dm-1 card-bg-white">						
				<div class="card-img">					
					<img src="{{asset('img/imgTopics/header/img'.$i.'.jpg')}}">	
					<span class="card-title">Titulo de la noticia</span>					
				</div>
				<div class="card-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
				</div>
				<div class="card-action">
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-f " onclick="f_social_face()"></button></div>
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-t " onclick="f_social_twt()"></button></div>
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-i " onclick="f_social_inst()"></button></div>
				</div>		
					
			</div>
		@endfor	
		@for($i = 1 ; $i<=3; $i++)
			<div class="card card-dm-1 card-bg-white">						
				<div class="card-img">					
					<img src="{{asset('img/imgTopics/header/img'.$i.'.jpg')}}">	
					<span class="card-title">Titulo de la noticia</span>					
				</div>
				<div class="card-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
				</div>
				<div class="card-action">
					
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-f " onclick="f_social_face()"></button></div>
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-t " onclick="f_social_twt()"></button></div>
					<div class="input-group-btn input-circle-btn btn-dm-2"> <button type="button" class="btn button-s-i " onclick="f_social_inst()"></button></div>
				</div>		
					
			</div>
		@endfor
		
	</div>
	<script type="text/javascript">
				
	document.oncontextmenu = function(){return false}
	$(document).keydown(function(event){
		if(event.keyCode==123){
			return false;
		}
		else if (event.ctrlKey && event.shiftKey && event.keyCode==73){        
			return false;
		}
	});

	</script>

</div>
@endsection



