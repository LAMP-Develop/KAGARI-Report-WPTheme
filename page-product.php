<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray overflow-hidden">
<div class="container">
<h2 class="h5 text-center text-dark font-weight-bold mb-4"><?php the_title(); ?></h2>
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4">サイトの解析レポート業務に必要な機能を厳選しました</h2>
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
<div class="mt-3 text-center">
<a href="https://kagari.ai/report-demo/pdf/kagari-reports.pdf" target="_blank" class="btn btn-primary"><i class="fas fa-arrow-alt-circle-down mr-2"></i>サンプルをダウンロード</a>
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
</div>
</section>
<section id="funclist" class="sec sec-bg-gray-3">
<div class="container">
<div class="card mb-4 overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-center">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ga.svg" alt="グラフ">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">Google Analyticsと連携するだけ</h3>
</div>
<p class="card-text m-0">Google Analyticsをご利用のGoogleアカウントと連携するだけでご利用いただけます。データの取得などを待つことなく、登録後すぐにレポート作成機能をご利用いただけます。</p>
</div>
</div>
<div class="col-md-5 text-center p-md-4 p-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/cooperation.png" srcset="<?php echo $wp_url; ?>/lib/images/cooperation.png 1x, <?php echo $wp_url; ?>/lib/images/cooperation@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card mb-4 overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-center">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_ai.svg" alt="AI">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">AIが状況の解説</h3>
</div>
<p class="card-text m-0">数多くのサイトの解析を手掛けたノウハウに基づいて、AIが状況の解説をします。AIの総括コメントと提案が自動で入力されるので、そのまま印刷して報告業務にご利用いただけます。</p>
</div>
</div>
<div class="col-md-5 text-center p-md-4 p-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/improvement.png" srcset="<?php echo $wp_url; ?>/lib/images/improvement.png 1x, <?php echo $wp_url; ?>/lib/images/improvement@2x.png 2x" alt="Google Analyticsと連携するだけ">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-gray border-0 shadow">
<div class="row no-gutters align-items-end">
<div class="col-md-7 bg-white p-md-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/icon_report.svg" alt="レポート">
</div>
<div class="card-title">
<h3 class="text-dark font-weight-bold">そのまま使えるレポートが自動で完成</h3>
</div>
<p class="card-text m-0">レポートはPDF形式で作成されるので、重いソフトを開くことなくそのまま印刷することができます。毎月のレポートをメールで自動送信できるので、レポート作成の手間を大幅に削減できます。</p>
</div>
</div>
<div class="col-md-5 text-center px-md-4 px-3 pt-md-4 pt-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/report.png" srcset="<?php echo $wp_url; ?>/lib/images/report.png 1x, <?php echo $wp_url; ?>/lib/images/report@2x.png 2x" alt="そのまま使えるレポートが自動で完成">
</div>
</div>
</div>
</div>
</section>
<section class="sec sec-bg-gray">
<div class="container">
<div class="row mx-0">
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="mail" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">メールで自動送信</p>
<p class="m-0">レポートを毎月自動で任意のメールアドレスで受け取れます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="repeat" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">月々何度でも作成可能</p>
<p class="m-0">レポート作成に回数制限がないので、何度でもご利用いただけます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="calendar" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">分析期間を指定</p>
<p class="m-0">自由に分析期間を指定できるので、週次や月次レポートを作成できます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="trending-up" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">前の期間のデータと比較</p>
<p class="m-0">先月や先週のデータと比較してアクセス状況の変化を知ることができます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="message-circle" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">コメントを自由に編集</p>
<p class="m-0">AIのコメントを自由に編集してレポートに反映することができます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="award" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">必要な情報を厳選</p>
<p class="m-0">経験とノウハウに基づいて、解析レポートに必要な情報を厳選しています。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="hexagon" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">企業ロゴを表紙に表示</p>
<p class="m-0">自由にロゴを登録して、レポートの表紙に載せることができます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="wind" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">登録してすぐに使える</p>
<p class="m-0">登録後すぐにデータが反映されるので、待たずにご利用いただけます。</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 p-1 p-md-2">
<div class="d-flex justify-content-start align-items-stretch bg-white rounded-lg p-md-4 p-3 h-100">
<div class="mr-3">
<i data-feather="smile" class="feather-card"></i>
</div>
<div class="txt">
<p class="font-weight-bold mb-2 h5 text-dark">用語の解説</p>
<p class="m-0">専門知識がなくても読みやすいように、用語の説明がレポートに表示されます。</p>
</div>
</div>
</div>
</div>

<h2 class="font-size-lg text-center text-dark font-weight-bold my-5">SEO分析を行いたい方に</h2>
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
<p class="card-text">クライアントに提出するレポートを自動作成して業務効率化。定期的な改善提案で継続受注につなげる。</p>
<div class="mt-4">
<a href="http://lamp-inc.sakura.ne.jp/kagari_re/seo/" target="_blank" class="stretched-link">もっと詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center px-3">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/ui_preview_seo.png" srcset="<?php echo $wp_url; ?>/lib/images/ui_preview_seo.png 1x, <?php echo $wp_url; ?>/lib/images/ui_preview_seo@2x.png 2x" alt="KAGARI SEO">
</div>
</div>
</div>

</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();
