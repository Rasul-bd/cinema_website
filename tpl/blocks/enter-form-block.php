<div class="enter-form-popup hide-enter-form">
    <div class="container">
        <div class="row justify-content-center">
            <form
                id="enter-form" 
                class="col-lg-5 col-md-8 col-sm-12 form"
                action = "/data/functions/login-func.php"
                method = "POST"
            >

            <div class="d-flex align-items-center justify-content-between mb-5">
                <h3>Форма входа</h3>
                <img src="/assets/img/close1.svg" alt="" class="close-enter-popup">
            </div>
                <input id="login" required type="text" class="form-control" name="login" placeholder="Введите логин">
                <input id="password" required type="password" class="form-control" name="password" placeholder="Введите пароль">
                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
</div>