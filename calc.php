<?php

require_once 'classes/calculator.php';

$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$operation = $_POST['operation'];

$calculator = new Calculator();

$calculator->setNumber1($number1);
$calculator->setNumber2($number2);

switch($operation){
  case 'somar':
    $calculator->sum();
    break;
  case 'subtrair':
    $calculator->subtract();
    break;
  case 'multiplicar':
    $calculator->multiply();
    break;
  case 'dividir':
    $calculator->divide();
    break;  
}

echo $calculator->getTotal();

?>