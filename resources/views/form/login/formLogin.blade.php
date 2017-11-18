@section('content-login')
<div class="content" id="content-login-user">

	<div class="content-blurt" id="content-login-blurt">
		
		<div class="content-ctrl">		
			
			<div class="input-group-btn input-circle-btn btn-dm-3">
				
				{!! Form::button('',['id'=>'close','class' => 'btn btn-close']) !!}

			</div>

		</div>

	    <div class="form-content">

	    	<div class="form-wrap fc-dm">    	
		
			{!! Form::open(['route' => 'login.store', 'method' => 'POST','name' => 'formHTML','class' => 'formulario']); !!}

			<div class="form-header">
				
				<div>
					
					@foreach($data['dll']['nav'] as $dll)
		
						@if ($dll->srcnav_filename == 'about.png')

							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

						@endif
		
					@endforeach	
					
					

				</div>
								
				<div style="position:relative;top: -75px;">

					{!! Form::label('','Ingreso al sistema',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

				</div>					

			</div>

			<div class="form-article">			
					
					<div class="col dm-col-2">
					
					<div class="input-group">				
									
						{!! Form::email('v_formUserNickEmail',null,['id' => 'v_formUserNickEmail','autocomplete'=>'off']); !!}	

						{!! Form::label('v_formUserNickEmail','Correo',['class' => 'label']) !!}

					</div>

					</div>
					
					<div class="col dm-col-2">

						<div class="input-group">					
									
							{!! Form::password('v_formUserPass',['id' => 'v_formUserPass']); !!}	

							{!! Form::label('v_formUserPass','Contraseña',['class' => 'label']) !!}						
									
						</div>	

					</div>
					
					<div class="col dm-col-2">
						
						<div class="form-ctrl-link">
						
							{!! Html::link('#','¿Olvido su contraseña?') !!}

						</div>			
						
					</div>

				
			</div>			

			<div class="form-footer">			
				
				<div class="form-ctrl-content">	

					<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top-form">
						
						{!! Form::button('',['class' => 'btn btn-login ','type' => 'submit']); !!}

					</div>			

				</div>


			</div>
			
			{!! Form::close(); !!}

			</div>

		</div>

		

	</div>

	
	
</div>

@endsection

