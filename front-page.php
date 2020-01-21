<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section id="mv" class="cta jumbotron position-relative overflow-hidden">
<div class="container">
<div class="row">
<div class="col-lg-7 mb-4 mb-lg-0">
<h1 class="text-dark font-weight-bold mb-4">WEBサイトの<br>アクセス解析レポートを<br>30秒で自動作成</h1>
<p>KAGARI Reportは、アクセス解析レポートが<br>自動作成できるWEB担当者向け業務効率化ツールです。</p>
<a class="btn btn-primary" href="https://analysis.kagari.ai/register" target="_blank" role="button"><i class="fab fa-google mr-2"></i>今すぐ無料トライアル</a>
<a class="btn btn-outline-primary ml-lg-2 mt-lg-0 mt-2" href="#sample-pdf" role="button">サンプルを見る</a>
</div>
<div class="col-lg-5 text-center">
<img class="img mt-lg-3" src="<?php echo $wp_url; ?>/lib/images/mv.png" srcset="<?php echo $wp_url; ?>/lib/images/mv.png 1x, <?php echo $wp_url; ?>/lib/images/mv@2x.png 2x" alt="レポート画像">
</div>
</div>
</div>
</section>
<section class="sec bg-success">
<div class="container">
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">時間と手間がかかるアクセス解析レポート作成作業を自動化</h2>
<div class="row justify-content-center">
<div class="row col-xl-10 px-0">
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm position-relative">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ga.svg" alt="Google Analytics">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">Google Analyticsと<br>連携するだけ</h3>
<p>タグの埋め込みは不要！お使いのGoogleAnalyticsアカウントと連携してすぐにご利用いただけます</p>
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
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_report.svg" alt="レポート">
</div>
<h3 class="font-weight-bold text-center h5 text-dark">そのまま使えるレポートを<br>指定の日時にメールで送信</h3>
<p>報告業務に使えるPDF形式のレポートが指定の日時にメールで送信もしくは管理画面からダウンロードすることができます。</p>
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
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ai.svg" alt="AI">
</div>
<h3 class="card-title font-weight-bold text-center h5 text-dark">解析結果をAIが<br>自動で解説</h3>
<p>数多くのサイトの解析を手掛けたノウハウに基づいて、各項目の総評コメントを自動で出力します。</p>
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
<section id="sample-pdf" class="sec sec-bg-gray overflow-hidden">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">見やすくてわかりやすいレポートを<br class="d-none d-md-block">すぐにお届け</h2>
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
<p class="text-left m-0 d-none d-md-block">ユーザーが訪れた経路を知る</p>
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
<h2 class="font-size-lg text-white text-center font-weight-bold mb-md-5 mb-4">アクセス解析を効率化することであらゆる効果の向上に</h2>
<div class="row justify-content-center">
<div class="row col-xl-10 px-0">
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/customer01.svg" alt="事業会社">
</div>
<p class="text-center font-weight-bold text-dark h4">事業会社</p>
<p class="text-center text-dark">WEB担当者様</p>
<p class="text-left m-0">見方がわからなかったアクセス解析を簡単にわかりやすく実施できることで課題の発見につながります。</p>
</div>
</div>
</div>
<div class="col-md mb-md-0 mb-3">
<div class="card h-100 border-0 shadow-sm">
<div class="card-body">
<div class="text-center mt-3 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/customer02.svg" alt="制作・広告会社">
</div>
<p class="text-center font-weight-bold text-dark h4">制作・広告会社</p>
<p class="text-center text-dark">営業担当者様</p>
<p class="text-left m-0">定期的なレポート報告による顧客満足度の向上、クライアントへの新たな提案機会の創出につながります。</p>
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
<p class="text-center text-dark">マーケティング担当者様</p>
<p class="text-left m-0">手間がかかる社内報告用のレポートを自動化することで作業時間を大幅に削減できます。</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-4 mb-3">導入事例</h2>
<p class="text-center">個人の方から、有名な大企業まで、業種業界を問わず多くのサイトでご利用いただいています。</p>
</div>
<div class="d-flex justify-content-between align-items-center flex-wrap mt-5">
<?php for ($i=1; $i<=4; $i++): ?>
<div class="col-md col-6 text-center mx-md-3 mx-0 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/slide_logo0<?php echo $i; ?>.png" alt="導入実績<?php echo $i; ?>">
</div>
<?php endfor; ?>
</div>
<div class="d-flex justify-content-between align-items-center flex-wrap">
<?php for ($i=5; $i<=8; $i++): ?>
<div class="col-md col-6 text-center mx-md-3 mx-0 mb-4">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/slide_logo0<?php echo $i; ?>.png" alt="導入実績<?php echo $i; ?>">
</div>
<?php endfor; ?>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<h2 class="font-size-lg text-dark text-center font-weight-bold mb-md-5 mb-4">セミナー情報</h2>
<ul class="list-group">
<?php
$url = "https://kagari.ai/wp-json/wp/v2/seminar?_embed&filter[posts_per_page]=3";
$json = file_get_contents($url);
$arr = json_decode($json, true);
foreach ($arr as $data):
$title = $data["title"]["rendered"];
$date = date('Y-m-d', strtotime($data["date"]));
$link = $data["link"];
$thum = $data["_embedded"]["wp:featuredmedia"][0]["media_details"]["sizes"]["medium"]["source_url"];
?>
<li class="list-group-item rounded-0">
<a class="row mx-0" href="<?php echo $link; ?>" class="text-decoration-none" target="_blank" rel="nofollow">
<!-- <time class="px-md-3 px-0 col-md-2" datetime="<?php echo $date; ?>" class="d-block text-secondary mb-1"><?php echo $date; ?></time> -->
<p class="px-md-3 px-0 col-md-10 m-0 text-dark"><?php echo $title; ?></p>
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
<h3 class="text-dark font-weight-bold">ページ毎のSEO分析に特化した<br class="d-xl-block d-none">マーケティングツール</h3>
</div>
<p class="card-text">サイトにあるすべてのページの検索クエリと検索順位を可視化し、効率的にSEO分析を行うことができるツールです。</p>
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
<h3 class="text-dark font-weight-bold">データからCVを創出する<br class="d-xl-block d-none">WEBコンサルティングサービス</h3>
</div>
<p class="card-text">KAGARIで培ったデータと200社以上を支援してきたノウハウをいかして貴社サイトのCV増加のためのコンサルティングを実施します。</p>
<div class="mt-4">
<a href="https://consulting.kagari.ai" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
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
