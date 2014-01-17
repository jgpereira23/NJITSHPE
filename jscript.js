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
	
	$("#UpImg1").hover(function() {
		$("#UpImg1").css("border-color","#0B3383");
		$("#UpImg2").css("border-color","black");
		$("#UpImg3").css("border-color","black");
		$("#UpdateTxt").html("See how SHPE has affected some of our members in our testimonials page.");
	});
	$("#UpImg2").hover(function() {
		$("#UpImg1").css("border-color","black");
		$("#UpImg2").css("border-color","#0B3383");
		$("#UpImg3").css("border-color","black");
		$("#UpdateTxt").html("Chechout the calendar to see what NJIT SHPE will be doing next.");
	});
	$("#UpImg3").hover(function() {
		$("#UpImg1").css("border-color","black");
		$("#UpImg2").css("border-color","black");
		$("#UpImg3").css("border-color","#0B3383");
		$("#UpdateTxt").html("We plan on making this year NJIT SHPE's best yet. Help us make it happen by donating!");
	});
});
