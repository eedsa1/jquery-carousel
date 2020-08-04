<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css12/style.css') }}">
	<title>Vídeo player</title>
</head>

<!-- oncontextmenu como false evita que ao clicar com o botão auxiliar sejam exibidos os controles -->
<body oncontextmenu="return false">

	<div id="video" class="player-video" onmouseover="prepare(this)">
		<!-- preload=none para o video não carregar junto com a página e o carregamento desta ser mais leve -->
		<video class="video-view" poster="{{ asset('img12/capa.jpg') }}" >
			<source src="http://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
		</video>

		<div class="video-preloader"></div>

		<div class="video-controls">

			<div class="video-progress-bar float-left">
				<div class="video-loader"></div>
				<div class="video-progress"></div>
			</div>

			<div class="video-play float-left video-btn"></div>
			<div class="video-volume float-left video-btn"></div>

			<div class="slider float-left">
				<div class="slider-vol"></div>
			</div>

			<div class="video-time float-left">00:00 | 00:00</div>
			<div class="video-screen float-right video-btn"></div>
			
		</div>

		<div class="clear"></div>

	</div>

	<div class="teste"></div>

	<script type="text/javascript" src="{{ asset('js12/script.js') }}"></script>
</body>
</html>