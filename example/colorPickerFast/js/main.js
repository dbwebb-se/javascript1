/* globals $ */
$("#showColorPicker").bind("click", function(e) {
	$(this).showColorPalette(e, {
		input 	: "#inputColorPicker"
	});
});
