<!Doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Basic calculation that involves addition, subtraction, division, multiplication and modulus with  2 parameters.</title>
<h1>Basic calculation that involves addition, subtraction, division, multiplication and modulus with  2 parameters.</h1>
</head>
<body>
  <?php 
  $num1 =30;
  $num2 =10;
  $sum =$num1 + $num2;
$subtraction =$num1 -  $num2;
  $division =$num1 /  $num2;
  $multiply =$num1 *  $num2;
  $remainder =$num1 %  $num2;
  ?>
  <h3>
<?php
      echo "sum: ".$num1. "+". $num2."= ".$sum."<br>";
      echo "subtraction: ".$num1. "-"  . $num2."= ".$subtraction."<br>";
      echo "division: ".$num1. "/". $num2."= ".$division."<br>";
      echo "multiply: ".$num1. "*". $num2."= ".$multiply."<br>";
      echo "modulus: ".$num1. "%". $num2."= ".$remainder."<br>";     
?>
  </h3>
</body>
</html>
