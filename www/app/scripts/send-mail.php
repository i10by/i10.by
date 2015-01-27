<?
    if(!is_ajax_req())
        header("Location: /");

    $to  = "a.l.parfenkov@gmail.com";

    $subject = "Новая заявка на заказ! - i10.by";

    $message = '<html>
        <head>
            <title>Уведомления - i10.by</title>
        </head>
        <body>
            <div style="background-color: #fff; padding: 10px; border: 2px solid #ccc; font: 15px arial, tahoma;">
                <table>
                    <tr>
                        <td width="100%">
                            <div style="font-size: 20px; font-weight: bold; color: #555;">Новая заявка на заказ</div>
                        </td>
                        <td width="20%">
                            <a href="http://i10.by/">
                                <img style="height: 50px; background-size: 100%" src="http://i10.by/template/images/logo-small.png">
                            </a>
                        </td>
                    </tr>
                </table>
                <hr style="background-color: #ccc; color: #ccc; border: 0; height: 2px;">
                <table>
                    <tr style="height: 30px">
                        <td width="200px">Имя:</td>
                        <td>'. $_POST['name'] .'</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="200px">Номер телефона:</td>
                        <td>'. $_POST['phone'] .'</td>
                    </tr>
                    <tr style="height: 30px">
                        <td width="200px">Подробности:</td>
                        <td>'. $_POST['deals'] .'</td>
                    </tr>
                </table>
            </div>
        </body>
    </html>';

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: i10.by <notifications@i10.by> \r\n";

    mail($to, $subject, $message, $headers);