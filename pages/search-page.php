<?php
if(isset($_SESSION['user']) && !empty($_SESSION['user'])):
?>
<title>Главная страница</title>
<meta name="description" content="Описание главной страницы">

<?php require "tpl/header.php"; ?>

<main>
    <section class="search-main">
        <div class="container">
            <div class="row">
            <div class="col-12 mb-5">
                <div class="search-result">
                    <h2>Результаты поиска:</h2>
                    <p><?=$_GET["key"]?></p>
                </div>
            </div>

                <div class="col-12 search_fail_wrapper hide-msg">
                    <div class="result d-flex">
                        <img src="/assets/img/icon/sad.svg" alt="">
                        <p>К сожелению, по вашему запросу ничего не найдено!</p>
                    </div>
                </div>

                <?php
                
                $result = search($_GET['key']);
                echo '<div class="col-12 premier-list search_result">';

                    foreach($result as $item){
                        require "tpl/blocks/film-card.php";
                    }

                echo '</div>';
                
                
                ?>

            </div>
        </div>
    </section>
    <section class="new-premiere">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Последние новинки</h2>
                </div>
                <?php require 'tpl/blocks/new_premiers.php' ?>
            </div>
        </div>

    </section>
</main>

<script src="/assets/js/pages/search-page.js"></script>
<?php
else: header("location:/check");
endif;
?>