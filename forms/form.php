<?php
/*
Template Name: complete
*/
get_header();
if((isset($_POST['phone-order'])&&$_POST['phone-order']!="")&&(isset($_POST['name-order']))&&(isset($_POST['message']))){
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
                        <p>Сообщение: '.$_POST['message'].'</p>
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        // $headers .= "From: Отправитель <@example.com>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers);
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