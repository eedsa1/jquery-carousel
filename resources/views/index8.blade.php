<!DOCTYPE html>
<html>
<head>
	<title>Slideshow com CSS3</title>

	<style type="text/css">
		
		*{
			margin: 0px;
			padding: 0px;
		}

		body{
			background-color: #494949;
		}

		.galeria{
			margin: 200px auto;
			width: 1280px;
			height: 720px;
			position: relative;
			overflow: hidden;
		}

		.foto{
			position: absolute;
			opacity: 0;
			animation-name: animacao;
			/* tempo total da animação */
			animation-duration: 20s;
			animation-iteration-count: infinite;
		}

		@keyframes animacao{
			/* porcentagem do tempo da animação (animation-duration) */
			25%{
				opacity: 1;
				transform: scale(1.1, 1.1);
			}

			50%{
				opacity: 0;
			}


		}
		/* seleciona primeira, segunda, terceira... foto*/
		.foto:nth-child(1){
		}
		.foto:nth-child(2){
			animation-delay: 5s;	
		}
		.foto:nth-child(3){
			animation-delay: 10s;
		}
		.foto:nth-child(4){
			animation-delay: 15s;
		}


	</style>

</head>
<body>

	<section class="galeria">
		<img class="foto" src="{{ asset('img8/01.jpg') }}">
		<img class="foto" src="{{ asset('img8/02.jpg') }}">
		<img class="foto" src="{{ asset('img8/03.jpg') }}">
		<img class="foto" src="{{ asset('img8/04.jpg') }}">
	</section>

</body>
</html>