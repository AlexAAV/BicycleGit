<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li class="active">Управление покупателями</li>
                </ol>
            </div>

            <a href="/admin/client/create" class="btn btn-default back"><i class="fa fa-plus"></i> Добавить покупателя</a>
            
            <h4>Список покупателей</h4>

            <br/>

            <table class="table-bordered table-striped table">
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Адрес</th>
                    <th>Роль</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($clientsList as $client): ?>
                    <tr>
                        <td>
                            <a href="/admin/client/view/<?php echo $client['id']; ?>">
                                <?php echo $client['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $client['name']; ?></td>
                        <td><?php echo $client['email']; ?></td>
                        <td><?php echo $client['phone']; ?></td>
                        <td><?php echo $client['address']; ?></td>
                        <td><?php if ($client['role'] === 'user') echo 'Пользователь'; else if ($client['role'] === 'guest') echo 'Гость'; ?></td>
                        <td><a href="/admin/client/view/<?php echo $client['id']; ?>"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/admin/client/update/<?php echo $client['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/client/delete/<?php echo $client['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

