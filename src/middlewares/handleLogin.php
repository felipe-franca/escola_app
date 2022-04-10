<?php
require '../controller/UsersController.php';

$username = $_POST["username"];
$password = $_POST["password"];

try {
    $result = UsersController::findByName($username);

    if (!$result || $result[0] != $password)
        throw new \Exception("Usuario ou senha invalida !");

    session_start();
    $_SESSION['user'] = $username;
    $_SESSION['flash_message'] = "Bem vindo $username";
    $_SESSION['flash_type'] = 'success';
    header('Location: ../views/menu.php');
} catch (\Exception $e) {
    session_start();
    $_SESSION['flash_type'] = 'error';
    $_SESSION['flash_message'] = $e->getMessage();
    $location = "Location: ../../index.php?";
    header($location);
}
