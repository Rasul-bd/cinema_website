<div class="admin-section hide-section" id="users">
    <div class="active-users mb-5">
        <h1>Все пользователи сайта</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Логин</th>
                <th scope="col">Пароль</th>
                <th scope="col">Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $users = users();
                    foreach($users as $item):
                ?>
                <tr>
                    <th> <?=$item['id']?> </th>
                    <td> <?=$item['name']?> </td>
                    <td> <?=$item['login']?> </td>
                    <td> <?=$item['password']?> </td>
                    <td>
                        <form class="del-user-form" action="/data/functions/archive-user-function.php" method="post">
                            <input type="text" name="id" value="<?=$item['id']?>" style="display:none;">
                            <input type="text" name="name" value="<?=$item['name']?>" style="display:none;">
                            <input type="text" name="login" value="<?=$item['login']?>" style="display:none;">
                            <input type="text" name="password" value="<?=$item['password']?>" style="display:none;">


                            <button type="submit" class="btn btn-warning" style="color:white;">Архивирвать</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="archive-users">
        <h1>Архив пользователей</h1>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Логин</th>
                <th scope="col">Пароль</th>
                <th scope="col">Действие</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $archive_users = archive_users();
                    foreach($archive_users as $item):
                ?>
                <tr>
                    <th> <?=$item['id']?> </th>
                    <td> <?=$item['name']?> </td>
                    <td> <?=$item['login']?> </td>
                    <td> <?=$item['password']?> </td>
                    <td>
                        <form class="del-user-form" action="/data/functions/rehab-user-function.php" method="post">
                        <input type="text" name="id" value="<?=$item['id']?>" style="display:none;">
                            <input type="text" name="name" value="<?=$item['name']?>" style="display:none;">
                            <input type="text" name="login" value="<?=$item['login']?>" style="display:none;">
                            <input type="text" name="password" value="<?=$item['password']?>" style="display:none;">




                            <button type="submit" class="btn btn-success" style="color:white;">Восстановить</button>
                        </form>
                    </td>
                    <td>
                        <form class="del-user-form" action="/data/functions/del-user-function.php" method="post">
                            <input type="text" name="id" value="<?=$item['id']?>" style="display:none;">
                            <input type="text" name="name" value="<?=$item['name']?>" style="display:none;">
                            <input type="text" name="login" value="<?=$item['login']?>" style="display:none;">
                            <input type="text" name="password" value="<?=$item['password']?>" style="display:none;">



                            <button type="submit" class="btn btn-danger" style="color:white;">Удалить</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>