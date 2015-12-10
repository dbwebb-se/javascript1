/* globals jQuery */
(function($) {
	window.ColorPalette = function()
	{
		this.inputID = null;
		this.isShowing = false;
	};

	window.ColorPalette.prototype =
	{
		show : function(e, top, left, input)
		{
			if (!this.isShowing)
			{
				this.inputID = input;

				$("#palette")
					.css("display", "inline-block")
					.css("top", top)
					.css("left", left);

				this.isShowing = true;
				e.stopPropagation();
			}
		},
		hide : function(e)
		{
			if (this.isShowing)
			{
				$("#palette")
					.css("display", "none");

				this.isShowing = false;
				e.stopPropagation();
			}
		},
		changeColor : function(e)
		{
			var elePos = $("#palette").position();
			var relPos = { x: e.pageX - elePos.left, y: e.pageY - elePos.top };

			var hsl = {
				h: (relPos.x / $("#palette").width()) * 360,
				s: 100,
				l: (1 - (relPos.y / $("#palette").height())) * 100,
			};

			var rgb = hsl2rgb(hsl.h, hsl.s, hsl.l);
			var hex = rgbToHex(rgb.r, rgb.g, rgb.b);
			var textColor = "#fff";

			if (rgb.r * 0.299 + rgb.g * 0.587 + rgb.b * 0.114 > 186 ) {
				textColor = "#000";
			}

			$(this.inputID).css("color", textColor);
			$(this.inputID).css("background", hex);
			$(this.inputID).attr("value", hex);
		}
	};

	var colorPalette = new window.ColorPalette();

	$(document).bind("click", function(e) {
		colorPalette.hide(e);
	});

	$("#palette").bind("mousemove", function(e) {
		colorPalette.changeColor(e);
	});

	$.fn.showColorPalette = function(e, options) {
		colorPalette.show(e, $(this).position().top + $(this).height(), $(this).position().left, options.input);
	};

}) (jQuery);

function hsl2rgb (h, s, l) {

	var r, g, b, m, c, x;

	if (!isFinite(h)) h = 0;
	if (!isFinite(s)) s = 0;
	if (!isFinite(l)) l = 0;

	h /= 60;
	if (h < 0) h = 6 - (-h % 6);
	h %= 6;

	s = Math.max(0, Math.min(1, s / 100));
	l = Math.max(0, Math.min(1, l / 100));

	c = (1 - Math.abs((2 * l) - 1)) * s;
	x = c * (1 - Math.abs((h % 2) - 1));

	if (h < 1) {
		r = c;
		g = x;
		b = 0;
	} else if (h < 2) {
		r = x;
		g = c;
		b = 0;
	} else if (h < 3) {
		r = 0;
		g = c;
		b = x;
	} else if (h < 4) {
		r = 0;
		g = x;
		b = c;
	} else if (h < 5) {
		r = x;
		g = 0;
		b = c;
	} else {
		r = c;
		g = 0;
		b = x;
	}

	m = l - c / 2;
	r = Math.round((r + m) * 255);
	g = Math.round((g + m) * 255);
	b = Math.round((b + m) * 255);

	return { r: r, g: g, b: b };

}

function componentToHex(c) {
	var hex = c.toString(16);
	return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
	return "#" + componentToHex(r) + componentToHex(g) + componentToHex(b);
}
