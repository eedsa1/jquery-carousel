<!DOCTYPE html>
<html>
<head>
	<title>Utilização Básica de Lightbox</title>

	<style type="text/css">
		
		.background{
			position: absolute;
			/* inicia do pixel 0 no topo e na esquerda */
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #000000;
			opacity: .0;
			-moz-opacity: .0;
			filter: alpha(opacity=0);
			/* para o fundo escuro se sobrepor em todos os elementos */
			z-index: 100;
			/* para exibir somente com o javascript */
			display: none;
		}
		.box{
			position: absolute;
			top: 20%;
			left: 30%;
			width: 600px;
			height: 350px;
			background-color: #FFFFFF;
			/* fica a frente do background */
			z-index: 101;
			/* para o conteúdo não ficar colado ao limite do lightbox */
			padding: 14px;
			/* bordar arredondadas */
			border-radius: 4px;
			/* para o mozilla */
			-moz-border-radius: 4px;
			/* para o chrome */
			-webkit-border-radius:4px;
			box-shadow: 2px 2px 2px #333333;
			-moz-box-shadow: 2px 2px 2px #333333;
			-webkit-box-shadow: 2px 2px 2px #333333;
			display: none;
		}

		.close{
			float: right;
			/* para o "fechar" não colar no limite do lightbox */
			margin-right: 10px;
			/* para ao passar o mouse o cursor virar uma "mão" */
			cursor: pointer;
		}

	</style>

</head>
<body>
	
	<h2>Conteúdo da página</h2>
	<!-- Link para abrir o lightbox. Esse link pode ser uma imagem por exemplo, utilizando-se uma tag "img" -->
	<a href="#" class="lightbox">Abrir Lightbox</a>
	<!-- Div com a classe que representa o fundo escuro -->
	<div class="background"></div>
	<!-- Div com a classe que é o lightbox propriamente dito -->
	<div class="box">
		<!-- Div com a classe para fechar nosso lightbox -->
		<div class="close">X</div>
		Este é o lightbox
	</div>

	<script type="text/javascript" src="{{ asset('js5/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$('.lightbox').click(function(){
				/* vamos animar as divs com a opacidade no tempo de 500 milisegundos de forma linear */
				$('.background, .box').animate({'opacity':'.60'}, 500, 'linear');
				$('.box').animate({'opacity':'1.00'}, 500, 'linear');
				$('.background, .box').css('display', 'block');
			});	

			$('.close').click(function(){
				$('.background, .box').animate({'opacity':'0'}, 500, 'linear', function(){
					/* retornar a propriedade display para none para não exibir as divs */
					$('.background, .box').css('display', 'none');
				});
			});
			/* ao clicar no background o lightbox também fechará */
			$('.background').click(function(){
				$('.background, .box').animate({'opacity':'0'}, 500, 'linear', function(){
					/* retornar a propriedade display para none para não exibir as divs */
					$('.background, .box').css('display', 'none');
				});
			});

		});	

	</script>

</body>
</html>