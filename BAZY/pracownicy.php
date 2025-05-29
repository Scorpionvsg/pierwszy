<h1>Tabela <i>pracownicy</i></h1>

<?php
$sql = "SELECT * FROM pracownicy;";
$result = $conn->query($sql);
?>
<table>
    <tr>
        <th>Id_pracownika</th><th>Nazwisko</th><th>Imie</th><th>Id_stanowisko</th><th>Miasto</th><th>Data_zatrudnienia</th><th>Wynagrodzenie</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id_prac=$row["Id_pracownika"];
    $nazwisko=$row["Nazwisko"];
    $imie=$row["Imie"];
    $id_sta=$row["Id_stanowisko"];
    $miasto=$row["Miasto"];
    $data_z=$row["Data_zatrudnienia"];
    $wyna=$row["Wynagrodzenie"];



    echo "<tr><td>".$id_prac."</td><td>".$nazwisko."</td><td>".$imie."</td><td>".$id_sta."</td><td>".$miasto."</td><td>".$data_z."</td><td>".$wyna."</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>