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
                Курсы по электробезопасности</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1>Курсы по электробезопасности</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-electric-safety-16690641.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>

                Для работы с электроустановками необходимы специальные знания, подтверждаемые допусками. Пройти обучение
                по электробезопасности для разных групп персонала можно в нашем учебно-методическом центре.
            </p>
            <p>Мы предлагаем удобные условия обучения, утвержденную программу курса и оптимальную стоимость услуг.
                проводить лабораторные исследования.</p>
            <button class="btn btn-primary btn-lg" onclick="openPopup()">Записаться</button>
        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <img src="img/free-icon-marketing-1055676.png" width="100%" height="100%">
                    </div>
                    <div class="col align-self-center">
                        <h1>Курсы обучения электробезопасности по самой выгодной цене</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">

                        <p>Наш центр предлагает услуги обучения персонала трех типов:</p>
                        <li>начальный уровень для групп сотрудников, не работающих с силовыми установками</li>
                        <li>обучение кадрового состава 2-4 группы по электробезопасности, имеющей допуски для работы с
                            электроустановками
                        </li>

                        <br>
                        <p>По окончании курса слушатели получают сертификат о прохождении курса, для прохождения
                            дальнейшей аттестации . Пройти обучение по электробезопасности у нас можно по самой выгодной
                            стоимости и в удобное для заказчика время.</p>
                    </div>
                </div>
            </div>
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