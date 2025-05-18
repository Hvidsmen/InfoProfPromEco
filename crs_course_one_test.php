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
            <h2>Тест</h2>
            <h4>
                Эксплуатация опасных производственных объектов, на которых используются котлы (паровые, водогрейные,
                электрические, а также с органическими и неорганическими теплоносителями). Эксплуатация опасных
                производственных объектов, на которых используются трубопроводы пара и горячей воды
            </h4>
        </div>
    </div>
    <br>
    <!--    1-->
    <form method="post" action="crs_course_one_test_check.php">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>1. «Правила промышленной безопасности при использовании оборудования, работающего под избыточным
                        давлением»

                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6>1. На какие виды оборудования распространяются ФНП «Правила промышленной безопасности при
                        использовании
                        оборудования, работающего под избыточным давлением»?</h6>

                    <input type="checkbox" name="1A" value="A">
                    <label for="v1a"> А) Водогрейные и пароводогрейные котлы</label><br>
                    <input type="checkbox" name="1B" value="B">
                    <label for="v1b"> Б) Котлы передвижных и транспортабельных установок</label><br>
                    <input type="checkbox" name="1C" value="C">
                    <label for="v1c"> В) Отопительные и паровозные котлы железнодорожного подвижного состава</label><br><br>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6>2. На какие виды оборудования не распространяются ФНП «Правила промышленной безопасности при
                        использовании оборудования, работающего под избыточным давлением»?</h6>
                    <input type="checkbox" name="2A" value="A">
                    <label> А) Трубопроводы пара и горячей воды</label><br>
                    <input type="checkbox" name="2B" value="B">
                    <label>Б) Отопительные и паровозные котлы железнодорожного подвижного состава</label><br>
                    <input type="checkbox" name="2C" value="C">
                    <label>В) Трубчатые печи и пароперегреватели трубчатых печей</label><br><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6>3. Какой класс опасности устанавливается для опасных производственных объектов, осуществляющих
                        теплоснабжение населения и социально значимых категорий потребителей?</h6>
                    <input type="checkbox" name="3A" value="A">
                    <label> А) II класс опасности</label><br>
                    <input type="checkbox" name="3B" value="B">
                    <label>Б) III класс опасности</label><br>
                    <input type="checkbox" name="3C" value="C">
                    <label>В) IV класс опасности</label><br><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h6>4. Как называются максимальные значения параметров (давления и температуры) Рабочей среды,
                        принимаемые за основу для отнесения оборудования в область действия ФНП, а также указываемые в
                        паспорте оборудования по результатам технического освидетельствования: для котла парового
                        прямоточного и котла водогрейного или с органическими и неорганическими теплоносителями?</h6>
                    <input type="checkbox" name="4A" value="A">
                    <label> А) Максимальные параметры рабочей среды на выходе из котла </label><br>
                    <input type="checkbox" name="4B" value="B">
                    <label>Б) III класс опасности</label><br>
                    <input type="checkbox" name="4C" value="C">
                    <label>В) IV класс опасности</label><br><br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="submit" value="Отправить ответ" class="btn btn-primary">
                </div>
            </div>
        </div>
    </form>

</div>
<?php include_once './footer.php'; ?>

<?php include_once './big_document.php'; ?>
<?php include_once './bid.php'; ?>
<?php include_once './scripts_base.php'; ?>
<script src="js/openPopup.js"></script>
</body>
</html>