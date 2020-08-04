//armazenar o slider em uma variável
var slider = $('#slider');

//armazenar os botões
var seguinte = $('#btn-next');
var anterior = $('#btn-prev');

//mover ultima imagem para primeiro lugar
$('#slider section:last').insertBefore('#slider section:first');


//mostrar a primeira imagem com uma margem de -100%
slider.css('margin-left', '-'+100+'%');


//função de movimentação para direita
function moverD(){
	slider.animate({
		marginLeft:'-'+200+'%'
	}, 700, function(){
		$('#slider section:first').insertAfter('#slider section:last');
		slider.css('margin-left', '-'+100+'%');
	});
}


//função de movimentação para esquerda
function moverE(){
	slider.animate({
		marginLeft:0
	}, 700, function(){
		$('#slider section:last').insertBefore('#slider section:first');
		slider.css('margin-left', '-'+100+'%');
	});
}

//chamada da função moverD ao clicar
seguinte.on('click', function(){
	moverD();
});

//chamada da função moverE ao clicar
anterior.on('click', function(){
	moverE();
});

//move o slide automaticamente para direita
function autoplay(){
	interval = setInterval(function(){
		moverD();
	}, 5000);
}


autoplay();