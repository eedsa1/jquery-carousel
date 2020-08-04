<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

		#container{
			width: 1280px;
			overflow: hidden;
		}

		#sliderbox{
			position: relative;
			width: 5120px;
			animation-name: slideranimation;
			animation-duration: 20s;
			animation-iteration-count: infinite;
		}

		#sliderbox img{
			float: left;
		}

		@Keyframes slideranimation{
			0%
			{
				left: 0px;

			}
			20% /* 4 segundos */
			{
				left: 0px;
			}
			25% /* 5 segundos */
			{
				left: -1280px;
			}
			45% /* 9 segundos */
			{
				left: -1280px;
			}
			50% /* 10 segundos */
			{
				left: -2560px;
			}
			70% /* 14 segundos  */
			{
				left: -2560px;
			}
			75% /* 15 segundos */
			{
				left: -3840px;
			}
		}

	</style>
	<title>Slide de Imagens</title>
</head>
<body>
	<div id="container">
		<div id="sliderbox">
			<img src="{{ asset('img3/pic1.jpg') }}">
			<img src="{{ asset('img3/pic2.jpg') }}">
			<img src="{{ asset('img3/pic3.jpg') }}">
			<img src="{{ asset('img3/pic4.jpg') }}">
		</div>
	</div>

</body>
</html>