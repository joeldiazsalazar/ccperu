@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Programacion</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('programmings.create')}}">Agregar Programacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Aulas</h5>
                                <div class="f-right">
                                	<a href="{{ route('programmings.create')}}" class="btn btn-info">Agregar Nueva Programacion</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">


	<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Fecha</th>
	<th>Nivel</th>
	<th>Grado</th>
	<th>Turno</th>
	<th>Salon</th>
	<th>Estado</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($programming as $programmings)
<tr>
	<td>{{ $programmings->id }}</td>

	<td>{{ $programmings->fecha }}</td>

	<td>{{ $programmings->nivel }}</td>

	<td>{{ $programmings->grado}}</td>

	<td>{{ $programmings->turno}}</td>

	<td>{{ $programmings->classroom->nombre}}</td>

	<td>{{ $programmings->estado}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('programmings.edit', $programmings->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('programmings.destroy', $programmings->id) }}">

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

