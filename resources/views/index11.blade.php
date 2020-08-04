<!DOCTYPE html>
<html>
<head>
	<title>Video background</title>

	<style type="text/css">
		
		body{
			margin: 0px;
			background: black;
		}

		header{
			/* de acordo com a altura da tela do dispositivo */
			height: auto;
			/* sem scroll */
			overflow: hidden;
		}

		#background{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			width: auto;
			height: auto;
			/* ajusta o objeto no centro da tela de modo que ele ajuste automaticamente em tamanho*/
			background-cover: cover;

		}

		#content{
			position: absolute;
			top: 20px;
			padding: 30px;
			color: #fff;
			text-shadow: #000 2px 2px 2px;
			font-family: Arial;
		}

	</style>

</head>
<body>

	<header>
		<video id="background" src="http://www.w3schools.com/html/mov_bbb.mp4" autoplay="true" loop="true" muted="true" />
	</header>

	<div id="content">
		<h1>Título do video</h1>
		<p>Conteúdo referente ao vídeo ou alguma parte do site</p>
	</div>

</body>
</html>

<!-- 
formatos compatíveis: mp4, webm e ogg
-->