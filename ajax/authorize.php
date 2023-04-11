<?php
require '../lib.php';
$result = [
    'success' => 0,
    'message' => ''
];
if (isset($_GET['email'])
    && $_GET['email']
    && isset($_GET['password'])
    && $_GET['password']) {

    $email = $_GET['email'];
    $password = $_GET['password'];
    $password = md5($password);

    $queryResult = Database::$db->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
    if ($queryResult->num_rows)
    {
        $userItem = $queryResult->fetch_assoc();
        $_SESSION['user_info'] = $userItem;
        $result['success'] = 1;
    }
    else
    {
        $result['message'] = 'Пользователь не найден';
    }
}
else
{
    $result['message'] = 'Заполнены не все обязательные поля';
}

echo json_encode($result);
?>