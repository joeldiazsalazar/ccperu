
@extends('layouts.admin')


@section('contenido')

  <div>
                <!-- Row Starts -->
                <div class="row">
                    <div class="col-sm-12 p-0">
                        <div class="main-header">
                            <h4>Control de Notas</h4>
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
                            <div class="card-header"><h5 class="card-header-text">Registro de Notas</h5>
                                <div class="f-right">
                                    <a href="" data-toggle="modal" data-target="#input-type-Modal"><i class="icofont icofont-code-alt"></i></a>
                                </div>
                            </div>

<div class="card-block">


<form method="POST" action=" {{ route('teachers.sendQualification')}} ">
	{!! csrf_field() !!}
	<table class="table">
		<h4>Descripcion</h4>

		@foreach($trimester as $ttr)
			<input type="checkbox" name="trimester_id" value="{{ $ttr->id }}" checked="">{{ $ttr->name }}
	
		@endforeach


		<thead>
			<tr>
				<td>PROGRAMACION</td>
				<td>CURSO</td>
				<td>Docente</td>
			</tr>
		</thead>
		<tbody>
			@foreach($ddNote as $desk)
			<tr>
				<td><input type="checkbox" checked name="programming_id" value="{{ $desk->programming_id }}"> {{ $desk->programming->nivel .'  '. $desk->programming->classroom->nombre .''. $desk->programming->classroom->pabellon }}</td>
				<td>
					<input type="checkbox" checked name="course_id" value="{{ $desk->course_id}}">{{ $desk->course->name }}
					
				</td>

				<td><input type="checkbox" checked value="{{ $desk->teacher_id }}" name="teacher_id"> {{ $desk->teacher->nombres}}</td>
			
			</tr>

			@endforeach



		</tbody>
	</table>
<table class="table-responsive table-hover">
	<thead>
		<tr>
			<td>PROGRAMACION DE CURSO</td>

			<tr>
			<td>ALUMNO</td>
			<td class="">Notas 1</td>
            <td class="">Notas 2</td>
            <td class="">Notas 3</td>
            <td class="">Notas 4</td>
            <td class="">promedio</td> 

			</tr>
		</tr>
	</thead>


	<tbody>


		
		@foreach($ddNote as $pro)
			
		<tr>



			@foreach($pro->programming->enrollment as $wtf)
			<tr class="row">
			<td> 
				<input type="checkbox" name="enrollment_id[]" checked value="{{ $wtf->id }}">{{ $wtf->user->name }}
			</td>

			<td> <input type="number" name="nota1"  style="width: 50px; text-align: center;"></td>
             <td class=""> <input type="number" name="nota2"  style="width: 50px; text-align: center;"></td>
             <td class=""> <input type="number" name="nota3"  style="width: 50px; text-align: center;"></td>
             <td class=""> <input type="number" name="nota4"  style="width: 50px; text-align: center;"></td>
             <td class=""> <input type="number" name="promedio"  style="width: 50px; text-align: center;"></td>

			</tr>
			@endforeach
			
		</tr>

		@endforeach
	</tbody>
</table>

<input class="btn btn-success waves-effect waves-light m-r-30" type="submit" name="Enviar">

</form>

</div>
</div>
</div>
    </div>
    </div>
@stop