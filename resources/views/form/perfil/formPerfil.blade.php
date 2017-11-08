@section('content-perfil-form')

<div class="content">
	<div class="ancla-link"></div>

		<div class="form-content">
			
			<div class="card-img">
					<img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">	
			</div>
			<div class="form-wrap" style="position: relative; top: -140px; box-sizing: content-box;">
				
				{!! Form::open(['url' => '/Admin/cambioPerfil/','method' => 'POST','name' => 'formHTML','class' => 'formulario']); !!}
				
				<div class="form-header">					
					
					<div>
					
					@foreach($data['dll']['nav'] as $dll)
		
						@if ($dll->srcnav_filename == 'about.png')

							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login" >

						@endif
		
					@endforeach					

					</div>
								
					<div style="position:relative;top: -75px;">

						{!! Form::label('','Información del perfil',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

					</div>

				</div>

				<div class="form-article">
					

				</div>



				{!! Form::close(); !!}

			</div>

		</div>

</div>

@endsection
