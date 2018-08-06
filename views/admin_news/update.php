<?php include ROOT. '/views/layouts/header_admin.php';?>

    <div id="wrapper">
        <div id="articles">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="title"> Заголовок</label>
                <input type="text" name="title" value="<?php echo $news['title']; ?>">
                <label for="image"> Картинка</label>
                <img src="<?php echo News::getImage($news['id']); ?>">
                <input type="file" name="image" placeholder="" value="<?php echo $news['id'];?>">
                <label for="content"> Текст новости</label>
                <textarea name="content"><?php echo $news['content']; ?> </textarea>
                <label for="short_content"> Краткое описание</label>
                <textarea name="short_content"><?php echo $news['short_content']; ?> </textarea>
                <br>
                <input type="submit" name="submit" value="Редактировать">
            </form>
        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer_admin.php';?>