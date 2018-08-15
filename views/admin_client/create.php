<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/client">Управление покупателями</a></li>
                    <li class="active">Добавить покупателя</li>
                </ol>
            </div>


            <h4>Добавить нового покупателя</h4>

            <br/>

            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">


                        <p>Имя</p>
                        <input type="text" name="name" placeholder="" value="">

                        <p>Email</p>
                        <input type="email" name="email" placeholder="" value="">

                        <p>Password</p>
                        <input type="text" name="password" placeholder="" value="">

                        <p>Телефон</p>
                        <input type="text" id="phone" name="phone" placeholder="" value="">

                        <p>Адрес</p>
                        <input type="text" name="address" placeholder="" value="">

                        <p>Роль</p>
                        <select name="role">
                            <option value="user" selected="selected">Пользователь</option>
                            <option value="guest">Гость</option>
                        </select>

                        <br><br>

                        <input type="submit" name="submit" class="btn btn-default" value="Сохранить">
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

