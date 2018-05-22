@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">

            <!-- Main content starts -->
            <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>General Elements</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="index.html"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Forms</a>
                                </li>
                                <li class="breadcrumb-item"><a href="general-elements-bootstrap.html">General Elements</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                    <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Input Types</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">
<form method="POST" action=" {{ route('teachers.store')}} " enctype="multipart/form-data">

    {!! csrf_field() !!}

<div class="form-group col-md-3">
    <label for="nombres" class="form-control-label">Nombre Completo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="nombres" value="{{ old('nombres')}}">

    {!! $errors->first('nombres','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="apellidoPaterno" class="form-control-label">apellidoPaterno</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name="apellidoPaterno" value="{{ old('apellidoPaterno')}}">

    {!! $errors->first('apellidoPaterno','<span class=error>:message</span>')!!}
</div>
 
 
<div class="form-group col-md-3">
    <label for="apellidoMaterno" class="form-control-label">apellidoMaterno</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="apellidoMaterno" value="{{ old('apellidoMaterno')}}">

        {!! $errors->first('apellidoMaterno','<span class=error>:message</span>')!!}
</div>
 

 <div class="form-group col-md-3">
    <label for="dni" class="form-control-label">dni</label>
        <input type="number" class="form-control" id="exampleInputPassword1" placeholder=""  name="dni" value="{{ old('dni')}}">

        {!! $errors->first('dni','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="sexo" class="form-control-label">sexo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="sexo" value="{{ old('sexo')}}">

        {!! $errors->first('sexo','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="correo" class="form-control-label">correo</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="correo" value="{{ old('correo')}}">

        {!! $errors->first('correo','<span class=error>:message</span>')!!}
</div>

<div class="form-group col-md-3">
    <label for="estado" class="form-control-label">estado</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="estado" value="{{ old('estado')}}">

        {!! $errors->first('estado','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-3">
    <label for="profesion" class="form-control-label">profesion</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder=""  name="profesion" value="{{ old('profesion')}}">

        {!! $errors->first('profesion','<span class=error>:message</span>')!!}
</div>


<div class="form-group col-md-5">

<label for="documentos" class="col-md-5 col-form-label form-control-label">Documentos</label>
    <div class="col-md-9">
        
            <input type="file" name="documentos">
           
       
        {!! $errors->first('documentos','<span class=error>:message</span>')!!}
    </div>

</div>



<div class="col-md-12">
    
    <input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">
</div>


</form>
</div>
</div>
</div>
    </div>
    </div>
    </div>
{{-- <p><label for="name">
    Nombre

    <input class="form-control" type="text" name="name" value="{{ old('name')}}">

    {!! $errors->first('name','<span class=error>:message</span>')!!}
</label></p>

<p><label for="email">
    Email
    <input class="form-control" type="text" name="email" value="{{ old('email')}}">

    {!! $errors->first('email','<span class=error>:message</span>')!!}
</label></p>



<p><label for="password">
    password
    <input class="form-control" type="password" name="password" value="{{ old('password')}}">

    {!! $errors->first('password','<span class=error>:message</span>')!!}
</label></p>


<p><label for="role">
    role
    <input class="form-control" type="text" name="role_id" value="{{ old('role_id')}}">

    {!! $errors->first('role_id','<span class=error>:message</span>')!!}
</label></p> --}}




@stop