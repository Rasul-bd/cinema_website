<?php

if(isset($_SESSION["admin"]) ):?>

</head>
<body>
    <header class="admin-header">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <img src="/assets/img/icon/JUSTFILMS.svg" alt="">
                    <span>Админ-панель</span>

                    <a href="/data/functions/admin-logout-func.php" class="btn btn-primary">
                        <i class="bi bi-box-arrow-left"></i>
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main class="admin-main">
        <div class="container">
            <div class="row">
                <div class="col-2 sidepanel">

                    <h5>Секции сайта</h5>

                    <button class="sidepanel_btn" data-section="users">
                        <i class="bi bi-person"></i>
                        <span>Пользователи</span>
                    </button>

                    <button class="sidepanel_btn" data-section="category">
                        <i class="bi bi-card-checklist"></i>
                        <span>Категории</span>
                    </button>
                    
                    <button class="sidepanel_btn" data-section="films">
                        <i class="bi bi-camera-reels"></i>
                        <span>Фильмы</span>
                    </button>

                    <button class="sidepanel_btn" data-section="news">
                        <i class="bi bi-newspaper"></i>
                        <span>Новости</span>
                    </button>
                </div>
                <div class="col-10 rightpanel">
                    <?php
                    require 'blocks/start-block.php';
                    require 'blocks/users-block.php';
                    require 'blocks/category-block.php';
                    require 'blocks/films-block.php';
                    require 'blocks/news-block.php';
                    
                    ?>
                </div>
            </div>
        </div>
    </main>

    <script src="/assets/js/pages/admin-page.js"></script>



<?php

else: header('loction: /login');
endif;
?>