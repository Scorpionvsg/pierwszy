<h1>Tabela <i>wypożyczenia</i></h1>

<?php
$sql = "SELECT * FROM wypozyczenia;";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <th>Nr_transakcji</th><th>Sygnatura</th><th>Id_pracownika</th><th>Nr_czytelnika</th><th>Data_wypozyczenia</th><th>Data_zwrotu</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nr_t=$row["Nr_transakcji"];
    $id=$row["Sygnatura"];
    $id_p=$row["Id_pracownika"];
    $nr_cz=$row["Nr_czytelnika"];
    $data_w=$row["Data_wypozyczenia"];
    $data_z=$row["Data_zwrotu"];

        echo "<tr><td>".$nr_t.
        "</td><td>".$id.
        "</td><td>".$id_p.
        "</td><td>".$nr_cz.
        "</td><td>".$data_w.
        "</td><td>".$data_z.
        "</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>