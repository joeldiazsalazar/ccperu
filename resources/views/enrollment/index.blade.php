@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Matricula</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('enrollments.create')}}">Agregar Matricula</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Matricula</h5>
                                <div class="f-right">
                                	<a href="{{ route('enrollments.create')}}" class="btn btn-info">Agregar Nueva Matricula</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">


	<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>User</th>
	<th>Monto</th>
	<th>Estado</th>
	<th>Nivel</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($enrollment as $enrollments)
<tr>
	<td>{{ $enrollments->id }}</td>

	<td>

		{{ $enrollments->student->nombres }}</td>

	<td>{{ $enrollments->user->username }}</td>

	<td>{{ $enrollments->monto}}</td>

	<td>{{ $enrollments->estado}}</td>

	<td>{{ $enrollments->programming->nivel}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('enrollments.edit', $enrollments->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('enrollments.destroy', $enrollments->id) }}">

					{!! csrf_field() !!}
					{!! method_field('DELETE') !!}
					
					<button class="btn btn-danger btn-xs delete-edition-btn" type="submit">Eliminar</button>

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

