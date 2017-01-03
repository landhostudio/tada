//=include ../../bower_components/jquery/dist/jquery.js
//=include ../../bower_components/ajaxchimp/jquery.ajaxchimp.js
//=include ../../bower_components/fastclick/lib/fastclick.js
//=include ../../bower_components/viewport-units-buggyfill/viewport-units-buggyfill.js

$(function() {

  'use strict';

  var init = function() {
    initHeader();
    initHeaderCTA();
    initNewsletter();
  };

  function initHeader() {
    $('.header__menu button').click(function(event) {
      $('body').toggleClass('header--opened')
    });
  };

  function initHeaderCTA() {
    $('.header__cta button').click(function(event) {

      $('html, body').animate({
        scrollTop: $('.form').offset().top
      }, 2000 );

      $('#email').focus();
    });
  };

  function initNewsletter() {
    
    $('.form__input form').ajaxChimp({
      callback: callbackFunction
    });
    
    function callbackFunction(resp) {

      if (resp.result === 'success') {
        $('.form__input-email').hide();
      }

    }
    
  };

  init();

});
