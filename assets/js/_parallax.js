$(document).ready(function () {
	$('.parallax-midground, .parallax-background').css('position', 'relative').css('top', '0px');
	$(window).scroll(function () {
		var windowHeight = $(window).height();
		var scrollTop = $(window).scrollTop();
		var middlePage = scrollTop + windowHeight/2;
		$('.parallax-container:visible').each(function(){
			var container = $(this);
			var containerMiddle = container.offset().top + container.height()/2;
			var difference = middlePage - containerMiddle;
			//var top = Number(div.css('top').replace('px', ''));
			$('.parallax-midground', container).css('top', difference/50);
			$('.parallax-background', container).css('top', -difference/10);
		});
	});
});