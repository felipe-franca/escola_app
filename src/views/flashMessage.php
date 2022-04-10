<?php
$type = $_SESSION['flash_type'];
$message = $_SESSION['flash_message'];

echo "<div id='flash' class='flash flash-$type' >$message</div>";
