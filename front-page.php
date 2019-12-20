<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="cta jumbotron position-relative overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-7 mb-4 mb-lg-0">
<h1 class="text-dark font-weight-bold mb-4">WEBサイトの<br>アクセス解析レポートを<br>AIが自動作成</h1>
<a class="btn btn-primary" href="https://reporting.kagari.ai/register" target="_blank" role="button"><i class="fab fa-google mr-2"></i>今すぐ無料トライアル</a>
</div>
<div class="col-lg-5 text-center pt-lg-5 pt-xl-0">
<img class="img mt-lg-n5" src="<?php echo $wp_url; ?>/lib/images/mv.png" srcset="<?php echo $wp_url; ?>/lib/images/mv.png 1x, <?php echo $wp_url; ?>/lib/images/mv@2x.png 2x" alt="レポート画像">
</div>
</div>
</div>
</section>
<section class="sec bg-success">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">WEBサイトの運用報告をKAGARIが効率化します</h2>
<div class="row justify-content-center">
<div class="row col-xl-10 px-0">
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/Icon_ga.svg" alt="Google Analytics">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">Google Analyticsと<br>連携するだけ</h3>
<p>タグの埋め込みは不要！お使いのGoogleアカウントと連携してすぐにご利用いただけます</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product#funclist" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ai.svg" alt="AI">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">改善施策を<br>AIが自動で提案</h3>
<p>数多くのサイトの解析を手掛けたノウハウに基づいて、的確な改善施策を自動で提案します</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product#funclist" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
<div class="col-md">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/Icon_report.svg" alt="レポート">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">そのまま使える<br>レポートが自動で完成</h3>
<p>報告業務にすぐ使えるレポートがそのまま印刷できるPDF形式でダウンロードできます</p>
<div class="text-center">
<a href="<?php echo $home; ?>/product#funclist" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray overflow-hidden">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">見やすく、使いやすいレポートを<br class="d-none d-md-block">すぐに作成します</h2>
<div class="row">
<div class="col-lg order-2 order-lg-1">
<div id="sample-btn" class="row text-center mx-0">
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100 active">
<span class="opacity-item opacity-bg-blue">
<i class="fas fa-list-alt opacity-color-blue"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">サマリー</p>
<p class="text-left m-0 d-none d-md-block">サイト全体の状態を知る</p>
</div>
</div>
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100">
<span class="opacity-item opacity-bg-yellow">
<i class="fas fa-users opacity-color-yellow"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">ユーザー属性</p>
<p class="text-left m-0 d-none d-md-block">サイトの訪問者の属性を知る</p>
</div>
</div>
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100">
<span class="opacity-item opacity-bg-purple-2">
<i class="fas fa-share-alt opacity-color-purple-2"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">流入元</p>
<p class="text-left m-0 d-none d-md-block">ユーザーの訪れる経路を知る</p>
</div>
</div>
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100">
<span class="opacity-item opacity-bg-green">
<i class="fas fa-pager opacity-color-green"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">ユーザー行動</p>
<p class="text-left m-0 d-none d-md-block">ページごとのアクセス状況を知る</p>
</div>
</div>
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100">
<span class="opacity-item opacity-bg-red">
<i class="fas fa-flag opacity-color-red"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">コンバージョン</p>
<p class="text-left m-0 d-none d-md-block">目標の達成度合いを知る</p>
</div>
</div>
<div class="col-6 col-md-4 p-1 p-md-2">
<div class="service-card bg-white rounded-lg px-3 py-3 py-md-4 h-100">
<span class="opacity-item opacity-bg-purple">
<i class="fas fa-ad opacity-color-purple"></i>
</span>
<p class="font-weight-bold h5 text-dark my-3">広告</p>
<p class="text-left m-0 d-none d-md-block">リスティング広告の状況を知る</p>
</div>
</div>
</div>
<div id="sample-txt" class="tab-content">
<p class="my-4 tab-pane active">サイト全体のアクセス状況をまとめたページです。訪問者数の変化を示したグラフや、基本的な指標の数値を確認できます。</p>
<p class="my-4 tab-pane">サイトの訪問者の属性です。性別や利用デバイスの割合、年齢層、アクセス元の地域などを確認できます。</p>
<p class="my-4 tab-pane">訪問者がサイトに訪れた経路です。検索や他のサイトからのリンクなどの経路の割合を確認できます。SNSと他のサイトからのリンクはその内訳の上位を確認できます。</p>
<p class="my-4 tab-pane">サイト内のページごとのアクセス状況です。ページごとのページビュー数や直帰率などから、人気のあるページを確認できます。</p>
<p class="my-4 tab-pane">サイト全体とページごとのコンバージョンの状況です。設定した目標に達成できているかを流入元ごとに確認できます。</p>
<p class="my-4 tab-pane">リスティング広告の状況です。サイト全体の広告費用や検索語句ごとの広告効果を確認できます。</p>
</div>
<div class="row justify-content-between mt-4 mx-0">
<div class="col-md-5 px-2">
<a href="<?php echo $home; ?>/product/" class="btn btn-outline-primary">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
<div class="col-md-7 px-2 mt-3 mt-md-0 text-md-right">
<a href="https://kagari.ai/report-demo/pdf/kagari-reports.pdf" target="_blank" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-down mr-2"></i>サンプルをダウンロード<small>(PDF)</small></a>
</div>
</div>
</div>
<div class="col-lg order-1 order-lg-2">
<div id="sample" class="tab-content text-center mb-3">
<img class="img-fluid shadow tab-pane active" src="<?php echo $wp_url; ?>/lib/images/sample01.png" srcset="<?php echo $wp_url; ?>/lib/images/sample01.png 1x, <?php echo $wp_url; ?>/lib/images/sample01@2x.png 2x" alt="サマリー">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample02.png" srcset="<?php echo $wp_url; ?>/lib/images/sample02.png 1x, <?php echo $wp_url; ?>/lib/images/sample02@2x.png 2x" alt="ユーザー属性">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample03.png" srcset="<?php echo $wp_url; ?>/lib/images/sample03.png 1x, <?php echo $wp_url; ?>/lib/images/sample03@2x.png 2x" alt="流入元分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample04.png" srcset="<?php echo $wp_url; ?>/lib/images/sample04.png 1x, <?php echo $wp_url; ?>/lib/images/sample04@2x.png 2x" alt="ユーザー行動分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample05.png" srcset="<?php echo $wp_url; ?>/lib/images/sample05.png 1x, <?php echo $wp_url; ?>/lib/images/sample05@2x.png 2x" alt="コンバージョン分析">
<img class="img-fluid shadow tab-pane" src="<?php echo $wp_url; ?>/lib/images/sample06.png" srcset="<?php echo $wp_url; ?>/lib/images/sample06.png 1x, <?php echo $wp_url; ?>/lib/images/sample06@2x.png 2x" alt="広告分析">
</div>
</div>
</div>
</section>
<section class="sec sec-bg-dark">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">レポートを自動化して様々な課題を解決します</h2>
<div class="row justify-content-center">
<div class="row col-xl-10 px-0">
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/customer01.svg" alt="制作会社">
</div>
<p class="text-center font-weight-bold text-dark h4">制作会社</p>
<p class="text-center text-dark">営業担当者様</p>
<p class="text-left m-0">レポート作成を効率化し、定期的に改善提案をすることで継続受注につながります。</p>
</div>
</div>
</div>
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/customer02.svg" alt="事業会社">
</div>
<p class="text-center font-weight-bold text-dark h4">事業会社</p>
<p class="text-center text-dark">WEB担当者様</p>
<p class="text-left m-0">伝えにくかった解析レポートをお客様に簡潔に伝えやすくなります。</p>
</div>
</div>
</div>
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/customer03.svg" alt="EC運営会社">
</div>
<p class="text-center font-weight-bold text-dark h4">EC運営会社</p>
<p class="text-center text-dark">WEB担当者様</p>
<p class="text-left m-0">サイト全体の解析をひと目でわかりやすく見ることができ、手軽にアクセス解析ができます。</p>
</div>
</div>
</div>
</div>
</div>

</div>
</section>
<!-- <section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">業種・業態を問わず様々なお客様に<br class="d-sm-block d-none">ご利用いただいています</h2>
<?php get_template_part('works'); ?>
<div class="mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/works/" role="button">すべての事例をみる<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
<div class="d-md-flex d-none justify-content-between align-items-center mt-5">
<?php for ($i=1; $i<=8; $i++): ?>
<div class="col-md col-3 text-center mx-md-3 mx-2">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/slide_logo0<?php echo $i; ?>.png" alt="導入実績<?php echo $i; ?>">
</div>
<?php endfor; ?>
</div>
</section> -->
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">セミナー情報</h2>
<ul class="list-group">
<?php
$arg = [
  'posts_per_page' => 5,
  'orderby' => 'date',
  'order' => 'DESC',
  'category_name' => 'seminar'
];
$posts = get_posts($arg);
foreach ($posts as $post):
setup_postdata($post);
$t = get_the_title();
$time = get_field('seminar_time', get_the_ID());
$p = get_field('seminar_url', get_the_ID()); ?>
<li class="list-group-item rounded-0">
<a class="row mx-0" href="<?php echo $p; ?>" class="text-decoration-none" target="_blank" rel="nofollow">
<time class="px-md-3 px-0 col-md-2" datetime="<?php the_time('Y-m-d'); ?>" class="d-block text-secondary mb-1"><?php echo $time; ?></time>
<p class="px-md-3 px-0 col-md-10 m-0 text-dark"><?php echo $t; ?></p>
</a>
</li>
<?php endforeach; wp_reset_postdata(); ?>
</ul>
<div class="text-center mt-5">
<a href="<?php echo $home; ?>/seminar/" class="btn btn-outline-primary">すべてのセミナーを見る<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<section class="sec sec-bg-orange">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">さらにWEBサイトを<br class="d-sm-none d-block">改善したい方に</h2>
<div class="card mb-4 overflow-hidden sec-bg-gray border-0 shadow position-relative">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4 position-static">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_seo.svg" alt="KAGARI SEO">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">ページごとの比較に特化した<br class="d-xl-block d-none">SEO流入分析ツール</h3>
</div>
<p class="card-text">Google AnalyticsとSearch Consoleのデータを1つの画面で管理。大量のページを一度に解析できます。</p>
<div class="mt-4">
<a href="https://seo.kagari.ai" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center px-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_seo.png" srcset="<?php echo $wp_url; ?>/lib/images/ui_preview_seo.png 1x, <?php echo $wp_url; ?>/lib/images/ui_preview_seo@2x.png 2x" alt="KAGARI SEO">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-gray border-0 shadow position-relative">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4 position-static">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_consulting.svg" alt="KAGARI Marketing">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">KAGARIのデータを活用した<br class="d-xl-block d-none">コンテンツマーケティング</h3>
</div>
<p class="card-text">KAGARIの解析データに基づいて、貴社の成長に合わせた最適なプランニングやコンテンツ制作を行います。</p>
<div class="mt-4">
<a href="https://marketing.kagari.ai" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center px-3 py-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_consulting.svg" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();
