@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Docentes</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('teachers.create')}}">Agregar Docente</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Docentes</h5>
                                <div class="f-right">

                                	<a href="{{ route('teachers.create')}}" class="btn btn-info">Agregar Nuevo Docente</a>
                                	
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">

 <div class="input-group"> <span class="input-group-addon">Buscar</span>
        <input id="filtrar" type="text" class="form-control" placeholder="Ingresa el alumno que deseas Buscar...">
 </div>

<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombres</th>
	<th>Apellido Paterno</th>
	<th>Apellido Materno</th>
	<th>dni</th>
	<th>Estado</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody class="buscar">
	
	@foreach ($teacher as $teachers)
	<tr>
	<td>{{ $teachers->id }}</td>

	<td>{{ $teachers->nombres }}</td>
	<td>{{ $teachers->apellidoPaterno}}</td>
	<td>{{ $teachers->apellidoMaterno}}</td>
	<td>{{ $teachers->dni}}</td>
	<td>{{ $teachers->estado}}</td>

{{-- 	<td>

		@foreach($user->student as $students)
		<a href="/students/show/{{ $students->id }}">

			{{ $students->dni }}

		</a>
		
		@endforeach

	</td> --}}

	<td>
		<a class="btn btn-info btn-xs" href="{{ route('teachers.edit', $teachers->id) }}">Editar</a>
		<form  style="display: inline;" method="POST" action=" {{ route('teachers.destroy', $teachers->id) }}">

		{!! csrf_field() !!}
		{!! method_field('DELETE') !!}
					
		<button class="btn btn-danger btn-xs " type="submit">Eliminar</button>

		</form>
	</td>

</tr>
	@endforeach
</tbody>
</table>

</div>

</div>
</div>
</div>


@stop