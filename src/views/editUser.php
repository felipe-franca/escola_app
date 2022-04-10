<?php

require '../controller/UsersController.php';

$header = 'Editar Usuário';
include './header.php';
include './base.php';
include './asideMenu.php';

$userId = $_GET['id'];

$userData = UsersController::findById($userId);

?>

<div class='container'>
    <div class='main-list'>
        <div class='edit-form'>
            <form action="../middlewares/handleRequest.php" method='POST'>
                <label for="id">Matricula</label>
                <input class='not-allowed' type="number" name="id" id="id" value=<?php echo $userData['id'] ?> >

                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" value=<?php echo $userData['nome'] ?> >

                <label for="sexo">Sexo</label>
                <input type="text" name="sexo" id="sexo" value=<?php echo $userData['sexo'] ?> disabled>

                <label for="mensalidade">Mensalidade</label>
                <input type="text" name="mensalidade" id="mensalidade" value=<?php echo $userData['mensalidade'] ?> >
                <br>
                <button class='btn btn-success' type="submit">
                    Salvar
                </button>
            </form>
        </div>
    </div>
</div>