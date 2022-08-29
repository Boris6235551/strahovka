<?php
/*
Template Name: dms
*/

get_header();
?>
        <div class='wrapper'>
            <div class='sidebar'>
                <div class='sidebar_block'>
                    <h2>Физическим лицам:</h2>
                    <h3>Авто</h3>
                    <ul class='sidebar_nav blue'>
                        <li>
                            <a href='/fiz/auto/kasko'>КАСКО</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/osgo'>ОСГО</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/green-card'>Зеленая карта</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/accidents'>Несчастные случаи</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h3>Жилье</h3>
                    <ul class='sidebar_nav orange'>
                        <li>
                            <a href='/fiz/house/house'>Строение</a>
                        </li>
                        <li>
                            <a href='/fiz/house/flats'>Квартиры</a>
                        </li>
                        <li>
                            <a href='/fiz/house/owners-responsibility'>Ответственность владельцев квартир</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h3>Здоровье</h3>
                    <ul class='sidebar_nav red'>
                        <li>
                            <a href='/fiz/health/accidents'>Несчастные случаи</a>
                        </li>
                        <li>
                            <a class='active' href='/fiz/health/dms'>Добровольное медицинское</a>
                        </li>
                        <li>
                            <a href='/fiz/health/emigrants-assurance'>Для выезжающих</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h2>Смотрите также:</h2>
                    <ul class='related'>
                        <li>
                            <a href='/corp'>Услуги для корпоративных клиентов</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='content'>
                <div class='breadcrumbs'>
                    <a href="/">Главная</a>
                    <a href="/fiz/health">Здоровье</a>
                    Добровольное медицинское
                </div>
                <h2>Добровольное медицинское</h2>
                <div class='category-health post'>
                    <div class='post_text'>
                        <p>Добровольное медицинское страхование относится к видам личного страхования, позволяющим получить высококвалифицированную медицинскую помощь в лучших государственных и частных медицинских центрах.</p>
                        <p>Заключив договор через нашу компанию, каждое застрахованное лицо получает доступ к лучшим медицинским специалистам Республики Беларусь. Имея бесценный опыт работы, мы предлагаем уникальный подход к реализации программы добровольного медицинского страхования.</p>
                        <p>При обращении в страховую компанию застрахованному лицу необходимо сообщить фамилию и имя, номер договора страхования и причину обращения. А за всю дальнейшую организацию медицинской помощи и услуг будет отвечать страховая компания.</p>
                    </div>
                    <div class='reasons'>
                        <h3>В итоге, почему же Вам выгоднее обратиться именно к нам?</h3>
                        <h4>Все просто, кроме всего вышеперечисленного мы также:</h4>
                        <div class='row'>
                            <div class='reason_block'>
                                <p>Напоминаем об очередных взносах и заканчивающихся договорах</p>
                            </div>
                            <div class='reason_block'>
                                <p>Работаем с понедельника по субботу без обеда</p>
                            </div>
                            <div class='reason_block last'>
                                <p>Опыт работы в сфере страхования более 10 лет</p>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='reason_block'>
                                <p>Бесплатная консультация по любому вопросу страхования, даже если застрахованы вы не через нашу компанию</p>
                            </div>
                            <div class='reason_block'>
                                <p>Ответственный и дружелюбный персонал</p>
                            </div>
                            <div class='reason_block last'>
                                <p>Удобное расположение офиса со своей стоянкой, где вы всегда найдете место припарковать свой автомобиль</p>
                            </div>
                        </div>
                        <div class='order_service'>
                            <a href='/fiz/health/dms/request/new'>
                                <img alt='Заказать' src='<?php echo get_template_directory_uri(); ?>/img/order_green_button.png'>
                                страхование &laquo;Добровольное медицинское&raquo;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
get_footer();