jQuery(function(){

  // wowの読み込み
  new WOW().init();

  // ハンバーガーボタン
  $('#js-buttonHamburger').click(function () {
    $('body').toggleClass('is-drawerActive');

    if ($(this).attr('aria-expanded') == 'false') {
      $(this).attr('aria-expanded', true);
    } else {
      $(this).attr('aria-expanded', false);
    }
    $('.click-nav').toggleClass('show');
  });

  /* ウィンドウサイズ768以下の処理を記述 */
  if (window.matchMedia('(max-width: 769px)').matches) {
    $('#js-buttonHamburger').fadeIn();
    $('.header-nav').addClass('res');
  } else {
    $('#js-buttonHamburger').fadeOut();
    $('.header-nav').removeClass('res');

  };

  // headerの背景色をスクロールで変える
  jQuery(window).on('scroll', function () {
    if ( jQuery(this).scrollTop() > 1) {
        jQuery('.header-wrapper').addClass('h-bg');
        jQuery('.breadcrumbs-wrapper').addClass('h-bg');

    } else {
        jQuery('.header-wrapper').removeClass('h-bg');
        jQuery('.breadcrumbs-wrapper').removeClass('h-bg');

    }
});

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
      arrows: false,
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
  
// slideの動くアニメーション
  var container;
  var camera, scene, renderer;
  var uniforms;

  init();
  animate();

  function init() {
      container = document.getElementById( 'container' );

      camera = new THREE.Camera();
      camera.position.z = 1;

      scene = new THREE.Scene();

      var geometry = new THREE.PlaneBufferGeometry( 2, 2 );

      uniforms = {
          time: { type: "f", value: 1.0 },
          resolution: { type: "v2", value: new THREE.Vector2() }
      };

      var material = new THREE.ShaderMaterial( {
          uniforms: uniforms,
          vertexShader: document.getElementById( 'vertexShader' ).textContent,
          fragmentShader: document.getElementById( 'fragmentShader' ).textContent
      } );

      var mesh = new THREE.Mesh( geometry, material );
      scene.add( mesh );

      renderer = new THREE.WebGLRenderer();
      renderer.setPixelRatio( window.devicePixelRatio );

      container.appendChild( renderer.domElement );

      onWindowResize();
      window.addEventListener( 'resize', onWindowResize, false );

  }

  function onWindowResize( event ) {
      renderer.setSize( window.innerWidth, window.innerHeight );
      uniforms.resolution.value.x = renderer.domElement.width;
      uniforms.resolution.value.y = renderer.domElement.height;
  }

  function animate() {
      requestAnimationFrame( animate );
      render();
  }

  function render() {
      uniforms.time.value += 0.05;
      renderer.render( scene, camera );
  }



});
