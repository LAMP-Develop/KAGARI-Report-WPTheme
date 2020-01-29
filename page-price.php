<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-gray-3">
<div class="container">

<div class="card mb-5">
<div class="card-body">
<h4 class="text-center h5 font-weight-bold mb-3">お試し期間</h4>
<p class="text-center m-0 h2 font-weight-bold">10<span class="h5 mx-1 font-weight-bold">日間</span>無料トライアル</p>
</div>
</div>

<h2 class="font-size-lg text-center text-dark font-weight-bold mb-4"><?php the_title(); ?></h2>

<ul class="nav nav-pills mb-2 justify-content-center font-weight-bold" id="pills-tab" role="tablist">
<li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
<a class="nav-link active" id="pills-y-tab" data-toggle="pill" href="#pills-y" role="tab" aria-controls="pills-y" aria-selected="true">年払い</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-hy-tab" data-toggle="pill" href="#pills-hy" role="tab" aria-controls="pills-hy" aria-selected="false">半年払い</a>
</li>
<li class="nav-item">
<a class="nav-link" id="pills-m-tab" data-toggle="pill" href="#pills-m" role="tab" aria-controls="pills-m" aria-selected="false">月払い</a>
</li>
</ul>
</div>
</section>

<section class="sec pt-0">
<div class="container">
<div class="tab-content position-relative mt-n3 mt-md-n5" id="pills-tabContent">
<div class="tab-pane fade show active pt-0 pb-4" id="pills-y" role="tabpanel" aria-labelledby="pills-y-tab">
<div class="card mb-4 overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<div class="card-title">
<h3 class="text-dark h5">基本的なレポート作成機能を<br>ご利用いただけるプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">4,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<p class="card-text">¥48,000/年間(税込)</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/report_price01.png" alt="KAGARI Report 料金">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_reportseo.svg" alt="KAGARI Report+SEO">
</div>
<div class="card-title">
<h3 class="text-dark h5">検索順位やキーワードを<br>分析できる上級者向けプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">7,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<p class="card-text">¥84,000/年間(税込)</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>検索順位/キーワードのレポーティング</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>ページごとのSEO分析</p>
<div class="mt-4">
<a class="btn btn-outline-primary" href="https://seo.kagari.ai/" target="_blank">KAGARI SEOについて詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/seo_price01.png" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>

<div class="tab-pane fade pt-0 pb-4" id="pills-hy" role="tabpanel" aria-labelledby="pills-hy-tab">
<div class="card mb-4 overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<div class="card-title">
<h3 class="text-dark h5">基本的なレポート作成機能を<br>ご利用いただけるプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">5,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<p class="card-text">¥30,000/年間(税込)</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/report_price01.png" alt="KAGARI Report 料金">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_reportseo.svg" alt="KAGARI Report+SEO">
</div>
<div class="card-title">
<h3 class="text-dark h5">検索順位やキーワードを<br>分析できる上級者向けプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">8,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<p class="card-text">¥48,000/年間(税込)</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>検索順位/キーワードのレポーティング</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>ページごとのSEO分析</p>
<div class="mt-4">
<a class="btn btn-outline-primary" href="https://seo.kagari.ai/" target="_blank">KAGARI SEOについて詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/seo_price01.png" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>

<div class="tab-pane fade pt-0 pb-4" id="pills-m" role="tabpanel" aria-labelledby="pills-m-tab">
<div class="card mb-4 overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_report.svg" alt="KAGARI Report">
</div>
<div class="card-title">
<h3 class="text-dark h5">基本的なレポート作成機能を<br>ご利用いただけるプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">6,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<!-- <p class="card-text">¥72,000/年間(税込)</p> -->
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/report_price01.png" alt="KAGARI Report 料金">
</div>
</div>
</div>
<div class="card overflow-hidden sec-bg-pricecard border-0 shadow">
<div class="row no-gutters">
<div class="col-md-5 bg-white p-md-2 p-lg-4">
<div class="card-body">
<div class="card-title">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/logo_reportseo.svg" alt="KAGARI Report+SEO">
</div>
<div class="card-title">
<h3 class="text-dark h5">検索順位やキーワードを<br>分析できる上級者向けプラン</h3>
<p class="text-dark font-weight-bold h4">¥<span class="h1 font-weight-bold mx-1">9,000</span>/月<span class="h6 ml-1">(税込)</span></p>
</div>
<!-- <p class="card-text">¥108,000/年間(税込)</p> -->
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>アクセス解析</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>レポーティング機能</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>AI改善提案</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>検索順位/キーワードのレポーティング</p>
<p class="card-text"><i class="fas fa-check mr-2 text-primary"></i>ページごとのSEO分析</p>
<div class="mt-4">
<a class="btn btn-outline-primary" href="https://seo.kagari.ai/" target="_blank">KAGARI SEOについて詳しく<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</div>
<div class="col-md-7 d-flex justify-content-center align-items-end text-center pb-3">
<img class="w-100" src="<?php echo $wp_url; ?>/lib/images/seo_price01.png" alt="KAGARI Marketing">
</div>
</div>
</div>
</div>
</div>

<div class="card mt-5 mb-4">
<div class="card-body">
<h4 class="text-center h5 font-weight-bold mb-4">選べるお支払い方法</h4>
<div class="row mx-0 justify-content-center">
<div class="col-md-4 text-md-center">
<svg width="206" height="62" viewBox="0 0 206 62" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M90.752 26.04C90.384 26.152 89.856 26.232 89.36 26.232H86.144L86.192 26.152C86.384 25.8 86.784 25.08 87.168 24.52L84.832 23.752C84.688 24.296 84.352 25.032 84.112 25.432C83.312 26.808 81.92 28.872 79.12 30.584L80.912 31.912C82.48 30.84 83.872 29.432 84.944 28.04H89.44C89.184 29.24 88.256 31.16 87.168 32.408C85.776 33.992 84 35.384 80.72 36.36L82.608 38.056C85.616 36.856 87.552 35.4 89.072 33.544C90.512 31.752 91.424 29.624 91.856 28.2C91.984 27.8 92.208 27.352 92.384 27.048L90.752 26.04ZM98.624 37.672C99.008 37.432 99.36 37.32 99.584 37.24C103.344 36.008 106.672 34.104 108.864 31.48L107.728 29.672C105.68 32.168 102.112 34.216 99.504 34.952V26.648C99.504 26.024 99.568 25.448 99.664 24.84H97.152C97.248 25.288 97.328 26.04 97.328 26.648V35.32C97.328 35.688 97.312 35.96 97.12 36.36L98.624 37.672ZM121.664 24.712L120.336 25.272C120.912 26.088 121.28 26.776 121.744 27.784L123.136 27.192C122.768 26.456 122.128 25.384 121.664 24.712ZM123.872 23.944L122.512 24.504C123.104 25.304 123.504 25.928 124.016 26.936L125.376 26.328C124.992 25.624 124.368 24.584 123.872 23.944ZM114.72 24.408L113.568 26.168C114.624 26.76 116.288 27.832 117.184 28.456L118.368 26.696C117.536 26.12 115.776 24.984 114.72 24.408ZM111.76 35.768L112.96 37.864C114.368 37.608 116.672 36.808 118.304 35.896C120.912 34.376 123.184 32.36 124.656 30.136L123.424 27.96C122.16 30.248 119.92 32.44 117.2 33.96C115.472 34.92 113.552 35.464 111.76 35.768ZM112.256 28.056L111.104 29.816C112.176 30.392 113.84 31.464 114.752 32.104L115.92 30.312C115.104 29.736 113.344 28.632 112.256 28.056ZM134.08 27.48L132.176 28.104C132.576 28.936 133.28 30.872 133.472 31.656L135.392 30.984C135.168 30.248 134.384 28.168 134.08 27.48ZM137.728 27.928C137.552 29.928 136.784 32.056 135.696 33.416C134.368 35.08 132.144 36.296 130.384 36.76L132.064 38.472C133.936 37.768 135.936 36.424 137.424 34.504C138.512 33.096 139.184 31.432 139.6 29.816C139.696 29.496 139.792 29.16 139.984 28.648L137.728 27.928ZM130.368 28.328L128.448 29.016C128.832 29.72 129.632 31.848 129.904 32.712L131.856 31.976C131.536 31.08 130.768 29.144 130.368 28.328ZM155.904 31.112C154.432 30.392 151.36 29.256 149.216 28.632V26.28C149.216 25.608 149.296 24.904 149.36 24.344H146.864C146.976 24.904 147.024 25.704 147.024 26.28V35.464C147.024 36.104 146.96 37.064 146.864 37.688H149.36C149.296 37.048 149.216 35.928 149.216 35.464V30.936C150.944 31.528 153.344 32.456 154.992 33.32L155.904 31.112ZM170.576 26.92C170.176 26.984 169.76 27.032 169.36 27.032H166.352C166.384 26.568 166.4 26.088 166.416 25.592C166.432 25.208 166.464 24.536 166.512 24.168H164.16C164.224 24.552 164.272 25.288 164.272 25.64C164.272 26.12 164.256 26.584 164.24 27.032H161.952C161.344 27.032 160.512 26.984 159.84 26.92V29.016C160.528 28.952 161.408 28.952 161.952 28.952H164.064C163.712 31.384 162.912 33.176 161.424 34.648C160.784 35.304 160 35.848 159.328 36.216L161.184 37.72C164.048 35.688 165.568 33.176 166.16 28.952H169.76C169.76 30.68 169.552 33.88 169.088 34.888C168.912 35.272 168.688 35.448 168.176 35.448C167.552 35.448 166.72 35.368 165.936 35.224L166.176 37.368C166.96 37.432 167.92 37.496 168.832 37.496C169.936 37.496 170.544 37.08 170.896 36.264C171.584 34.632 171.776 30.168 171.84 28.44C171.84 28.264 171.904 27.864 171.952 27.592L170.576 26.92ZM175.472 32.104C176.064 32.056 177.136 32.024 178.048 32.024H186.64C187.312 32.024 188.128 32.088 188.512 32.104V29.592C188.096 29.624 187.376 29.688 186.64 29.688H178.048C177.216 29.688 176.048 29.64 175.472 29.592V32.104ZM204.512 26.584C204.144 25.864 203.472 24.856 203.008 24.216L201.68 24.84C202.272 25.64 202.656 26.232 203.168 27.24L204.512 26.584ZM202.368 27.512C202 26.792 201.36 25.768 200.912 25.096L199.568 25.672C200.16 26.488 200.512 27.128 200.976 28.136L202.368 27.512ZM196.72 26.504C196.72 25.832 196.8 25.128 196.864 24.568H194.368C194.48 25.144 194.528 25.928 194.528 26.504V35.704C194.528 36.328 194.464 37.304 194.368 37.928H196.88C196.8 37.272 196.72 36.152 196.72 35.704V31.176C198.448 31.752 200.848 32.68 202.512 33.56L203.408 31.336C201.936 30.616 198.848 29.48 196.72 28.84V26.504Z" fill="#2E4369"/><path d="M61 14.8947C61 13.3158 59.6784 12 58.0925 12H3.90749C2.32159 12 1 13.3158 1 14.8947V22H61V14.8947Z" fill="#B4BED5"/><path d="M1 22V47.0943C1 48.6792 2.32159 50 3.90749 50H58.0925C59.6784 50 61 48.6792 61 47.0943V22" fill="#A7D8EB"/><path opacity="0.2" d="M19 12L57.0377 50H58.0943C59.6792 50 61 48.6806 61 47.0972V46.0417L26.9245 12H19ZM61 38.125V23.0833L49.9057 12H34.5849L61 38.125Z" fill="white"/><path d="M8.92952 37.8611H16.859M61 14.9028C61 13.3194 59.6784 12 58.0925 12H3.90749C2.32159 12 1 13.3194 1 14.9028V22.0278H61V14.9028V14.9028ZM1 22.0278V47.0972C1 48.6806 2.32159 50 3.90749 50H58.0925C59.6784 50 61 48.6806 61 47.0972V22.0278H1ZM8.92952 29.9444H29.0176H8.92952ZM46.9912 29.9444H53.0705H46.9912Z" stroke="#2D4267" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
<div class="col-md-4 text-md-center mt-md-0 mt-3">
<svg width="158" height="62" viewBox="0 0 158 62" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M84.032 23.944H79.328V25.384H84.032V23.944ZM84.608 26.088H78.528V27.592H84.608V26.088ZM84.08 28.312H79.28V29.768H84.08V28.312ZM79.28 31.928H84.08V30.504H79.28V31.928ZM82.48 34.216V36.056H80.832V34.216H82.48ZM84.096 32.712H79.232V38.168H80.832V37.544H84.096V32.712ZM87.44 34.184V33.432H90.752V34.184H87.44ZM90.752 31.48V32.2H87.44V31.48H90.752ZM92.528 30.136H85.696V38.36H87.44V35.416H90.752V36.584C90.752 36.76 90.704 36.824 90.496 36.824C90.288 36.84 89.632 36.84 89.04 36.824C89.248 37.24 89.472 37.88 89.536 38.344C90.56 38.344 91.312 38.328 91.84 38.072C92.384 37.832 92.528 37.416 92.528 36.616V30.136ZM89.888 28.168V27.528H92.864V26.248H89.888V25.672H93.104V24.312H89.888V23.448H88.08V24.312H84.992V25.672H88.08V26.248H85.392V27.528H88.08V28.168H84.608V29.528H93.392V28.168H89.888ZM99.76 32.232C97.856 33.336 95.792 34.488 94.464 35.144L95.648 36.888C97.04 36.088 98.816 35 100.4 33.976L99.76 32.232ZM99.536 31.016C99.04 30.184 97.936 29.032 97.04 28.216L95.584 29.24C96.464 30.088 97.536 31.336 97.984 32.136L99.536 31.016ZM106.928 28.008C106.304 28.936 105.312 30.056 104.416 30.92C103.824 29.96 103.312 28.936 102.928 27.864V27.704H109.104V25.864H107.328L108.064 25.032C107.392 24.52 106.048 23.816 105.088 23.368L103.984 24.568C104.672 24.92 105.536 25.416 106.192 25.864H102.928V23.464H100.992V25.864H94.96V27.704H100.992V36.04C100.992 36.328 100.88 36.424 100.576 36.424C100.256 36.424 99.248 36.44 98.272 36.392C98.56 36.952 98.848 37.848 98.928 38.392C100.352 38.408 101.376 38.344 102.048 38.008C102.72 37.704 102.928 37.176 102.928 36.056V31.768C104.224 34.152 105.952 36.104 108.192 37.304C108.512 36.76 109.136 35.992 109.6 35.608C107.984 34.872 106.592 33.736 105.456 32.344C106.432 31.48 107.648 30.28 108.608 29.176L106.928 28.008ZM121.504 34.456V35.032H114.656V34.456H121.504ZM114.656 36.76V36.136H121.504V36.76H114.656ZM112.816 38.44H114.656V37.96H121.504V38.424H123.424V33.24H112.816V38.44ZM118.88 27.416H121.456V28.024H118.88V27.416ZM118.88 25.512H121.456V26.104H118.88V25.512ZM123.344 29.128V27.416H125.168V26.104H123.344V24.408H118.88V23.4H116.976V24.408H112.464V25.512H116.976V26.104H110.832V27.416H116.976V28.024H112.288V29.128H116.976V29.688H111.936V30.84H116.976V31.416H110.816V32.744H125.168V31.416H118.88V30.84H124V29.688H118.88V29.128H123.344ZM133.04 31.96L132.912 30.28C132.208 30.424 131.504 30.552 130.8 30.696V28.248H132.848V26.488H130.8V23.448H128.944V26.488H126.688V28.248H128.944V31.048C128 31.208 127.152 31.368 126.448 31.464L126.848 33.336C127.488 33.208 128.192 33.048 128.944 32.888V36.28C128.944 36.536 128.848 36.616 128.608 36.632C128.384 36.632 127.6 36.632 126.88 36.6C127.12 37.112 127.36 37.896 127.424 38.392C128.64 38.392 129.488 38.328 130.048 38.04C130.608 37.736 130.8 37.272 130.8 36.296V32.472L133.04 31.96ZM141.648 37.672C141.2 35.768 139.936 32.872 138.72 30.632L137.04 31.224C137.664 32.456 138.304 33.88 138.816 35.24C137.472 35.4 136.128 35.56 134.864 35.688C135.792 32.456 136.736 28.04 137.328 24.2L135.248 23.864C134.816 27.736 133.84 32.584 132.896 35.912C132.272 35.976 131.712 36.024 131.216 36.072L131.632 38.056C133.744 37.752 136.64 37.384 139.408 36.968C139.552 37.48 139.68 37.96 139.76 38.376L141.648 37.672ZM146.192 25.608L143.76 25.576C143.856 26.056 143.872 26.728 143.872 27.176C143.872 28.152 143.904 29.992 144.048 31.448C144.496 35.704 146.016 37.272 147.744 37.272C149.024 37.272 150.016 36.296 151.072 33.544L149.472 31.624C149.168 32.872 148.544 34.728 147.792 34.728C146.8 34.728 146.32 33.176 146.096 30.888C146 29.752 145.984 28.552 146 27.528C146 27.096 146.08 26.168 146.192 25.608ZM154.112 25.944L152.096 26.616C153.824 28.568 154.672 32.296 154.912 34.84L157.008 34.04C156.832 31.608 155.616 27.784 154.112 25.944Z" fill="#2E4369"/><path d="M52 6.97285L46 1L40 5.0724L34 1L28 5.0724L22 1L16 5.0724L10 1V55.0271L16 61L22 56.9276L28 61L34 56.9276L40 61L46 56.9276L52 61V6.97285Z" fill="#E0E8F6"/><path opacity="0.15" d="M10 1V55.2727L16 61V4.81818L10 1Z" fill="#1A264C"/><path d="M17.9091 19.19H34H17.9091ZM17.9091 35.2081H34H17.9091ZM17.9091 27.0633H29.9091H17.9091ZM17.9091 43.0814H29.9091H17.9091ZM41.9091 19.19H43.8182H41.9091ZM41.9091 35.2081H43.8182H41.9091ZM41.9091 27.0633H43.8182H41.9091ZM41.9091 43.0814H43.8182H41.9091ZM52 6.97285L46 1L40 5.0724L34 1L28 5.0724L22 1L16 5.0724L10 1V55.0272L16 61L22 56.9276L28 61L34 56.9276L40 61L46 56.9276L52 61V6.97285Z" stroke="#2E4369" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
</div>
</div>
</div>
</div>

<div class="card">
<div class="card-body">
<h4 class="text-center h5 font-weight-bold mb-3">トライアルから<br class="d-md-none">本登録完了までのながれ</h4>
<p class="mt-4 mb-0 text-center">
<img class="img-fluid" src="<?php echo $wp_url; ?>/lib/images/trial_flow.svg" alt="トライアルから本登録完了までのながれ">
</p>
</div>
</div>

</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();
