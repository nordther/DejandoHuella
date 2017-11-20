@section('content-createuser')

	<div class="content bg-content">				
		<div class="ancla-link">
			
		</div>		
		<div class="form-content">
			<div class="card-img" style="position: relative; top:-45px;">
					<img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">	
			</div>
			<div class="form-wrap" style="position: relative; top: -150px; box-sizing: content-box;">
				{!! Form::open(['url'=>'/Admin/registrar/usuario','method'=>'POST','name' => 'formHTML']) !!}
				<div class="form-header">
					
					<div>
									
						@foreach($data['dll']['nav'] as $dll)
						
							@if ($dll->srcnav_filename == 'about.png')

								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

							@endif
						
						@endforeach					

					</div>
									
					<div style="position:relative;top: -85px;">

						{!! Form::label('','Registrar Usuario',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

					</div>

				</div>

				<div class="form-article">

					<div class="col dm-col-1">
								
						<div class="input-group">

							{!! Form::select('v_frmCtrl_TypeUser',$data['dll']['comboTypeUsers'],null,['style'=>'display:none;']) !!}
									
							<div class="selectWrap">
								<div class="selectTitle selectTitleDesactivate" id="v_frmCtrl_TypeUser_Title">
									{!! Form::label(null,"Tipo de Usuario") !!}
							    </div>
							    <div class="selectSpanText desactivateSelect" id="v_frmCtrl_TypeUser"></div>
							    <div class="selectContent" id="v_frmCtrl_TypeUser_content"></div>
							</div>


					    </div>

					</div>

					<div class="col dm-col-1">
								
						<div class="input-group">

							{!! Form::select('v_frmCtrl_Document',$data['dll']['comboTypeDocument'],null,['style'=>'display:none;']) !!}
									
							<div class="selectWrap">
								<div class="selectTitle selectTitleDesactivate" id="v_frmCtrl_Document_Title">
									{!! Form::label(null,"Tipo de Documento") !!}
							    </div>
							    <div class="selectSpanText desactivateSelect" id="v_frmCtrl_Document"></div>
							    <div class="selectContent" id="v_frmCtrl_Document_content"></div>
							</div>


					    </div>

					</div>	

					<div class="col dm-col-2" id="frm_system_user_1">
								
						<div class="input-group">

							{!! Form::select('v_frmCtrl_Roll',$data['dll']['comboRoll'],null,['style'=>'display:none;']) !!}
									
							<div class="selectWrap">
								<div class="selectTitle selectTitleDesactivate" id="v_frmCtrl_Roll_Title">
									{!! Form::label(null,"Cargo del usuario") !!}
							    </div>
							    <div class="selectSpanText desactivateSelect" id="v_frmCtrl_Roll"></div>
							    <div class="selectContent" id="v_frmCtrl_Roll_content"></div>
							</div>


					    </div>

					</div>

					<div class="col dm-col-2">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_User_Document',null,['id' => 'v_formCtrl_User_Document','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_User_Document','Numero de Documento',['class' => 'label','id' => 'v_formCtrl_User_Document_title']) !!}

						</div>

					</div>
					
					<div class="col dm-col-1">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_User_name',null,['id' => 'v_formCtrl_User_name','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_User_name','Nombre',['class' => 'label','id' => 'v_formCtrl_User_name_title']) !!}

						</div>

					</div>

					<div class="col dm-col-1">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_User_lastname',null,['id' => 'v_formCtrl_User_lastname','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_User_lastname','Apellido',['class' => 'label','id' => 'v_formCtrl_User_lastname_title']) !!}

						</div>

					</div>

					<div class="col dm-col-2">
						
					</div>	
					
					<div class="col dm-col-3">
						
						<div class="input-group-box dm-col-2">
									
							<label class="label">Genero</label>
										
								<div class="col dm-col-1">

									<label class="label">Femenino</label>

									<label class="switchBtn">

										   	<input type="radio" name="v_frmCtrl_switchBtn_gender" value="1" id="v_frmCtrl_switchBtn_fm">

										   	<div class="slide round" id="v_frmCtrl_switchBtn_fm_title">F.</div>

									</label>

								</div>

								<div class="col dm-col-1">

									<label class="label">Madculino</label>

									<label class="switchBtn">										

										<input type="radio" name="v_frmCtrl_switchBtn_gender" value="2" id="v_frmCtrl_switchBtn_mc">
	 
										<div class="slide round" id="v_frmCtrl_switchBtn_mc_title">M.</div>

									</label>

							</div>																	
	
						</div>

					</div>

					

					<div class="col dm-col-2">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_User_address',null,['id' => 'v_formCtrl_User_address','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_User_address','Dirección de Residencia',['class' => 'label','id' =>'v_formCtrl_User_address_title']) !!}

						</div>

					</div>	

					<div class="col dm-col-1" id="frm_system_user_3">
						
						<div class="input-group">				
									
							{!! Form::email('v_formCtrl_User_email',null,['id' => 'v_formCtrl_User_email','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_User_email','Correo Electronico',['class' => 'label','id'=>'v_formCtrl_User_email_title']) !!}

						</div>

					</div>

					<div class="col dm-col-1" id="frm_system_user_4">
						
						<div class="input-group">				
									
							{!! Form::password('v_formCtrl_User_password',['id' => 'v_formCtrl_User_password','autocomplete'=>'cc-exp']); !!}	

							{!! Form::label('v_formCtrl_User_password','Contraseña',['class' => 'label']) !!}

						</div>

					</div>	

					<div class="col dm-col-1" id="frm_system_user_5">
						
						<div class="input-group">				
									
							{!! Form::password('v_formCtrl_User_passwordConfirm',['id' => 'v_formCtrl_User_passwordConfirm','autocomplete'=>'cc-exp']); !!}	

							{!! Form::label('v_formCtrl_User_passwordConfirm','Confirmar contraseña',['class' => 'label','id'=>'v_formCtrl_User_passwordConfirm_title']) !!}

						</div>

					</div>
					
					<div class="col dm-col-1" id="frm_beneficier_1">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_UserBeneficier_nit_institute',null,['id' => 'v_formCtrl_UserBeneficier_nit_institute','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_UserBeneficier_nit_institute','Nit de la inst. Edu.',['class' => 'label','id' => 'v_formCtrl_UserBeneficier_nit_institute_title']) !!}

						</div>

					</div>

					<div class="col dm-col-1" id="frm_beneficier_2">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_UserBeneficier_name_institute',null,['id' => 'v_formCtrl_UserBeneficier_name_institute','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_UserBeneficier_name_institute','Nombre de la inst. Edu.',['class' => 'label','id' => 'v_formCtrl_UserBeneficier_name_institute_title']) !!}

						</div>

					</div>

					<div class="col dm-col-2" id="frm_beneficier_3">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_UserBeneficier_address_institute',null,['id' => 'v_formCtrl_UserBeneficier_address_institute','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_UserBeneficier_address_institute','Dirección de la inst. Edu.',['class' => 'label','id' => 'v_formCtrl_UserBeneficier_address_institute_title']) !!}

						</div>

					</div>

					<div class="col dm-col-1" id="frm_beneficier_4">
						
						<div class="input-group">				
									
							{!! Form::text('v_formCtrl_UserBeneficier_phone_institute',null,['id' => 'v_formCtrl_UserBeneficier_phone_institute','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_UserBeneficier_phone_institute','Telefono de la inst. Edu.',['class' => 'label','id' => 'v_formCtrl_UserBeneficier_phone_institute_title']) !!}

						</div>

					</div>

					<div class="col dm-col-1" id="frm_beneficier_5">
						
						<div class="input-group">				
									
							{!! Form::email('v_formCtrl_UserBeneficier_email_institute',null,['id' => 'v_formCtrl_UserBeneficier_email_institute','autocomplete'=>'off']); !!}	

							{!! Form::label('v_formCtrl_UserBeneficier_email_institute','Correo electronico de la inst. Edu.',['class' => 'label','id' => 'v_formCtrl_UserBeneficier_email_institute_title']) !!}

						</div>

					</div>

				</div>

				<div class="form-footer">

					<div class="form-ctrl-content">
						
						<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
					
							{!! Form::button('',['class' => 'btn btn-save','type' => 'submit']); !!}

						</div>

						<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
						
							{!! Form::button('',['class' => 'btn btn-clean','type' => 'reset']); !!}

						</div>

					</div>
					
					

				</div>
				
				{!! Form::close() !!}

			</div>

		</div>

		<div id="contentJsonData"></div>		

	</div>


@endsection