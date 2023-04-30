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
 */

 class Calculadora {
    // Properties
    public $n1;
    public $n2;
  
    function __construct($n1, $n2) {
      $this->n1 = $n1; 
      $this->n2 = $n2; 
    }
    // Methods
    /**
     * Devuelve una suma
     */
    function get_sumar() {
      return $this->n1 + $this->n2;
    }
  }
  
  $op1 = new Calculadora(30,15);
  echo $op1->get_sumar();
  
  ?>
   
 