<?php
/*
Template Name: order-accidents
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
                            <a class='active' href='/fiz/auto/accidents'>Несчастные случаи</a>
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
                            <a href='/fiz/health/dms'>Добровольное медицинское</a>
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
                    <a href="/fiz/auto">Авто</a>
                    <a href="/fiz/auto/accidents">Несчастные случаи</a>
                    Заказ
                </div>
                <form accept-charset="UTF-8" action="<?php echo get_permalink(121);?>" class="calc order telefon" method="post">
                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <div class='form_row'>
                        <h3>Оформить заказ на &laquo;Несчастные случаи&raquo;</h3>
                        <div class='request-description'>
                        </div>
                    </div>
                    <div class='form_row'>
                        <label>Имя:</label>
                        <input class='input_name' name='name-order' type='text' value=''>
                    </div>
                    <div class='form_row'>
                        <label>Телефон:</label>
                        <input class='input_name' name='phone-order' placeholder='+375-(__)-___-__-__' type='tel' pattern="+375-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
                    </div>
                    <div class="form_row"><label>Сообщение:</label><textarea name="message" rows="10"></textarea></div>
                    <input class='calculate' type='submit' value='Отправить заказ'>
                </form>
            </div>
        </div>
<?php
get_footer();