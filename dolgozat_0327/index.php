<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $vezeteknev = ["Vezetéknév", "Nagy", "Szabó", "Kovács", "Beton"];
        $keresztnev = ["Keresztnév", "Tibor", "Klára", "Tóbiás", "Hofi"];
        $evszam = ["Évszám", rand(1998, 2005), rand(1998, 2005), rand(1998, 2005), rand(1998, 2005)];
        
        echo "<table>";
        for ($i=0; $i < count($vezeteknev); $i++) { 
            if($i == 0){
                echo "<tr><th>$vezeteknev[$i]</th><th>$keresztnev[$i]</th><th>$evszam[$i]</th></tr>";
            }else{
                echo "<tr><td>$vezeteknev[$i]</td><td>$keresztnev[$i]</td><td>$evszam[$i]</td></tr>";
            }
        }
        echo "</table>";
    ?>


</body>
</html>