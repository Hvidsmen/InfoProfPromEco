<!DOCTYPE html>
<html>
<head>
    <?php include_once './links_base.php'; ?>
    <link rel="stylesheet" href="./css/popup.css">
</head>
<body>


<?php include_once './header.php'; ?>
<br>
<div class="container bg-body">
    <div class="row bg-light rounded-1">
        <div class="col">
            <p><a href="./index.php">Главная/</a><a href="uslugs.php">Курсы</a>/
                Повышение квалификации в области проектных работ в строительстве</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Повышение квалификации в области проектных работ в строительстве</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-blueprint-1058646.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                Учебный центр ООО "ПрофПромЭко" проводит курсы повышения квалификации в области строительства для
                специалистов разных профилей, а также курсы переподготовки для получения новой строительной профессии.
                Пройти обучение можно как очно, так и заочно. Для записи просто заполните форму обратной связи на сайте.
            </p>
            <button class="btn btn-primary btn-lg" onclick="openPopup()">Записаться</button>
        </div>
    </div>


</div>
<?php include_once './footer.php'; ?>

<?php include_once './big_document.php'; ?>
<?php include_once './bid.php'; ?>
<?php include_once './scripts_base.php'; ?>
<script src="js/openPopup.js"></script>
</body>
</html><?php
