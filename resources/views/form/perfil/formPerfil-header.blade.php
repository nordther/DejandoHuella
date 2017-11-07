@section('content-perfil')
	
<div class="content bg-content">

	<div class="form-content" id="menuPerfil" style="padding: 0px;">		
		
		<div class="form-wrap" style="z-index: 4250000; width:345px; position:fixed; top:-48px; left: 1245px; padding: 0px;">
			
			<div class="form-header form-header-dm-1" style="position: relative; height: 70px; display: flex; align-items:  center;">						
				
				<div class="icon-login" style="width: 55px; height: 55px; top: -15px; left: 5px;">
					
					@if ($data['icon'] == null)
							
						@foreach($data['dll']['icon'] as $icon)

							@if($icon->srcapp_filename == 'userDefault.png')

								<img src="{{asset($icon->srcapp_dir.$icon->srcapp_filename)}}" >

							@endif

						@endforeach

					@else	
						
						<img src="{{asset("img/iconUserSistem/".$data['id']."/".$data['icon'])}}" alt="{{$data['nombre']}}" >

					@endif				

				</div>

				@foreach ($data['dll']['text'] as $rows)

					@if (($rows->gtxt_paramt_wordkey == 'wordkey_welcome') && ($rows->gtxt_id_gtype == 1))

						{!! Form::label(null,$rows->gtxt_text.' '.$data['nombre'],['style' => 'left:15px;']); !!}

					@endif
											
				@endforeach	

			</div>		

			<div class="form-article" style="padding-top:0px; padding-bottom: 0px;">			
						
					<div class="form-rows" id="frmlCtrl_perfil">

						{!! Form::hidden('v_frmlUrl_perfil','/Admin/perfil/'.$data['id'],['id' =>'v_frmlUrl_perfil']) !!}				

						@foreach($data['dll']['icon'] as $rows)

						@if($data['genero'] == 'wordkey_fm')

							@if($rows->srcapp_filename == 'userFemale.png')
							
								<img src="{{ asset($rows->srcapp_dir.$rows->srcapp_filename) }}" alt="" width="35" height="35" style="border-radius: 50%;" id="frmlCtrl_perfil">

							@endif

						@endif			

						@if($data['genero'] == 'wordkey_mc')

							@if($rows->srcapp_filename == 'userMale.png')									

								<img src="{{ asset($rows->srcapp_dir.$rows->srcapp_filename) }}" alt="" width="35" height="35" style="border-radius: 50%;" id="frmlCtrl_perfil">

							@endif

						@endif		

						@endforeach

						{!! Form::label(null,'Información personal',['style' => 'left:10px; font-family:"Roboto",sanf-serif;','id' =>'frmlCtrl_perfil']) !!}

					</div>

					<div class="form-rows" id="frmlCtrl_files">

						{!! Form::hidden('v_frmlUrl_files','/Admin/MyFiles/'.$data['id'],['id' =>'v_frmlUrl_files']) !!}				

						@foreach($data['dll']['icon'] as $rows)

						@if($rows->srcapp_filename == 'folder.png')									

							
							<img src="{{ asset($rows->srcapp_dir.$rows->srcapp_filename) }}" alt="" width="35" height="35" style="border-radius: 50%;" id="frmlCtrl_files">

						@endif

						@endforeach

						{!! Form::label(null,'Mi imagenes',['style' => 'left:10px; font-family:"Roboto",sanf-serif;','id' =>'frmlCtrl_files']) !!}

					</div>

					<div class="form-rows" id="frmlCtrl_logout">

						{!! Form::hidden('v_frmlUrl_logout','/logout',['id' =>'v_frmlUrl_logout']) !!}				

						@foreach($data['dll']['icon'] as $rows)

						@if($rows->srcapp_filename == 'logout.png')									

							
							<img src="{{ asset($rows->srcapp_dir.$rows->srcapp_filename) }}" alt="" width="35" height="35" style="transform: rotate(90deg);border-radius: 50%;" id="frmlCtrl_logout">

						@endif

						@endforeach

						{!! Form::label(null,'Cerrar sesión',['style' => 'left:10px; font-family:"Roboto",sanf-serif;','id' =>'frmlCtrl_logout']) !!}

					</div>

			</div>	

		</div>

			

	</div>

</div>

@endsection