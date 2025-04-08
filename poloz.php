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
    <div class="row">
        <div class="col">
            <p><a href="index.php">Главная</a>/Положения</p>

        </div>
    </div>
    <div class="row bg-light rounded-1">
        <div class="col">
            <h1>Положения</h1>
        </div>
    </div>
</div>
<br>
<div class="container bg-body">


    <?php
    $dir = './documents_reg';
    $list_pdf = array();
    $list_sig = array();
    if (is_dir($dir)) // является ли путь каталогом
    {
        if ($dh = opendir($dir)) // открываем каталог
        {
            // считываем по одному файл или подкаталогу
            // пока не дойдем до конца
            while (($file = readdir($dh)) !== false) {

                if ($file == '.' || $file == '..') continue;
                $rest = substr($file, -4);
                if ($rest == '.pdf') {
                    $list_pdf[] = $file;
                } else {
                    $list_sig[] = $file;
                }
            }
            closedir($dh); // закрываем каталог
        }
    }


    for ($i = 0; $i < count($list_pdf); $i++) {
        echo '
    
    <div class="row">
        <div class="row ">
            <div class="col-1">
                <img src="img/icons8-document-50.png">
            </div>
            <div class="col align-self-center">
                <h5>'.substr($list_pdf[$i],0,-4).'</h5>
            </div>
            <div class="col col-2 text-center align-self-center">
                <button class="btn btn-light btn-large">
                    <a href="/documents_reg/'.$list_pdf[$i].'" target="_blank"
                       class="link-dark link-no-underline">
                        <img src="img/icons8-eye-30.png">
                        Посмотреть
                    </a>
                </button>
            </div>
            <div class="col col-2 text-center align-self-center">
                <button class="btn btn-light btn-large text-center">
                    <a href="/documents_reg/'.$list_sig[$i].'" target="_blank"
                       class="link-dark link-no-underline">
                        <img src="img/free-icon-sig-9681435.png" width="50" height="50">

                    </a>
                </button>
            </div>
        </div>
    </div>
    
    ';
    }

    ?>
</div>
<?php include_once './footer.php'; ?>

<?php include_once './big_document.php'; ?>
<?php include_once './bid.php'; ?>
<?php include_once './scripts_base.php'; ?>
<script src="js/openPopup.js"></script>
</body>
</html>