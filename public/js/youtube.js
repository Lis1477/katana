$(document).ready(function(){

	$('.js-youtube-activate').click(function() {
		console.log('включаем youtube'); // метка
		$('.js-youtube-block').addClass('active');
	});

	$('.js-youtube-close').click(function() {
		console.log('выключаем youtube');
		$('.js-youtube-block').removeClass('active');
	});

});