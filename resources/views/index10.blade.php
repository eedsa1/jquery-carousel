<!DOCTYPE html>
<html>
<head>
	<title>Player de video CSS/Javascript</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css10/main.css') }}">
</head>
<body>

	<div id="frame"></div>
	<div id="main">
		<div id="videoPanel">
			<video id="myVideo" width="625" height="400" src="{{ asset('video10/video.mp4') }}"></video>
		</div>
		<div id="controls">
			<div id="seek-bar">
				<div id="fill"></div>
			</div>

			<table border="0">
				<tr>
					<td width="55%">
						<div id="currentTime">00:00 / 00:00</div>
					</td>
					<td width="30%">
						<img src="{{ asset('img10/play.png') }}" onclick="playOrPause()" id="playBtn">
					</td>
					<td width="30%">
						<img src="{{ asset('img10/full.png') }}" onclick="fullScreen()" id="fsBtn">
					</td>
					<td>
						<img src="{{ asset('img10/speaker.png') }}" id="speaker">
					</td>
					<td>
						<input type="range" id="volume" min="0" max="1" value="0.40" step="0.20" onchange="changeVolume()"/>
					</td>
				</tr>
			</table>

		</div>
		
	</div>

	<script type="text/javascript" src="{{ asset('js10/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js10/javascript.js') }}"></script>
</body>
</html>