@section('content-searchuser')
	
	<div class="content bg-content">

		<div class="form-content-search" id="form-content-search-user">
			
			<div class="form-header-img" style="background-image: url({{ asset('img/imgTopics/searchBackground/header.jpg') }}) ; height: 180px; width: 100%; background-size: 100%;">
				
			</div>

			<div class="form-header-search form-search-col-dm-h-2">

				<div class="form-search-col form-search-col-dm-w-1 form-search-col-dm-h-2 ">

					{!! Form::label(null, 'Foto' ); !!}

				</div>

				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Nombres' ); !!}

				</div>


				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Telefono' ); !!}

				</div>				

				<div class="form-search-col form-search-col-dm-w-3 form-search-col-dm-h-2 form-search-col-border">

					{!! Form::label(null, 'Correo Electronico' ); !!}

				</div>

				<div class="form-search-col form-search-col-dm-w-2 form-search-col-dm-h-2 ">
					
					{!! Form::label(null, 'Acciones' ); !!}

				</div>

			</div>	

			<div class="form-article-search scroll" id="formSearchIncludeInformation">				

			</div>

			<div class="form-footer-search">				
					
					<div id="form-result-log"></div>

					

			</div>			
		
		</div>
		
		@yield('content-tools-search')		
			
			<div class="content-blurt" id="form-mssg-alert-action-error">					

				<div class="form-content" >

			    	<div class="form-wrap fc-dm">    	
				
						{!! Form::open(['name' => 'formHTML','class' => 'formulario']); !!}

						<div class="form-header">
							
							<div>
								
								<img src="{{ asset('img/icon/form/AlertError.png') }}" alt="Ingreso al sistema" class="icon-login">

							</div>
											
							<div style="position:relative;top: -75px;">

								{!! Form::label('','Accion incorrecta',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

							</div>					

						</div>

						<div class="form-article">

							<div class="col dm-col-2">
								
								<p>
									
									EL usuario no se puede deshabilitar por que esta o ha ingresado a la plataforma.

								</p>

							</div>	

						</div>			

						<div class="form-footer">			
							
							<div class="form-ctrl-content">	

								<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
									
									{!! Form::button('',['class' => 'btn btn-close ','type' => 'button','id' => 'v_frmCtrl_btn_close_mssg_alert']); !!}

								</div>			

							</div>	

						</div>

					</div>
			
				</div>

			</div>

			<div class="content-blurt" id="form-mssg-alert-action-validity-disabled">
			
				<div class="form-content" >

			    	<div class="form-wrap fc-dm">    	
				
						{!! Form::open(['name' => 'formHTML','class' => 'formulario']); !!}

						<div class="form-header">
							
							<div>
								
								<img src="{{ asset('img/icon/form/AlertError.png') }}" alt="Ingreso al sistema" class="icon-login">

							</div>
											
							<div style="position:relative;top: -75px;">

								{!! Form::label('','Confirmacion para la accion',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

							</div>					

						</div>

						<div class="form-article">

							<div class="col dm-col-2">
								
								<p>
									
									Seguro que desea deshabilitar este usuario.

								</p>

							</div>	

						</div>			

						<div class="form-footer">			
							
							<div class="form-ctrl-content">	

								<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
									
									{!! Form::button('',['class' => 'btn btn-confirm ','type' => 'button','id' => 'v_frmCtrl_btn_confirm_disabled_mssg_alert']); !!}

								</div>	


								<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
									
									{!! Form::button('',['class' => 'btn btn-close ','type' => 'button','id' => 'v_frmCtrl_btn_close_confirm_disabled_mssg_alert','data-unic' => '']); !!}

								</div>	

								
							</div>	

						</div>

					</div>		
	
				</div>

			</div>	

			<div class="content-blurt" id="form-mssg-alert-action-validity-enable">
			
				<div class="form-content" >

			    	<div class="form-wrap fc-dm">    	
				
						{!! Form::open(['name' => 'formHTML','class' => 'formulario']); !!}

						<div class="form-header">
							
							<div>
								
								<img src="{{ asset('img/icon/form/AlertError.png') }}" alt="Ingreso al sistema" class="icon-login">

							</div>
											
							<div style="position:relative;top: -75px;">

								{!! Form::label('','Confirmacion para la accion',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

							</div>					

						</div>

						<div class="form-article">

							<div class="col dm-col-2">
								
								<p>
									
									Seguro que desea habilitar este usuario.

								</p>

							</div>	

						</div>			

						<div class="form-footer">			
							
							<div class="form-ctrl-content">	

								<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
									
									{!! Form::button('',['class' => 'btn btn-confirm ','type' => 'button','id' => 'v_frmCtrl_btn_confirm_enable_mssg_alert']); !!}

								</div>	


								<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
									
									{!! Form::button('',['class' => 'btn btn-close ','type' => 'button','id' => 'v_frmCtrl_btn_close_confirm_enable_mssg_alert','data-unic' => '']); !!}

								</div>	

								
							</div>	

						</div>

					</div>		
	
				</div>

			</div>	

		

		
	

@endsection