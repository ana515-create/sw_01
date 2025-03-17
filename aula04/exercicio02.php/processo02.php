<?php

    $numb1 = $_GET['numb1'];
    $numb2 = $_GET['numb2'];
    $numb3 = $_GET['numb3'];

  
    if($numb1 > $numb2 && $numb1 >$numb3){
        echo "O seu número 1 é o maior ($numb1)";
    }

    if($numb2 > $numb1 && $numb2 >$numb3){
        echo "O seu número 2 é o maior ($numb2)";
    }

    if($numb3 > $numb2 && $numb3 >$numb1){
        echo "O seu número 3 é o maior ($numb3)";
    }


    ?>