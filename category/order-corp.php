<?php
/*
Template Name: order-corp
*/

get_header();
?>
        <div class='wrapper'>
            <div class='content'>
                <div class='breadcrumbs'>
                    <a href="/">Главная</a>
                    <a href="/corp">Для корпоративных клиентов</a>
                    Заказ
                </div>
                <form accept-charset="UTF-8" action="<?php echo get_permalink(129);?>" class="calc order telefon" method="post">
                    <div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
                    <div class='form_row'>
                        <h3>Оформить заказ</h3>
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