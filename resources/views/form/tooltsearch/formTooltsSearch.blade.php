@section('content-tools-search')

		@if ($data['type-modul'] == 'buscar-usuario')

		<div class="form-content-toolts">
			
			<div class="form-content-filters scroll">
				
				<div class="form-content">
					
					<div class="form-wrap">
						
						<div class="form-header ">	
								
							<div>
									
								@foreach($data['dll']['nav'] as $dll)
						
									@if ($dll->srcnav_filename == 'about.png')

										<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

									@endif
						
								@endforeach					

							</div>
									
							<div style="position:relative;top: -85px;">

								{!! Form::label('','Filtro de busqueda',['class' => 'label-font-size-5','style' => 'color:#0FDAD3;']) !!}

							</div>

						</div>

						<div class="form-article">
							
							<div class="col dm-col-2">
								
								<div class="input-group">
									{!! Form::select('v_frmCtrl_Roll',$data['dll']['comboRoll'],null,['style'=>'display:none;']) !!}
									
									<div class="selectWrap">
										<div class="selectTitle selectTitleDesactivate" id="v_frmCtrl_Roll_Title">
											{!! Form::label(null,"Tipo de Usuario") !!}
										</div>
										<div class="selectSpanText desactivateSelect" id="v_frmCtrl_Roll"></div>
										<div class="selectContent" id="v_frmCtrl_Roll_content"></div>
									</div>


								</div>

							</div>							

						</div>

						<div class="form-footer">
							
						</div>


					</div>

				</div>

			</div>

			<div class="form-content-ctrls">
				
				<div class="input-group-btn input-circle-btn btn-dm-1">
					
					{!! Form::button('',['id' => 'v_frmCrls_btn_showFilters','class'=>'btn btn-arrow-right','type' =>'button']) !!}

				</div>

			</div>

		</div>
			
			


		@elseif($data['type-modul'] == 'buscar-agenda')
			
			
	
		@endif

@endsection