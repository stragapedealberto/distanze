<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Distanze</title>
</head>
<body>

    <?php
        /*
            Pidgey -> 40 HP, 45 Attack, 40 Difesa
            Squirtle -> 44 HP, 48 Attack, 65 Difesa
            Caterpie -> 45 HP, 30 Attack, 35 Difesa
        */

        function distance($a, $b){//$a e $b sono due array che contengono le coordinate X e Y dei du e punti
            $cat1 = abs($a[0] - $b[0]);
            $cat2 = abs($a[1] - $b[1]);
            $cat3 = abs($a[2] - $b[2]);

            $ipotenusa = sqrt(pow($cat1, 2) + pow($cat2, 2) + pow($cat3, 2));
            return $ipotenusa;

            //La funzione deve restituire un numero che sarà l'ipotenussa del triangolo rettangolo
        }

        function distanceNDimensioni($a, $b){
            $ipotenusa = 0;
            for($i = 0; $i < count($a); $i++){
                $cat = abs($a[$i] - $b[$i]);
                $ipotenusa += pow($cat, 2);
            }

            $ipotenusa = sqrt($ipotenusa);
            return $ipotenusa;
        }

        $pidgey   = [40, 45, 40];
        $squirtle = [44, 48, 65];
        $caterpie = [45, 30, 35];

        echo "Funzione: distance<br>";
        echo "Distanza tra Pidgey e Squirtle: " . round(distance($pidgey, $squirtle), 2) . "<br>";
        echo "Distanza tra Pidgey e Caterpie: " . round(distance($pidgey, $caterpie), 2) . "<br>";
        echo "Distanza tra Squirtle e Caterpie: " . round(distance($squirtle, $caterpie), 2) . "<br>";

        echo "<br>Funzione distanceNDimensioni<br>";
        echo "Distanza tra Pidgey e Squirtle: " . round(distanceNDimensioni($pidgey, $squirtle), 2) . "<br>";
        echo "Distanza tra Pidgey e Caterpie: " . round(distanceNDimensioni($pidgey, $caterpie), 2) . "<br>";
        echo "Distanza tra Squirtle e Caterpie: " . round(distanceNDimensioni($squirtle, $caterpie), 2) . "<br>";



    ?>
    
</body>
</html>