<div class="admin-section hide-section" id="films">
    <h1>Все фильмы на сайте</h1>
    <table class="table mb-5">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Жанр</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $category = get_all_films();
                foreach($category as $item):
            
            ?>
                <tr>
                    <th scope="row"><?=$item['id']?></th>
                    <td><?=$item['title']?></td>
                    <td>
                        <?php
                            $cat=get_cat_by_key($item["category"]);
                            echo $cat['category_title'];
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Добавить фильм</h1>
    <form action="/data/functions/add-film.php" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
            <div class="col-4">
                <label for="" class="mb-3">Укажите название фильма</label>
                <input type="text" name="title" required class="form-control">
            </div>
            <div class="col-4">
                <label for="" class="mb-3">Укажите url ссылку</label>
                <input type="text" name="url" required class="form-control">
            </div>
            <div class="col-4">
                <label for="" class="mb-3">Укажите категорию</label>
                <select name="category" id="" class="form-control">
                    <?php
                    
                    $categories = get_all_category();
                    foreach($categories as $cat):
                    
                    ?>
                    <option value="<?=$cat['category_id']?>"><?=$cat['category_title']?></option>
                    <?php
                        endforeach;
                    ?>
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-4">
                <label for="">Напишите ключевые слова для поиска</label>
                <textarea name="search_text" class="form-control" required></textarea>
            </div>
            <div class="col-4">
                <label for="">Вставьте ссылку на видео</label>
                <input type="text" name="video_src" required class="form-control">
            </div>
            <div class="col-4">
                <label for="" class="mb-3">Выберите обложку для фильма</label>
                <input type="file" name="cover_img" id="category-cover-input" required class="form-control">
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-12">
                <label for="" class="mb-3">Укажите актерский состав(не обязательно)</label>
                <textarea name="actors" class="form-control"></textarea>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <label for="" class="mb-3">Укажите описание фильма</label>
                <textarea name="description" required class="form-control"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </div>
    </form>

</div>