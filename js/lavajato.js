$(function() {
	// Set this variable with the height of your sidebar + header
	var offsetPixels = 820; 

	$(window).scroll(function() {
		if ($(window).scrollTop() > offsetPixels) {
			$( ".fixed-catarse" ).addClass("sticky");
		} else {
			$( ".fixed-catarse" ).removeClass("sticky");
		}
	});
});