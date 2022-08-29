<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package strahovka
 */

?>
	</div><!-- #content -->
	</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
    <div class='footer'>
            <div class="footer_blog_reviews">
                <div class='footer_column'>
                    <h4>
                        <a href='/blog'>Блог</a>
                    </h4>
                    <ul>
                        <li>
                            <a href='/blog/post/302'>Новогоднее предложение автолюбителям!!!</a>
                            10.01.2020
                        </li>
                        <li>
                            <a href='/blog/post/303'>Режим работы офиса в рождественские и новогодние праздники</a>
                            27.12.2019
                        </li>
                        <li>
                            <a href='/blog/post/301'>Режим работы офиса в ноябрьские праздники</a>
                            05.11.2019
                        </li>
                    </ul>
                </div>
                <div class='footer_column'>
                    <h4>
                        <a href='/reviews'>Отзывы</a>
                    </h4>
                    <div class="footer_column_row">
                        <div class='reviews'>
                            <div class='quote'>
                                <p>&laquo;Ребята молодцы, стараются. У меня нет времени думать о взносах, а они всегда позвонят, напомнят, сами приедут&hellip; Это очень экономит &hellip;
                            </div>
                            <p>
                                <strong>Ярмоленко Анатолий Иванович</strong>
                            </p>
                            <p>Cолист и руководитель белорусского ансамбля «Сябры»</p>
                        </div>
                        <img height='79' src='<?php echo get_template_directory_uri(); ?>/img/p104x79.jpg' width='104'>
                    </div>
                </div>
            </div>
            <div class='footer_bottom'>
                <div class='contacts'>
                    <a href='/contacts'>Контактные данные</a>
                    <a class='phone' href='tel:+375291060303'>+375 29 <strong>106-03-03</strong></a>
                    <a class='skype' href='skype:strahovka.by'>strahovka.by</a>
                    
                </div>
                <div class='social'>
                    <a class='twi' href='http://twitter.com/StrahovkaBY'></a>
                    <a class='fb' href='http://www.facebook.com/strahovka.by'></a>
                    <a class='vk' href='http://vk.com/strahovkaby'></a>
                </div>
                <p class='copy'>&copy; <?php echo date('Y'); ?> Страховка.by</p>
            </div>
    </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(57089911, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/57089911" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-44380608-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-44380608-4');
</script>

<?php wp_footer(); ?>

</body>
</html>
