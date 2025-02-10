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
                Контролер технического состояния автотранспортных средств</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Контролер технического состояния автотранспортных средств</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-bus-1042266.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                По законодательству РФ безопасность перевозок автотранспортом возлагается на контролера с
                соответствующим образованием и навыками. Этот сотрудник должен ежедневно проверять состояние
                транспортных средств до и после их использования. Также он обязан вовремя определять необходимость в
                ремонте и контролировать уровень горючего и смазочных жидкостей.
            </p>
            <p>
                Наша организация занимается обучением контролеров технического состояния автотранспортных средств. Мы
                имеем лицензию, поэтому выдаем официальный диплом после завершения курса. Программа обучения рассчитана
                на 256 часов.


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
