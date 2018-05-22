@extends('layouts.admin')

@section('contenido')


<h1>MOSTRAR URLS AMIGABLES</h1>

{{-- /attorneys/show/{{ $attorneys->id }} --}}
 @if (auth()->check())


<table class="table table-hover">
	

<thead>
	<tr>
	<th>ID</th>
	<th>Nombre</th>
	<th>HIJOS</th>
	</tr>
</thead>
<tbody>


	

	<tr>
	<td>{{ $user->id }}</td>

	<td>{{ $user->name }}</td>

	<td>

		@foreach($user->attorney as $users)
				<a href="{{ route('attorneys_student.show', $users->id) }}">
					{{ $users->dni }}
				</a>
		@endforeach
	</td>


	</tr>


{{-- 	<td>

		@foreach($user->student as $students)

		<a href="/students/show/{{ $students->id }}">

			{{ $students->dni }}

		</a>
		
		@endforeach
	</td>
 --}}



</tbody>
</table>
@endif


@stop