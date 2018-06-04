@extends('layouts.admin')

@section('contenido')



<H1>MOSTRAR NOTAS</H1>




<table class="table table-success">
	

<thead>

	<tr>
	<th>Curso</th>
	<th>nota1</th>
	<th>nota2</th>
	<th>nota3</th>
	<th>nota4</th>
	<th>promedio</th>
	<th>Trimestre</th>
	</tr>
</thead>
<tbody>
	


	@foreach ($qualification as $notes)

	

	<tr>

	<td>{{ $notes->course->name }}</td>

	<td>{{ $notes->nota1}}</td>

	<td>{{ $notes->nota2}}</td>

	<td>{{ $notes->nota3}}</td>

	<td>{{ $notes->nota4}}</td>

	<td>{{ $notes->promedio }}</td>

	<td>{{ $notes->trimester->name }}</td>

</tr>

	@endforeach
</tbody>





@stop
