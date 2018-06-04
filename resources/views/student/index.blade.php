@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Alumnos</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('students.create')}}">Agregar Usuario</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Usuarios</h5>
                                <div class="f-right">

                                	<a href="{{ route('students.create')}}" class="btn btn-info">Agregar Nuevo Estudiante</a>
                                	
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
	<th>Email</th>
	<th>Estado</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody class="buscar">
	
	@foreach ($students as $student)
	<tr>
	<td>{{ $student->id }}</td>

	<td>{{ $student->nombres }}</td>
	<td>{{ $student->apellidoPaterno}}</td>
	<td>{{ $student->apellidoMaterno}}</td>
	<td>{{ $student->email}}</td>
	<td>{{ $student->estado}}</td>

{{-- 	<td>

		@foreach($user->student as $students)
		<a href="/students/show/{{ $students->id }}">

			{{ $students->dni }}

		</a>
		
		@endforeach

	</td> --}}

	<td>
		<a class="btn btn-info btn-xs" href="{{ route('students.edit', $student->id) }}">Editar</a>
				<form  id="deleteestudent" style="display: inline;" method="POST" action=" {{ route('students.destroy', $student->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-student-btn" type="submit">Eliminar</button>

				</form>
	</td>

</tr>
	@endforeach



{{ $students->links('vendor.pagination.bootstrap-4') }}

	
</tbody>
</table>

</div>

</div>
</div>
</div>


@stop