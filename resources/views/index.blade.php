<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Efeito caroussel com JQuery</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="{{ asset('js/carroussel.js') }}"></script>
</head>
<body>

	<div class="box_carrossel">
		<div class="nav back"><p>&laquo;</p></div>

		<ul class="carrossel">
			<li class="item"><img src="{{ asset('img/01.jpg') }}" alt="[ZenPhone 5 - thumb]" title="ZenPhone 5 - thumb"></li>
			<li class="item"><img src="{{ asset('img/02.jpeg') }}" alt="[Iphone X - thumb]" title="Iphone X - thumb"></li>
			<li class="item"><img src="{{ asset('img/03.jpg') }}" alt="[Galaxy S9 - thumb]" title="Galaxy S9 - thumb"></li>
			<li class="item"><img src="{{ asset('img/04.jpg') }}" alt="[Moto Z2 Play - thumb]" title="Moto Z2 Play - thumb"></li>
			<li class="item"><img src="{{ asset('img/05.jpg') }}" alt="[G7 - thumb]" title="G7 - thumb"></li>
		</ul>
		<div class="nav forth"><p>&raquo;</p></div>
		<div class="clear"></div>
	</div>

</body>
</html>