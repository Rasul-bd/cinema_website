<title>Главная страница</title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>

<main>

    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-12 d-flex flex-column align-items-center">
                    <h1 class="text-center wow fadeInUp">Фильмы, сериалы, тв шоу</h1>
                    <p class="text-center wow fadeInUp">Все мировые хиты и классика мирового кинематографа в одном месте в один клик</p>
                    <button class="btn btn-danger wow fadeInUp" id="register-form-btn">Регистрация</button>
                </div>
            </div>
        </div>
    </section>

    <section class="premiere">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Премьеры</h2>
                </div>
                <?php require 'tpl/blocks/new_premiers.php' ?>
            </div>
        </div>

    </section>

    <section class="last-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Последние новости</h2>
                </div>
                <div class="col-12 news-grid mb-5">
                    <?php
                        $news = last_news();
                        foreach($news as $item){
                            require "tpl/blocks/post-card.php";
                        }
                    ?>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <a href="/news" class="btn btn-danger">Все новости</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="plus">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <h2>Наши преимущества</h2>
                </div>

                <div class="col-lg-9 col-md-12 col-sm-12 plus-list">
                    <div class="plus-list-card">
                        <span class="number">1</span>
                        <h4>ПРОСМОТР ФИЛЬМОВ БЕЗ РЕКЛАМЫ</h4>
                        <span>Забудьте о раздражающих рекламных вставках.  Наслаждайтесь фильмами без перерывов на рекламу.</span>
                    </div>
                    <div class="plus-list-card">
                        <span class="number">2</span>
                        <h4>КАЧЕСТВО ФИЛЬМОВ В 4 К</h4>
                        <span>Мы гарантируем высокое качество фильмов, которые доступны для просмотра в разрешении 4K</span>
                    </div>
                    <div class="plus-list-card">
                        <span class="number">3</span>
                        <h4>БЕСПЛАТНЫЙ ПРОСМОТР</h4>
                        <span>Наш сайт предлагает бесплатный просмотр фильмов, что делает его еще более привлекательным для любителей кино.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>