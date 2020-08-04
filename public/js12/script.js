var playerVideo, view, timer, videoPreloader;

var btnPlay, full;

var hour, min, seg, currentHour, currentMin, currentSeg;

var intervalTimer;

var barProgress, videoLoader, progress;

var pctSeek, pctBar;

var slider, sliderVol, drag;

var btnVol;


function prepare(elem){

	if(playerVideo != elem){
		playerVideo = elem;

		view = playerVideo.querySelector(".video-view");
		timer = playerVideo.querySelector('.video-time')
		//timer.innerHTML = 'teste';

		barProgress = playerVideo.querySelector('.video-progress-bar');
		videoLoader = playerVideo.querySelector('.video-loader');
		progress = playerVideo.querySelector('.video-progress');

		btnVol = playerVideo.querySelector('.video-volume');
		btnVol.addEventListener('click', mute);

		barProgress.addEventListener('click', seeker);

		btnPlay = playerVideo.querySelector(".video-play");
		btnPlay.addEventListener('click', play);

		slider = playerVideo.querySelector('.slider');
		sliderVol = playerVideo.querySelector('.slider-vol');

		slider.addEventListener('mousedown', startDrag);
		slider.addEventListener('mouseup', startDrag);

		slider.addEventListener('mousemove', showVolume);


		drag = false;

		//intervalTimer = setInterval(updateTimer, 100);

		intervalTimer = setInterval(updateTimer, 100);

		videoPreloader = playerVideo.querySelector('.video-preloader');
		view.addEventListener('waiting', loader);
		view.addEventListener('playing', loader);

		full = playerVideo.querySelector('.video-screen');
		full.addEventListener('click', fullScreen);

		view.addEventListener('click', play);
	}

}

function fullScreen(){
	if(!document.webkitFullScreenElement){
		playerVideo.webkitRequestFullScreen();
	}
	else{
		document.webkitExitFullScreen();
	}

}

//função para exibir o icone do carregamento
function loader(event){
	switch(event.type){
		case 'waiting':
		videoPreloader.style.display = 'block';
		break;
		case 'playing':
		videoPreloader.style.display = 'none';
		break;
	}

}

//função para deixar mudo o volume
function mute(){
	if(!view.muted){
		view.muted = true;
		btnVol.style.backgroundImage = "url(../css12/mute.png)";
	}
	else{
		view.muted = false;
		btnVol.style.backgroundImage = "url(../css12/volume.png)";
	}
}

function startDrag(event){
	if(event.type == "mousedown"){
		drag = true;
	}else{
		drag = false;
	}
}

function showVolume(event){
	if(drag){
		var w = slider.clientWidth - 2;
		var x = event.clientX - slider.offsetLeft;
		var pctVol = x/w;

		sliderVol.style.width = x + "px";
		view.volume = pctVol;

		if(pctVol<=0){
			btnVol.style.backgroundImage = "url(../css12/mute.png)";
		}
		else if(pctVol > 0 && pctVol<=0.5){
			btnVol.style.backgroundImage = "url(../css12/volume-low.png)";
		}
		else{
			btnVol.style.backgroundImage = "url(../css12/volume-medium.png)";
		}
	}
}

//função para avançar/voltar partes do video
function seeker(){
	pctBar = (event.clientX / barProgress.clientWidth) * 100;
	view.currentTime = (view.duration * pctBar)/100;
}

function play(){
	if(view.played.length != 0){
		if(view.played.start(0)==0 && !view.paused){
			view.pause();
			btnPlay.style.backgroundImage = "url(../css12/play.png)";

		}else{
			view.play();

			
		}
	}else{
		btnPlay.style.backgroundImage = "url(../css12/pause.png)";
		view.play();
	}	

	//teste
	//teste = document.querySelector('.teste');
	//teste.innerHTML = converteTimer(8,30,20);
}

function updateTimer(){

	/* carregamento do video */
	var bufferedEnd = view.buffered.end(view.buffered.length - 1);
	videoLoader.style.width = String((bufferedEnd/view.duration)*100)+'%';

	/* posição atual */
	pctSeek = (view.currentTime/view.duration)*100;

	progress.style.width = String(pctSeek)+'%';

	//duração total do video
	hour = Math.floor(view.duration/3600);
	min = Math.floor(view.duration/60);
	seg = Math.floor(((view.duration/60)%1)*60);

	//currentTime
	currentHour = Math.floor(view.currentTime/3600);
	currentMin = Math.floor(view.currentTime/60);
	currentSeg = Math.floor(((view.currentTime/60)%1)*60);

	timer.innerHTML = converteTimer(currentHour, currentMin, currentSeg) +' | '+ converteTimer(hour, min, seg);

}

//metodo que converte o view.duration em HH:MM:SS
function converteTimer(horas, minutos, segundos){
	if(horas<10 && horas>0){
		horas = '0' + String(horas)+":";
		}else{
		horas = '';
	}

	if(minutos < 10){
		minutos = '0' + String(minutos);
		}else if(minutos > 59){
		minutos = minutos - (Math.floor(minutos/60)*60);
	}

	if(segundos < 10){
		segundos = '0' + String(segundos);
	}
	return String(horas)+String(minutos)+':'+String(segundos);
}