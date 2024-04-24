$(document).ready(function(){

	console.log('обработчик слайдера на главной');

	var i = 1;
	setInterval(function(){
		if(i==1) {
			$('.js-pic-1').animate({opacity: 0}, 500, function(){
				$(this).css('display', 'none');
				$('.js-pic-2').css('display', 'block').animate({opacity: 1}, 500);
			});
		}
		if(i==2) {
			$('.js-pic-2').animate({opacity: 0}, 500, function(){
				$(this).css('display', 'none');
				$('.js-pic-1').css('display', 'block').animate({opacity: 1}, 500);
			});
		}

		i++;
		if(i==3) i=1;

	}, 5000);

});