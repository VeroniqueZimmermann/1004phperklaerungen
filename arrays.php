<?php
// Arrays in php
$liste = array(1,2,4,8,16,32,64);
print_r($liste);
echo "<br>$liste[4]";
echo "<pre>"; print_r($liste); echo "</pre>";
$liste[7] = 128;
$liste[3.5] = "ungewohnt";
echo "<pre>"; print_r($liste); echo "</pre>";
$liste[9] = 512;
echo "<pre>"; print_r($liste); echo "</pre>";
// echo "Was ist mit $liste[8]?";   // [8] ist nicht vorhanden

array_push($liste, 1024);   // hängt nach der letzten bekannten an
echo "<pre>"; print_r($liste); echo "</pre>";

/* for($i = 0; $i <= 900; $i++)
{
    echo "<br>$liste[i]";
}   */

foreach($liste as $elemente)    // nur die Werte
{
    echo "<br>$elemente";
}

foreach($liste as $elemente => $wert)   // key, value
{
    echo "<br>$elemente = $wert";
}

echo "<br><br><hr><br>";

//assoziatives Arrays   index aus string oder character

$ass = array("Montag" => "Einstieg in die Woche",
             "Dienstag" => "Zweistieg in die Woche",
             "Mittwoch" => "Halbzeit");

print_r($ass);
echo "<br> Also am Dienstag:" .$ass["Dienstag"];

echo "<hr>";

$aufgaben = array("Montag" => array("aufstehen", "hinfahren", "hinsetzen", "zuhören"));

echo $aufgaben["Montag"][1];

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Arrays in php</title>
<style>
    body{
        background-color: grey;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        }
</style>
</head>
<html>
<body>


</body>
</html>