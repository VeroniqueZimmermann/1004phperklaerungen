<?php
//Speiseplan als Multiples Array

$essen = array(
    "Montag" => array(
                    "Frühstück" => "Müsli",
                    "Mittag" => array("Vorspeise" => "Salat", 
                                        "Haupt" => array("extra fleischig","Extra extra Fleisch","Gemüse fad"), 
                                        "Nachspeise" => array("Quark","Kuchen","Gummibärli")),
                    "Nachmittag" => "Bier"),

    "Dienstag" => array(
                    "Frühstück" => "Marmeladenbrot",
                    "Mittag" => array("Vorspeise" => "Salat", 
                                        "Haupt" => array("extra fleischig","Extra extra Fleisch","Gemüse fad"), 
                                        "Nachspeise" => array("Quark","Kuchen","Gummibärli")),
                    "Nachmittag" => "Brotzeit"),

    "Mittwoch" => array(
                    "Frühstück" => "Müsli",
                    "Mittag" => array("Vorspeise" => "Suppe", 
                                        "Haupt" => array("extra fleischig","Extra extra Fleisch","Gemüse fad"), 
                                        "Nachspeise" => array("Quark","Kuchen","Gummibärli")),
                    "Nachmittag" => "wieder Bier"),

    "Donnerstag" => array(
                    "Frühstück" => "Joghurt",
                    "Mittag" => array("Vorspeise" => "Salat", 
                                        "Haupt" => array("extra fleischig","Extra extra Fleisch","Gemüse fad"), 
                                        "Nachspeise" => array("Quark","Kuchen","Gummibärli")),
                    "Nachmittag" => "Obst(ler)"),

    "Freitag" => array(
                    "Frühstück" => "Banane",
                    "Mittag" => array("Vorspeise" => "Suppe", 
                                        "Haupt" => array("extra fleischig","Extra extra Fleisch","Gemüse fad"), 
                                        "Nachspeise" => array("Gummibärli","Kuchen","Obst")),
                    "Nachmittag" => "Brotzeit")
                    );


echo "<pre>";print_r($essen);
echo "</pre>";

echo "<table>";
echo "<tr><th></th>";
foreach($essen as $wochentag => $inhalt)
{
    echo "<th>$wochentag</th>";
}
echo "</tr>";

echo "<tr><td>Frühstück</td>";
foreach($essen as $wochentag)
{
    echo "<td>".$wochentag['Frühstück']."</td>";
    
}
echo "</tr>";

echo "<tr><td>Mittag</td>";
foreach($essen as $wochentag)
{
    echo "<td><ul>"."<li>".$wochentag['Mittag']['Vorspeise']."</li></ul>
        <ul><li>".$wochentag['Mittag']['Haupt'][0]."</li><li>".$wochentag['Mittag']['Haupt'][1]."</li><li>".$wochentag['Mittag']['Haupt'][2]."</li></ul>
        <ul><li>".$wochentag['Mittag']['Nachspeise'][0]."</li><li>".$wochentag['Mittag']['Nachspeise'][1]."</li><li>".$wochentag['Mittag']['Nachspeise'][2]."</li></ul>
        </td>";
}
echo "</tr>";

echo "<tr><td>Nachmittag</td>";
foreach($essen as $wochentag)
{
    echo "<td>".$wochentag['Nachmittag']."</td>";
}
echo "</tr>";
echo "</table>";



//test der Inhalte
/*echo "<pre>"; print_r($speiseplan);
echo "</pre>";  */

?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <title>Variablen in php</title>
    <style>
        body {
            background-color: grey;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        }

        td {
            border: 1px solid black;
        }

        #mittag {
            background-color: white;
        }

        ul li:nth-child(1) {
            background-color: lime;
        }

        ul li:nth-child(2) {
            background-color: blue;
        }

        ul li:nth-child(3) {
            background-color: lime;
        }
    </style>
</head>
<html>

<body>
    <table>
        <tr>
            <th></th>
            <th>Montag</th>
            <th>Dienstag</th>
            <th>Mittwoch</th>
            <th>Donnerstag</th>
            <th>Freitag</th>
        </tr>
        <tr>
            <td>Frühstück</td>
            <td>Müsli</td>
            <td>Müsli</td>
            <td>Müsli</td>
            <td>Müsli</td>
            <td>Müsli</td>
        </tr>
        <tr id="mittag">
            <td>Mittagessen</td>
            <td>
                <ul>Vorspeise
                    <li>Salat</li>
                    <li>Suppe</li>
                </ul>
                <ul>Hauptgericht
                    <li>Extra Fleischig</li>
                    <li>Extra extra Fleisch</li>
                    <li>Gemüse fad</li>
                </ul>
                <ul>Nachspeise
                    <li>Quark</li>
                    <li>Kuchen</li>
                    <li>Gummibärli</li>
                </ul>
            </td>
            <td>
                <ul>Vorspeise
                    <li>Salat</li>
                    <li>Suppe</li>
                </ul>
                <ul>Hauptgericht
                    <li>Extra Fleischig</li>
                    <li>Extra extra Fleisch</li>
                    <li>Gemüse fad</li>
                </ul>
                <ul>Nachspeise
                    <li>Quark</li>
                    <li>Kuchen</li>
                    <li>Gummibärli</li>
                </ul>
            </td>
            <td>
                <ul>Vorspeise
                    <li>Salat</li>
                    <li>Suppe</li>
                </ul>
                <ul>Hauptgericht
                    <li>Extra Fleischig</li>
                    <li>Extra extra Fleisch</li>
                    <li>Gemüse fad</li>
                </ul>
                <ul>Nachspeise
                    <li>Quark</li>
                    <li>Kuchen</li>
                    <li>Gummibärli</li>
                </ul>
            </td>
            <td>
                <ul>Vorspeise
                    <li>Salat</li>
                    <li>Suppe</li>
                </ul>
                <ul>Hauptgericht
                    <li>Extra Fleischig</li>
                    <li>Extra extra Fleisch</li>
                    <li>Gemüse fad</li>
                </ul>
                <ul>Nachspeise
                    <li>Quark</li>
                    <li>Kuchen</li>
                    <li>Gummibärli</li>
                </ul>
            </td>
            <td>
                <ul>Vorspeise
                    <li>Salat</li>
                    <li>Suppe</li>
                </ul>
                <ul>Hauptgericht
                    <li>Extra Fleischig</li>
                    <li>Extra extra Fleisch</li>
                    <li>Gemüse fad</li>
                </ul>
                <ul>Nachspeise
                    <li>Quark</li>
                    <li>Kuchen</li>
                    <li>Gummibärli</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Nachmittag</td>
            <td>Brotzeit</td>
            <td>Brotzeit</td>
            <td>Brotzeit</td>
            <td>Brotzeit</td>
            <td>Brotzeit</td>
        </tr>




    </table>


</body>

</html>