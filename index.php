<?php
$number1 = 200;
 ?>
 <!DOCTYPE html>
 <html lang="fr">
   <head>
     <meta charset="utf-8" />
     <title>Exercice8</title>
   </head>
   <body>
<p>
<?php
//On décrémente de 200 à 0 avec un pas de 12
while($number1 > 0){
  echo $number1 . ' Enfin !!!!'.'<br/>';
  $number1 -= 12;
}
 ?>
</p>
   </body>
 </html>
