jQuery(function(){

  // wowの読み込み
  new WOW().init();

  // click-list特定の位置までスクロール
  $('.click-service').click(function() {
    $("html,body").animate({scrollTop:$(".service").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-works').click(function() {
    $("html,body").animate({scrollTop:$(".works").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });

  $('.click-price').click(function() {
    $("html,body").animate({scrollTop:$(".price").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-about').click(function() {
    $("html,body").animate({scrollTop:$(".about").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });
  
  $('.click-contact').click(function() {
    $("html,body").animate({scrollTop:$(".contact").offset().top});
    $('.nav_toggle, .click-nav').removeClass("show");
    $('body').removeClass('fixed');
  });

    // slick機能
    $('.slick01').slick({
    autoplay: true, 
    autoplaySpeed: 3000,
    dots: true, 
    centerMode: true,
  　centerPadding: '100px',
  　slidesToShow: 1,
    });
    
    $('.slick02').slick({
      arrows: false,
      autoplay: true,
      autoplaySpeed: 3000,
      dots: false,
    　slidesToShow: 1,
      });

    $('.nav_toggle').on('click', function () {
      $('.nav_toggle, .header-show').toggleClass('show');
    });

    // アコーディオンメニュー表示数の開閉
    $(function(){
      var contentsCount = $(".voice-con").length;
      var n = 4;
    
      if(contentsCount <= n) {
        $("#contents_btn").hide();
      } else {
        $('.voice-con:nth-of-type(n + ' + (n + 1) + ')').addClass('is-hidden').hide();
        
        
        $('#contents_btn').on('click', function() {
          if ($(".voice-con").slice(n).is(':hidden')) {
            $('.voice-con.is-hidden').slice(0, n).removeClass('is-hidden').slideDown();
            
          } else {
            $(".voice-con").slice(n).slideUp();
            $('.voice-con:nth-of-type(n + ' + (n + 1) + ')').addClass('is-hidden').hide();
            $('#contents_btn>.btn').text('もっと見る');
          }
          
        });
        $('#contents_btn').on('click', function() {
          if($('.voice-con.is-hidden').length == 0) {
            $('#contents_btn>.btn').text('閉じる');
          }
        });
      }
    });


    // 購入ボタンを押すとbookの書籍購入までスクロール
    $('#buy').click(function() {
      $("html,body").animate({scrollTop:$(".book-store-section").offset().top});
    });
    // footerをfixed(page-book.php)
  $(window).on('scroll', function (){
    $('.divination-cosutomer-section').each(function () {
      var changeOffset = $(this).offset().top;
      var scrolltop = $(window).scrollTop();
      var wh = $(window).height();
      if(scrolltop > changeOffset -  wh / 4  ){
      $('.divination-footer').fadeIn('fixed');
      } else {
        $('.divination-footer').fadeOut('fixed');
      }
    });
  });
    
  // pertical//
  particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":2,"color":"rgba(252,253,181,.4)"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.19228920296125387,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":39.459250432078804,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":false,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"bubble"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":35,"duration":2,"opacity":.8,"speed":2},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;

  




});
