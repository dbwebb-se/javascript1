/* globals jQuery */
(function($) {
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

	window.ColorPalette = function()
	{
		this.inputID = null;
		this.initialized = false;
		this.isShowing = false;
	};

	window.ColorPalette.prototype =
	{
		initialize : function()
		{
			$(document.body).append(
				$('<div/>')
					.attr("id", "colorPalette")
					.css("border", "2px solid #000")
					.css("display", "none")
					.css("position", "absolute")
					.css("visibility", "hidden")
			);

			for (var i = 100; i >= 0; i--)
			{
				for (var j = 0; j < 200; j++) {
					this.createColBox(Math.floor((j / 200) * 360), 100, i);
				}

				this.createClearBox();
			}

			this.initialized = true;
		},
		createColBox : function (h, s, l)
		{
			var me = this;

			$("#colorPalette").append(
				$('<div/>')
					.css("height", "1px")
					.css("width", "1px")
					.css("background", "hsl(" + h + ", " + s + "%, " + l + "%)")
					.css("float", "left")
					.bind("mouseover", function() {
						me.changeColor(h, s, l);
					})
			);
		},
		createClearBox : function()
		{
			$("#colorPalette").append(
				$('<div/>')
					.css("clear", "both")
			);
		},
		show : function(e, top, left, input)
		{
			if (!this.initialized) {
				this.initialize();
			}

			if (!this.isShowing)
			{
				this.inputID = input;

				$("#colorPalette")
					.css("display", "inline-block")
					.css("visibility", "visible")
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
				$("#colorPalette")
					.css("visibility", "hidden");

				this.isShowing = false;
				e.stopPropagation();
			}
		},
		changeColor : function(h, s, l)
		{
			var rgb = hsl2rgb(h, s, l);
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

	$.fn.colorPalettePreload = function() {
		colorPalette.initialize();
	};

	$.fn.showColorPalette = function(e, options) {
		colorPalette.show(e, $(this).position().top + $(this).height(), $(this).position().left, options.input);
	};

}) (jQuery);
