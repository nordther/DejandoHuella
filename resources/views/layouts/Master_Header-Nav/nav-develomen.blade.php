@section('content-nav')

	@if (($data['authconfirm'] == false) && ($data['multimediaAuth'] == false))

		<nav class="nav bg-content-neutro-opacity" id="main-menu">

			<ul class="main-menu">

				<li>

					<a href="/{{ $data['roll'] }}" >

					@foreach($data['dll']['nav'] as $dll)

						@if ($dll->srcnav_filename == 'about.png')
							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
						@endif

					@endforeach
						Inicio
					</a>

				</li>

				<li id="targetLoginUsers">

					<a href="#ingresar"  data="/Ingresar" id="nav_btn_login" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'arrow-down.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Ingresar al Sistema

					</a>

				</li>
				
				@foreach($data['moduls'] as $rows)

						@if (($rows->mdls_wordkey_modul_name =='mdls_newtopics')
							||
							($rows->mdls_wordkey_modul_name == 'mdls_about_us')
							||
							($rows->mdls_wordkey_modul_name == 'mdls_contact')
							||
							($rows->mdls_wordkey_modul_name == 'mdls_donation'))
							<li>

								<a href="{{$rows->mdls_url}}" id="{{ $rows->mdls_wordkey_modul_name }}">

									@foreach($data['dll']['nav'] as $rowsIcons)

									@if ( $rowsIcons->srcnav_id  == $rows->mdls_id_srcnav)

										<img src="{{asset($rowsIcons->srcnav_dir.$rowsIcons->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">

									@endif

									@endforeach

									@foreach($data['dll']['text'] as $rowsText)
										@if($rowsText->gtxt_paramt_wordkey == $rows->mdls_wordkey_modul_name)
											{{ $rowsText->gtxt_text }}
										@endif
									@endforeach


								</a>

							</li>
						@endif

				@endforeach

				@foreach($data['moduls'] as $rows)

						@if($rows->mdls_wordkey_modul_name == 'mdls_multi')
							<li>

								<a href="{{$rows->mdls_url}}">

									@foreach($data['dll']['nav'] as $rowsIcons)

									@if ( $rowsIcons->srcnav_id  == $rows->mdls_id_srcnav)

										<img src="{{asset($rowsIcons->srcnav_dir.$rowsIcons->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">

									@endif

									@endforeach

									@foreach($data['dll']['text'] as $rowsText)
										@if($rowsText->gtxt_paramt_wordkey == $rows->mdls_wordkey_modul_name)
											{{ $rowsText->gtxt_text }}
										@endif
									@endforeach


								</a>

							</li>
						@endif

				@endforeach

			</ul>

		</nav>

	@elseif(($data['authconfirm'] == true)&&($data['multimediaAuth'] == false))

		<nav class="nav bg-content-neutro-opacity " id="main-menu">

			<ul class="main-menu">

				<li>

					<a href="/{{ $data['roll'] }}" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'about.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Inicio

					</a>

				</li>

				<li id="targetGestionUsers">

					<a class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'administratorUsers.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Gestion de Usuarios

					</a>

				</li>

				<ul id="subMenuGestionUsers">

					<li>

						<a href="/{{$data['roll']}}/buscar-usuario" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'userSearchIcon.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach

							Buscar Usuario

						</a>

					</li>
					@if($data['permisos']['create'] == true)
					<li>

						<a href="/{{$data['roll']}}/crear/usuario" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'createUsers.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach

							Crear Usuario

						</a>


					</li>

					@endif

				</ul>

				<li id="targetGestionAgenda">

					<a class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'agenda.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Gestionar Agenda

					</a>

				</li>

				<ul id="subMenuGestionAgenda">

					<li>

						<a href="/{{$data['roll']}}/buscar-agenda" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'agendaSearchIcon.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach

							Buscar Agenda

						</a>

					</li>
					@if($data['permisos']['create'] == true)
					<li>

						<a href="/{{$data['roll']}}/crear/agenda" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'createAgenda.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach

							Crear Agenda

						</a>


					</li>
					@endif

				</ul>

				<li id="targetGestionMultimedia">

					<a class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'administratorMulti.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Gestionar Multimedia

					</a>

				</li>

				<ul id="subMenuGestionMultimedia">

					<li>

						<a href="/{{$data['roll']}}/buscar-multimedia" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'searchMultimedia.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach


							Buscar Multimedia

						</a>

					</li>
					@if($data['permisos']['create'] == true)
					<li>

						<a href="/{{$data['roll']}}/subir/subir-multimedia" class="">

							@foreach($data['dll']['nav'] as $dll)

								@if ($dll->srcnav_filename == 'uploadfiles.png')
									<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
								@endif

							@endforeach


							Subir Multimedia

						</a>


					</li>
					@endif

				</ul>

				<li>
					<a href="/{{$data['roll']}}/acerca-de-dejando-huella-kids">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'settingsAbout.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Acerca de D.H.K.

					</a>
				</li>

				<li>

					<a href="/{{$data['roll']}}/manual" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'help.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Ayuda

					</a>

				</li>

				<li>

					<a href="/{{$data['roll']}}/gestion-donativos">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'donation.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Apoya nuestra fundación

					</a>

				</li>

			</ul>

		</nav>

	@elseif($data['multimediaAuth'] == true)

		<nav class="nav bg-content-neutro-opacity " id="main-menu">

			<ul class="main-menu" class="">

				<li>

					<a href="/{{ $data['roll'] }}" >

					@foreach($data['dll']['nav'] as $dll)

						@if ($dll->srcnav_filename == 'about.png')
							<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
						@endif

					@endforeach
						Inicio
					</a>

				</li>

				<li>

					<a href="/{{ $data["roll"] }}/Videos" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'administratorMulti.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Videos

					</a>

				</li>

				<li>

					<a href="/{{ $data["roll"] }}/Audios" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'audio.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Audios

					</a>

				</li>

				<li>

					<a href="/{{ $data["roll"] }}/Galeria" class="">

						@foreach($data['dll']['nav'] as $dll)

							@if ($dll->srcnav_filename == 'gallery.png')
								<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="" class="img-dm-9 img-margin-top-4">
							@endif

						@endforeach

						Galeria de Arte

					</a>

				</li>

			</ul>

		</nav>

	@endif

@endsection
