$(document).ready(function(){

	$("#navbar ul li").hover(function(){
		$(this).children(".submenu").fadeToggle("fast");
	});
	
	$("#logo").click(function(){//change to thumb class for every video use
		$("#inactive").css("z-index", "4");
		$("#inactive").fadeTo('slow', 0.5, function(){
			$("#vid").fadeIn();
			$("iframe").attr("src", $("iframe").attr("src").replace("autoplay=0", "autoplay=1"));//change to <a> tag using player
		});
	});
	$("#inactive").click(function(){
		$("#vid").fadeOut(function(){
			$("#inactive").css("z-index", "-1");
			$("#inactive").fadeTo('slow', 0.0);
			$('iframe').get(0).stopVideo();
		});
	});
});
