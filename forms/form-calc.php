<?php
/*
Template Name: complete-calc
*/
get_header();
if((isset($_POST['name_checkout'])&&$_POST['name_checkout']!="")&&(isset($_POST['phone_checkout'])&&$_POST['phone_checkout']!="")){
        $to = 'delain@tut.by, potoshina@strahovka.by';
        $subject = 'Заказ с сайта strahovka.by';
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['name_checkout'].'</p>
                        <p>Телефон: '.$_POST['phone_checkout'].'</p>
                    </body>
                </html>'; //Текст нащего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        // $headers .= "From: Отправитель <@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
}
?>
        <div class='wrapper' style='height: 250px'>
            <div class='content'>
                <h2>Спасибо за заявку!</h2>
                <p>Мы максимально быстро свяжемся с вами.</p>
                <p>
                    <a href='/'>Перейти на главную страницу.</a>
                </p>
            </div>
        </div>
<?php
get_footer();
?>