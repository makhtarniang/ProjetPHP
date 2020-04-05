<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercice 1</title>
</head>
<link rel="stylesheet" href="css/exo1.css">
<body>    
</body>
</html>
<?php
//fonction nombre premier
  function premier($value)
  {
    $tab=[];
    for ($i=2; $i <= $value; $i++) {
        $nbdiv=0;
        for ($j=1; $j <=$i ; $j++) {
           if ($i%$j==0) {
             $nbdiv++;
           }
        }
        if ($nbdiv==2) {
          $tab[]=$i;
        }
    }
    return $tab;
  }
  // Fonction moyenne
  function moyenne($tab){
    $somme=0;
    $moyenne=0;
    for ($i=0; $i < count($tab); $i++) {
      $somme+=$tab[$i];
    }
    $moyenne=$somme/count($tab);
    return $moyenne;
  }
  // function affichage N
  function affichertab($nb1,$tab){
    echo "<table>";
    $test=0;
    if((count($tab)-$nb1)<=100){
      $delim=count($tab);
    }else{
      $delim=$nb1+100;
    }
    for ($i=$nb1; $i < $delim; $i++) { 
      if($test==0){
        echo "<tr>";
        echo "<td>".$tab[$i]."</td>";
        $test++;
      }else{
        if ($test==9) {
          echo "<td>".$tab[$i]."</td>";
          echo "</tr>";
          $test=0;
        }else {
          echo "<td>".$tab[$i]."</td>";
          $test++;
        }
      }
    }
    echo "</table>";
  }

 ?>
