<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE 3</title>
</head>
<body>
    <h1>EXERCICE 4</h1>
    <h2>Tableau pharase</h2>
    <form action="exo4.php"method="POST">
<textarea name="pharase" id="" placeholder="saisir un texte" cols="30" rows="7"></textarea>
  <br>
  <input type="submit"  id="btn" name="btn" value="OK">
   </form>
   <?php
   $m=0;
   $chCorrect=0;
        if (isset($_POST['pharase'])) {
            $t=[];
            $value=1;
          $r= remplissage ($t, $_POST['pharase']);
          affichage($r);
          corige_phrase($value);
          delet_spase($chCorrect);
       }
       //fonction qui cirrige les phreses
       function corige_phrase($texte){
           preg_match_all("#[A-Za-z]{1}[^.!?]*[^.!?]*[.!?][^0-9]#m",$texte,$pharase);
           //recuper la phrase 
           $i=0;
           foreach($pharase[0] as $value)
           {
               $value=preg_replace('#\s\s+#'," ",$value);
               $value=preg_replace('#\'\s+#',"' ",$value);
               $value=preg_replace('#\s+\'#',"' ",$value);
               $value=preg_replace('#\(\s+#',"( ",$value);
               $value=preg_replace('#\s+,\)#'," )",$value);
               $value=preg_replace('#\s+,#',", ",$value);
               $value=preg_replace('#,\s+#',"; ",$value);
               $value=preg_replace('#\s+\.#',"' ",$value);
               $tableau[$i]=$value;
               $i++;
           }
           $tableau=0;
           $Tabcori=0;
           foreach($tableau as $value)
               {
               if (preg_match("#^[a-z]#",$value))
                {
                  $b=strtoupper($value[0]);
                  $value=preg_replace($value[0]);
                  $value=preg_replace("#^[a-z]#",$b,$value);
                  $Tabcori[]=$value;
               }
               else
               $value[]=$value;
           }
           echo"$tableau";
           print"$Tabcori";
           echo"<pre>";
       }
       //fonction qui supprimer les espase
       function delet_spase($chaine)
           {
           $chCorrect="";//sauvegardr le text corrige
           $str=preg_replace('#\s\s+#',' ',$chaine);//verifire les espace
           for ($i=0; $i < strlen($str); $i++) { 
               if ($str[$i]=='\'' && $str[$i]==' ') 
               {
                 $chCorrect.=$str[$i];
                 $i+=2;
               }
               if ($str[$i]==' ' && $str [$i+1]=='\'')
                {
                  $i++;
               }
               elseif ($str[$i]==',' ||$str[$i]==';'||$str[$i]==':')
                {
                   $chCorrect.=$str[$i];
                   $chCorrect.=' ';
                   $i++;
               }
               $chCorrect.=$str[$i];
           }
           return $chCorrect;
           echo"$str";
       } 
       //Remplichge du tableau a partir du text saisir par l'utilisateur
       function remplissage(array $tab, string $pharase)
          {
           $nb=1;
           $m="";
           for ($i=0; $i < strlen($pharase); $i++) 
           { 
               $m .= $pharase[$i];
               if ($pharase[$i]==" ") 
               {
                   $tab [] = $m;
                   $m="";   
               } 
           }
           $tab [] = $m;
           return $tab;
       }
       //Affichage du tablea
       function affichage(array $tt){
           for ($i=0; $i < count($tt); $i++)
            { 
               echo $tt[$i]." <br>";
           }
       }
   ?>
   </body>
   </html>