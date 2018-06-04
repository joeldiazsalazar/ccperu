@extends('layouts.admin')

@section('contenido')

<div class="container-fluid">


	<div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Calificaciones</h4>
                            <ol class="breadcrumb breadcrumb-title breadcrumb-arrow">
                                <li class="breadcrumb-item"><a href="{{ route('cpanel')}}"><i class="icofont icofont-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('qualifications.create')}}">Agregar Calificacion</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
     </div>


     <div class="row">
                    <!-- Form Control starts -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><h5 class="card-header-text">Registro de Calificaciones</h5>
                                <div class="f-right">
                                	<a href="{{ route('qualifications.create')}}" class="btn btn-info">Agregar Nueva Calificacion</a>
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>


                                </div>


                            </div>

<div class="card-block">


	<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID Alumno</th>
	<th>MAtricula</th>
	<th>Curso</th>
	<th>nota1</th>
	<th>nota2</th>
	<th>nota3</th>
	<th>nota4</th>
	<th>promedio</th>

	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($qualification as $qualifications)
<tr>
	<td>{{ $qualifications->enrollment->user->username }}</td>

	

	<td>{{ $qualifications->trimester->name }}</td>

	<td>{{ $qualifications->course->name }}</td>

	<td>{{ $qualifications->nota1}}</td>

	<td>{{ $qualifications->nota2}}</td>
		
	<td>{{ $qualifications->nota3}}</td>
			
	<td>{{ $qualifications->nota4}}</td>
				
	<td>{{ $qualifications->promedio}}</td>

	<td>
				<a class="btn btn-info btn-xs" href="{{ route('qualifications.edit', $qualifications->id) }}">Editar</a>


				<form  id="deleteedition" style="display: inline;" method="POST" action=" {{ route('qualifications.destroy', $qualifications->id) }}">

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

