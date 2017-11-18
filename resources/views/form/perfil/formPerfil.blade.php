@section('content-perfil-form')

<div class="content">
	<div class="ancla-link"></div>

		<div class="form-content">
			
			<div class="card-img" style="position: relative; top:-45px;">
					<img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">	
			</div>
			<div class="form-wrap" style="position: relative; top: -150px; box-sizing: content-box;">
				
				{!! Form::open(['url' => '/Admin/cambioPerfil/','method' => 'POST','name' => 'formHTML','class' => 'formulario']); !!}
				
				<div class="form-header">					
					
					<div>
					
					@foreach($data['dll']['nav'] as $dll)
		
						@if ($dll->srcnav_filename == 'about.png')

							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login" >

						@endif
		
					@endforeach					

					</div>
								
					<div style="position:relative;top: -85px;">

						{!! Form::label('','Información del perfil',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

					</div>

				</div>

				<div class="form-article">
					
					<div class="col dm-col-1">
						
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_Name_User',$data['nombre'],['id' => 'v_frmCtrl_Name_User','placeholder' => 'algo']) !!}

							{!! Form::label('v_frmCtrl_Name_User','Nombre',['class' => 'label']) !!}

						</div>

					</div>

					<div class="col dm-col-1">
						
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_LastName_User',$data['apellido'],['id' => 'v_frmCtrl_LastName_User']) !!}

							{!! Form::label('v_frmCtrl_LastName_User','Apellido',['class' => 'label']) !!}

						</div>

					</div>

					<div class="col dm-col-1">
						
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_Address_User',$data['address'],['id' => 'v_frmCtrl_Address_User']) !!}

							{!! Form::label('v_frmCtrl_Address_User','Dirección',['class' => 'label']) !!}

						</div>

					</div>
					
					<div class="col dm-col-1">
						
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_Email_User',$data['email'],['id' => 'v_frmCtrl_Email_User']) !!}

							{!! Form::label('v_frmCtrl_Email_User','Correo',['class' => 'label']) !!}

						</div>

					</div>						
					

					<div class="col dm-col-1">
						
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_Phone_User',$data['telefono'],['id' => 'v_frmCtrl_Phone_User']) !!}

							{!! Form::label('v_frmCtrl_Phone_User','telefono',['class' => 'label']) !!}

						</div>

					</div>

					<div class="col dm-col-2"></div>

					<div class="col dm-col-3">
						
						<div class="input-group-box dm-col-2">
								
							@foreach ($data['dll']['text'] as $rows)

								@if (($rows->gtxt_paramt_wordkey == 'wordkey_gender_user') && ($rows->gtxt_id_gtype == 1))

									{!! Form::label(null,$rows->gtxt_text,['class' => 'label']); !!}		

								@endif

							@endforeach
										
								<div class="col dm-col-1">

									<div style="display: none;">
										
										@if($data['genero'] == 'wordkey_fm')
									
											{{$isCheckedFm = "checked disabled",
											  $isDisableFm = "disabled",
											  $isCheckedMc = "disabled",
											  $isDisableMc = "disabled"}}

										@elseif($data['genero'] == 'wordkey_mc')
											
											{{$isCheckedFm = "disabled",
											  $isDisableFm = "disabled",
											  $isCheckedMc = "checked disabled",
											  $isDisableMc = "disabled"}}

										@endif

									</div>

									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_fm') && ($rows->gtxt_id_gtype == 2))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label']); !!}		

										@endif

									@endforeach	

									<label class="switchBtn">

										   	<input type="radio" name="v_frmCtrl_switchBtn_gender" value="1" id="v_frmCtrl_switchBtn_fm" {{$isCheckedFm }}>

										   	<div class="slide round" id="v_frmCtrl_switchBtn_fm_title" {{$isDisableFm }}>F.</div>

									</label>

								</div>

								<div class="col dm-col-1">
									
									@foreach ($data['dll']['text'] as $rows)

										@if (($rows->gtxt_paramt_wordkey == 'wordkey_mc') && ($rows->gtxt_id_gtype == 2))

											{!! Form::label(null,$rows->gtxt_text,['class' => 'label']); !!}		

										@endif
										
									@endforeach	

									<label class="switchBtn">

										<input type="radio" name="v_frmCtrl_switchBtn_gender" value="2" id="v_frmCtrl_switchBtn_mc" {{$isCheckedMc }}>
	 
										<div class="slide round" id="v_frmCtrl_switchBtn_mc_title" {{$isDisableMc }}>M.</div>

									</label>

							</div>																	
	
						</div>

					</div>	


				</div>

				<div class="form-footer">

					<div class="form-ctrl-content">
					
						<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
						
							{!! Form::button('',['class' => 'btn btn-save','type' => 'submit']); !!}

						</div>

						<div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
						
							{!! Form::button('',['class' => 'btn btn-cv','type' => 'button']); !!}

						</div>

					</div>

				</div>

				{!! Form::close(); !!}

			</div>

		</div>

</div>

@endsection
