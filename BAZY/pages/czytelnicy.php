<h1>Tabela <i>czytelnicy</i></h1>

<?php
$sql = "SELECT * FROM czytelnicy;";
$result = $conn->query($sql);
?>
<table>
    <tr>
        <th>Nr_czytelnika</th><th>Nazwisko</th><th>Imie</th><th>Data_ur</th><th>Ulica</th><th>Kod</th><th>Miasto</th><th>Data_zapisania</th><th>Data_skreslenia</th><th>Nr_legitymacji</th><th>Funkcja</th><th>Plec</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nr_czyt=$row["Nr_czytelnika"];
    $nazwisko=$row["Nazwisko"];
    $imie=$row["Imie"];
    $data_ur=$row["Data_ur"];
    $ulica=$row["Ulica"];
    $kod=$row["Kod"];
    $miasto=$row["Miasto"];
    $data_z=$row["Data_zapisania"];
    $data_s=$row["Data_skreslenia"];
    $nr_l=$row["Nr_legitymacji"];
    $funkcja=$row["Funkcja"];
    $plec=$row["Plec"];


    echo "<tr><td>".$nr_czyt."</td><td>".$nazwisko."</td><td>".$imie."</td><td>".$data_ur."</td><td>".$ulica."</td><td>".$kod."</td><td>".$miasto."</td><td>".$data_z."</td><td>".$data_s."</td><td>".$nr_l."</td><td>".$funkcja."</td><td>".$plec."</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>

