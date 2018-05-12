<?php
#Classe que gerência os métodos das 4 operações da calculadora
 class Calculadora {
    
     public function Somar($n1, $n2){

        echo $this->n1 + $this->n2;

    }

    public function Subtrair($n1, $n2){
        echo $this->n1 - $this->n2;
    }

    public function Dividir($n1, $n2){
        echo $this->n1/$this->n2;
    }

    public function Multiplicacao($n1, $n2){

        echo $this->n1*$this->n2;

    }

}


?>