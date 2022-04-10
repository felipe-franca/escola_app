<?php
require '../controller/UsersController.php';
$header = 'Lista de Alunos';
include './menu.php';
$genres = ['M' => 'Masculino', 'F' => 'Feminino'];
$usersList = UsersController::findUsers();
$monthly = [];

foreach($usersList  as $user) {
    array_push($monthly, (float) $user['mensalidade']);
}

?>

<div class='container'>
    <div class='main-list'>
        <table>
            <caption>
                Alunos Cadastrados
            </caption>
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Mensalidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($usersList as $user) {
                    echo "<tr>";
                    echo "<td>" . $user['id'] . "</td>";
                    echo "<td>" . $user['nome'] . "</td>";
                    echo "<td>" . $genres[$user['sexo']] . "</td>";
                    echo "<td>" . $user['mensalidade'] . "</td>";
                    echo "<td>";
                    include './actions.php';
                    echo  "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Total alunos: <?php echo count($usersList) ?></th>
                    <th>Total Mensalidades:
                        <?php echo "R$" . number_format(array_sum($monthly), 2, ',', '.') ?>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>