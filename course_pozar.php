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
                Пожарная безопасность</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Пожарная безопасность</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-fire-extinguisher-7386928.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>

                Учебный центр ООО "ПрофПромЭко" предоставляет возможность пройти профессиональную переподготовку по
                пожарной безопасности сотрудникам всех уровней: инженеры, должностные лица, руководители предприятий.
                Успешное завершение образовательной программы позволит вам повысить безопасность производства,
                компании, а также получить удостоверение, необходимое для вступления в СРО или дальнейшего оформления
                лицензии МЧС.
            </p>

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
                        <h1>Обучение и повышение квалификации по пожарной безопасности</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col">

                        <p>Курс по пожарной безопасности - это комплексная образовательная программа, включающая в себя
                            знания о правилах реагирования при пожаре, основы персональной ответственности, знания
                            нормативных требований и не только.
                            Обучение может проводиться как в онлайн - формате, так и очно — на территории учебного
                            центра или на базе вашего предприятия.</p>

                        <p>Согласно Кодексу РФ об административных правонарушениях, несоблюдение требования влечет
                            наложение штрафа:</p>
                        <li>6-15 тысяч рублей для должностных лиц</li>
                        <li>150-200 тысяч рублей для юридических лиц
                        </li>
                        <p>Выезд специалистов для повышения квалификации возможен в любой регион страны. Подробная
                            информация об образовательном курсе представлена на сайте. Для уточнения деталей обратитесь
                            к консультанту компании.</p>


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