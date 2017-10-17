@section('content-perfil-form')

<div class="content">
	<div class="ancla-link"></div>

		<div class="form-content form-content-dm">
			{!! Form::open(['url' => '/Admin/cambioPerfil/','method' => 'POST']); !!}

			<div class="form-main">

				<div class="form-header form-header-dm-1">				
					

				</div>
				
				<div class="form-article form-grid-1">

					<div class="form-details">
						
						<div class="input-group">
							
							<input placeholder="Placeholder" id="first_name" type="text" class="validate">

          					<label for="first_name" class="label-font-family-neutro">First Name</label>

						</div>

					</div>

					<div class="form-toolt-form">
						
					</div>

				</div>
				
				<div class="form-footer form-footer-dm-1">
					
					
				</div>

			</div>

			{!! Form::close(); !!}
		</div>

</div>

@endsection
