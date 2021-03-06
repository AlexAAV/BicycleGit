<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Корзина</h2>


                    <?php if ($result): ?>
                        <p>Заказ оформлен. Мы Вам перезвоним.</p>
                    <?php else: ?>

                        <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?> бел. руб.</p><br/>

                        <?php if (!$result): ?>                        

                            <div class="col-sm-4">
                                <?php if (isset($errors) && is_array($errors)): ?>
                                    <ul>
                                        <?php foreach ($errors as $error): ?>
                                            <li> - <?php echo $error; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>

                                <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                                <div class="login-form">
                                    <form action="#" method="post">

                                        <?php if (User::isGuest()): ?>
                                            <p>Ваше имя</p>
                                            <input type="text" name="userName" maxlength="50"placeholder="" value="<?php echo $userName; ?>"/>

                                            <p>Электронная почта</p>
                                            <input type="email" id="email" name="userEmail" maxlength="50" placeholder="" value="<?php echo $userEmail; ?>"/>
											
                                            
                                            <p>Номер телефона</p>
                                            										
											<!--<input type="text" id="phone" name="userPhone" maxlength="13" placeholder="" value="<?php echo $userPhone; ?>"/>-->
											<input type="text" id="phone" name="userPhone" maxlength="13" placeholder="+375 (xx) xxx xx xx">
																					
                                        <?php endif; ?>

                                        <p>Комментарий к заказу</p>
                                        <input type="text" name="userComment" maxlength="255"placeholder="Сообщение" value="<?php echo $userComment; ?>"/>
                                        <p>Адрес доставки</p>
                                        <input type="text" required name="orderAddress" maxlength="50" placeholder="Адрес" value="<?php echo $userAddress; ?>"/>
                                        <br/>
                                        
                                        <?php if (User::isGuest()): ?>
                                            <p>Впервые на нашем сайте?</p>
                                            <p>Вы можете сохранить свои данные для дальнейших покупок.</p>
                                            <p>Всё, что вам нужно, это придумать пароль для доступа к своему профилю.</p>
                                            <input type="password" name="password1" placeholder="******" />
                                            <input type="password" name="password2" placeholder="******" />
                                        <?php endif; ?>

                                        <br/>
                                        <input type="submit" name="submit" class="btn btn-default" value="Оформить" />
                                    </form>
									
											
											
																			
											
											
											
									
									
									
									
                                </div>
                            </div>

                        <?php endif; ?>

                    <?php endif; ?>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>