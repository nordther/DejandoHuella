@section('content-contactenos')

<div class="ancla-link" id="contactenos"></div>

	<div class="content bg-content">	

		<div class="form-content">

			<div class="form-wrap">
				{!! Form::open(['url' => '..' , 'method' => 'post','name' => 'formHTML']); !!}

					<div class="form-header ">	
							
							<div>
								
								@foreach($data['dll']['nav'] as $dll)
					
									@if ($dll->srcnav_filename == 'about.png')

										<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

									@endif
					
								@endforeach	
					
					

						</div>
								
						<div style="position:relative;top: -85px;">

							{!! Form::label('','Contactenos',['class' => 'label-font-size-2','style' => 'color:#0FDAD3;']) !!}

						</div>

					</div>

					<div class="form-article">

						
							
							<div class="col dm-col-1">
								<div class="input-group">				
										
								{!! Form::text('v_formUserContactName',null,['id' => 'v_formUserContactName','autocomplete'=>'off']); !!}	

								{!! Form::label('v_formUserContactName','Ingrese su nombre',['class' => 'label']) !!}

								</div>
						   </div>
	                         <div class="col dm-col-1">          
								<div class="input-group">					
										
								{!! Form::email('v_formUserContactEmail',null,['id' => 'v_formUserContactEmail']); !!}	

								{!! Form::label('v_formUserContactEmail','Ingrese su e-mail',['class' => 'label']) !!}						
										
								</div>
						   </div>
	                         <div class="col dm-col-2">    
								<div class="input-group">

								{!! Form::textarea('v_formUserContactDesc',null,['id' =>'v_formUserContactDesc','cols'=>"0",'rows'=>'0']) !!}

								{!! Form::label('v_formUserContactDesc','Descripción',['class' => 'label']) !!}

								</div>
						   </div>

						
						

					</div>	
						

					<div class="form-footer">	

						<div class="form-ctrl-content">	
								
							<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
					
									{!! Form::button('',['class' => 'btn btn-send','type' => 'submit']); !!}

							</div>

							<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
						
									{!! Form::button('',['class' => 'btn btn-clean','type' => 'reset']); !!}

							</div>	

						</div>
						
						

					</div>

				{!! Form::close(); !!}

			</div>	

		</div>
	
	</div>
		
@endsection
