
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$result = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')   
{
   $pressure         = $_POST['pressure'];  
   $selectedUnit     = $_POST['selectedUnit'];   
   $convertedUnit    = $_POST['convertedUnit'];     

   if($selectedUnit == $convertedUnit) 
   {
       $result = $pressure;
   }
   else if($selectedUnit == 'Pascal' && $convertedUnit  == 'Bar') 
   {
       $result = ($pressure * 0.0001); // Pascal to Bar convertion
   }
   else if($selectedUnit == 'Bar' && $convertedUnit  == 'Pascal') {

       $result = ($pressure * 100000);  // Bar to Pascal convertion
   }

}
?>
