/* globals $ */
$(document).ready(function(){
	'use strict';

	$(this).colorPalettePreload();
});

$("#showColorPicker").bind("click", function(e) {
	$(this).showColorPalette(e, {
		input 	: "#inputColorPicker"
	});
});
