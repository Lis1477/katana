$(document).ready(function(){

	$('.js-view-pic').click(function() {

		var num_pic = $(this).data('num_pic');
		var count_pic = $(this).data('count_pic');

		for (var i = 0; i < count_pic; i++) {
			$('#js-big-' + i).css('display', 'none');
			$('#js-small-' + i).css('background-color', 'transparent');
		}

		$('#js-big-' + num_pic).css('display', 'block');
		$(this).css('background-color', '#EF8184');

	    console.log(num_pic);
	});
});