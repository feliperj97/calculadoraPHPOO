<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
include_once '../model/calculadora.class.php';

    if (isset($_POST['n1'])){

        $calc = new Calculadora();
        $calc->n1 = $_POST['n1'];
        $calc->n2 = $_POST['n2'];
        
        if (isset($_POST['somar'])){ 
             echo $calc->Somar(n1, n2);
        }

        if (isset($_POST['subtrair'])){
            echo $calc->Subtrair(n1, n2);
        }

        if(isset($_POST['multiplicar'])){
            echo $calc->Multiplicacao(n1, n2);
        }

        if(isset($_POST['dividir'])){
            echo $calc->Dividir(n1, n2);
        }
                    
    }


?>