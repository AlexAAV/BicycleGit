<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Панель администратора</a></li>
                    <li><a href="/admin/order">Управление заказами</a></li>
                    <li class="active">Просмотр заказа</li>
                </ol>
            </div>


            <h4>Просмотр заказа #<?php echo $order['id']; ?></h4>
            <br/>



            <h5>Информация о заказе</h5>
            <table class="table-admin-small table-bordered table-striped table">
                <tr>
                    <td>Номер заказа</td>
                    <td><?php echo $order['id']; ?></td>
                </tr>
                <tr>
                    <td>ID покупателя</td>
                    <td><?php echo $order['user_id']; ?></td>
                </tr>
                
                
                <tr> 
                    <td>Имя покупателя</td>
                    <td><?php echo $order['name']; ?></td>
                </tr>
                <tr>
                    <td>Телефон покупателя</td>
                    <td><?php echo $order['phone']; ?></td>
                </tr> 
            
            
            
                <tr>
                    <td>Адрес доставки</td>
                    <td><?php echo $order['order_address']; ?></td>
                </tr>
                <tr>
                    <td>Комментарий покупателя</td>
                    <td><?php echo $order['user_comment']; ?></td>
                </tr>
                <tr>
                    <td><b>Статус заказа</b></td>
                    <td><?php echo Order::getStatusText($order['status']); ?></td>
                </tr>
                <tr>
                    <td><b>Дата заказа</b></td>
                    <td><?php echo $order['date']; ?></td>
                </tr>
            </table>

            <h5>Товары в заказе</h5>

            <table class="table-admin-medium table-bordered table-striped table ">
                <tr>
                    <th>ID велосипеда</th>
                    <th>Артикул велосипеда</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Количество</th>
                    <th>Сумма</th>
                </tr>
				<? $itog =0;?>
                <?php foreach ($products as $product): ?>
				<? 
					$sum = $product['price']*$productsQuantity[$product['id']]; 
					$itog +=$sum;
				?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>
                        <td><?php echo $product['code']; ?></td>
                        <td><?php echo $product['name']; ?></td>
                        <td><?php echo $product['price']; ?> бел. руб.</td>
                        <td><?php echo $productsQuantity[$product['id']]; ?></td>
						<td><?php echo $sum; ?> бел. руб.</td>
                    </tr>
                <?php endforeach; ?>
				
				<tr>					
					<td colspan="5">Итого</td>
					<td><?=$itog?> бел. руб.</td>
				</tr>
            </table>

            <a href="/admin/order/" class="btn btn-default back"><i class="fa fa-arrow-left"></i> Назад</a>
        </div>


</section>

<?php include ROOT . '/views/layouts/footer_admin.php'; ?>

