<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux php</title>
</head>
<body>
    <h2>Les tableaux PHP.</h2>
    <h3>Exercice 1.</h3>

<?php
$a = array("19001" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "", "", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", "Validation"), 
     "19002" => array("Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Validation", ""), 
     "19003" => array("", "", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Centre", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "Stage", "", "", "Validation") 
    );

/* soit on affiche la table
foreach($a["19002"] as $cle => $valeur )
{
    echo $cle ." : ". $valeur."<br>";
};*/

// soit on cherche la case validation dans le tableau

if (in_array("Validation", $a["19002"])) {
    echo "Validation du group 19002 est en semaine numero ";
    $cle = array_search("Validation", $a["19002"]);
echo $cle."<p>" ;
};
?>

<h3>Exercice 2.</h3>

<?php
foreach($a["19001"] as $cle => $valeur )
{
    echo $cle ." : ". $valeur."<br>";
};
$tab = $a["19001"];
$nb = count($tab); 
echo"Le tableau contient ".$nb." semaines."."<br>";
//svar_dump($tab);
?>

<h3>Exercice 3.</h3>

<?php
$nt = array_keys($a);
print_r($nt);
?>

<h3>Exercice 4.</h3>

<?php
$b = $a["19003"];
$cle = array_count_values($b);
echo "Le stage du groupe 19003 dure " .$cle["Stage"]. " semaines.";
?>
    
</body>
</html>