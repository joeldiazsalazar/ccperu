@extends('layouts.admin')

@section('contenido')



<H1>MOSTRAR HIJOS DEL APODERADO POR ID</H1>




<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>Role</th>
	<th>Assigned</th>
	<th>Acciones</th>
	</tr>
</thead>
<tbody>
	
	@foreach ($as as $attorneys)
	<tr>
	<td>{{ $attorneys->id }}</td>

	<td>{{ $attorneys->nombres}}</td>
	
</tr>

	@endforeach
</tbody>





@stop
