<?php
$ausserhalb = "Teilnehmer";
$farbe = 255; // vorher "blue"
$red = 100;
$green = 0;
$blue = 200;

print_r($GLOBALS);

function anzeige()
{
    $ausserhalb = "hier ist die Variable in der Funktion";
    $red = 100;
    $green = 200;
    $blue = 200;
    echo '<h4 style="color: rgb('.$red.','.$green.','.$blue.')">In der Funktion: Hallo "'.$ausserhalb.'"</h4>';
}

function anzeigeMitGlobals()
{
    echo "anzeigeMitGlobals();";
    echo '<h4 style="color: rgb('.$GLOBALS['red'].','.$GLOBALS['green'].','.$GLOBALS['blue'].')">In der Funktion mit den Globals: Hallo "'.$GLOBALS['ausserhalb'].'"</h4>';
}

function anzeigeGLOBAL()	// nochmal vereinfacht
{
    GLOBAL $ausserhalb;
    $ausserhalb = "Funktionsmitarbeiter";
    $red = 100;
    $green = 200;
    $blue = 200;
    echo '<h4 style="color: rgb('.$red.','.$green.','.$blue.')">In der Funktion: Hallo "'.$ausserhalb.'"</h4>';
}


echo "Hallo $ausserhalb<br>";
echo 'Hallo $ausserhalb<br>';
echo 'Hallo "$ausserhalb"<br>';
echo 'Hallo "'.$ausserhalb.'"<br>';
echo '<h4 style="color: red">Hallo "'.$ausserhalb.'"</h4>';
//echo '<h4 style="color: '.$farbe.'">Hallo "'.$ausserhalb.'"</h4>'; // Farbe "blue"
echo '<h4 style="color: rgb(0,'.$farbe.',0)">Hallo "'.$ausserhalb.'"</h4>'; // php interessiert sich nicht, wie ich variablen verwende
echo '<h4 style="color: rgb('.$red.','.$green.','.$blue.')">Hallo "'.$ausserhalb.'"</h4>'; // Farbe komplett steuern
anzeige();
echo '<h4 style="color: rgb('.$red.','.$green.','.$blue.')">Hallo "'.$ausserhalb.'"</h4>'; // Farbe komplett steuern
anzeigeMitGlobals();
anzeigeGLOBAL();

?>


<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Variablen in php</title>
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