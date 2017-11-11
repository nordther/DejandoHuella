@if(Session::has('authmenssage'))
	<div class="card card-bg-white-gradient horizontal" id="formAlertAuth">
			
		<div class="card-icon"><img src="{{ asset('img/icon/form/AlertError.png') }}"></div>	

		<div class="card-stacked">
			<div class="card-content">
				
			{!! Form::label(null,Session::get('authmenssage')); !!}	
			
			</div>
			<div class="card-action">

				<div class="input-group-btn input-circle-btn btn-dm-2">
						
					{!! Form::button(null,['id' => 'formButtonClosesAlert','class' => 'btn btn-close']); !!}

				</div>			
				
			</div>
		</div>	
		
	</div>	
@endif
