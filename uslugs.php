<!DOCTYPE html>
<html>
<head>
    <?php include_once './links_base.php'; ?>
    <link rel="stylesheet" href="./css/popup.css">
</head>
<body>

<?php include_once './header.php'; ?>
<br>
<div class="container ">
    <div class="row bg-light rounded-1">
        <div class="col">
            <p><a href="index.php">Главная</a>/Услуги</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
          <h1>Услуги</h1>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-eco-house-5699737.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <h3>Экологическая безопасность. Разработка санитарно-защитных зон</h3>
        </div>
        <div class="col-2">
            <img src="./img/free-icon-certification-4381774.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <h3>Сертификации ИСО и ГОСТ</h3>
        </div>
    </div>
    <div class="row bg-light rounded-1">
        <div class="col">
            <p>Предлагаем Вам услугу разработки проекта организации санитарно-защитных зон</p>
        </div>
        <div class="col">
            <p>Специалисты центра оперативно проведут сертификацию ГОСТ или ИСО, а также подготовят необходимый
                пакет документов, сертификат и знак соответствия</p>
        </div>

    </div>
    <div class="row bg-light rounded-1">
        <div class="col">
            <button class="btn btn-primary" onclick="openPopup()">Записаться</button>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="openPopup()">Записаться</button>
        </div>
    </div>

    <br>
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="img/free-icon-risk-2763270.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <h3>Оценка профессиональных рисков</h3>
        </div>
        <div class="col-2 ">
            <img src="img/free-icon-working-conditions-6553032.png" width="100%" height="100%">
        </div>
        <div class="col align-self-center">
            <h3>Специальная оценка условий труда (СОУТ)</h3>
        </div>
    </div>
    <div class="row bg-light rounded-1">

        <div class="col">
            <p>Проведем оценку профессиональных рисков на предприятии с подготовкой необходимых отчетов</p>
        </div>
        <div class="col">
            <p>Комплекс мер позволит не только повысить уровень безопасности работ на предприятии, но также
                оптимизировать расходы на штрафы, выплату больничных листов и компенсаций</p>
        </div>
    </div>
    <div class="row bg-light rounded-1">

        <div class="col">
            <button class="btn btn-primary" onclick="openPopup()">Записаться</button>
        </div>
        <div class="col">
            <button class="btn btn-primary" onclick="openPopup()">Записаться</button>
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