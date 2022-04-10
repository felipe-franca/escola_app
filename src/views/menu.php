<?php

include './header.php';

?>
<div class="container">
    <?php

    include './base.php';
    session_start();

    if (!isset($_SESSION['user']))
        header('Location: ../../index.php');

    if (isset($_SESSION['flash_message'])) {
        include './flashMessage.php';
        unset($_SESSION['flash_message']);
        unset($_SESSION['flash_type']);
    }
    ?>
</div>

<?php include './asideMenu.php'; ?>