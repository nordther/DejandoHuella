@section('content-text')

<div class="ancla-link" id="noticias"></div>

<div class="content bg-content" >

	<div class="card card-bg-white">

		<div class="header-topic-dm-2 label-start" >

			<h2>
				Novedades Nuevas
			</h2>
			<div class="input-group-btn input-circle-btn button-dm-5" style="top:25px; z-index: 20000;">
				{!! Form::button('',['class' => 'button-form-topics-index','style'=>'transform:rotate(180deg); width:100%; height:100%; border-radius:50%;' ,'id' => 'start-noticias']) !!}			
			</div>

		</div>
		
	</div>

	<div class="content-grid grid-2" id="content-noticias" style="margin-top: 70px;">
		@for($i = 1 ; $i<=3; $i++)
			<div class="card card-dm-1 ">						
				<div class="card-img">					
					<img src="{{asset('img/imgTopics/header/img'.$i.'.jpg')}}">	
					<span class="card-title">Titulo de la noticia</span>					
				</div>
				<div class="card-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
				</div>
				<div class="card-action">
					<button class="button-s-f button-dm-2 button-radius-circle button-margin-left" onclick="f_social_face()"></button>
					<button class="button-s-t button-dm-2 button-radius-circle button-margin-left" onclick="f_social_twt()"></button>
					<button class="button-s-i button-dm-2 button-radius-circle button-margin-left" onclick="f_social_inst()"></button>
				</div>		
					
			</div>
		@endfor	
		@for($i = 1 ; $i<=3; $i++)
			<div class="card card-dm-1 ">						
				<div class="card-img">					
					<img src="{{asset('img/imgTopics/header/img'.$i.'.jpg')}}">	
					<span class="card-title">Titulo de la noticia</span>					
				</div>
				<div class="card-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
				</div>
				<div class="card-action">
					<button class="button-s-f button-dm-2 button-radius-circle button-margin-left" onclick="f_social_face()"></button>
					<button class="button-s-t button-dm-2 button-radius-circle button-margin-left" onclick="f_social_twt()"></button>
					<button class="button-s-i button-dm-2 button-radius-circle button-margin-left" onclick="f_social_inst()"></button>
				</div>		
					
			</div>
		@endfor
		
	</div>

</div>
@endsection



