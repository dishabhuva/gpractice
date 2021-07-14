<?php 

require 'Animal.php';
require 'Cow.php';
require 'Lion.php';

$cow=new Cow('indian','grass');
$lion =new Lion("African","meat");

echo "Welcome to the Family of Animal".'</br></br></br></br>';

echo "cow belongs to the ".$cow->get_family().' family and eat '.$cow->get_food().'</br></br></br></br>';

echo "Lion belongs to the ".$lion->get_family().' family and eat '.$lion->get_food().'</br></br></br></br>';



?>