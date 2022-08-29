<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strahovka
 */

if((isset($_POST['phone-order'])&&$_POST['phone-order']!="")&&(isset($_POST['name-order']))&&(isset($_POST['time']))){
        $to = 'delain@tut.by, potoshina@strahovka.by';
        $subject = 'Заказ с сайта strahovka.by';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name-order'].'</p>
                        <p>Телефон: '.$_POST['phone-order'].'</p>
                        <p>Перезвонить в: '.$_POST['time'].'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        // $headers .= "From: Отправитель <@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers);
}

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body class='index' <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'strahovka' ); ?></a>
    <div class='overlay'></div>
    <div class='popup'>
        <h2>Перезвонить мне</h2>
        <span class='close'></span>
        <form accept-charset="UTF-8" action="/" class="calc" id="new_callback" method="post">
            <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
            <div class='form_row'>
                <label>Имя:</label>
                <input class='input_name' name='name-order' type='text' value=''>
            </div>
            <div class='form_row'>
                <label>Телефон:</label>
                <input class='input_name' name='phone-order' placeholder='+375-(__)-___-__-__' type='tel' pattern="+375-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class='form_row'>
                <label>Перезвонить в:</label>
                <input class="input_age" id="callback_time" name="time" size="30" type="text" />
                <span>&mdash; если не указано время, перезвоним немедленно</span>
            </div>
            <input class='calculate' type='submit' value='Перезвонить мне'>
        </form>
    </div>
    <div class='all'>
	<header id="masthead" class="site-header">
        <div class='header'>
            <div class='menu-burger'>
                <span></span>
            </div>
            <nav class='navbar-menu'>
                <a href='http://strahovka.by'>УСЛУГИ</a>
                <a href='http://strahovka.by/about/'>О КОМПАНИИ</a>
                <a href='http://strahovka.by/news/'>НОВОСТИ</a>
                <a href='http://strahovka.by/blog/'>БЛОГ</a>
                <a href='http://strahovka.by/reviews/'>ОТЗЫВЫ</a>
            </nav>
            <div class='header_content'>

                <h1 class='logo'>
                    <a href='/'>
                        <span></span>
                        Strahovka.by
                    </a>
                </h1>
                <a class='type_services auto_ico' href='/fiz/auto' title='Авто'></a>
                <a class='type_services house_ico' href='/fiz/house' title='Жилье'></a>
                <a class='type_services life_ico' href='/fiz/health' title='Здоровье'></a>
                <ul class='top_nav'>
                    <li>
                        <a href='http://strahovka.by'>Услуги</a>
                    </li>
                    <li>
                        <a href='http://strahovka.by/about/'>О компании</a>
                    </li>
                    <li>
                        <a href='http://strahovka.by/news/'>Новости</a>
                    </li>
                    <li>
                        <a href='http://strahovka.by/blog/'>Блог</a>
                    </li>
                    <li>
                        <a href='http://strahovka.by/reviews/'>Отзывы</a>
                    </li>
                </ul>
                <div class='tel'>
                    <a href="tel:+375291060303"><em>+375 29</em> <strong>106-03-03</strong></a>
                    <a href='#'>Перезвонить мне</a>
                </div>
            </div>
        </div>

<!-- бургер меню -->

<script type="text/javascript">
    jQuery(document).ready(function($){
    $(".menu-burger").click(function() {
        $(".menu-burger").toggleClass("active");
        $(".navbar-menu").toggleClass("active");
    });
});
</script>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
