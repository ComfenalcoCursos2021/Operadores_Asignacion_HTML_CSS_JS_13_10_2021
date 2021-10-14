<?php
    header("Content-Type: application/json");


    $LETRA = (string) "A";
    $NUMERO = (integer) 1;
    $AFIRMACION = (string) "Si";

    $LETRA .= $NUMERO.$AFIRMACION;

    var_dump($LETRA);
    var_dump($NUMERO);
    var_dump($AFIRMACION);







//     //Operador de concatenacion
//     $LETRAS = (string) "abcd";
//     $NUMERO = (float) 1234.12;

//     $RESULTADO = (integer) $LETRAS." --- ".$NUMERO;

// $PLANTILLA = <<<HTMl
//     <p>
//         $LETRAS $NUMERO
//         <b>${!${''} = $RESULTADO}</b>
//     </p>
// HTMl;

    // print_r($PLANTILLA);








    
    // $_NOMBRE = (string) null;
    // $NOMBRE = (string) "Miguel";

    // //Operador de asignacion
    // $_NOMBRE = (string) $NOMBRE;
    
    // var_dump($_NOMBRE);
    // var_dump($NOMBRE);
?>
