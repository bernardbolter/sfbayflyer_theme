$(document).ready(function() {
	$('#menu-icon').click(function(){
		$('.navlist').slideToggle(200);
	});
});

$(document).ready(function() {
$('.single-page-nav').singlePageNav({
   offset: $('.single-page-nav').outerHeight()
	});
$('.home_link').singlePageNav({
   offset: $('.single-page-nav').outerHeight()
	});        
});

$(window).load(function() {
    $('#slider').nivoSlider();
});

$(window).load(function() {
jQuery(".home_text_title").fitText(1);
});

$(window).load(function() {
jQuery(".advanced_title_top").fitText(1.5);
});