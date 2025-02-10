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
                Техносферная безопасность для специалистов по охране труда</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Техносферная безопасность для специалистов по охране труда</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-public-administration-12352216.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                Специалист по охране труда на предприятии должен иметь соответствующее образование. Это требование
                регулируется на государственном уровне с 2014 года. Если у вас нет такого образования, можно пройти
                переподготовку. Для этого надо обратиться в наш учебный центр.
            </p>
            <p>
                Мы разработали курс техносферной безопасности для специалистов по охране труда. Он предназначен для
                слушателей со среднеспециальным и высшим образованием. Эта программа соответствует профстандарту и
                подходит для сотрудников из организаций с любой формой собственности.


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
