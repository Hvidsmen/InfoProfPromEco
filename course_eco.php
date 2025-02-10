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
                Экологическая безопасность</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Экологическая безопасность</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-eco-house-5699737.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>

                Современные законы в сфере экологической безопасности требуют обязательного следования установленным
                стандартам и нормам.
            </p>
            <p>Учебный центр ООО "ПрофПромЭко" готов помочь сотрудникам предприятий пройти обучение по экологической
                безопасности, чтобы они своими силами могли выполнять работы по составлению экологических проектов,
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
                        <h1>Курсы для обучения экологической безопасности</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">

                        <p>У нас можно пройти обучение по экологической безопасности, позволяющее работникам в
                            дальнейшем самостоятельно:</p>
                        <li>проектировать санитарно-защитные зоны, изготавливать проекты технологии производства</li>
                        <li>проводить производственный контроль, экологические изыскания и лабораторные исследования
                            (проекты предельно-допустимых выбросов (ПДВ), предельного накопления объема образования и
                            лимитов размещения отходов (ПНООЛР), нормативов допустимого сброса сточных вод (НДС))
                        </li>
                        <li>проводить оценку воздействия работы предприятия на окружающую среду</li>
                        <li>проводить экологический мониторинг территорий</li>
                        <li>рассчитывать классы опасности отходов</li>

                        <li>проводить аттестацию рабочих мест
                        </li>
                        <br>
                        <p>Наша компания оказывает полный комплекс услуг в сфере экологического консалтинга и
                            природопользования, разработки экологических проектов и обеспечения
                            санитарно-эпидемиологического благополучия.</p>
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