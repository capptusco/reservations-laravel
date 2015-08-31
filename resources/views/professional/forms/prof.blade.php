
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingrese el correo'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Telefono:')!!}
			{!!Form::text('phone_number',null,['class'=>'form-control','placeholder'=>'Ingrese el telefono'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Direccion:')!!}
			{!!Form::text('address',null,['class'=>'form-control','placeholder'=>'Ingrese la direccion'])!!}
		</div>

		<div class="form-group">
			{!!Form::label('Password:')!!}
			{!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingrese el password'])!!}
		</div>