$(document).ready(function(){

    $('#js-burger').click(function() {
        if(!$(this).hasClass('active')) {
            $(this).addClass('active');
            $('#js-mobile').addClass('active');
            $('#js-burger').addClass('active');
            console.log('добавить класс');
        } else {
            $(this).removeClass('active');
            $('#js-mobile').removeClass('active');
            $('#js-burger').removeClass('active');
            console.log('удалить класс');
        }
    });

    $('#js-sub-cat-toggler').click(function() {

        if(!$(this).hasClass('active')) {
            $(this).addClass('active');
            console.log('показать подкатегории');
        } else {
            $(this).removeClass('active');
            console.log('скрыть подкатегории');
        }

        $('#js-sub-cat').toggle('.3s');

    });

});