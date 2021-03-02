<?php
    $numero = 0;

    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        getFactorial($numero);
    }

    function getFactorial($numero){ 
        $factorial = 1; 
        for ($i = 1; $i <= $numero; $i++){ 
          $factorial = $factorial * $i; 
        } 

        echo "Factorial de $numero  es igual a $factorial"; 
    } 

?>