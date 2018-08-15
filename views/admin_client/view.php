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

            <h4>Просмотр заказов покупателя "<?php echo $client['name']; ?>"</h4>
            <br/>


            <h5>Информация о покупателе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr> 
                    <td>Имя покупателя</td>
                    <td><?php echo $client['name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон покупателя</td>
                    <td><?php echo $client['phone']; ?></td>
                </tr>
                <tr>
                    <td>Адрес покупателя</td>
                    <td><?php echo $client['address']; ?></td>
                </tr>
            </table>

            <h5>Заказы покупателя</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID заказа</th>
                    <th>Адрес доставки</th>
                    <th>Дата оформления</th>
                    <th>Статус</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($ordersList as $order): ?>
                    <tr>
                        <td>
                            <a href="/admin/order/view/<?php echo $order['id']; ?>">
                                <?php echo $order['id']; ?>
                            </a>
                        </td>
                        <td><?php echo $order['order_address']; ?></td>
                        <td><?php echo $order['date']; ?></td>
                        <td><?php echo Order::getStatusText($order['status']); ?></td>    
                        <td><a href="/admin/order/view/<?php echo $order['id']; ?>" title="Смотреть"><i class="fa fa-eye"></i></a></td>
                        <td><a href="/admin/order/update/<?php echo $order['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/admin/order/delete/<?php echo $order['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>


            </table>

            <a href="/admin/client/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

