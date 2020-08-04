$(document).ready(function(){
	$('main section p').css({
		textAlign: 'center'
	}).hide();
	$('main section a').css({
		textAlign: 'center',
		color: 'black',
		textDecoration: 'none'
	}).hover(function(){
		$(this).css('text-decoration', 'underline');
	}, function(){
		$(this).css('text-decoration', 'none');
	}).click(function(e){
		e.preventDefault();
		$('main section p').hide();
		$(this).next('p').show();
	});
});