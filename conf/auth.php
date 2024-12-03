<?php
 $nome = "";
 session_start();
 if(isset($_SESSION['isLogado']) && $_SESSION['isLogado']) {
   $nome = $_SESSION['nome'];
 } else {
   header('Location: /trabalho/index.php');
 }
   
?>