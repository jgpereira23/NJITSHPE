$(document).ready(function(){
	if($('#vid').is(':visible')){
		$(document).bind('click', function (e) {
			$('#vid').toggle();
			$('#wrapper').fadeTo('fast', 1.0);
		});
		$('#vid').bind('click', function(e) {
			e.stopPropagation();
		});
	}
	else{
		$('#logo').click(function() {
			$('#vid').toggle();
			$('#wrapper').fadeTo('slow', 0.7);
		});
	}
});
