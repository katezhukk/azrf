<?php
require '../lib.php';
$result = [
    'success' => 0,
    'message' => ''
];
if (isset($_GET['fio'])
    && $_GET['fio']
    && isset($_GET['email'])
    && $_GET['email']
    && isset($_GET['phone'])
    && $_GET['phone']
    && isset($_GET['password'])
    && $_GET['password']) {

    $fio = $_GET['fio'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $password = $_GET['password'];
    $password = md5($password);

    $queryResult = Database::$db->query("SELECT * FROM users WHERE phone = '$phone' OR email = '$email'");
    if ($queryResult->num_rows)
    {
        $result['message'] = 'Профиль с указанной почтой или телефоном уже существует';
    }
    else
    {
        $queryResult = Database::$db->query("INSERT INTO users (fio, email, phone, password) VALUES ('$fio', '$email', '$phone', '$password')");
        if ($queryResult)
        {
            $result['success'] = 1;
        }
    }
}
else
{
    $result['message'] = 'Заполнены не все обязательные поля. Заполните и попробуйте еще раз.';
}

echo json_encode($result);
?>