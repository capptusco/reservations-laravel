@extends('layouts.admin')
@section('content')
	{!!Form::model($professional,['route'=>'professionals.update',$professional->email,'method'=>'PUT'])!!}

		@include('professional.forms.prof')

		{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
		
	{!!Form::close()!!}
@stop