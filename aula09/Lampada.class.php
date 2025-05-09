<?php
class lampada{
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;

    public function Ligar(){
        $this->Status = True;

    }
    public function Desligar(){
        $this->Status = False;
    }
    public function MostrarDados(){
        echo "O fabricante é: " . $this->Fabricante . "<br>";
        echo "A Tensao é: " . $this->Tensao . "<br>";
        echo "A Potencia é: " . $this->Potencia . "<br>";
        echo "A Cor é: " . $this->Cor . "<br>";
        if($this->Status == 1){
            echo "O status é: LIGADA! <br>";
        }else {
             echo "O status é: DESLIGADA! <br>";
        }
        echo "O Status é: " . $this->Status . "<br>";
    }
}

