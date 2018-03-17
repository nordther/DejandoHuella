@section('content-filosofia')

	<div class="ancla-link" id="quienessomos"></div>

	<div class="content bg-content">

		<div class="card card-bg-white">

			<div class="header-topic-dm-2 label-start" >
				<h2>
					Quienes Somos
				</h2>
				<div class="input-group-btn input-circle-btn btn-dm-5 input-group-btn-top" >
					{!! Form::button('',['class' => 'btn btn-arrow-down','id' => 'start-about']) !!}
				</div>
			</div>

		</div>

		<div class="content-grid grid-3" id="content-about"  style="margin-top: 70px;">
				<div class="grid-4">
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/misionIMG.jpg') }}">
						<span class="card-title">Misión</span>
					</div>
					<div class="card-content">
						<p>Dejando Huellas Kids es un Programa musicosicial, que busca transformar la vida de niños, niñas y adolescentes que se encuentran en situación de Vulnerabilidad en Colombia, a través de actividades musicales grupales, refuerzos académicos y desarrollo de habilidades para sus vidas y la vida en comunidad; generando así una programa integral que propicia espacios de reflexión y autoconocimiento en los integrantes y sus familias.</p>
					</div>
					</div>
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/visionIMG.png') }}">
						<span class="card-title">Visión</span>
					</div>
					<div class="card-content">
						<p>Ser un programa gestor de Cambio en niños, niñas y adolescentes mediante la Educacional Integral y educación en Valores Humanos. para el 2020 el programa Dejando huellas Kids Generará procesos de intervención Musicosocial con población vulnerable a Nivel Nacional y Generara Alianzas con Organizaciones Musicosociales para así articularse en Intervenir con niños en situación de riesgo a nivel Mundial.</p>
					</div>
					</div>
					<div class="card card-bg-white-gradient">
					<div class="card-img">
						<img src="{{ asset('img/imgTopics/about/objetivosIMG.jpg') }}">
						<span class="card-title">Objetivos</span>
					</div>
					<div class="card-content">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque sit dolorum repellat laborum, illum nesciunt eius accusantium aliquam iste, ipsum labore excepturi numquam obcaecati iure tempora, dolore vero perspiciatis eligendi!</p>
					</div>
					</div>
				</div>
				<div class="card">
					<div class="card-img-full">
						<img src="{{ asset('img/imgTopics/about/fondo.jpg') }}">
					</div>
				</div>
		</div>



	</div>

@endsection
