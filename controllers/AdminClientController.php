<?php

/**
 * Контроллер AdminCategoryController
 * Управление категориями товаров в админпанели
 */
class AdminClientController extends AdminBase
{

    /**
     * Action для страницы "Управление категориями"
     */
    public function actionIndex()
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем список категорий
        $clientsList = Client::getClientsListAdmin();

        // Подключаем вид
        require_once(ROOT . '/views/admin_client/index.php');
        return true;
    }

    /**
     * Action для страницы "Добавить категорию"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $role = $_POST['role'];

            // Флаг ошибок в форме
            $errors = false;

            // При необходимости можно валидировать значения нужным образом
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую категорию
                Client::createClient($name, $email, $password, $phone, $address, $role);

                // Перенаправляем пользователя на страницу управлениями категориями
                header("Location: /admin/client");
            }
        }

        require_once(ROOT . '/views/admin_client/create.php');
        return true;
    }

    /**
     * Action для страницы "Редактировать клиента"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном клиенте
        $client = Client::getClientById($id);

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена   
            // Получаем данные из формы
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $phone = $_POST['phone'];
            $address = $_POST['address'];
            $role = $_POST['role'];

            // Сохраняем изменения
            Client::updateClientById($id, $name, $email, $password, $phone, $address, $role);

            // Перенаправляем пользователя на страницу управлениями клиентами
            header("Location: /admin/client");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_client/update.php');
        return true;
    }

    /**
     * Action для страницы "Удалить клиента"
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем категорию
            Client::deleteClientById($id);

            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/client");
        }

        // Подключаем вид
        require_once(ROOT . '/views/admin_client/delete.php');
        return true;
    }

    public function actionView($id)
    {
        // Проверка доступа
        self::checkAdmin();

        // Получаем данные о конкретном клиенте
        $client = Client::getClientById($id);

        // Получаем список заказов клиента
        $ordersList = Order::getOrdersListByClientId($id);


        // Подключаем вид
        require_once(ROOT . '/views/admin_client/view.php');
        return true;
    }

}
