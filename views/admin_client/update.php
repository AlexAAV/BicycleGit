<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/client">Управление покупателями</a></li>
                    <li class="active">Просмотр заказов покупателя</li>
                </ol>
            </div>


            <h4>Редактировать покупателя "<?php echo $client['name']; ?>"</h4>

            <br/>

            <div class="col-lg-4">
                <div class="login-form">
                    <form action="#" method="post">

                        <input type="hidden" name="id" placeholder="" value="<?php echo $client['id']; ?>">

                        <p>Имя</p>
                        <input type="text" name="name" placeholder="" value="<?php echo $client['name']; ?>">

                        <p>Email</p>
                        <input type="text" name="email" placeholder="" value="<?php echo $client['email']; ?>">

                        <p>Password</p>
                        <input type="text" name="password" placeholder="" value="<?php echo $client['password']; ?>">

                        <p>Телефон</p>
                        <input type="text" name="phone" placeholder="" value="<?php echo $client['phone']; ?>">

                        <p>Адрес</p>
                        <input type="text" name="address" placeholder="" value="<?php echo $client['address']; ?>">

                        <p>Роль</p>
                        <select name="role">
                            <option value="guest" <?php if ($client['role'] === 'guest') echo ' selected="selected"'; ?>>Гость</option>
                            <option value="user" <?php if ($client['role'] === 'user') echo ' selected="selected"'; ?>>Пользователь</option>
                            <option value="admin" <?php if ($client['role'] === 'admin') echo ' selected="selected"'; ?>>Администратор</option>
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

