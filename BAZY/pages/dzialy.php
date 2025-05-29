<h1>Tabela <i>działy</i></h1>

<?php
$sql = "SELECT * FROM dzialy;";
$result = $conn->query($sql);
?>
<table>
    <tr>
        <th>Id_dzial</th><th>Nazwa</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id_dzial=$row["Id_dzial"];
    $nazwa=$row["Nazwa"];
  

    echo "<tr><td>".$id_dzial."</td><td>".$nazwa."</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>
