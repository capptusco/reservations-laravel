<!DOCTYPE html>
<html lang="es">
<head>
<title>Reservations | Home :: w3layouts</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
{!!Html::script('js/jquery.min.js')!!}
{!!Html::style('css/bootstrap.min.css')!!}
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
	<!-- header-section-starts -->
	<div class="full">
		<div class="menu">
				<ul>
					<li><a class="active" href="{{URL::to('/')}}"><i class="home"></i></a></li>
					<li><a href="{{URL::to('reservations')}}"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="{{URL::to('reservations')}}"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
		</div>
		<div class="main">
			
			<!--Etiqueta que hace referencia al contenido-->
			@yield('content')

			<div class="footer">
				<h6>Disclaimer : </h6>
				<p class="claim">This is a freebies and not an official website, I have no intention of disclose any movie, brand, news.My goal here is to train or excercise my skill and share this freebies.</p>
				<a href="example@mail.com">example@mail.com</a>
				<div class="copyright">
					<p> Template by  <a href="http://w3layouts.com">  W3layouts</a></p>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>