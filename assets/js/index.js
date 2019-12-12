// CSSインポート
import '../scss/style.scss';

// JSインポート
import '../vendor/font-awesome/js/all.min.js';
import 'bootstrap';

// サンプル切り替え
$('#sample-btn .service-card').click(function(){
	var num = $('#sample-btn .service-card').index(this);
  $('#sample-txt p').removeClass('active').eq(num).addClass('active');
  $('#sample img').removeClass('active').eq(num).addClass('active');
  $('.service-card').removeClass('active');
  $(this).addClass('active');
});
