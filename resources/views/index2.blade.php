<!DOCTYPE html>
<html>
<head>
	<title>Carousel</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css2/estilo.css') }}">
</head>
<body>

	<div id="carousel">
		<img id="prev" src="{{ asset('img2/left.png') }}">

		<div id="itens">
			<ul>
				<li><div class="item"><img src="{{ asset('img2/ps4.jpg') }}"></div></li>
				<li><div class="item"><img src="{{ asset('img2/xbox.jpg') }}"></div></li>
				<li><div class="item"><img src="{{ asset('img2/switch.jpg') }}"></div></li>
			</ul>
		</div>

		<img id="next" src="{{ asset('img2/right.png') }}">

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('js2/carousel.js') }}"></script>

</body>
</html>