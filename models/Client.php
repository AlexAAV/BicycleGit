<?php

/**
 * Класс Client - модель для работы с клиентами (пользователями)
 */
class Client
{

    /**
     * Возвращает массив клиентов для списка в админпанели <br/>
     * @return array <p>Массив категорий</p>
     */
    public static function getClientsListAdmin()
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Запрос к БД
        $result = $db->query('SELECT id, name, email, phone, address, role FROM user WHERE role = "user" OR role = "guest" ORDER BY id ASC');

        // Получение и возврат результатов
        $clientList = array();
        $i = 0;
        while ($row = $result->fetch()) {
            $clientList[$i]['id'] = $row['id'];
            $clientList[$i]['name'] = $row['name'];
            $clientList[$i]['email'] = $row['email'];
            $clientList[$i]['phone'] = $row['phone'];
            $clientList[$i]['address'] = $row['address'];
            $clientList[$i]['role'] = $row['role'];
            $i++;
        }
        return $clientList;
    }

    /**
     * Удаляет категорию с заданным id
     * @param integer $id
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function deleteClientById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'DELETE FROM user WHERE id = :id';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    /**
     * Редактирование категории с заданным id
     * @param integer $id <p>id категории</p>
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат выполнения метода</p>
     */
    public static function updateClientById($id, $name, $email, $password, $phone, $address, $role)
    {



        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = "UPDATE user 
            SET name = :name,
                password = :password,
                address = :address, 
                phone = :phone, 
                email = :email, 
                role = :role
            WHERE id = :id";

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':address', $address, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
        return $result->execute();
    }

    /**
     * Возвращает клиента с указанным id
     * @param integer $id <p>id клиента</p>
     * @return array <p>Массив с информацией о клиенте</p>
     */
    public static function getClientById($id)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE id = :id';

        // Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);

        // Выполняем запрос
        $result->execute();

        // Возвращаем данные
        return $result->fetch();
    }

    /**
     * Возвращает текстое пояснение статуса для категории :<br/>
     * <i>0 - Скрыта, 1 - Отображается</i>
     * @param integer $status <p>Статус</p>
     * @return string <p>Текстовое пояснение</p>
     */
    // public static function getStatusText($status)
    // {
    //     switch ($status) {
    //         case '1':
    //             return 'Отображается';
    //             break;
    //         case '0':
    //             return 'Скрыта';
    //             break;
    //     }
    // }

    /**
     * Добавляет новую категорию
     * @param string $name <p>Название</p>
     * @param integer $sortOrder <p>Порядковый номер</p>
     * @param integer $status <p>Статус <i>(включено "1", выключено "0")</i></p>
     * @return boolean <p>Результат добавления записи в таблицу</p>
     */
    public static function createClient($name, $email, $password, $phone, $address, $role)
    {
        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'INSERT INTO user (name, email, password, phone, address, role) '
                . 'VALUES (:name, :email, :password, :phone, :address, :role)';

        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':address', $address, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);
        return $result->execute();
    }

}
