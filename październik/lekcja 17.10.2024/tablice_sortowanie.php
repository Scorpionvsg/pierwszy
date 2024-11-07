<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortowanie w tablicy</title>
    <style>
        table, tr ,td,th { 
        border: 1px dashed black;
        padding: 3px;
        border-collapse: collapse;
         } 
    </style>
</head>
<body>
     <?php
    $tb=array("Skazani na Shawshank" => "dramat",
     "Nietykalni"=>"biograficzny",
    "Władca Pierścieni: Powrót króla"=> "fantasy",
    "Pulp Fiction "=>"gangsterski",
    "Siedem"=>"kryminał",
    "Podziemny krag"=>"thriller",
    "Django"=>"western",
    "Król Lew"=>"animacja",
    "Avengers: Wojna bez granic"=>"akcja",
    "Dobry, zły i brzydki"=>"western")
    ?>
    <pre><?php
    print_r($tb);
     ?>
</pre>

<pre>
    <table>
        <caption>Sortowanie rosnąco według wartości(asort)</caption>
            <?php
asort($tb);
         ?><tr><th>Klucz</th><th>Wartości</th></tr><?php
            foreach($tb AS $pom=>$txx){
                echo "<tr><td>$pom</td>";
                echo "<td>$txx</td></tr>";
            }?>
            </tr><?php
        ?>
    </table>
</pre>

<pre>
    <table>
        <caption>Sortowanie rosnąco według kluczy(ksort)</caption>
            <?php
asort($tb);
         ?><tr><th>Klucz</th><th>Wartości</th></tr><?php
            foreach($tb AS $pom=>$txx){
                echo "<tr><td>$pom</td>";
                echo "<td>$txx</td></tr>";
            }?>
            </tr><?php
        ?>
    </table>
</pre>
<pre>
    <table>
        <caption>Sortowanie malejąco według wartości(arsort)</caption>
            <?php
arsort($tb);
         ?><tr><th>Klucz</th><th>Wartości</th></tr><?php
            foreach($tb AS $pom=>$txx){
                echo "<tr><td>$pom</td>";
                echo "<td>$txx</td></tr>";
            }?>
            </tr><?php
        ?>
    </table>
</pre>

<pre>
    <table>
        <caption>Sortowanie malejąco według kluczy(krsort)</caption>
            <?php
krsort($tb);
         ?><tr><th>Klucz</th><th>Wartości</th></tr><?php
            foreach($tb AS $pom=>$txx){
                echo "<tr><td>$pom</td>";
                echo "<td>$txx</td></tr>";
            }?>
            </tr><?php
        ?>
    </table>
</pre>
</body>
</html>
