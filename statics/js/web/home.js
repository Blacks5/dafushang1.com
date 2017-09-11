/* ::
::::: File 			: about.js
::::: Description	: Scripts for Home page
:: */

var Home = {

	init: function() {

		this._slider();

	},
	_slider : function () {
		$(document).ready(function() {
			var revolutionSlider = $("#page-slider");
			var wheight = $(window).height();
			var pageSlider,
			startwidth = (revolutionSlider.parents("body.w970").length) ? 960 : 1170;

			pageSlider = revolutionSlider.revolution({
				delay 			: 9000,
				startheight 	: wheight,
				hideThumbs 		: 10,

				touchenabled 	: "on",
				onHoverStop 	: "on",
				startwidth 		: startwidth,

				navOffsetHorizontal : 0,
				navOffsetVertical 	: 0,

				stopAtSlide 	: -1,
				stopAfterLoops 	: -1,

				fullWidth 		: "on",
				autoHeight 		: "on"
			});

			pageSlider.bind("revolution.slide.onloaded",function (e,data) {
				$(this).parent().css({
					background 	: "transparent",
					height 		: "auto",
					overflow 	: "visible"
				}).children().animate({'opacity':1},500);
			});

		});
	}
};

Home.init();

var resize = function() {
	$('#page-slider').css({
		width: $(window).width(),
		height: $(window).height()
	});
};
$(window).on('resize', resize);
resize();

$('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show');
})