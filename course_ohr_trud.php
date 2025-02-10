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
                Обучение по охране труда</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Обучение по охране труда</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-security-doc-15265357.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>

                Охрана труда (ОТ) - обязательный элемент функционирования каждого предприятия, компании, учреждения. Под
                ней подразумевается комплекс мероприятий по обеспечению сохранения здоровья и жизни сотрудников.
                В соответствии с Постановлением Правительства РФ от 24.12.2021 №2464 утвердили Новые правила обучения
                работников по охране труда, пройти обучение по ОТ должны все сотрудники, а также руководители и
                директора, индивидуальные предприниматели. Сделать это можно в учебном центре ООО "ПрофПромЭко".
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