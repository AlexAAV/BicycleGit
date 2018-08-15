<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/client">Управление покупателями</a></li>
                    <li class="active">Удалить покупателя</li>
                </ol>
            </div>


            <h4>Удалить покупателя #<?php echo $id; ?></h4>


            <p>Вы действительно хотите удалить этого покупателя?</p>

            <form method="post">
                <input type="submit" name="submit" value="Удалить" />
            </form>

        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

