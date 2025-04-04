<?php
   $email = $_POST['email'];
   $senha = $_POST['senha'];

     if($email == 'AnaPortela@email.com' && $senha == '2345'){
         //SEGUE PARA A PÁGINA privada.php
         $nome = "Ana Portela ";
         header('Location: privada.php?nome='.$nome);
     }else{
         //SEGUE PARA A PÁGINA erro.php
         header('Location: erro.php');
     }

?>