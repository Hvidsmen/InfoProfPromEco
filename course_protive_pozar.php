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
            <p><a href="./index.php">Главная/</a><a href="cources.php">Курсы</a>/
                Специалист по противопожарной профилактике</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Специалист по противопожарной профилактике</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-fire-prevention-1155807.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                Наш учебный центр разработал программу переподготовки специалистов по противопожарной профилактике.
                Заниматься по этой программе могут слушатели курсов, имеющие среднее специальное или высшее образование.
            </p>
            <p>
                Переподготовка длится в течение 256 часов. После ее прохождения вы получите диплом, позволяющий вести
                профессиональную деятельность.


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
</html>
