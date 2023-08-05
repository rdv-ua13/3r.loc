<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pages</title>
        <style type="text/css">
            body {
                margin: 0;
                font-family: sans-serif;
                font-size: 16px;
                line-height: 1.4;
                box-sizing: border-box;
            }
            a {
                display: inline-block;
            }
            a:focus {
                color: chocolate;
            }
            div {
                padding-left: 40px;
                margin-bottom: 20px;
            }
            img {
                min-width: 200px;
                width: 200px;
            }
            ul {
                padding-left: 15px;
                list-style: none;
            }
            li {
                position: relative;
                margin-bottom: 10px;
                padding-left: 15px;
            }
            li:before {
                position: absolute;
                content: "";
                top: 7px;
                left: 0;
                width: 5px;
                height: 5px;
                border-radius: 50%;
                background-color: #000;
            }
            .logo {
                display: inline-flex;
                margin-right: 40px;
                padding: 15px 40px;
            }

            .block-ready {
                color: forestgreen;
                font-weight: 900;
                font-size: 18px;
            }
            .block-ready::before,
            .block-ready::after {
                content: none;
            }
            .ready {
                color: forestgreen;
                font-weight: 600;
            }
        </style>
    </head>

    <body>
    <div style="display: flex; align-items:center; margin: 0 0 15px 20px;">
        <div class="logo">
            <img src="img/logo-dark.svg" width="180" height="50" alt="Логотип компании">
        </div>
        <span style="display: inline-flex; align-items:center; font-size: 24px;">
            <span style="color: forestgreen; font-weight: 600;">n + ui</span>
            &nbsp;/&nbsp;
            <span style="font-size: 24px;">n + ui (всего страниц в макете)</span>
        </span>
    </div>
    <div style="font-size: 24px;">Готовые разделы отмечены "<span class="block-ready">Блок готов</span>"</div>

    <div>
        <ul>
            <!--<li class="block-ready">Блок готов</li>-->
            <li><a href="index.php" target="_blank" class="ready">Главная</a></li>
            <br>
            <li><a href="catalog-category.php" target="_blank" class="ready">Продукция (категории)</a></li>
            <li><a href="news.php" target="_blank" class="ready">Новости</a></li>
            <li><a href="about.php" target="_blank" class="ready">О производстве</a></li>
            <li><a href="certificates.php" target="_blank" class="ready">Сертификаты соответствия</a></li>
            <br>

            <li><a href="ui.php" target="_blank">ui</a></li>
        </ul>
    </div>
    </body>
</html>