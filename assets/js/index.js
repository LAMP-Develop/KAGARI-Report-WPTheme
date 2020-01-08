// CSSインポート
import '../scss/style.scss';

// JSインポート
import '../vendor/font-awesome/js/all.min.js';
import 'bootstrap';

// スムーススクロール
$('a[href^=#]' + 'a:not(".nav-link")').on('click', function() {
  var speed = 500;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  $('html, body').animate({
    scrollTop: position
  }, speed, 'swing');
  return false;
});

// サンプル切り替え
$('#sample-btn .service-card').click(function() {
  var num = $('#sample-btn .service-card').index(this);
  $('#sample-txt p').removeClass('active').eq(num).addClass('active');
  $('#sample img').removeClass('active').eq(num).addClass('active');
  $('.service-card').removeClass('active');
  $(this).addClass('active');
});

// ドロップダウン
const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});