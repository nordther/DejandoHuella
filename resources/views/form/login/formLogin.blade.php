@section('content-login')
<div class="content" id="content-login-user">

	<div class="content-blurt" id="content-login-blurt">
		
		<div class="content-ctrl">		
			
			<div class="input-group-btn input-circle-btn button-dm-3">
				
				{!! Form::button('',['id'=>'close','class' => 'button-form-closeLogin','style'=>'transform:rotate(270deg); width:100%; height:100%; border-radius:50%;']) !!}

			</div>

		</div>

	    <div class="form-content">

	    	<div class="form-wrap fc-dm">    	
		
			{!! Form::open(['route' => 'login.store', 'method' => 'POST','name' => 'formHTML','class' => 'formulario']); !!}

			<div class="form-header form-header-dm-1">
				
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

			<div class="form-article" id="form-article">
				
				<div class="input-group inp-dm-1">				
									
					{!! Form::email('v_formUserNickEmail',null,['id' => 'v_formUserNickEmail','autocomplete'=>'off']); !!}	

					{!! Form::label('v_formUserNickEmail','Correo',['class' => 'label']) !!}

				</div>

				<div class="input-group inp-dm-1">					
							
					{!! Form::password('v_formUserPass',['id' => 'v_formUserPass']); !!}	

					{!! Form::label('v_formUserPass','Contraseña',['class' => 'label']) !!}						
							
				</div>					

			</div>			

			<div class="form-footer form-footer-dm-1">			
				
				<div class="form-ctrl-resetPass">
					
					{!! Html::link('#','¿Olvido su contraseña?') !!}

				</div>

				<div class="input-group-btn input-circle-btn button-dm-5 input-group-btn-m-t">
					
					{!! Form::button('',['class' => 'button-form-login ','style'=>'transform:rotate(270deg); width:100%; height:100%; border-radius:50%;','type' => 'submit']); !!}

				</div>			

			</div>
			
			{!! Form::close(); !!}

			</div>

		</div>

		

	</div>

	
	
</div>

@endsection

