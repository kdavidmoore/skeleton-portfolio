$(document).ready(function() {
	// binds localSroll to all local links
	$.localScroll();
});

$(window).load(function(){
	// make all the thumbnail images the same height (my screenshots are not perfect)
	$('.portfolio-thumb').matchHeight({
		byRow: false,
		property: 'height',
		target: null,
		remove: false
	});
	// show more info on mouseover
	$(".thumb-wrapper").mouseenter(function(){
		$(this).find('.hover-thumb').fadeToggle("fast");
	});
	// hide info on mouseleave
	$(".thumb-wrapper").mouseleave(function(){
		$(this).find('.hover-thumb').fadeToggle("fast");
	});
	// set the thumb-wrapper heights equal to the height of the first image
	var setHeight = $("#img-1").height();
	$('.thumb-wrapper').height(setHeight);
	// when the window is resized, tell matchHeight to update
	$(window).resize(function() {
		$.fn.matchHeight._update();
	});
});