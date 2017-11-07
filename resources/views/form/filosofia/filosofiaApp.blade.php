@section('content-filosofia')
	
	<div class="ancla-link" id="quienessomos"></div>

	<div class="content bg-content">		

		<div class="card card-bg-white">

			<div class="header-topic-dm-2 label-start" >
				<h2>
					Quienes Somos
				</h2>
				<div class="input-group-btn input-circle-btn button-dm-5" style="top:25px; z-index: 1000;">
					{!! Form::button('',['class' => 'button-form-topics-index','style'=>'transform:rotate(180deg); width:100%; height:100%; border-radius:50%;' ,'id' => 'start-about']) !!}			
				</div>
			</div>
			
		</div>

		<div class="content-grid grid-3" id="content-about"  style="margin-top: 70px;">
				<div class="grid-4">
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/misionIMG.jpg') }}">
						<span class="card-title">Misión</span>		
					</div>						
					<div class="card-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
					</div>						
					</div>
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/visionIMG.png') }}">
						<span class="card-title">Visión</span>		
					</div>						
					<div class="card-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
					</div>						
					</div>
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/objetivosIMG.jpg') }}">
						<span class="card-title">Objetivos</span>		
					</div>						
					<div class="card-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
					</div>						
					</div>
				</div>
				<div class="card">
					<div class="card-img-full">
						<img src="{{ asset('img/imgTopics/about/fondo.jpg') }}">						
					</div>					
				</div>
		</div>

		

	</div>

@endsection