<?php include ROOT. '/views/layouts/header.php';?>
<?php include ROOT.'/views/layouts/menu.php';?>

<div id="wrapper">
    <div id="articles">
        <?php if ($result): ?>
            <p>Сообщение отправленно </p>
            </br>
            </br>
        <?php else: ?>
            <?php if (isset($errors)&& is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li>- <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
        <?php endif; ?>

        <form action="#" method="post" >
            <label for="email">Email</label>
            <input type="email"  id="email" name="userEmail" placeholder="adress@example.com" value="<?php echo $userEmail; ?>"/>
            <label for="message">Введите ваше сообщение</label>
            <textarea name="userText" id="message" placeholder="Введите ваше сообщение"></textarea>
            <input type="submit" value="Отправить" id="send" name="submit"/>
        </form>
        <?php endif; ?>
    </div>

</div>
</div>

<?php include ROOT.'/views/layouts/footer.php';?>