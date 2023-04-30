<?php
/**
 * @author Laurent Toledo
 * @version 3.3.1
 * @access public
 */

 /**
 * @var integer 
 * @param mixed $n1
 * @param mixed $n2
 * @return $suma
 */

function sumar($n1, $n2) {
    /**
    * Comentarios 
    * function que devuelve el resultado de una suma
    */
    $suma = $n1+$n2;
    return $suma;
}

/**
 * @param mixed &$suma
 * @var integer 
 * @return integer
 */
function dividir(&$suma) {
    /**
    * @ignore
    */
    $dividir = $suma/2;
    return $dividir;
}

/**
 * @global int 
 */
$resultado = sumar(30,20);
echo dividir($resultado);

?>