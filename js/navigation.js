$('.menu-toggle').click(function(){
	$('.site-nav').toggleClass('site-nav--open', 1000);
	$(this).toggleClass('open');
})