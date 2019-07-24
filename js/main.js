$(document).ready(function(){
	var altura = $('.menu').offset().top;
	
	$(window).on('scroll',function(){
		if ($(window).scrollTop() > altura) {
			$('.menu').addClass('menu-fixed');                     //cuando accedemos al elemento accedemos a la clase del css
																 //mas no al elemento del html  por medio de un punto
		}
		else{
			$('.menu').removeClass('menu-fixed');
		}
	});

});