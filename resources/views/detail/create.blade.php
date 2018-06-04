@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

    @if(session()->has('info'))


    <div class="alert alert-success">{{ session('info')}}</div>

    @else
            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control detalle Programacion</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('details.create')}}">Agregar detalle Programacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro detalle Programacion</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('details.store')}} ">

    {!! csrf_field() !!}

<div class="form-group">
    <label for="programming_id" class="form-control-label">Programacion</label>
        
        <select name="programming_id">

            @foreach($programming as $programmings)
            
            <option value="{{ $programmings->id }}"> {{ $programmings->nivel .' - '.$programmings->grado .'-'. $programmings->classroom->pabellon }}</option>

            @endforeach
        </select>

        {!! $errors->first('programming_id','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="teacher_id" class="form-control-label">Programacion</label>
        
        <select name="teacher_id">

            @foreach($teacher as $teachers)
            
            <option value="{{ $teachers->id }}"> {{ $teachers->nombres .'-'.$teachers->apellidoPaterno }}</option>

            @endforeach
        </select>

        {!! $errors->first('teacher_id','<span class=error>:message</span>')!!}
</div>

<div class="form-group">
    <label for="course_id" class="form-control-label">Programacion</label>
        
        <select name="course_id">

            @foreach($course as $courses)
            
            <option value="{{ $courses->id }}"> {{ $courses->name }}</option>

            @endforeach
        </select>

        {!! $errors->first('course_id','<span class=error>:message</span>')!!}
</div>



<div class="form-control-wrapper">

   <label for="hour_start" class="form-control-label">Hora de Inicio</label> 
    <input type="text" id="timepicker" name="hour_start">
</div>

<div class="form-control-wrapper">

   <label for="hour_end" class="form-control-label">Hora de Fin</label> 
    <input type="text" id="timepicker1" name="hour_end">
</div>

<div class="form-group">
    <label for="day" class="form-control-label">Dia</label>
    <input type="text" class="form-control" id="day" aria-describedby="emailHelp" placeholder="Dia se la semana" name="day" value="{{ old('day')}}">

    {!! $errors->first('day','<span class=error>:message</span>')!!}
</div>

<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>



@endif


@stop