$(document).ready(function(){
	$("#navbar ul li").hover(function(){
		$(this).children(".submenu").fadeToggle("fast");
	});
	$("#UpdateTxt").html("Our website got a fresh look. Explore every nook and cranny of it!");
	$("#logo").click(function(){
		$("#inactive").css("z-index", "4");
		$("#inactive").fadeTo('slow', 0.5, function(){
			$("#vid").fadeIn();
			//$("iframe").attr("src", $("iframe").attr("src").replace("autoplay=0", "autoplay=1"));//change to <a> tag using player
		});
	});
	$("#inactive").click(function(){
		$("#vid").fadeOut(function(){
			$("#inactive").fadeTo('slow',0.0,function(){
				$("#inactive").css("z-index", "-1");
			});
		});
	});
	$("#UpImg1").hover(function() {
		$("#UpImg1").css("border-color","#0B3383");
		$("#UpImg2").css("border-color","black");
		$("#UpImg3").css("border-color","black");
		$("#UpdateTxt").html("Our website got a fresh look. Explore every nook and cranny of it!");
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
		$("#UpdateTxt").html("Click on our social links to take part in our community!");
	});
});
