"use strict";

jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

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
      setTimeout(function () {
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
  var mv_swiper = new Swiper(".js-fv-swiper", {
    loop: true,
    speed: 2000,
    effect: "fade",
    fadeEffect: {
      crossFade: true
    },
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    }
  });

  //キャンペーン
  var service_swiper = new Swiper(".js-campaign-swiper", {
    loop: true,
    speed: 1000,
    slidesPerView: 1.2,
    spaceBetween: 24,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false
    },
    breakpoints: {
      768: {
        slidesPerView: 3.5,
        spaceBetween: 40
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });

  //背景色の後に画像やテキストが表示
  var box = $('.color-box'),
    speed = 700;

  // .color-boxの付いた全ての要素に対して下記の処理を行う
  box.each(function () {
    $(this).append('<div class="color"></div>');
    var color = $(this).find($('.color')),
      image = $(this).find('img');
    var counter = 0;
    image.css('opacity', '0');
    color.css('width', '0%');
    // inviewを使って背景色が画面に現れたら処理をする
    color.on('inview', function () {
      if (counter == 0) {
        $(this).delay(200).animate({
          'width': '100%'
        }, speed, function () {
          image.css('opacity', '1');
          $(this).css({
            'left': '0',
            'right': 'auto'
          });
          $(this).animate({
            'width': '0%'
          }, speed);
        });
        counter = 1;
      }
    });
  });

  //ページトップ

  var pageTop = $("#page-top");
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
      scrollTop: 0
    }, 500);
    return false;
  });

  //モーダル
  $(document).ready(function () {
    // モーダルを開く処理
    $(".js-modal-open").on("click", function (e) {
      e.preventDefault();

      // クリックされた画像のsrcとaltを取得
      var imgSrc = $(this).find("img").attr("src");
      var imgAlt = $(this).find("img").attr("alt");
      var isVertical = $(this).find("img").hasClass("vertical"); // 縦長かどうか判定

      // モーダル内の画像に反映
      $(".modal__content img").attr("src", imgSrc);
      $(".modal__content img").attr("alt", imgAlt);

      // 縦長か横長かに応じてクラスを変更
      if (isVertical) {
        $(".modal__content").addClass("modal__content--vertical");
      } else {
        $(".modal__content").removeClass("modal__content--vertical");
      }

      // モーダルを表示
      $(".js-modal").fadeIn();
      $("html, body").css("overflow", "hidden"); // 背景のスクロールを無効化
    });

    // モーダルの外側をクリックして閉じる処理
    $(".js-modal").on("click", function (e) {
      if ($(e.target).closest(".modal__content").length === 0) {
        $(this).fadeOut();
        $("html, body").css("overflow", "initial"); // 背景のスクロールを再有効化
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

//ナビメニューからタブへ飛ぶ時
$(document).ready(function () {
  var headerHeight = 90; // ヘッダーの高さを指定
  // ページ読み込み時にURLのハッシュを確認
  $(window).on('load', function () {
    var currentHash = window.location.hash.substring(1); // 現在のURLのハッシュを取得（#を除く）
    if (currentHash) {
      setTimeout(function () {
        activateTab(currentHash); // 遅延させて処理を実行
      }, 100); // 100ミリ秒の遅延を入れる
    }
  });
  // タブリンクをクリックしたときの処理
  $('.js-tab-link').on('click', function (event) {
    var targetPage = $(this).attr('href').split('#')[0]; // リンク先のページ部分（information.htmlなど）を取得
    var tabID = $(this).attr('href').split('#')[1]; // タブIDを取得
    // 現在のページとリンク先が同じ場合のみ、スムーススクロールを実行
    if (targetPage === "" || window.location.pathname.endsWith(targetPage)) {
      event.preventDefault(); // 同一ページの時のみリンク動作を無効化
      activateTab(tabID); // タブをアクティブにする
    }
  });
  // タブをアクティブにする関数
  function activateTab(tabID) {
    // すべてのタブメニューからis-activeクラスを削除
    $('.js-tab-menu').removeClass('is-active');

    // 対応するタブメニューアイテムにis-activeクラスを追加
    var $targetTabMenuItem = $('.js-tab-menu[data-number="' + tabID + '"]');
    if ($targetTabMenuItem.length) {
      $targetTabMenuItem.addClass('is-active');
      // スムーススクロールさせる（ヘッダー分の高さを考慮して90px下げる）
      $('html, body').animate({
        scrollTop: $targetTabMenuItem.offset().top - headerHeight
      }, 500); // 800ミリ秒でスクロール
    }
  }
});

//アコーディオン
$('.js-accordion-title').on('click', function () {
  $(this).next().slideToggle();
  $(this).toggleClass('is-open');
});

//ブログページ・アーカイブをクリックしたら開く
$(document).ready(function () {
  $('.archive__year').on('click', function () {
    // クリックされた要素がis-activeかどうかを判定
    if ($(this).hasClass('is-active')) {
      // すでにis-activeの場合、is-activeを外して月を隠す
      $(this).removeClass('is-active');
      $(this).siblings('.archive__month').slideUp();
    } else {
      // is-activeではない場合、他の要素からis-activeを削除して月を非表示
      $('.archive__year').removeClass('is-active');
      $('.archive__month').slideUp();
      // クリックされた要素にis-activeを追加して、月を表示
      $(this).addClass('is-active');
      $(this).siblings('.archive__month').slideDown();
    }
  });
});

  //送信ボタンを押した時のみバリデーションメッセージ表示
  jQuery(".form-submit").click(function () {
    jQuery(".wpcf7 form .wpcf7-error__message").addClass("is-active");
  });

});
