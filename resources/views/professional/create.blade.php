@extends('layouts.admin')

@section('content')
	
	{!!Form::open(['route'=>'professionals.store','method'=>'POST'])!!}

		@include('professional.forms.prof')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		
	{!!Form::close()!!}

@stop