<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package strahovka
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

        <div class='wrapper'>
            <div class='promo'>
                <h2>Поможем с <strong>любым</strong> видом страхования</h2>
                <div class='tabs'>
                    <a class='active' href='/'>Физическим лицам</a>
                    <a href='/corp'>Корпоративным клиентам</a>
                </div>
                <a class='calc_ico' href='/fiz/auto/kasko/request/new'>Калькулятор <strong>КАСКО</strong></a>
                <div class='box'>
                    <div class='promo_auto promo_column'>
                        <a href="/fiz/auto"><div class="promo_auto_img"></div></a>
                        <a class='promo_column_title' href='/fiz/auto'>Авто</a>
                        <p>
                            <a href="/fiz/auto/kasko" title="КАСКО">КАСКО</a>, <a href="/fiz/auto/osgo" title="ОСГО">ОСГО</a>, <a href="/fiz/auto/green-card" title="зеленая карта">зеленая карта</a>, <a href="/fiz/auto/accidents" title="несчастные случаи">несчастные случаи</a>
                        </p>
                    </div>
                    <div class='promo_housing promo_column'>
                    	<a href="/fiz/house"><div class="promo_housing_img"></div></a>
                        <a class='promo_column_title' href='/fiz/house'>Жилье</a>
                        <p>
                            <a href="/fiz/house/house" title="Строение">Строение</a>, <a href="/fiz/house/flats" title="квартиры">квартиры</a>, <a href="/fiz/house/owners-responsibility" title="ответственность владельцев квартир">ответственность владельцев квартир</a>
                        </p>
                    </div>
                    <div class='promo_health promo_column'>
                    	<a href="/fiz/health"><div class="promo_health_img"></div></a>
                        <a class='promo_column_title' href='/fiz/health'>Здоровье</a>
                        <p>
                            <a href="/fiz/health/accidents" title="Несчастные случаи">Несчастные случаи</a>, <a href="/fiz/health/dms" title="добровольное медицинское">добровольное медицинское</a>, <a href="/fiz/health/emigrants-assurance" title="для выезжающих">для выезжающих</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
