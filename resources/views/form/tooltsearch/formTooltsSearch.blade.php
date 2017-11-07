@section('content-tools-search')

		@if ($data['type-modul'] == 'buscar-usuario')
			
			<div class="form-content-toolt-search" id="TooltsSearch">
				
				<div class="form-toolt-search-header">
					
					<h3>
						
						Herramientas

					</h3>

				</div>

				<div class="form-toolt-search-article" >
					
					<div class="form-toolts-rows">
					
						{!! Form::label(null,'Tipo de Usuario'); !!}	
					
					</div>

					<div class="form-toolts-rows">
						
						{!! Form::radio('v_frmUserToolts_type_user',1,true,['id' => 'v_frmUserToolts_type_user_assistan']); !!}

						{!! Form::label(null,'Asistentes del Sistema',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

					</div>

					<div class="form-toolts-rows">
						
						{!! Form::radio('v_frmUserToolts_type_user',2,false,['id' => 'v_frmUserToolts_type_user_normal']); !!}

						{!! Form::label(null,'Usuario Normal',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

					</div>
					
					<div class="form-toolts-rows" id="formAssistanSistem">
						
						<div class="form-toolts-rows">
							
							@foreach ($data['dll']['text'] as $rows)

								@if (($rows->gtxt_paramt_wordkey == 'wordkey_roll_user') && ($rows->gtxt_id_gtype == 1))

									{!! Form::label(null,$rows->gtxt_text,['class' => 'label-content-form']); !!}

								@endif
											
							@endforeach

						</div>

						<div class="form-toolts-rows" style="width: 250px;">
							
							{!! Form::select('v_frmCrtUs_roll',$data['dll']['comboRoll'],null,['class' => 'input-dm-2','id' =>'v_frmCrtUs_roll']); !!}

						</div>					

					</div>

					<div class="form-toolts-rows" id="formUsersNormals">
						
						<div class="form-toolts-rows">
							
							{!! Form::label(null,'Tipo usuario normal') !!}

						</div>

						<div class="form-toolts-rows">
					
							{!! Form::select('v_frmCrtUs_typeusers_searchToolts',$data['dll']['comboTypeUsersTooltSearch'],null,['class' => 'input-dm-2','id' => 'v_frmCrtUs_typeusers']); !!}

						</div>

					</div>

					<div class="form-toolts-rows">
					
					<div class="form-toolts-rows">
						
						{!! Form::label(null,'Estado de los usuarios') !!}

					</div>

					<div class="form-toolts-rows">
						
						{!! Form::radio('v_frmUserToolts_status_users',1,true,['id' => 'v_frmUserToolts_status_active']); !!}

						{!! Form::label(null,'Activos',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

					</div>

					<div class="form-toolts-rows">
						
						{!! Form::radio('v_frmUserToolts_status_users',0,false,['id' => 'v_frmUserToolts_status_inhable']); !!}

						{!! Form::label(null,'Deshabilitados',['class' => 'label-font-size-8 label-font-family-neutro label-content-form']); !!}

					</div>

				</div>	

				</div>	

					


			</div>

			<div class="form-toolt-hide-show align-items-center" id="TooltsSearchShowHide">
				
				<div class="input-group-btn button-dm-1">
					
					{!! Form::Button(null,['class' => 'button-form-tool-arrowShowToolt','id' => 'btnShowToolts', 'title' => 'Herramientas de busqueda','type' => "button"]) !!}
				</div>

				

			</div>


		@elseif($data['type-modul'] == 'buscar-agenda')
			
			<div class="form-content-toolt-search" id="TooltsSearch">
				
				<div class="form-toolt-search-header">
					
					<h3>
						
						Herramientas

					</h3>

				</div>

			</div>

			<div class="form-toolt-hide-show" id="TooltsSearchShowHide">
				
				<div class="form-toolt-action">
					
					{!! Form::Button(null,['class' => 'button-form-tool-arrowShowToolt button-dm-1','id' => 'btnShowToolts', 'title' => 'Herramientas de busqueda']) !!}

				</div>

			</div>
	
		@endif

@endsection