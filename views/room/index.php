<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>

    <div id="wrapper">
        <div id="articles">
            <h1 align="center"> Кабинет пользователя </h1>

            <h3>Привет, <?php echo $user['name']; ?></h3>
            <ul>
                <li><a href="/room/edit">Редактировать данные</a></li>
            </ul>
        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer.php';?>