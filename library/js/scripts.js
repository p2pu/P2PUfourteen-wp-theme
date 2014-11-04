/*global jQuery, window, document, console, location */

var Blog = window.Blog || {};

(function ($, Blog) {

	'use strict';
	var init = function () {
		$(function () {
			// p2pu tab
			$(".p2pu-tab").p2puSlider({
				navbarContainer: '.navbar',
				icon: '.p2pu-tab-icon',
				iconUp: 'fa fa-chevron-down',
				iconDown: 'fa fa-chevron-up'
			});

		});
	};

    Blog.Homepage = {};
    Blog.Homepage.init = init;

}(jQuery, Blog));
