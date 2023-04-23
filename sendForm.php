<?php

require __DIR__.'/phpmailer/PHPMailer.php';
require __DIR__.'/phpmailer/SMTP.php';
require __DIR__.'/phpmailer/Exception.php';

$title = 'Тема письма';

$to = 'ched08@yandex.ru';

$title = "Показания счетчиков";

$fio = trim($_POST['fio']);
$account = trim($_POST['account']);
$indicationFirst = trim($_POST['indicationFirst']);
$indicationSecond = trim($_POST['indicationSecond']);

$body = "
        <tr style='background-color: #f8f8f8;'>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>ФИО</b></td>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'>$fio</td>
        </tr>
        <tr style='background-color: #f8f8f8;'>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Лицевой счет</b></td>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'>$account</td>
        </tr>
        <tr style='background-color: #f8f8f8;'>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Показание счетчика 1</b></td>
            <td style='padding: 10px; border: #e9e9e9 1px solid;'>$indicationFirst</td>
        </tr>
       ";

$body .= $indicationSecond ? "<tr style='background-color: #f8f8f8;'>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Показание счетчика 2</b></td>
                <td style='padding: 10px; border: #e9e9e9 1px solid;'>$indicationSecond</td>
            </tr>" : null;

$body = "<table style='width: 100%;'>$body</table>";


$mail = new \PHPMailer\PHPMailer\PHPMailer();

try {
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = false;




    $mail->setFrom('ched08@yandex.ru', 'Показания ПУ с сайта');
    $mail->addAddress('ched08@yandex.ru');

    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;

    if ($mail->send()) {
        print_r($_POST);
    } else {
        echo "Сообщение не было отправлено. Неверно указаны настройки вашей почты";
    }

} catch (Exception $e) {
    echo '123123123123';
    $status = "Ошибка отправки сообщения: {$mail->ErrorInfo}";
}