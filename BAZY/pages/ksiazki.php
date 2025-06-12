<h1>Tabela <i>książki</i></h1>

<?php
$sql = "SELECT * FROM `ksiazki` join dzialy on ksiazki.Id_dzial=dzialy.Id_dzial;";
$result = $conn->query($sql);
?>

<table>
    <tr>
        <th>Sygnatura</th><th>Tytul</th><th>Autor</th><th>Wydawnictwo</th><th>Miejsce_wyd</th><th>Rok wydania</th><th>Objetosc_ks</th><th>Cena</th><th>Id_dzial</th>
    </tr>
<?php
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $id=$row["Sygnatura"];
    $tytul=$row["Tytul"];
    $autor=$row["Imie"]." ".$row["Nazwisko"];;
    $wydaw=$row["Wydawnictwo"];
    $miejsce_wyd=$row["Miejsce_wyd"];
    $rok=$row["Rok_wyd"];
    $objetosc_ks=$row["Objetosc_ks"];
    $cena=explode(".",$row["Cena"]);
    $id_dzial=$row["Id_dzial"];

        echo "<tr><td>".$id.
        "</td><td>".$tytul.
        "</td><td>".$autor.
        "</td><td>".$wydaw.
        "</td><td>".$miejsce_wyd.
        "</td><td>".$rok.
        "</td><td>".$objetosc_ks.
        "</td><td>".$cena[0]." zł", $cena[1]." gr".
        "</td><td>".$id_dzial."</td></tr>";
  }
} else {
  echo "0 results";
}
echo "</table>";
$conn->close();
?>