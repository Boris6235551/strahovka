<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package strahovka
 */
?>
<!DOCTYPE html>
<html>
<head>
  <title>404</title>
  <link href="<?php echo get_template_directory_uri(); ?>/css/error-f47c780e2d23144f12bc738246b1bbed.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="all">
  <div class="header">
    <div class="header_content">
      <h1 class="logo"><a href="/"><span></span>Strahovka.by</a></h1>
      <a href="/fiz/auto" class="type_services auto_ico"></a>
      <a href="/fiz/house" class="type_services house_ico"></a>
      <a href="/fiz/health" class="type_services life_ico"></a>
    </div><!-- END header_content -->
  </div><!-- END header -->

    <div class="error_block page_404">
      <h2>Страница не найдена</h2>
      <p>Попробуйте перейти в один из разделов на сайте:</p>
      <ul>
        <li><a href="/">Услуги</a></li>
        <li><a href="/about">О компании</a></li>
        <li><a href="/blog">Блог</a></li>
        <li><a href="/reviews">Отзывы</a></li>
      </ul>
    </div><!-- END error_block -->
</div><!-- END all -->
  <div class="footer">
    <div class="footer_content">
      <div class="footer_bottom">
        <p class="copy">&copy; <?php echo date('Y'); ?> Страховка.by</p>
        <div class="contacts">
          <a href="/contacts">Контактные данные</a>
          <a href="skype:strahovka.by" class="skype">strahovka.by</a>
          <a href="tel:+375296432030" class="phone">+375 29 <strong>643-20-30</strong></a>
        </div><!-- END contacts -->
        <div class="social">
          <a href="#" class="twi"></a>
          <a href="#" class="fb"></a>
          <a href="#" class="vk"></a>
        </div><!-- END social -->
      </div><!-- END footer_bottom -->
    </div><!-- END footer_content -->
  </div><!-- END footer -->
</body>
</html>