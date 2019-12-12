<?php
$home = esc_url(home_url());
$wp_url = get_template_directory_uri();
get_header(); ?>
<section class="sec sec-bg-dark">
<div class="container">
<h2 class="h5 text-center text-white font-weight-bold mb-4"><?php the_title(); ?></h2>
<h2 class="font-size-lg text-center text-white font-weight-bold mb-4 mb-md-2">様々な業種・業界のお役に立ちます</h2>
</div>
</section>
<section class="sec pt-0">
<div class="container">
<div class="position-relative mt-n5 card border-0 bg-white p-md-2 shadow-sm mb-3 mb-md-4">
<div class="card-body">
<div class="card-title d-flex align-items-center mb-0">
<div class="mr-3">
<img src="<?php echo $wp_url; ?>/lib/images/customer01.svg" alt="制作会社">
</div>
<div class="txt">
<h4 class="text-dark font-weight-bold">制作会社</h4>
<p class="text-dark lead m-0">営業担当者様</p>
</div>
</div>
</div>
</div>
<div class="row align-items-stretch mx-0">
<div class="col-md bg-white p-md-5 p-4 border rounded-lg mr-md-4 mb-3 mb-md-0">
<h5 class="text-dark font-weight-bold mb-3">レポート作成に時間がかかりすぎる</h5>
<p>契約書の作成に時間をとられている。以前の契約書のひな形を使い回しているため、ミスが起きやすい。</p>
<p class="text-center">
<i data-feather="chevrons-down" class="text-success"></i>
</p>
<p class="m-0">ひな形をテンプレートとして登録することで、常に最新のひな形から契約書作成が可能です。フォームを埋めるだけで、ミス無く契約書が完成します。</p>
</div>
<div class="col-md bg-white p-md-5 p-4 border rounded-lg">
<h5 class="text-dark font-weight-bold mb-3">Webサイト運用業務に付加価値をつけたい</h5>
<p>契約書の作成に時間をとられている。以前の契約書のひな形を使い回しているため、ミスが起きやすい。</p>
<p class="text-center">
<i data-feather="chevrons-down" class="text-success"></i>
</p>
<p class="m-0">ひな形をテンプレートとして登録することで、常に最新のひな形から契約書作成が可能です。フォームを埋めるだけで、ミス無く契約書が完成します。</p>
</div>
</div>
</div>
</section>

<section class="sec pt-0">
<div class="container">
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4">その他の活用事例</h2>
<div class="card border-0 bg-white p-md-2 shadow-sm mb-3 position-relative">
<div class="card-body">
<div class="row no-gutters">
<div class="col-11 card-title d-flex align-items-center mb-0">
<div class="mr-3">
<img src="<?php echo $wp_url; ?>/lib/images/customer02.svg" alt="制作会社">
</div>
<div class="txt">
<h4 class="text-dark font-weight-bold">事業会社</h4>
<p class="text-dark lead m-0">WEB担当者様</p>
</div>
</div>
<div class="col-1 d-flex align-items-center justify-content-end position-static">
<a href="<?php echo $home; ?>/case-study/" class="stretched-link"><i data-feather="chevron-right" color="#2E4369"></i></a>
</div>
</div>
</div>
</div>
<div class="card border-0 bg-white p-md-2 shadow-sm position-relative">
<div class="card-body">
<div class="row no-gutters">
<div class="col-11 card-title d-flex align-items-center mb-0">
<div class="mr-3">
<img src="<?php echo $wp_url; ?>/lib/images/customer03.svg" alt="EC運営会社">
</div>
<div class="txt">
<h4 class="text-dark font-weight-bold">EC運営会社</h4>
<p class="text-dark lead m-0">WEB担当者様</p>
</div>
</div>
<div class="col-1 d-flex align-items-center justify-content-end position-static">
<a href="<?php echo $home; ?>/case-study/" class="stretched-link"><i data-feather="chevron-right" color="#2E4369"></i></a>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="sec pt-0">
<div class="container">
<h2 class="font-size-lg text-center text-dark font-weight-bold mb-md-5 mb-4">導入いただいた企業様の事例</h2>
<?php get_template_part('works'); ?>
<div class="mt-4 text-center">
<a class="btn btn-outline-primary" href="<?php echo $home; ?>/works/" role="button">すべての事例をみる<i class="fas fa-chevron-right ml-2"></i></a>
</div>
</div>
</section>
<?php get_template_part('cta'); ?>
<?php get_footer();
