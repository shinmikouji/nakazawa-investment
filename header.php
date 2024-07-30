<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2family=Noto+Sans+JP:wght@100..900&family=Yuji+Syuku&display=swap" rel="stylesheet">
  <title>NAKAZAWA Investment株式会社</title>
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="l-header__title">
      <a href="<?php echo esc_url(home_url('/')); ?>">NAKAZAWA Investment株式会社</a>
    </div>
    <nav class="pc-only">
      <ul>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li><a href="<?php echo get_post_type_archive_link('/'); ?>">事業内容</a></li>
        <li><a href="<?php echo esc_url(home_url('/')); ?>">会社概要</a></li>
        <li><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
      </ul>
    </nav>
    <div class="l-header__icon sp-only">
      <span class="line"></span>
      <span class="line"></span>
      <span class="line"></span>
    </div>
  </header>
  <div class="l-header__nav--sp sp-only">
    <nav>
      <div class="l-header__navArea--sp">
        <ul>
          <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li class="item"><a href="<?php echo get_post_type_archive_link('/'); ?>">事業内容</a></li>
          <li class="item"><a href="<?php echo esc_url(home_url('/')); ?>">会社概要</a></li>
          <li class="item"><a href="<?php echo esc_url(home_url('contact')); ?>">お問い合わせ</a></li>
        </ul>
      </div>
    </nav>
  </div>