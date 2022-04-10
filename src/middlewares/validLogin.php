<?php
require '../services/database/Connect.php';

$username = $_POST["username"];
$password = $_POST["password"];

try {
    $db = new Connect();
    $conn = $db->connect();

    $sql = "SELECT senha FROM usuario WHERE nome LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$username]);
    $result = $stmt->fetch();

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
