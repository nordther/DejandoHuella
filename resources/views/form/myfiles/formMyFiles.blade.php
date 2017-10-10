@section('content-myfiles')
	
	<div class="content bg-content">
		
		<div style="height: 28px;"></div>

		<div class="form-content-myfiles form-myfiles-dm-1">
			
			<div class="form-myfiles-header">
				
				<h1>
					
					Mis Archivos

				</h1>

			</div>

			<div class="form-myfiles-article">
					
					<div class="form-myfiles-files-contents scroll">
						@for($i=0; $i<=100; $i++)
							
							<div class="form-myfiles-item">

								<div class="form-myfiles-item-article">
									
									<img src="{{ asset('img/imgTopics/header/img1.jpg') }}" alt="" width="260" height="200">

								</div>

								<div class="form-myfiles-item-footer">
									
									{{ $i }}

								</div>
								
							</div>

						@endfor

					</div>

					<div class="form-myfiles-detail">
						
					</div>	
			

			</div>
			
			<div class="form-myfiles-footer">
				

			</div>


		</div>

	</div>


@endsection