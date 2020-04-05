<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"href="css/exo2.css">
    <title>EXCERCICE 2</title>
</head>
<body>
    <h1>EXCERCICE 2</h1>
    <form action="#" method="POST">
    <select name="sele" style="align:centre">
           <option value="">choix langue 
            <option value="fr">français
            <option value="en">english
            <input type="submit" name="numero" value="valider">
         </select>
         </form>
<?php
if(isset($_POST["numero"]))
{
$i=1;
$selection=$_POST["sele"];
    if (isset($selection)) {
        $tab=array(
            "fr"=>["1"=>'Janvier', 
            "2"=>'Février', 
            "3"=>'Mars',
             "4"=>'Avril',
             "5"=>'Mai',
             "6"=> 'Juin',
            "7"=>'Juillet',
            "8"=>'Août', 
            "9"=>'Septembre',
           "10"=> 'Octobre',
           "11"=> 'Novembre', 
           "12"=>'Décembre',],                  
                           "en"=>[
                    "1"=>'January',
                    "2"=>'fevrier',             
                    "3"=>' March',
                    "4"=>' April',
                    "5"=>' May',
                    "6"=>' June',
                    "7"=>' July',
                    "8"=>' August',
                    "9"=>'September',
                   "10"=>'October',
                   "11"=>' November',
                   "12"=>' Decembe',
                           ]);
                           if (isset($selection)&& $selection=="fr")
                                 {
                               echo'<table borber:400px solid bleue " >';
                               while($i<12)
                               {
                                   echo'<tr>';
                                   for ($j=$i; $j < $i+3; $j++) { 
                                     echo '<td >'.$j.'</td>';
                                     echo '<td>'.$tab ["fr"][$j].'</td>';
                                 }
                                   $i=$i+3;
                                   echo'</tr>';
                               }
                               echo'</table>';
                           }
                   else
                   if (isset($selection) && $selection=="en")
                  {
                     echo '<table style="borber:2px solid red">';
                     while ($i<12)
                      {
                    echo"<tr>";
                    for ($j=$i; $j<$i+3; $j++)
                     { 
                        echo '<td >'.$j.'</td>';
                        echo '<td >'.$tab ["en"][$j].'</td>';
                            # code...
                     }
                     $i=$i+3;
                     echo"</tr>";
                     }
                     echo"</table>";
                 }
              #   $i=0;
                }
          }
?>
</body>
</html>