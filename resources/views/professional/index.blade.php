@extends('layouts.admin')

@if(Session::has('message')) 
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session:get('message')}}
</div>
@endif

@section('content')
	<table class="table">
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operacion</th>
			</thead>
				@foreach($professionals as $professional)
				<tbody>
					<td>{{$professional->name}}</td>
					<td>{{$professional->email}}</td>
					<td>
					{!!link_to_route('professionals.edit', $title = 'Editar', $parameters = $professional->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
				</tbody>
				@endforeach
	</table>

@stop