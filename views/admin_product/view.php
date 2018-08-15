<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/order">Управление заказами</a></li>
                    <li class="active">Просмотр заказов</li>
                </ol>
            </div>


            <h4>Заказы по товару:</h4>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    
                    <th>ID <br>заказа</th>
                    <th>ФИО <br>покупателя</th>
                    <th>Телефон <br>покупателя</th>
                    <th>Адрес<br> доставки</th>
                    <th>Комментарий <br>покупателя</th>
                    <th>Велосипеды</th>
                    <th>Дата</th>
                    <th>Статус</th>

                </tr>
                <?php foreach ($orders as $ord): ?>
                    <tr>
                        <td class="table-admin-product-orders-ID"><?php echo $ord['id']; ?></td>
                        <td class="table-admin-product-orders-name"><?php echo $ord['name']; ?></td>
                        <td class="table-admin-product-orders-phone"><?php echo $ord['phone']; ?></td>
                        <td class="table-admin-product-orders-address"><?php echo $ord['order_address']; ?></td>
                        <td class="table-admin-product-orders-comment"><?php echo $ord['user_comment']; ?></td>

                        <td class="table-admin-product-orders-products"><?php echo Product::transformProducts($ord['products']); ?></td>
                        <!-- <td><?php echo $ord['products']; ?></td>  -->
                        

                        <td class="table-admin-product-orders-date"><?php echo $ord['date']; ?></td>
                        <td class="table-admin-product-orders-status"><?php echo Order::getStatusText($ord['status']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <a href="/admin/product/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

