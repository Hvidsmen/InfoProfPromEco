<!DOCTYPE html>
<html>
<head>
    <?php include_once './links_base.php'; ?>
    <link rel="stylesheet" href="./css/popup.css">
</head>
<body>

<?php include_once './header.php'; ?>
<br>
<div class="container">
    <div class="row bg-light rounded-1">
        <div class="col text-start align-self-center">
            <div class="row">
                <div class="col-3"><img src="img/free-icon-participation-8869093.png" height="100%" width="100%"></div>
                <div class="col align-self-center"><h1>Учебный центр профессионального образования</h1></div>
            </div>
            <div class="row">
                <div class="col text-start">

                    <li>более 200 программ разных направлений</li>
                    <li>стоимость обучения от 800 рублей</li>
                    <br>
                    <img src="img/free-icon-education-3976625.png" width="20px" height="20px">Проводим переподготовку
                    или повышении квалификации сотрудников в любом удобном формате

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary btn-lg" onclick="openPopup()">Оставить заявку</button>
                </div>
            </div>
        </div>


        <div class="col">
            <img id="image" src="img/zavod.jpg" height=400px width="100%" onclick="imgsrc()">
            <script language="javascript">
                var i = 0;
                var image = document.getElementById("image");
                // Добавьте свои картинки в массив через запятую
                var imgs = new Array(
                    'img/zavod.jpg', 'img/free-icon-eco-house-5699737.png', 'img/free-icon-earth-5699786.png', 'img/free-icon-hazardous-material-10982601.png', 'img/free-icon-first-aid-kit-2760491.png', 'img/free-icon-fire-extinguisher-7386928.png', 'img/free-icon-electric-safety-16690641.png', 'img/free-icon-training-7179042.png', 'img/free-icon-blueprint-1058646.png', 'img/free-icon-project-team-14459294.png', 'img/free-icon-evaluation-8635587.png', 'img/free-icon-worker-1018662.png'
                );

                function imgsrc() {
                    i++;
                    i %= imgs.length;
                    image.src = imgs[i];
                }
            </script>
        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <div class="row">
                <div class="col-2">
                    <img src="img/free-icon-about-us-12096221.png" width="100%" height="100%">
                </div>
                <div class="col align-self-center"><h1>Об учебном центре</h1></div>
            </div>
            <div class="row">

                <div class="col">
                    <p>
                        Основан в 2018 году.
                    </p>
                    <p>
                        Учебный центр готовит высококлассных специалистов, востребованных в России и за рубежом.
                        У нас возможно обучиться самым актуальным и востребованным профессиям. Мы даем знания, которые
                        можно
                        применить для развития своего бизнеса или работы в крупных компаниях.
                    </p>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="row">
                <div class="col align-self-center">
                    <h1>Лицензия</h1>
                    <p>Право на образовательную деятельности</p>

                </div>
                <div class="col text-center">
                    <a href="./documents_pdf/Лицензия № Л035-01298-77-00661377.pdf" target="_blank">
                        <img src="img/reestrovaya_vypiska_page-0001.webp" height="100%" width="50%">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <div class="row">

                <div class="col-3"><img src="img/free-icon-hourglass-5582279.png" width="100%" height="100%"></div>
                <div class="col align-self-center">
                    <h3>Многолетний опыт</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Наша компания специализируется на проведении обучения уже более 5 лет. В этот период к нам
                        обратилось
                        свыше 500 компаний, которые остались довольны качеством наших услуг. В штате имеются специалисты
                        с
                        20-летним опытом работы и высокой квалификацией.</p>
                </div>
            </div>
        </div>
        <div class="col">

            <div class="row">

                <div class="col-3"><img src="img/free-icon-official-documents-5274360.png" width="100%"
                                        height="100%"></div>
                <div class="col">
                    <h3>Работаем официально</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        Все программы соответствуют актуальным нормативам, профстандартам, установленным требованиям и
                        типовым инструкциям. После прохождения обучения выдаем документы установленного образца.
                        Результаты вносим в реестр Минтруда и ФИСФРДО.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col-3"><img src="img/free-icon-individuality-5520955.png" width="100%" height="100%"></div>
                <div class="col">
                    <h3>Индивидуальный подход</h3>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>
                        Варианты проведения занятий включают очное и дистанционное обучение, обучающую программу можно
                        проходить без необходимости прерывать рабочий процесс. Возможны различные способы оплаты: оплата
                        банковской картой, наличными, а также оплата частями.</p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col bg-light rounded-1">
            <div class="row">
                <div class="col-2"><img src="img/free-icon-ranking-3239096.png" width="100%" height="100%"></div>
                <div class="col align-self-center"><h3>Популярные услуги</h3></div>
            </div>
            <div class="row">
                <div class="col">
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Экологическая
                            безопасность</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Первая
                            помощь на производстве</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Повышение
                            квалификации по промышленной безопасности</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Профессиональная
                            подготовка рабочих профессий</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Сертификация
                            ИСО/ISO</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Пожарная
                            безопасность</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Повышение
                            квалификации в области строительства</a></li>
                </div>
                <div class="col">
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Специальная
                            оценка условий труда</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Электробезопасность</a>
                    </li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Повышение
                            квалификации в области проектных работ в строительстве</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Охрана
                            труда</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Оценка
                            профессиональных рисков</a></li>
                    <li><a href=""
                           class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Повышение
                            квалификации в области изыскательских работ в строительстве</a></li>
                </div>

            </div>

        </div>

    </div>
    <br>
    <div class="row bg-light rounded-1">
        <div class="col">
            <div class="row">
                <div class="col-2"><img src="img/free-icon-team-6492944.png" height="100%" width="100%"></div>
                <div class="col align-self-center"><h3>Учебный центр профессионального образования ООО «ПрофПромЭко» в
                        Москве</h3></div>
            </div>
            <div class="row">
                <div class="col">
                    <p> Есть необходимость в переподготовке кадров или повышении квалификации сотрудников? Подобрать
                        эффективную
                        программу обучения по многим популярным направлениям можно на сайте нашего Учебно-методического
                        центра
                        профессионального образования.
                    </p>
                    <p>
                        Наш центр проводит обучение и переподготовку рабочих, инженеров, руководителей в любом удобном
                        для
                        заказчика формате:
                    </p>

                    <li>очный</li>
                    <li>заочный с применением дистанционных технологий</li>
                    <li>очно-заочный без привязки к местонахождению обучаемых</li>
                    <li>выезд преподавателя на предприятие в удобное для Вас время</li>
                    <p>Высокий профессионализм преподавателей и экспертов из различных областей позволяет нам оперативно
                        разрабатываеть программу обучения в соответствии с требованиями заказчика и законодательства.
                    </p>
                    <p>Преимущества, выделяющие ООО «ПрофПромЭко» среди конкурентов:
                    </p>
                    <li>более 3000 подготовленных специалистов</li>
                    <li>постоянное развитие согласно законодательству</li>
                    <li>преподаватели - действующие практики</li>
                    <li>По окончании обучения проводятся различного вида аттестации и выдается свидетельство об успешном
                        прохождении курса
                    </li>
                </div>
            </div>


        </div>
    </div>
    <br>
    <div class="row bg-light">
        <div class="col-2"><img src="img/free-icon-smart-door-6782907.png" height="100%" width="100%"></div>
        <div class="col align-self-center">
            <h1>День открытых дверей онлайн</h1>
            <h5>Узнайте об учебном центре , не выходя из дома</h5>
        </div>
        <div class="col align-self-center">
            <button class="btn btn-primary btn-lg" onclick="openPopup()">Оставить заявку на событие</button>
        </div>
    </div>
    <br>

</div>

<?php include_once './footer.php'; ?>



<?php include_once './big_document.php'; ?>
<?php include_once './bid.php'; ?>
<?php include_once './scripts_base.php'; ?>
<script src="js/openPopup.js"></script>
</body>
</html>