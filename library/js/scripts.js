/*global jQuery, window, document, console, location */

var Blog = window.Blog || {};

(function ($, Blog) {

  'use strict';
  var init = function () {

    $(function () {
      function openMenu() {
        $('#full-page-menu').removeClass('collapsed');
        $('body').addClass('freeze');
      }

      function closeMenu() {
        $('#full-page-menu').addClass('collapsed');
        $('body').removeClass('freeze');
      }

      $('nav .menu').on('click', function() {
        openMenu();
      })

      $('#close-menu').on('click', function() {
        closeMenu();
      })

      $('#full-page-menu a').click(closeMenu);


    });
  };

  Blog.Homepage = {};
  Blog.Homepage.init = init;

}(jQuery, Blog));
