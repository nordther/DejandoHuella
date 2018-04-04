@section('content-img-slider')

		<div class="content-slider">

			<div class="content-topic-ctrl-left">

				<div class="input-group-btn  btn-dm-3" >

					{!! Form::button('',['class' => 'btn btn-arrow-down','name' => 'v_formCtrl_btn_topic_left']) !!}

				</div>

			</div>

			<div class="content-topic-ctrl-right">

				<div class="input-group-btn  btn-dm-3" >

					{!! Form::button('',['class' => 'btn btn-arrow-down','name' => 'v_formCtrl_btn_topic_right']) !!}
				</div>

			</div>

			<div id="element_slider_1" class="element_slider element_slider_show">

					<div class="content-topic-main">

						<div id="element_topic_1" class="content-topic-wrap">

							<div class="content-topic-header">

								<div class="semi-circulo">

									@foreach($data['dll']['nav'] as $dll)

										@if ($dll->srcnav_filename == 'about.png')

											<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-topic">

										@endif

									@endforeach

								</div>

								<div style="position:relative;top: -30px;">

									{!! Form::label('','Titulo 1',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

								</div>

								<div class="semi-circulo-invertido">

									<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top" >

										{!! Form::button('',['class' => 'btn btn-arrow-down','id' => 'v_formCtrl_btn_topic_1','data_content' => 'content_topic_article_1']) !!}

									</div>

								</div>

							</div>

							<div class="content-topic-article" id="content_topic_article_1">
								<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, voluptatum enim excepturi dolores, quam fuga architecto quae quis laboriosam provident aliquid corporis repellendus quisquam cupiditate. Veritatis nobis necessitatibus vel exercitationem.</div>
								<div>Incidunt possimus a, labore recusandae doloribus distinctio magni facilis suscipit, eveniet sint esse qui saepe inventore laborum, laudantium dolorum quisquam minima, temporibus rem pariatur! Explicabo omnis excepturi sapiente dolorem enim.</div>
								<div>Ea, blanditiis, quae. Natus sit, alias deserunt aperiam quam. Officiis fugit blanditiis voluptatibus cumque atque delectus deserunt mollitia reprehenderit modi incidunt in, sed reiciendis similique recusandae totam eveniet vel? Eius.</div>
								<div>Molestiae vitae quia consequatur voluptas dolores mollitia laboriosam error, nisi eveniet laudantium nam vero at tenetur. Eaque deserunt facilis adipisci harum fuga officiis ab id quasi non, molestias veniam nostrum?</div>
								<div>Facilis placeat tempore fugiat nesciunt ab, veniam similique deserunt delectus quisquam sit, nostrum provident maiores nulla repellendus, expedita voluptas, deleniti. Placeat tempore praesentium sint voluptas sed mollitia eum odio possimus?</div>
							</div>

						</div>

					</div>

						<img src="{{asset('img/slider/img-slider-1.jpg')}}" class="img-xl-dm-1" >

			</div>

			@for($i = 1; $i <= 6; $i++)

			<div id="element_slider_{{($i+1)}}" class="element_slider">

					<div class="content-topic-main">

						<div id="element_topic_{{($i+1)}}" class="content-topic-wrap">

							<div class="content-topic-header">

								<div class="semi-circulo">

								@foreach($data['dll']['nav'] as $dll)

									@if ($dll->srcnav_filename == 'about.png')									

										<img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-topic">

									@endif

								@endforeach

								</div>

								<div style="position:relative;top: -30px;">

									{!! Form::label('','Titulo '.($i+1),['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

								</div>

								<div class="semi-circulo-invertido">

									<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top" >
										{!! Form::button('',['class' => 'btn btn-arrow-down','id' => 'v_formCtrl_btn_topic_'.($i+1),'data_content' => 'content_topic_article_'.($i+1)]) !!}
									</div>

								</div>

							</div>

							<div class="content-topic-article" id="content_topic_article_{{ ($i+1) }}">
								<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, voluptatum enim excepturi dolores, quam fuga architecto quae quis laboriosam provident aliquid corporis repellendus quisquam cupiditate. Veritatis nobis necessitatibus vel exercitationem.</div>
								<div>Incidunt possimus a, labore recusandae doloribus distinctio magni facilis suscipit, eveniet sint esse qui saepe inventore laborum, laudantium dolorum quisquam minima, temporibus rem pariatur! Explicabo omnis excepturi sapiente dolorem enim.</div>
								<div>Ea, blanditiis, quae. Natus sit, alias deserunt aperiam quam. Officiis fugit blanditiis voluptatibus cumque atque delectus deserunt mollitia reprehenderit modi incidunt in, sed reiciendis similique recusandae totam eveniet vel? Eius.</div>
								<div>Molestiae vitae quia consequatur voluptas dolores mollitia laboriosam error, nisi eveniet laudantium nam vero at tenetur. Eaque deserunt facilis adipisci harum fuga officiis ab id quasi non, molestias veniam nostrum?</div>
								<div>Facilis placeat tempore fugiat nesciunt ab, veniam similique deserunt delectus quisquam sit, nostrum provident maiores nulla repellendus, expedita voluptas, deleniti. Placeat tempore praesentium sint voluptas sed mollitia eum odio possimus?</div>
							</div>

						</div>

					</div>

					<img src="{{asset('img/slider/img-slider-'.($i+1).'.jpg')}}" class="img-xl-dm-1" >

		  </div>

			@endfor



		</div>

		<div class="content-alert">
			@include('alerts.formAlertAuth')
		</div>

@endsection
