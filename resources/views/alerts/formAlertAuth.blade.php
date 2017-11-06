@if(Session::has('authmenssage'))
	<div class="card card-bg-white-gradient horizontal" id="formAlertAuth">
			
		<div class="card-icon"><img src="{{ asset('img/icon/form/AlertError.png') }}"></div>	

		<div class="card-stacked">
			<div class="card-content">
				
			{!! Form::label(null,Session::get('authmenssage')); !!}	
			
			</div>
			<div class="card-action">
				{!! Form::button(null,['id' => 'formButtonClosesAlert','class' => 'button-toolt-close button-dm-2 cicle-bisel-1 button-top-right-position-absolute']); !!}
			</div>
		</div>	
		
	</div>	
@endif
