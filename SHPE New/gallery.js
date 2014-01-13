$(document).ready(function(){
	$(".gallery").hide();
	$("#galpic").click(function(){
		$("#inactive").css("z-index", "4");
		$("#inactive").fadeIn();
		$("#gallery").css("z-index", "5");
		$("#gallery").fadeIn();
		var scrollPosition = [
        self.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft,
        self.pageYOffset || document.documentElement.scrollTop  || document.body.scrollTop
		];
		var html = jQuery('html'); // it would make more sense to apply this to body, but IE7 won't have that
		html.data('scroll-position', scrollPosition);
		html.data('previous-overflow', html.css('overflow'));
		html.css('overflow', 'hidden');
		window.scrollTo(scrollPosition[0], scrollPosition[1]);
	});
	$("#leftArrow").hover(
		function(){
			$(this).fadeTo("fast", 0.8);
		},
		function(){
			$(this).fadeTo("fast", 0.5);		
	});
	$("#leftArrow").click(function(){
	
	});
	$("#rightArrow").hover(
		function(){
			$(this).fadeTo("fast", 0.8);
		},
		function(){
			$(this).fadeTo("fast", 0.5);		
	});
	$("#rightArrow").click(function(){
		
	});
	$("#exit").hover(
		function(){
			$(this).fadeTo("fast", 0.8);
		},
		function(){
			$(this).fadeTo("fast", 0.5);		
	});
	$("#exit").click(function(){
			$("#inactive").fadeOut(function(){
				$(this).css("z-index", "-1");
			});
			$("#gallery").fadeOut(function(){
				$(this).css("z-index", "-1");
			});
			var html = jQuery('html');
			var scrollPosition = html.data('scroll-position');
			html.css('overflow', html.data('previous-overflow'));
			window.scrollTo(scrollPosition[0], scrollPosition[1])
	});
});
