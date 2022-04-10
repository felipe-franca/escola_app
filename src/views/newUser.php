<?php

require '../controller/UsersController.php';

$header = 'Novo Aluno';
include './header.php';
include './base.php';
include './asideMenu.php';

session_start();
$_SESSION['operation'] = 'create_user';

?>

<div class='container'>
    <div class='main-list'>
        <div class='edit-form'>
            <form action="../middlewares/handleLogin.php" method='POST'>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome">

                <label for="sexo">Sexo</label>
                <select type="text" name="sexo" id="sexo">
                    <option value=""></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>

                <label for="mensalidade">Mensalidade</label>
                <input type="number" name="mensalidade" id="mensalidade">
                <br>
                <button class='btn btn-success' type="submit">
                    Criar
                </button>
            </form>
        </div>
    </div>
</div>