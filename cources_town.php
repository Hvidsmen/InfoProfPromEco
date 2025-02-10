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
                Специалист по управлению многоквартирными домами (7 уровень квалификации)</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Специалист по управлению многоквартирными домами (7 уровень квалификации)</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-apartment-building-18137245.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                В учебном центре «ТехноРесурс» можно пройти профессиональную переподготовку и стать специалистом по
                управлению многоквартирным домом. Продолжительность обучения составляет 256 часов. Для этой работы
                требуется специальное образование, соответствующее профстандарту, поэтому найти профессионала очень
                сложно.
            </p>
            <p>
                Такой специалист обязан создавать безопасные условия для жизни людей и сохранности имущества. Также он
                должен взять на себя задачи, связанные с коммунальными услугами.


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
