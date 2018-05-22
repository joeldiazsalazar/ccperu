@extends('layouts.admin')

@section('contenido')


@if( session()->has('info'))
<div class="alert alert-success">{{ session('info')}}</div>

@endif
<div class="container-fluid">


  <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Usuarios</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>                              
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Asignacion de Usuarios</h5>
                         </div>

<div class="card-block">


<form method="POST" action=" {{ route('users.update', $user->id)}} ">
	{!! method_field('PUT') !!}

	{!! csrf_field() !!}

  <div class="form-group col-md-6">
    
    <p><label for="nombre">
  Nombre

  <input class="form-control" type="text" name="name" value="{{ $user->name }}">

  {!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

  </div>
	<div class="form-group col-md-6">


<p><label for="username">
	Username
	<input class="form-control" type="text" name="username" value="{{ $user->username}}">

	{!! $errors->first('username','<span class=error>:message</span>')!!}
</label></p>
</div>

@if (auth()->check())

@if (auth()->user()->hasRoles(['admin']))


<div class="container">

<ul class="nav nav-tabs  tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">Asignacion Alumnos<a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Asignacion Apoderado</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Asignacion Docentes</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Asignacion Administrador</a>
    </li>
</ul>

<div class="tab-content tabs">
    <div class="tab-pane active" id="home1" role="tabpanel">
       

 <div class="form-group">
    <label for="student" class="form-control-label"></label>
        <select class="form-control" id="edit-asig" name="student">
           
          <option value="">Seleccione Alumno</option>
           @foreach ($students as $id =>$email)

            <option value="{{ $id }}"
            {{ $user->student->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
            {{ $email}}
            </option>
         
            @endforeach
        </select>

        {!! $errors->first('student','<span class=error>:message</span>')!!}
</div>     

    </div>
    <div class="tab-pane" id="profile1" role="tabpanel">
       <div class="form-group">
    <label for="attorney" class="form-control-label"></label>
        <select class="form-control" id="edit-asig" name="attorney">
           
          <option value="">Seleccione Apoderado</option>
           @foreach ($attorneys as $id =>$dni)

            <option value="{{ $id }}"
            {{ $user->attorney->pluck('id')->contains($id) ? 'selected="selected"' : '' }}>
            {{ $dni}}
            </option>
         
            @endforeach
        </select>

        {!! $errors->first('attorney','<span class=error>:message</span>')!!}
</div>
    </div>
    <div class="tab-pane" id="messages1" role="tabpanel">
        <p>3. This is Photoshop's version of Lorem IpThis is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
        Aenean mas Cum sociis natoque penatibus et magnis dis.....</p>
    </div>
    <div class="tab-pane" id="settings1" role="tabpanel">
        <p>4.Cras consequat in enim ut efficitur. Nulla posuere elit quis auctor interdum praesent sit amet nulla vel enim amet. Donec convallis tellus neque, et imperdiet felis amet.</p>
    </div>
</div>

</div>








@endif
@endif

<input class="btn btn-primary" type="submit" name="Enviar">

</form>

</div>

</div>
</div>
</div>
@stop