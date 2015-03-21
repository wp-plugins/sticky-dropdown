(function ($) {
	"use strict";
	$(document).ready(function () {
		pixl_Sticky_Dropdown();
	});
	
	$(window).scroll(function () {
		pixl_Sticky_Dropdown();
	});

	$(window).resize(function () {
		pixl_Sticky_Dropdown();
	});
	
	function pixl_Sticky_Dropdown() {
		// Check browser window width
		if ($(window).scrollTop() > StickyHeaderParams.show_at && $(window).width() > StickyHeaderParams.hide_if_narrower) {
			// Show
			$('#pixl-sticky-header').stop().animate({"margin-top": '0'}, 1000);
		} else {
			// Hide
			$('#pixl-sticky-header').stop().animate({"margin-top": '-150'}, 1000);
		}
	}

	                  var _rys = jQuery.noConflict();
                    _rys("document").ready(function(){
                        _rys(window).scroll(function () {
                            if (_rys(this).scrollTop() > 120) {
                              var windowWidth = _rys( window ).width();
                              var cWidth = _rys(".container").width();
                              _rys('#megaUber').addClass("main_menu_fix_top");

                              if(windowWidth > 767 ){
                                _rys("#megaUber").css({
                                  "width" : cWidth + 30
                                })
                              }
                            } else {
                                _rys('#megaUber').removeClass("main_menu_fix_top");

                                _rys("#megaUber").css('width', '');
                            }
                            });
                        });
}(jQuery));