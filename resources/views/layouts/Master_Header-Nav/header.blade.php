@section('content-header')
	@parent
	
	 <!DOCTYPE html >
	 <html id="lang" lang="">	 
	    <head>

	        <title>Dejando Huella Kid's 
		        @if(($data['authconfirm'] == true)||($data["multimediaAuth"] == true)) 
		        - 
		        {{$data["title-modul"]}} 
		        @endif
	        </title>

	        <meta content="email=no" name="format-detection">

	        @yield('content-library')

	        <link rel="shortcut icon" href="{{ asset('img/logo.png')}}" />

	        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	        
	        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    </head>
	    <body data_info_id="{{ $data['idUserDataConfig'] }}">	
		
		@if (($data['authconfirm'] == false)&&($data["multimediaAuth"] == false))
			
			<div class="
			container 
			header
			header-dm-4 
			header-fixed 
			header-box-shadow 
			bg-content-8-opacity" id="header">

				<div class="content-logo">
					<div class="input-group-btn btn-dm-1">
						{!! Form::button('',['class' => 'btn btn-menu','id' => 'btn-toolts-nav','type' => 'button','style' => 'top: 0px;']); !!}
					</div>
					

					<a href="/" style="cursor: pointer;">

						<img src="{{asset('img/logo.png')}}" class="img-dm-8" id="logo">

						<label class="label-color-header-1 label-margin-left-2 label-margin-top-1 label-font-size-4 label-hide-movil" style="cursor: pointer;">Dejando Huellas kid's</label>

					</a>

				</div>						

			</div>

			@yield('content-login')
			
		@elseif (($data['authconfirm'] == true)&&($data["multimediaAuth"] == false))
			
			<div class="
			container 
			header
			header-dm-4 
			header-fixed			
			header-box-shadow 
			bg-content-neutro-opacity">

				<div class="content-logo">

					<div class="input-group-btn btn-dm-1">
						{!! Form::button('',['class' => 'btn btn-menu','id' => 'btn-toolts-nav','type' => 'button','style' => 'top: 0px;']); !!}
					</div>
					

					<a href="/" style="cursor: pointer;">

						<img src="{{asset('img/logo.png')}}" class="img-dm-8" id="logo">

						<label class="label-color-header-1 label-margin-left-2 label-margin-top-1 label-font-size-4 label-hide-movil" style="cursor: pointer;">Dejando Huellas kid's</label>

					</a>
					
				</div>

				@if($data['type-modul'] !=null)

					@if($data['type-modul'] == 'buscar-usuario')

					{!! Form::open(['url' => 'Admin/buscar-usuario/get','method' => 'GET' , 'name' =>'formHTML']); !!}				
					
						<div class="form-wrap" style="margin-top: -55px; background-color: rgba(60,60,60,1);height: 72px; width: 300px;">
						
						{!! Form::hidden('_token',csrf_token(),['type' => 'hidden','id' => '_token']) !!}
						
							<div class="form-article" style="background-color: rgba(60,60,60,1); padding-bottom: 0px; padding-top: 0px; height: 100px;">
								
							<div class="dm-col-2">
								
								<div class="input-group">

									{!! Form::text('v_frmCtrl_searchUser',null,['id' =>'v_frmCtrl_searchUser','autocomplete'=>'off','style'=>'color:#FFFFFF;']) !!}

									{!! Form::label('v_frmCtrl_searchUser','Buscar',['class' => 'label']) !!}

								</div>

							</div>								

							</div>

							<div class="form-header" style="height: 1px; background-color: rgba(60,60,60,1); border-bottom: 1px solid rgba(75,75,75,0.75);  padding-bottom: 0px; padding-top: 0px;">
				
								<div>
									
									@foreach($data['dll']['nav'] as $dll)
						
										@if ($dll->srcnav_filename == 'about.png')

											<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login" style="top: -30px; background-color: rgba(60,60,60,1); width: 50px; height: 50px;">

										@endif
						
									@endforeach	

								</div>											

						</div>
						



							

						</div>

							

						{!! Form::close(); !!}

					@endif					

				@endif	

				<div class="content-perfil-header">
					
					@if ($data['icon'] == null)
							
						@foreach($data['dll']['icon'] as $icon)

							@if($icon->srcapp_filename == 'userDefault.png')

								<img src="{{asset($icon->srcapp_dir.$icon->srcapp_filename)}}"   id="btn-showPerfil">

							@endif

						@endforeach

					@else	
						
						<img src="{{asset("img/iconUserSistem/".$data['id']."/".$data['icon'])}}" alt="{{$data['nombre']}}" id="btn-showPerfil">

					@endif	

				</div>					

			</div>

		@elseif(($data['authconfirm'] == false)&&($data["multimediaAuth"] == true))
			
			<div class="
			container 
			header
			header-dm-4 
			header-fixed 
			header-box-shadow 
			bg-content-neutro-opacity" id="header">

				<div class="content-logo-position content-logo-position-dm">

					{!! Form::button('',['class' => 'button-header-tool-back button-dm-1 button-margin-right-1','type' => 'button','onclick' => 'window.location.href = "/"']); !!}

					{!! Form::button('',['class' => 'button-header-tool button-dm-1','id' => 'btn-toolts-nav','type' => 'button','style' => 'top: -5px;']); !!}

					<a href="/{{ $data["roll"] }}" style="cursor: pointer;">

						<img src="{{asset('img/logo.png')}}" class="img-dm-8 img-margin-top-4 img-margin-left-1" id="logo">

						<label class="label-color-header-1 label-margin-left-2 label-margin-top-1 label-font-size-4 label-hide-movil" style="cursor: pointer;">Dejando Huellas Kid's</label>

					</a>	
				
					

				</div>						

			</div>					

		@endif

		@yield('content-nav')			

@endsection