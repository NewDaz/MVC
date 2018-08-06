<?php include ROOT. '/views/layouts/header_admin.php';?>

    <div id="wrapper">
        <div id="articles">
            <p> Админ панель</p>
            <br>
            <a href="/admin/news/create">Добавить новость</a>
            <br>
            <h4>Список Новостей</h4>

            <table border="1">
                <tr>
                    <th>ID новости</th>
                    <th>Заголовок</th>
                    <th>Текст</th>
                    <th>Красткое описание</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($newsList as $news):  ?>
                    <tr>
                        <td><?php echo $news['id']; ?></td>
                        <td><?php echo $news['title']; ?></td>
                        <td><?php echo $news['content']; ?></td>
                        <td><?php echo $news['short_content']; ?></td>
                        <td><a href="/admin/news/delete/<?php echo $news['id']?>">DELETE</a></td>
                        <td><a href="/admin/news/update/<?php echo $news['id']?>">UPDATE</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer_admin.php';?>