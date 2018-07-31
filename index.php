<?php
//défintion des variables
$number = 0;
$number1 = rand(0, 100);
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice 2</title>
   </head>
   <body>
     <p>
<?php
while ($number < 20)
{
  echo $number * $number1 . ' ';
  $number++;
}
/*
for($number = 0, $number < 20, $number++0)
{
echo $number * $number1 . ' '
}
 ?>
     </p>
   </body>
 </html>
