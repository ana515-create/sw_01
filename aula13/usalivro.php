<?php
  include_once 'Livro.class.php';

  $livro = new livro('Iracema','José de Alencar',true);
  
  //echo"<pre>"; //Ajusta para visualização de codigo
  //print_r($livro);
  //echo "</pre>";
  echo "Status do Livro: ";
  echo $livro->ExibirStatus();
  echo"<hr>";

  echo "Foi feito um empréstimo";
  $livro->Emprestar();
  echo "<hr>";

  echo "Status do Livro: ";
  echo $livro->ExibirStatus();
  echo"<hr>";
  
  echo "Foi feito um empréstimo: ";
  echo $livro->Emprestar();
  echo"<hr>";

  echo "Efetuando uma devolução: ";
  echo $livro->Devolver();
  echo"<hr>";

  echo "Status do Livro: ";
  echo $livro->ExibirStatus();
  echo"<hr>";





  ?>