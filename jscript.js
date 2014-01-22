$(document).ready(function(){
	//Sets height of inactive and gallery. 
	//Not necessary because scrolling is turned off during use
	//var body = document.body,
    //html = document.documentElement;

	//var height = Math.max( body.scrollHeight, body.offsetHeight, 
      //                 html.clientHeight, html.scrollHeight, html.offsetHeight );
	//$("#inactive").css("height", height);
	//$("#gallery").css("height", height);
	$("#navbar ul li").hover(function(){
		$(this).children(".submenu").fadeToggle("fast");
	});
	$("#UpdateTxt").html("See how SHPE has affected some of our members in our testimonials page.");
	$("#vidpic").click(function(){
		$("#inactive").css("z-index", "4");
		$("#inactive").fadeTo('slow', 0.7, function(){
			$("#vid").fadeIn();
			$("iframe").attr("src", $("iframe").attr("src").replace("autoplay=0", "autoplay=1"));//change to <a> tag using player
		});
	});
	//$("#inactive").click(function(){
		//$("#vid").fadeOut(function(){
			//$("#inactive").fadeTo('slow', 0.0,function(){
				//$("#inactive").css("z-index", "-1");
			//});
		//});
	//});
});
