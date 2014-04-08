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

$(document).ready(function() {
	var userFeed = new Instafeed({
	        get: 'user',
	        userId: 1003556406,
	        resolution: 'low_resolution',
	        accessToken: '1003556406.467ede5.89f58df16fa34acf9c8307a1401cba06',
	        template: '<div class="insta_photo_box"><a href="{{link}}"><img src="{{image}}" /></a><p class="insta_cap">{{caption}}</p></div>'
	    });
	    userFeed.run();
});

$(window).load(function() {
			$('.insta_cap').each(function(){
			    var $this=$(this);
				$this.html($this.text().replace(/(?:\s|^)(?:#(?!(?:\d+|\w+?_|_\w+?)(?:\s|$)))(\w+)(?=\s|$)/g, '<span style="color: #7a7065;">$&</span>'));
	});
});

$(document).ready(function(e) {

$('#testa_more_1').find('a').on('click', function(e){
	e.preventDefault();

	$('#testa_ajax').load('http://local.sfbayflyer.dev/wp-content/themes/sfbayflyer2014_theme/parts/testas_two.html');
});
});




