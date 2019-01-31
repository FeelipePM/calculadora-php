<?php

class Calculator{
  private  $total;
  private $number1;
  private $number2;

  function __construct(){
    $this->total = 0;
    $this->number1 = 0;
    $this->number2 = 0;

  }

  public function setNumber1($parameter_number1){
    $this->number1 = $parameter_number1;
  }

  public function setNumber2($parameter_number2){
    $this->number2 = $parameter_number2;
  }

  public function sum(){
    $this->total = $this->number1 + $this->number2;
  }

  public function subtract(){
    $this->total = $this->number1 - $this->number2;
  }

  public function multiply(){
    $this->total = $this->number1 * $this->number2;
  }

  public function divide(){
    $this->total = $this->number1 / $this->number2;
  }

  public function getTotal() {
    return $this->total;
  }

}

?>