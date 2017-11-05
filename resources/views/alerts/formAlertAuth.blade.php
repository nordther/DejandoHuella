@if(Session::has('authmenssage'))
	<div class="form-alert form-alert-color-danger form-alert-square-radius form-alert-cardview" id="formAlertAuth">
			
		<div class="content-icon-alert"><img src="{{ asset('img/icon/form/AlertError.png') }}"></div>	
		<div class="conent-alert-text">
			{!! Form::label(null,Session::get('authmenssage'),['class' => 'label-font-size-8 label-font-family-neutro label-alert-color label-margin-left-2 label-margin-bottom-1']); !!}	
			
		</div>
		<div class="content-alert-ctrl">
			{!! Form::button(null,['id' => 'formButtonClosesAlert','class' => 'button-toolt-close button-dm-2 cicle-bisel-1 button-top-right-position-absolute']); !!}
		</div>
		
	</div>	
@endif
