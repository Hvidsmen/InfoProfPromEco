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
                Повышение квалификации в области проектных работ в строительстве</p>

        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1> Повышение квалификации в области проектных работ в строительстве</h1>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col-2">
            <img src="./img/free-icon-digital-archive-17370670.png" height="100%" width="100%">
        </div>
        <div class="col align-self-center">
            <p>
                Хранить документацию в электронном виде намного удобнее и проще, чем создавать объемные бумажные архивы.
                Поэтому компании предпочитают вести цифровой документооборот. Но для правильной и безопасной
                систематизации бумаг требуется работник с соответствующими знаниями. Он востребован на любом
                предприятии.
            </p>
            <p>
                Если вашей организации нужен специалист по формированию электронного архива, обратитесь к нам в центр и
                пришлите сотрудника на обучение. Наши курсы рассчитаны на 144 часа учебы. После них выдается
                удостоверение, позволяющее официально работать с цифровыми архивами.


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
