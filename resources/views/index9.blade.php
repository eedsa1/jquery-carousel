<!DOCTYPE html>
<html>
<head>
	<title>Galeria de fotos</title>

	<style type="text/css">

		body{
			margin: 0px;
			background-color: #000000;
			color: #FFFFFF;
		}

		#rolagem{
			height: 720px;
			margin-bottom: 10px;
			/*margin-top: 50px;*/
			width: auto;
			margin-left: auto;
			margin-right: auto;
			text-align: center;
			overflow: hidden;
		}

		.caixa-miniatura{
			border: 1px solid #999; 
			width: 100px;
			display: inline-block;
			margin-left: 2px;
			margin-right: 2px;
			padding: 0px;
			overflow: hidden;
			height: 57px;
		}

		.caixa-miniatura1{
			border: 1px solid #999; 
			display: inline-block;
			margin-left: 2px;
			margin-right: 2px;
			padding: 0px;
			overflow: hidden;
			height: 57px;
		}

		#miniaturas{
			text-align: center;
			position: fixed;
			bottom: 0px;
			margin-left: auto;
			margin-right: auto;
			left: 0px;
			right: 0px;
			border-top: thin solid #757575;
			padding-top: 10px;
			padding-bottom: 10px;
			background-color: #000000;
		}

	</style>

</head>
<body>

	<div id="rolagem">
		<img id="img1" width="1280" height="720" src="{{ asset('img9/01.jpg') }}">
		<img id="img2" width="1280" height="720" src="{{ asset('img9/02.jpg') }}">
		<img id="img3" width="1280" height="720" src="{{ asset('img9/03.jpg') }}">
		<img id="img4" width="1280" height="720" src="{{ asset('img9/04.jpg') }}">
	</div>
	<div id="miniaturas">
		<div class="caixa-miniatura"><a href="#img1"><img src="{{ asset('img9/01-small.jpg')}}"></a></div>
		<div class="caixa-miniatura"><a href="#img2"><img src="{{ asset('img9/02-small.jpg')}}"></a></div>
		<div class="caixa-miniatura"><a href="#img3"><img src="{{ asset('img9/03-small.jpg')}}"></a></div>
		<div class="caixa-miniatura"><a href="#img4"><img src="{{ asset('img9/04-small.jpg')}}"></a></div>
	</div>

	<script type="text/javascript" src="{{ asset('js7/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function(e){
			$('a').click(function(e){
				$('#rolagem').animate({
					scrollTop: $($.attr(this, 'href')).offset().top + $('#rolagem').scrollTop()
				}, 500);
				return false;
			});
		});
	</script>

</body>
</html>