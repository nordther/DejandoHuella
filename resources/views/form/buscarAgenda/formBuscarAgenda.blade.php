@section('content-searchagenda')

<div class="content bg-content">
	
	<div class="form-content-search" >
		
		<div class="form-content-collection">
			
			<div class="form-content-collection-header">

				<img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" class="responsive-image">				

				<div class="form-content-collection-logo">
					
					@foreach($data['dll']['nav'] as $dll)
						
						@if ($dll->srcnav_filename == 'about.png')

							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

						@endif
							
					@endforeach	

					<span class="form-content-collection-title">
					
						Agenda

					</span>	

				</div>

			</div>

			<div class="form-content-collection-article">
				
				<div class="form-content-collection-article-title-header">
					<div>
						icono
					</div>

					<div>
						
						codigo del evento

					</div>
					<div>
						
						nombre del evento

					</div>
					<div>
						
						Fecha de inicio y cierre

					</div>					
					<div>
						
						Hora de inicio y cierre

					</div>
					<div>
						
						Acciones

					</div>

				</div>
				<div class="form-content-collection-scroll">
					@for ($i = 0; $i <= 400; $i++)
					<div class="form-content-collection-article-item">				
						<div>
							<div style="width: 50px; height:50px; margin: auto;">
								<img src="{{ asset('img/logo.png') }}" class="responsive-image">
							</div>						
						</div>
						<div>
							1
						</div>
						<div>
							1
						</div>
						<div>
							1
						</div>
						<div>
							1
						</div>
						<div>
							1
						</div>
					</div>
				@endfor
				</div>
				

			</div>

		</div>
		
	</div>


	@yield('content-tools-search')

</div>	


@endsection