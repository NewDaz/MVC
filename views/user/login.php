<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>

    <div id="wrapper">
        <div id="articles">
            <?php if(isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                    <li>- <?php echo $error; ?></li>
                    <?php endforeach;?>
                </ul>
            <?php endif; ?>

            <form action="#" method="post" >
                <label for="email">Email</label>
                <input type="email"  id="email" name="email" placeholder="adress@example.com" value=""/>
                <label for="password">Введите ваше пароль</label>
                <input type="password" id="password" name="password" placeholder="Введите пароль" value="" />
                <input type="submit" value="Вход" id="send" name="submit"/>
            </form>
        </div>
    </div>


    </div>


<?php include ROOT.'/views/layouts/footer.php';?>