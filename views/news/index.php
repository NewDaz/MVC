<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>
    <div id="wrapper">
        <div id="articles">
            <?php foreach ($newsList as $newsItem):?>
            <article>
                <img src="<?php echo News::getImage($newsItem['id']); ?>" alt="Изображение" title="Изображение" />
                <h2><?php echo $newsItem['title'];?></h2>
                <p><?php echo $newsItem['short_content']; ?>
                </p>
                <a href='/news/<?php echo $newsItem['id'] ;?>' title="Посмотреть статью">Читать далее</a>
            </article>
            <?php endforeach; ?>
        </div>
        <div class="clear">
            <center>
                <div id="main_soc_block">
                    <div id="main_soc_block_in">
                        <h3>Регистрируйтесь на сайте</h3>
                        <p> Тут есть тескст....наверное</p>
                        <a href="reg.html" title="Регистрируйтесь">Регистрируйтесь</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</div>
<?php include ROOT.'/views/layouts/footer.php';?>
