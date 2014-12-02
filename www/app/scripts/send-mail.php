<?php
    header("Location: /");

    $to  = "a.l.parfenkov@gmail.com";

    $subject = "i10.by | Новая заявка на заказ!";

    $message = '<html>
        <head>
            <title>Новая заявка на заказ!</title>
        </head>
        <body>
            <p>Имя: '. $_POST['name'] .'</p>
            <p>Номер телефона: '. $_POST['phone'] .'</p>
            <p>Предложения и идеи: '. $_POST['deals'] .'</p>
        </body>
    </html>';

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: i10.by <notifications@i10.by> \r\n";

    mail($to, $subject, $message, $headers);