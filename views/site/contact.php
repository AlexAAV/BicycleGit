<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 padding-right">

                <?php if ($result): ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else: ?>
                    <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form"><!--sign up form-->
                        <h2>Обратная связь</h2>
                        <h5>Есть вопрос? Позвоните по телефону</h5>
                        <h2>+375 (29) 764-60-26</h2>
                        <h5>Или напишите нам</h5>
                        <br/>
                        <form action="#" method="post">
                            <p>Ваша почта</p>
                            <input type="email" name="userEmail" placeholder="E-mail" value="<?php echo $userEmail; ?>"/>
                            <p>Сообщение</p>
                            <input type="text" name="userText" placeholder="Сообщение" value="<?php echo $userText; ?>"/>
                            <br/>
                            <input type="submit" name="submit" class="btn btn-default" value="Отправить" />
                        </form>
                    </div><!--/sign up form-->
                <?php endif; ?>
				
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0c70482d3b0799eb70d185632f51774486032408c4b3b18d70e4b948ea9d65b8&amp;width=370&amp;height=250&amp;lang=ru_RU&amp;scroll=true"></script>
                <h4>Наш адрес: ул. В. Хоружей, 29б</h4>

                <br/>
                <br/>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>