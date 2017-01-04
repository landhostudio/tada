//=include ../../bower_components/jquery/dist/jquery.js
//=include rellax.js
//=include ../../bower_components/flickity/dist/flickity.pkgd.js
//=include ../../bower_components/ajaxchimp/jquery.ajaxchimp.js
//=include ../../bower_components/fastclick/lib/fastclick.js
//=include ../../bower_components/viewport-units-buggyfill/viewport-units-buggyfill.js

$(function() {

  'use strict';

  var init = function() {
    initHeader();
    initHeaderCTA();
    initHeroCTA();
    initHeroParallax();
    initCarousel();
    initFormFocus();
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

  function initHeroCTA() {
    $('.hero__readmore button').click(function(event) {

      $('html, body').animate({
        scrollTop: $('.carousel').offset().top
      }, 2000 );

    });
  };

  function initHeroParallax() {
    var rellax = new Rellax('.rellax');
  };

  function initCarousel() {
    var $carousel = $('.carousel__slides').flickity({
      contain: false,
      percentPosition: true,
      prevNextButtons: false,
      pageDots: true,
      // resize: false, // false if carousel uses per.height
      // setGallerySize: false, // false if carousel uses per.height
      wrapAround: true // infinite loop
    });
  };

  function initFormFocus() {
    $('#email').focus(function() {
      $('.form').addClass('form--active');
    });

    $('#email').focusout(function() {
      $('.form').removeClass('form--active');
    });
  };

  function initNewsletter() {

    $('.form__signup form').ajaxChimp({
      callback: callbackFunction
    });

    function callbackFunction(resp) {
      if (resp.result === 'success') {
        $('.form__email').hide();
      }
    }

  };

  init();

});
