@section('content-perfil-form')

<div class="content">
	<div class="ancla-link"></div>

		<div class="form-content form-content-dm">
			{!! Form::open(['url' => '/Admin/cambioPerfil/','method' => 'POST','name' => 'formulario_registro','class' => 'formulario']); !!}

			<div class="form-main">

				<div class="form-header form-header-dm-1">				
					
					<div class="form-conteint-iconPerfil">
						
						@if ($data['icon'] == null)
							
							@foreach($data['dll']['icon'] as $icon)

								@if($icon->srcapp_filename == 'userDefault.png')

									<img src="{{asset($icon->srcapp_dir.$icon->srcapp_filename)}}" class="img-dm-6 img-margin-top-4  img-border-circle" style="margin-top:17px;" >

								@endif

							@endforeach

						@else	
						
								<img src="{{asset("img/iconUserSistem/".$data['id']."/".$data['icon'])}}" class="img-dm-6 img-margin-top-4  img-border-circle" alt="{{$data['nombre']}}">

						@endif

					</div>

				</div>
				
				<div class="form-article form-grid-1">

					<div class="form-details">
						
						<div class="input-group" style="width: 200px;">
							
							<input id="first_name" type="text" class="validate">

							@foreach($data['dll']['text'] as $rows)

								@if($rows->gtxt_paramt_wordkey == 'wordkey_name_user')
							
								<label id="_firts_name" for="first_name" class="label">{{ $rows->gtxt_text.':' }}</label>

								@endif

							@endforeach

						</div>

						<div class="input-group" style="width: 200px;">
							
							<input id="last_name" type="text" class="validate">

							@foreach($data['dll']['text'] as $rows)

								@if($rows->gtxt_paramt_wordkey == 'wordkey_lastname_user')
							
								<label id="_last_name" for="last_name" class="label">{{ $rows->gtxt_text.':' }}</label>

								@endif

							@endforeach

						</div>

						<div class="input-group">
							
							<input id="email" type="email" class="validate">

							@foreach($data['dll']['text'] as $rows)

								@if($rows->gtxt_paramt_wordkey == 'wordkey_email_user')
							
								<label id="_last_name" for="email" class="label">{{ $rows->gtxt_text.':' }}</label>

								@endif

							@endforeach

						</div>
						
						<div class="input-group">
							
							<input id="pass" type="password" class="validate">

							@foreach($data['dll']['text'] as $rows)

								@if($rows->gtxt_paramt_wordkey == 'wordkey_password_user')
							
								<label id="_last_name" for="pass" class="label">{{ $rows->gtxt_text.':' }}</label>

								@endif

							@endforeach

						</div>


					</div>

					<div class="form-toolt-form">
						
						<input type="submit" id="btn-submit" value="Enviar">

					</div>

				</div>
				
				<div class="form-footer form-footer-dm-1">
					
					
				</div>

			</div>

			{!! Form::close(); !!}
		</div>

</div>

@endsection
