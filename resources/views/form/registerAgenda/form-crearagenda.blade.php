@section('content-registerAgenda')
<div class="content bg-content">
  <div class="ancla-link">

  </div>
  <div class="form-content">
  <div class="card-img" style="position: relative; top:-45px;">
      <img src="{{ asset('img/imgTopics/searchBackground/header.jpg') }}" style="width: 100%; height: 300px;">
  </div>
  <div class="form-wrap" style="position: relative; top: -150px; box-sizing: content-box;">
    {!! Form::open(['url'=>'/Admin/registrar/usuario','method'=>'POST','name' => 'formHTML']) !!}
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

       {!! Form::textarea('v_formUserContactDesc',null,['id' =>'v_formUserContactDesc','cols'=>"0",'rows'=>'0']) !!}

       {!! Form::label('v_formUserContactDesc','Descripción',['class' => 'label','id' => 'v_formUserContactDesc_title']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::date('v_formUser_begin_event',null,['id' => 'v_formUser_begin_event']); !!}

       {!! Form::label('v_formUser_begin_event','Fecha de Inicio del evento',['class' => 'label','id' => 'v_formUser_begin_event']) !!}

       </div>
      </div>

      <div class="col dm-col-1">
       <div class="input-group">

       {!! Form::date('v_formUser_end_event',null,['id' => 'v_formUser_end_event']); !!}

       {!! Form::label('v_formUser_end_event','Fecha Final del evento',['class' => 'label','id' => 'v_formUser_end_event']) !!}

       </div>
      </div>


    </div>

    <div class="form-footer">

      <div class="form-ctrl-content">

        <div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">

          {!! Form::button('',['class' => 'btn btn-save','type' => 'submit']); !!}

        </div>

        <div class="input-group-btn input-esquare-btn btn-dm-5 input-group-btn-top-form">

          {!! Form::button('',['class' => 'btn btn-clean','type' => 'reset']); !!}

        </div>

      </div>



    </div>

    {!! Form::close() !!}

  </div>

  </div>

</div>
@endsection
