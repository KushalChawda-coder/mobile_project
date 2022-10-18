<?php
session_start();
session_unset();
session_destroy();
header('Location: http://localhost/mobile%20project/index.php');
?>
