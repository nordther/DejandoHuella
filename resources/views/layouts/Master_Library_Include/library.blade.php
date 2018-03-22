@section('content-library')
			
			<meta charset="UTF-8">	
			
			<meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1,maximum-scale=1">	

			@foreach ($data['dll']['css'] as $dll)
				@if (($dll->srcapp_filename != "bootstrap.css") && ($dll->srcapp_filename != "bootstrap-theme.min.css")&&($dll->srcapp_filename != "bootstrap-theme.css"))
					{!! Html::style($dll->srcapp_dir.$dll->srcapp_filename) !!}
				@endif			    
			@endforeach
			
			{!! Html::script('https://code.jquery.com/jquery-3.2.1.min.js') !!}

			@foreach ($data['dll']['js'] as $dll)
				@if(($dll->srcapp_filename == 'jquery-3.2.1.min.js') || ($dll->srcapp_filename == 'jquery-1.10.2.js') || ($dll->srcapp_filename == 'jsMainGui-script.js'))
					{!! Html::script($dll->srcapp_dir.$dll->srcapp_filename) !!}
				@else
					{!! Html::script($dll->srcapp_dir.$dll->srcapp_filename) !!}
				@endif			    
			@endforeach

			
			
@endsection