@section('content-registerAgenda')
<div class="content bg-content">
  <div class="ancla-link">

  </div>
  <div class="form-content">
  <div class="card-img" style="position: relative; top:-45px;">
      <img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">
  </div>
  <div class="form-wrap" style="position: relative; top: -150px; box-sizing: content-box;">
    {!! Form::open(['url'=>'/Admin/registrar/agenda','method'=>'POST','name' => 'formHTML']) !!}
    <div class="form-header">

      <div>

        @foreach($data['dll']['nav'] as $dll)

          @if ($dll->srcnav_filename == 'about.png')

            <img src="{{asset($dll->srcnav_dir.$dll->srcnav_filename)}}" alt="Ingreso al sistema" class="icon-login">

          @endif

        @endforeach

      </div>

      <div style="position:relative;top: -85px;">

        {!! Form::label('','Crear Agenda',['class' => 'label-font-size-4','style' => 'color:#0FDAD3;']) !!}

      </div>

    </div>

    <div class="form-article">

      <div class="col dm-col-2">
       <div class="input-group">

       {!! Form::text('v_formUser_title_agenda',null,['id' => 'v_formUser_title_agenda']); !!}

       {!! Form::label('v_formUser_title_agenda','Nombre del Evento',['class' => 'label','id' => 'v_formUser_title_agenda']) !!}

       </div>
      </div>
      <div class="col dm-col-2">
       <div class="input-group">

       {!! Form::textarea('v_form_Description_event',null,['id' =>'v_form_Description_event','cols'=>"0",'rows'=>'0']) !!}

       {!! Form::label('v_form_Description_event','Descripción',['class' => 'label','id' => 'v_form_Description_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::date('v_formUser_begin_date_event',\Carbon\Carbon::now(),['id' => 'v_formUser_begin_date_event']); !!}

       {!! Form::label('v_formUser_begin_date_event','Fecha de Inicio del evento',['class' => 'label','id' => 'v_formUser_begin_date_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::date('v_formUser_end_date_event',\Carbon\Carbon::now(),['id' => 'v_formUser_end_date_event']); !!}

       {!! Form::label('v_formUser_end_date_event','Fecha Final del evento',['class' => 'label','id' => 'v_formUser_end_date_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::time('v_formUser_begin_time_event',\Carbon\Carbon::now()->format('H:i'),['id' => 'v_formUser_begin_time_event']); !!}

       {!! Form::label('v_formUser_begin_time_event','Hora de antencion inicial',['class' => 'label','id' => 'v_formUser_begin_time_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::time('v_formUser_end_time_event',\Carbon\Carbon::now()->format('H:i'),['id' => 'v_formUser_end_time_event']); !!}

       {!! Form::label('v_formUser_end_time_event','Hora de antencion finalizado',['class' => 'label','id' => 'v_formUser_end_time_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
          <acronym title="Subir imagen del Evento">
           <div class="input-group-btn-upload btn-square input-esquare-btn btn-dm-4">
             <div class="btn btn-upload" id="v_formFile_event_upload_icon">
                {!! Form::file('v_formFile_event_upload',['id' => 'v_formFile_event_upload','class' => 'btn btn-upload','accept'=>'image/*']); !!}
             </div>
           </div>
         </acronym>
         <div class="input-group">
            {!! Form::label('','Subida de imagen del evento',['class' => 'label active','id' => '']) !!}
         </div>
      </div>
      <div class="col dm-col-2" id="v_formSpam_detail"></div>
      <div class="col dm-col-1" id="v_formDetail_img">

          <div id="v_formDetailVerifict_true">
            {!! Form::label('','Detalle de la imagen seleccionada',['class' => 'label label-font-size-4','id' => '','style' => 'color:#0FDAD3;']) !!}
            <br>
            {!! Form::label('','Resolucion: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_resolution_true']) !!}
            <br>
            {!! Form::label('','Formato: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_format_true']) !!}
            <br>
            {!! Form::label('','Tama&ntilde;o: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_size_true']) !!}
          </div>
          <div id="v_formDetailVerifict_false">
            {!! Form::label('','Detalle de la imagen seleccionada',['class' => 'label label-font-size-4','id' => '','style' => 'color:#0FDAD3;']) !!}
            <br>
            {!! Form::label('','La imagen supero el limite de peso de 6 mb y resolucion 450x320',['class' => 'label-detail label-font-size-8',]) !!}
            <br>
            {!! Form::label('','Resolucion: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_resolution_false']) !!}
            <br>
            {!! Form::label('','Formato: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_format_false']) !!}
            <br>
            {!! Form::label('','Tama&ntilde;o: ',['class' => 'label-detail label-font-size-8','id' => 'v_formDetail_size_false']) !!}
          </div>
          <div id="v_formDetailIncorrect">
              {!! Form::label('','El archivo seleccionado no es un formato valido de imagen intentelo de nuevo',['class' => 'label label-font-size-4','id' => '','style' => 'color:#0FDAD3;']) !!}
          </div>
      </div>


    </div>

    <div class="form-footer">

      <div class="form-ctrl-content">

        <div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
          <acronym title="Guardar cambios">
          {!! Form::button('',['class' => 'btn btn-save','type' => 'submit']); !!}
          </acronym>
        </div>


        <div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">
          <acronym title="Limpiar los campos">
          {!! Form::button('',['class' => 'btn btn-clean','type' => 'reset']); !!}
          </acronym>
        </div>

      </div>



    </div>

    {!! Form::close() !!}

  </div>

  </div>

</div>
@endsection
