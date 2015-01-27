<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <title><? get_title($url_page); ?> - i10.by</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Группа разработчиков i10 создаёт и продвигает высококачественные и красивые сайты любой сложности за приятную цену.">
        <link rel="stylesheet" href="/template/css/primary.css" media="screen">
        <link rel="stylesheet" href="/template/css/icons.css">
        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="page">
            <? get_template("control-bar"); ?>
            <div id="page-body">
                <? get_page($url_page); ?>
            </div>
            <? get_template("footer-bar"); ?>
        </div>

        <script src="/template/js/jquery.js"></script>
        <script src="/template/js/gui.js"></script>
    </body>
</html>