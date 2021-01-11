<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices PHP</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid #000000;
        }
    </style>
</head>

<body>
<h2> Exercices PHP.</h2>
<h3> Exercice 1. </h3>
<div>
<?php

$a = 0 ;
echo 'Les nombres impaires sont : ';
do
{
    $a = $a + 1 ;
    if ( $a%2 == 1 ) 
    echo $a.";";
}
while ( $a < 150 )
?>
</div>
<h3>Exercice 2. </h3>
<div>
<?php
$a = 1 ;
do
{
    $a = $a + 1 ;
    echo 'Je dois faire des sauvegardes régulières de mes fichiers.' ;
}
while ( $a < 501 )
?>
</div>

<h3>Exercice 3. </h3>

<table method="GET" id="tabl">
<div>
<?php

for ( $a=-1; $a<=12; $a++ ){
    echo "<tr>";

        for ( $b=-1; $b<0; $b++){
            echo ("<th>".abs($a*$b)."</th>");
            
            for ( $b=0; $b<=12; $b++){
                echo ("<td>".abs($a*$b)."</td>");
                
            }
        }
     echo "</tr>";
}

?>
</div>
</table>

<h3> Exercice 4. </h3>

<form method="POST" action="">
    <input type="text" name="num1" placeholder="Number1">
    <select name="operat">
        <option value="sum">+</option>
        <option value="sus">-</option>
        <option value="umn">*</option>
        <option value="dev">/</option>
    </select>
    <input type="text" name="num2" placeholder="Number2">
    <button type="submit" name="sub">Check it!</button>
</form>
<div id="reponce">La reponce est:</div>

<div>
<?php
$num1;
$num2;
$operat;
function calculator()
{
    switch($_POST["operat"]){
    case "sum" :
        $num = $_POST["num1"] + $_POST["num2"];
        return $num;
    break;
    
    case "sus" :
        $num = $_POST["num1"] - $_POST["num2"];
        return $num;
    break;
    
    case "umn" :
        $num = $_POST["num1"] * $_POST["num2"];
        return $num;
    break;
    
    case "dev" :
        if ($_POST["num2"]==0){
            echo "On ne peut pas deviser par 0.";
            break;
        }
        else
        $num = $_POST["num1"] / $_POST["num2"];
        return $num;
    break;
    } 
}

$num = calculator ();
echo $num."<br>";

?>
</div>
</body>
</html>