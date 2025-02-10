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
            <p><a href="./index.php">Главная/</a><a href="uslugs.php">Услуги</a>/
                Сертификации ИСО и ГОСТ</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Сертификации ИСО и ГОСТ</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-certification-4381774.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>При необходимости проведения сертификации услуг, персонала или системы менеджмента предлагаем обратиться
                в наш центр сертификации ИСО.
            </p>
            <p> Опытные и квалифицированные специалисты центра оперативно проведут сертификацию ГОСТ или ИСО, а также
                подготовят необходимый пакет документов, сертификат и знак соответствия.</p>
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
                        <h1>Оптимальная стоимость на услуги сертификации ИСО</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">

                        <p>Наш центр сертификации ИСО предлагает воспользоваться услугами сертификации по нескольким направлениям:</p>
                        <li>сертификация систем менеджмента</li>
                        <li>внедрение СМК</li>
                        <li>обучение внутренних аудиторов</li>
                        <li>обязательная сертификация ГОСТ</li>
                        <li>добровольная сертификация ГОСТ</li>
                        <li>сертификация оценки деловой репутации компании</li>
                        <li>Мы гарантируем оперативное выполнение работ и выгодную стоимость сертификации ИСО или ГОСТ</li>

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