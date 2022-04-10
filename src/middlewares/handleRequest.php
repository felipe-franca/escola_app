<?php

require '../controller/UsersController.php';

if (!empty($_GET)) {
    $id = $_GET['id'];
    UsersController::removeUser($id);
}

if (!empty($_POST)) {
    session_start();
    $operation = $_SESSION['operation'] ?: 'update_user';
    $data = [];

    if ($operation == 'create_user') {
        $data = [
            'name'    => $_POST['nome'],
            'genre'   => $_POST['sexo'],
            'monthly' => $_POST['mensalidade']
        ];

        UsersController::createUser($data);
    } else {
        $data = [
            'name'    => $_POST['nome'],
            'monthly' => $_POST['mensalidade'],
            'id'      => $_POST['id']
        ];

        UsersController::updateUser($data);
    }

    unset($_SESSION['operation']);
}
