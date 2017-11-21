@section('content-perfil-view-form')

	<div class="content bg-content">

		<div class="ancla-link"></div>
		
		<div class="form-content"  style="padding: 0px;">		
		
			<div class="card-img" style="position: relative; top:-45px;">
					<img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">	
			</div>
			<div class="form-wrap" style="position: relative; top: -150px; box-sizing: content-box;">
				
				{!! Form::open(['name' => 'formHTML','class' => 'formulario']); !!}
				
				<div class="form-header">					
					
					<div>
					
					@foreach($data['dll']['nav'] as $dll)
		
						@if ($dll->srcnav_filename == 'about.png')

							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login" >

						@endif
		
					@endforeach					

					</div>
								
					<div style="position:relative;top: -85px;">

						{!! Form::label('','Información del Usuario',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

					</div>

				</div>

				<div class="form-article">
					
					<div class="col dm-col-1">

						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_number_document_User',$data['userViewInfo']['id'],['id' => 'v_frmCtrl_number_document_User','disabled']) !!}

							{!! Form::label('v_frmCtrl_number_document_User','Numbero de Documento',['class' => 'label']) !!}

						</div>					

					</div>	

					<div class="col dm-col-1">
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_roll_User',$data['userViewInfo']['roll'],['id' => 'v_frmCtrl_roll_User','disabled']) !!}

							{!! Form::label('v_frmCtrl_roll_User','Cargo del Usuario',['class' => 'label']) !!}

						</div>	
						

					</div>	

					<div class="col dm-col-1">
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_name_User',$data['userViewInfo']['nombre'] ,['id' => 'v_frmCtrl_name_User','disabled']) !!}

							{!! Form::label('v_frmCtrl_name_User','Nombre del Usuario',['class' => 'label']) !!}

						</div>	
						

					</div>	

					<div class="col dm-col-1">
						<div class="input-group">
						
							{!! Form::text('v_frmCtrl_last_name_User',$data['userViewInfo']['apellido'],['id' => 'v_frmCtrl_last_name_User','disabled']) !!}

							{!! Form::label('v_frmCtrl_last_name_User','Apellido del usuario',['class' => 'label']) !!}

						</div>				

					</div>

					<div class="col dm-col-1">
						<div class="input-group">
						
							{!! Form::date('v_frmCtrl_Birthdate_User',$data['userViewInfo']['fe_naci'],['id' => 'v_frmCtrl_Birthdate_User','disabled']) !!}

							{!! Form::label('v_frmCtrl_Birthdate_User','Fecha de Nacimiento',['class' => 'label']) !!}

						</div>	
					
					</div>

					<div class="col dm-col-3">
						
						<div class="input-group-box dm-col-2">
								
							@foreach ($data['dll']['text'] as $rows)

								@if (($rows->gtxt_paramt_wordkey == 'wordkey_gender_user') && ($rows->gtxt_id_gtype == 1))

									{!! Form::label(null,$rows->gtxt_text,['class' => 'label']); !!}		

								@endif

							@endforeach
										
								<div class="col dm-col-1">

									<div style="display: none;">
										
										@if($data['userViewInfo']['genero'] == 'wordkey_fm')
									
											{{$isCheckedFm = "checked disabled",
											  $isDisableFm = "disabled",
											  $isCheckedMc = "disabled",
											  $isDisableMc = "disabled"}}

										@elseif($data['userViewInfo']['genero'] == 'wordkey_mc')
											
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
					
						
						<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top-form">
						
							{!! Form::button('',['class' => 'btn btn-form-edit','type' => 'button']); !!}

						</div>

						<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top-form">
						
							{!! Form::button('',['class' => 'btn btn-form-back','type' => 'button','id' => 'v_frmCtrl_btn_back_search']); !!}

						</div>

					</div>

				</div>	

				{!! Form::close() !!}
			
		</div>	

	</div>

</div>	

@endsection