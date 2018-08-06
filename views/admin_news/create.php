<?php include ROOT. '/views/layouts/header_admin.php';?>

    <div id="wrapper">
        <div id="articles">
            <form action="#" method="post" enctype="multipart/form-data">
            <label for="title"> Заголовок</label>
            <input type="text" name="title" value="">
            <label for="image"> Картинка</label>
            <input type="file" name="image" placeholder="" value="">
            <label for="content"> Текст новости</label>
            <input type="text" name="content" value="">
            <label for="short_content"> Краткое описание</label>
            <input type="text" name="short_content" value="">
            <br>
            <input type="submit" name="submit" value="Создать">
            </form>
        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer_admin.php';?>