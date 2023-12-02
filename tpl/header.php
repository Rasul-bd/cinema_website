</head>
<body>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-between">
                <a href="/">
                    <img src="/assets/img/icon/JUSTFILMS.svg" class="logo" alt="">
                </a>
                <div class="desktop-nav">
                    <a href="/news">Новости</a>
                    <a href="/premier">Премьеры</a>
                </div>

                <?php
                if ( isset($_SESSION['user']) && !empty($_SESSION['user']) ){
                    require "tpl/blocks/nav-block.php";
                }else{
                    echo '<button class="btn btn-light" id="enter-form-btn">Войти</button>';
                }
                ?>
            </div>
        </div>
    </div>
</header>

<?php require "tpl/blocks/enter-form-block.php";?> 
<?php require "tpl/blocks/register-form-block.php";?>
