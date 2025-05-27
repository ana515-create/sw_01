<?php
class  Produto{
    private $Nome;
    private $Preco;
    private $Quantidade;


    public function __construct ($nome_produto,$preco_produto=0,$quantidade_produto=0){
        $this-> Nome = $nome_produto;
        $this-> Preco = $preco_produto;
        $this-> Quantidade = $quantidade_produto;
    }

    //GET
    public function getNome(){
        return $this->Nome;
    }

    public function getPreco(){
        return $this-> Preco;
    }


    //SET
    public function setNome(){
        return $this->Nome;
    }

    public function setPreco(){
        return $this->Preco;
    }
    
        public function adicionarEstoque($quantidade_produto){
        if ($quantidade_produto> 0) {
            $this->Quantidade += $quantidade_produto;
        }
        }

          public function removerEstoque($quantidade_produto){
          if ($quantidade_produto > 0 && $quantidade_produto <= $this->Quantidade) {
            $this->Quantidade -= $quantidade_produto;
        }
        }

          public function mostrarDetalhes(){
               echo "Produto: " .$this->Nome . "<br>";
        echo "Preço: " .$this->Preco . "<br>";
        echo "Quantidade em estoque: " .$this->Quantidade . "<br>";
        }

    
}



?>