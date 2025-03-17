<?php

    $nome = $_GET['cxnome'];
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3= $_GET['nota3'];

    $media = ($nota1+ $nota2 + $nota3);
    $media2= $media/3;

    echo "Sua média é : $media2";
  
?>