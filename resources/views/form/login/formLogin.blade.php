@section('content-login')
<div class="content" id="content-login-user">

	<div class="form-content form-content-dm-login form-box-shadow">
		
		{!! Form::open(['route' => 'login.store', 'method' => 'POST','name' => 'formHTML','class' => 'formulario']); !!}

		<div class="form-header form-header-dm-1 form-bg-content-5 form-border-radius-top-left form-border-radius-top-right ">
			
			@foreach($data['dll']['nav'] as $dll)
	
				@if ($dll->srcnav_filename == 'openid-logo.png')

					<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="img-dm-6 img-margin-top-4 img-rotate-90deg">

				@endif
	
			@endforeach	

		</div>

		<div class="form-article form-bg-content-1" >
			
			<div class="input-group">				
								
				{!! Form::email('v_formUserNickEmail',null,['id' => 'v_formUserNickEmail','autocomplete'=>'off']); !!}	

				{!! Form::label('v_formUserNickEmail','Correo') !!}

			</div>

			<div class="input-group">											
							
						
							
						{!! Form::password('v_formUserPass',['id' => 'v_formUserPass']); !!}	

						{!! Form::label('v_formUserPass','Contraseña') !!}						
						
					</div>					

				</div>

			</div>

		</div>

		<div class="form-footer form-footer-dm-1 form-bg-content-1 form-bc-1 form-border-radius-bottom-left form-border-radius-bottom-right">
			
			<div class="form-rows form-rows-aling-center">				
					
				<div class="form-cell">	

					{!! Form::button('Ingresar',['class' => 'form-control input-border-color-1 button-radius-square-2 button-bg-color-1 button-dm-estandar-5','type' => 'submit']); !!}
								
				</div>

			</div>

		</div>
		
		{!! Form::close(); !!}
	</div>
	
</div>

@endsection

