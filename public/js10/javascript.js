var vid = document.getElementById("myVideo");

var fillBar = document.getElementById("fill");

var currentTime = document.getElementById("currentTime");

var volumeSlider = document.getElementById("volume");


function playOrPause(){
	if(vid.paused){
		vid.play();
		$("#playBtn").attr("src", "../img10/pause.png")
	}
	else{
		vid.pause();
		$("#playBtn").attr("src", "../img10/play.png")
	}
}

vid.addEventListener('timeupdate',function(){
    
    var position = vid.currentTime / vid.duration;
        
    fillBar.style.width = position * 100 +'%';
    
    convertTime(Math.round(vid.currentTime));  //convert decimal no into intiger
    
    if(vid.ended){
        $("#playBtn").attr("src","../img10/play.png");
    }
});

function convertTime(seconds){
	var min = Math.floor(seconds / 60);
	var sec = seconds % 60;

	min = (min < 10) ? "0" + min : min;
	sec = (sec < 10) ? "0" + sec : sec;

	currentTime.textContent = min + ":" + sec;

	totalTime(Math.round(vid.duration));
}

function totalTime(seconds){
	var min = Math.floor(seconds / 60);
	var sec = seconds % 60;

	min = (min < 10) ? "0" + min : min;
	sec = (sec < 10) ? "0" + sec : sec;

	currentTime.textContent += "/" + min + ":" + sec;

}

function changeVolume(){
	vid.volume = volumeSlider.value;

	if(volumeSlider.value == 0){
		$("#speaker").attr("src", "../img10/mute.png");
	}
	else{
		$("#speaker").attr("src", "../img10/speaker.png");
	}
}

function fullScreen(){
	if (vid.requestFullscreen) {
  		vid.requestFullscreen();
	} else if (vid.mozRequestFullScreen) {
	  	vid.mozRequestFullScreen();
	} else if (vid.webkitRequestFullscreen) {
	  	vid.webkitRequestFullscreen();
	} else if (vid.msRequestFullscreen) { 
	  	vid.msRequestFullscreen();
	}
}﻿

// function scrub(e){
// 	const scrubTime = (e.offsetX / fillBar.offsetWidth) * vid.duration;
// 	vid.currentTime = scrubTime;
// }

// fillBar.addEventListener('click', clickedBar);
//fillBar.addEventListener('mousemove', scrub);

// function clickedBar(e){
//     if(!vid.paused && !vid.ended){
//         var mouseX=e.offsetX;
//         var newtime=mouseX*vid.duration/fillBar.offsetWidth;
//         vid.currentTime=newtime;
//         fillBar.style.width=mouseX+'px';
//     }
// }