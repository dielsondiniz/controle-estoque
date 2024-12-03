<?php
session_start();
session_destroy();
header('Location: /trabalho/index.php');
?>