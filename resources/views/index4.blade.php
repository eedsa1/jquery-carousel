<!DOCTYPE html>
<html>
<head>
	<title>Slider JQuery</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css4/estilos.css') }}">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

	<div id="c-slider">

		<div id="slider">
			<section>
				<img src="{{ asset('img4/1.jpg') }}" alt="">
			</section>
			<section>
				<img src="{{ asset('img4/2.jpg') }}" alt="">
			</section>
			<section>
				<img src="{{ asset('img4/3.jpg') }}" alt="">
			</section>
			<section>
				<img src="{{ asset('img4/4.jpg') }}" alt="">
			</section>
		</div>
		<div id="btn-prev">&#60;</div>
		<div id="btn-next">&#62;</div>

	</div>
	<script src="{{ asset('js4/slider.js') }}"></script>
</body>
</html>