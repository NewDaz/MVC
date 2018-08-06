<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>

    <div id="wrapper">
        <div id="articles">
                <div id="about_us">
                    <p><?php echo $newsItem['content'];?></p>
                </div>
            <div id="columRight">
                <ul>
                <?php foreach ($newsList as $newsItem):?>
                     <li> <a href="/news/<?php echo $newsItem['id'];?>">
                             <?php echo $newsItem['title'];?>
                         </a></li>
                <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer.php';?>