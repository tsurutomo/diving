jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    //ナビバートグル
    $('.js-hamburger').on('click', function () {
      if ($('.js-hamburger').hasClass('is-open')) {
        $('.js-drawer-menu').fadeOut();
        $(this).removeClass('is-open');
      } else {
        $('.js-drawer-menu').fadeIn();
        $(this).addClass('is-open');
      }
    });
    $('.js-drawer-menu').on('click', function () {
      $('.js-drawer-menu').fadeOut();
      $('.js-hamburger').removeClass('is-open');
    });

  //swiper
    const mv_swiper = new Swiper(".js-fv-swiper", {
        loop: true,
        speed: 2000,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
    });

//キャンペーン
    var service_swiper = new Swiper(".js-campaign-swiper", {
        loop: true,
        speed: 1000,
        slidesPerView: 1.2,
        spaceBetween: 24,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 3.5,
                spaceBetween: 40
            }
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

//背景色の後に画像やテキストが表示
    var box = $('.color-box'),
    speed = 700;

    // .color-boxの付いた全ての要素に対して下記の処理を行う
    box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    // inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function(){
        if(counter == 0){
            $(this).delay(200).animate({'width':'100%'},speed,function(){
                    image.css('opacity','1');
                    $(this).css({'left':'0' , 'right':'auto'});
                    $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
        }
    });
    });


//ページトップ
    $(function () {
        const pageTop = $("#page-top");
        pageTop.hide();
        $(window).scroll(function () {
          if ($(this).scrollTop() > 120) {
            pageTop.fadeIn();
          } else {
            pageTop.fadeOut()
          }
        });
        pageTop.click(function () {
          $("body,html").animate(
            {
              scrollTop: 0,
            },
            200
          );
          return false;
        });
      });
});
