<?php
 include_once 'Aluno.class.php';

 $ana = new Aluno("bia", 10,7);

 $nota1 = $ana->getNota1();
 $nota2 = $ana->getNota2();
 //echo $nota1;

  $media = $ana->CalculaMedia($nota1,$nota2);
   echo "nome do Aluno: " .$ana ->getNome() . "<br>";
   echo "Média: $media <br>";
   echo "Situação: " . $ana->VerificarSituacao($media);
   echo "<hr>";
echo $ana->VerificarSituacao($media);

?>