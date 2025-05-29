<h1>Tabela <i>stanowiska</i></h1>

<?php
$sql = "SELECT * FROM stanowiska;";
$result = $conn->query($sql);
?>
<table>
    <tr>
        <th>Id_stanowisko</th><th>Nazwa</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id_stan=$row["Id_stanowisko"];
    $nazwa=$row["Nazwa"];
  

    echo "<tr><td>".$id_stan."</td><td>".$nazwa."</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>
