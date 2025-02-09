<div class="popup-overlay">
    <div class="popup rounded-lg bg-body">
        <div class="container bg-body rounded">
            <div class="row justify-content-end">
                <div class="col">
                    <h1>Заявка онлайн</h1>
                </div>
                <div class="col-2 align-self-start  text-end btn-block">
                    <button type="button" class="btn btn-light" onclick="closePopup()">
                        X
                    </button>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <form method="post" action="./send_email.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ваше имя</label>
                            <input class="form-control" id="exampleInputEmail1" name="name"
                                   aria-describedby="emailHelp"
                                   placeholder="Иванов Данила">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Телефон</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+7</div>
                                </div>
                                <input type="text" class="form-control" name="telephone" id="exampleInputPassword1"
                                       value="">
                            </div>

                            <br>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text-start" >Отправить
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

</div>
