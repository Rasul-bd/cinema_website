<div class="admin-section hide-section" id="category">
    <h1>Все категории</h1>
    <table class="table mb-5">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
                $category = get_all_category();
                foreach($category as $item):
            
            ?>
                <tr>
                    <th scope="row"><?=$item['id']?></th>
                    <td><?=$item['category_title']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Добавить новую категорию</h1>
    <form action="/data/functions/add-category.php" method="post" enctype="multipart/form-data">
        <div class="row mb-5">
            <div class="col-6">
                <label for="" class="mb-3">Укажите название категории</label>
                <input type="text" name="category_title" required class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mb-3">Укажите id категории(латиница, прописные буквы)</label>
                <input type="text" name="category_id" required class="form-control">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-6">
                <label for="" class="mb-3">Выберите картинку для категории</label>
                <input type="file" name="category_img" id="category-logo-input" required class="form-control">
            </div>
            <div class="col-6">
                <label for="" class="mb-3">Укажите описание категории</label>
                <textarea name="category_description" required class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </div>
    </form>

</div>