<!DOCTYPE html>
<html lang="ru">
<link rel="stylesheet" href="style.css">

<head>
    <meta charset="utf-8">
    <title>Обзор модов</title>

</head>

<body>
    <header>
        <div class="glagne">
            <nav>
                <div class="padloshka">
                    <a href="#autor">
                        ОБ АВТОРЕ </a> &emsp;•&emsp;
                    <a href="#karta">
                        КАРТЫ</a>&emsp;•&emsp;
                    <a href="#svas">
                        ОБРАТНАЯ СВЯЗЬ
                    </a>
                </div>
                <div class="chtoto">ВЕСЕЛЫЕ КАРТЫ ДЛЯ <br>AGE OF EMPIRES II: DEFINITIVE EDITION</div>
            </nav>
        </div>
    </header>


    <div class="citata"><q>Бред как рабочая стратегия</q><br><em> — wanderbraun</em></div>
    <div id="autor" class="autor">
        <div><img class="contimg" src="img/rama.png"></div>
        <div class="cont">
            <div class="cont2">
                <p>ОБ АВТОРЕ</p>
            </div>
            <div class="conttext">
                <p>Меня зовут Александр, но можно просто Pankyxaa. <br>Я картодел со стажем. Обожаю функцианальные
                    карты, раздвигающие возможности игр.</p>
            </div>
        </div>
    </div>
    <div class="mods" id="karta">
        <div class="zaglavie">ГОТОВЫЕ КАРТЫ</div>
        <?php
        require("catalog_db.php");
        $karts = get_products();
        require("karta.php");
        ?>
        <div class="contKarts"><?= $count_karts ?></div>
    </div>
    <div class="svas" id="svas">
        <div class="svas_text">Есть предложения?<br>Свяжись со мной!</div>
        <a href="https://discord.gg/86J2dS8Gk2"><img class="svas_img" src="img/dis.png" alt="Discord"></a>
        <a href="https://t.me/Degvar"><img class="svas_img" src="img/telega.png"></a>
        <a href="https://vk.com/deg_var"><img class="svas_img" src="img/vk.png"></a>
    </div>
    <div id="openModal" class="modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">ЗАКРОЙ МЕНЯ</h3>
                    <a href="#close" title="Close" class="close">×</a>
                </div>
                <div class="video"><iframe width="560" height="315" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="modal-body">
                    <p>Позязя</p>
                </div>
            </div>
        </div>
    </div>
    <script src="js.js"></script>
    <script src="knopke.js"></script>
    <footer>© Александр Мурашев 2021</footer>
</body>