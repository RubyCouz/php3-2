<?php
//défintion des variables
$number = 0;
$number1 = 26;

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
while ($number <= 20)
{
  echo $number * $number1;
  $number++ . ' ,';

}
 ?>
     </p>
   </body>
 </html>
