<div class="register-form-popup hide-register-form">
    <div class="container">
        <div class="row justify-content-center">
            <form 
                action="data/functions/reg-func.php"
                method="POST"
                
                id="register-form"
                class="col-lg-5 col-md-8 col-sm-12 form"
            >

            <div class="d-flex align-items-center justify-content-between mb-5">
                <h3>Форма Регистраций</h3>
                <img src="/assets/img/close1.svg" alt="" class="close-register-popup">
            </div>
                <input id="newname" required type="text" class="form-control" name="newname" placeholder="Введите имя">
                <input maxlength="10" id="newlogin" required type="text" class="form-control" name="newlogin" placeholder="Введите логин(не более 10 символов)">
                <input maxlength="6" id="newpassword" required type="password" class="form-control" name="newpassword" placeholder="Введите пароль(не более 6 символов)">
                <input maxlength="6" id="checkpassword" required type="password" class="form-control" name="checkpassword" placeholder="Введите пароль заново">
                <button disabled id="register-submit-btn" type="submit" class="btn btn-primary">Зарегестрироваться</button>
            </form>
        </div>
    </div>
</div>