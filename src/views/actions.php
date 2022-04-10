<div class='actions'>
    <a class='label edit'  href=<?php echo "./editUser.php?id=$user[id]" ?>  >Alterar</a>
    <a class='label delete' href=<?php echo "../middlewares/handleRequest.php?id=$user[id]&operations='delete'" ?>  >Excluir</a>
</div>