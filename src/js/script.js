jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

    //ハンバーガーメニュー
    $('.js-hamburger').on('click', function () {
        if ($('.js-header').hasClass('is-open')) {
            $('.js-header').removeClass('is-open');
        } else {
            $('.js-header').addClass('is-open');
        }
        if ($('.js-hamburger').hasClass('is-open')) {
            $('body').removeClass('sp-nav-open');
            $(this).removeClass('is-open');
            setTimeout(function() {
            $('.js-drawer-menu').fadeOut();
        }, 100);
        } else {
            $('body').addClass('sp-nav-open');
            $(this).addClass('is-open');
            $('.js-drawer-menu').fadeIn();
        }
    });
    $('.js-drawer-menu').on('click', function () {
        $('body').removeClass('sp-nav-open');
        $('.js-hamburger').removeClass('is-open');
        $('.js-drawer-menu').fadeOut();
        $('.js-header').removeClass('is-open');
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

const pageTop = $("#page-top");
    pageTop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 120) {
            pageTop.fadeIn();
        } else {
            pageTop.fadeOut();
        }
    });
    pageTop.click(function () {
        $("body,html").animate({
            scrollTop: 0,
        },500
        );
        return false;
    });
});


$(document).ready(function() {
    // モーダルを開く処理
    $(".js-modal-open").each(function() {
        $(this).on("click", function(e) {
            e.preventDefault(); // デフォルトのアクション（リンクを辿るなど）を防止
            var target = $(this).data("target"); // data-target属性からターゲットモーダルのIDを取得
            var modal = document.getElementById(target); // IDでモーダル要素を取得
            $(modal).fadeIn(); // フェードイン効果でモーダルを表示
            $("html, body").css("overflow", "hidden"); // ページのスクロールを無効にする
        });
    });

    // モーダルの外側（背景）をクリックしてモーダルを閉じる処理
    $(".js-modal").on("click", function(e) {
        if ($(e.target).closest(".modal__content").length === 0) {
            $(this).fadeOut(); // フェードアウト効果でモーダルを非表示
            $("html, body").css("overflow", "initial"); // ページのスクロールを再度有効にする
        }
    });
});

//タブメニュー
$('.js-tab-menu').on('click', function () {
    $('.js-tab-menu').removeClass('is-active');
    $('.js-tab-content').removeClass('is-active');
    $(this).addClass('is-active');
    var number = $(this).data("number");
    $('#' + number).addClass('is-active');
});

//アコーディオン
$('.js-accordion-title').on('click', function () {
    $(this).next().slideToggle();
    $(this).toggleClass('is-open');
});

