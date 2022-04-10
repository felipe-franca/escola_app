<?php include './src/views/base.php'; ?>

<?php
session_start();
if (isset($_SESSION['user']))
    header('Location: ./src/views/menu.php');

if ($_SESSION['flash_message']) {
    include './src/views/flashMessage.php';
    unset($_SESSION['flash_message']);
    unset($_SESSION['flash_type']);
}
?>

<div class='login'>
    <h3>Login de Acesso</h3>
    <form action="./src/middlewares/handleLogin.php" method="post" class='form'>
        <label for="username">Usuario</label>
        <input id='username' type="text" name="username">
        <label for="password">Senha</label>
        <input id='password' type="password" name="password">
        <br>
        <button type="submit" class='btn btn-login'>
            Sign In
        </button>
    </form>
</div>