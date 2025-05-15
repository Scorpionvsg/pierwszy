<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
$servername = "localhost";
$username = "Jeremiasz";
$password = "Jeremiaszvsg2008";
$dbname = "jeremiasz";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT ksiazki.Sygnatura,ksiazki.Tytul,ksiazki.Imie,ksiazki.Nazwisko,ksiazki.Wydawnictwo,ksiazki.Rok_wyd,ksiazki.Cena FROM `ksiazki` WHERE (Wydawnictwo='PWN' or Wydawnictwo='Helion') and ksiazki.Rok_wyd>1990 and ksiazki.Rok_wyd<2011 order by ksiazki.Rok_wyd;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
<hr><table>
    <?php
    echo "<tr><th>Sygnatura</th> <th>Tytul</th> <th>Autor</th> <th>Wydawnictwo</th> <th>Rok_wyd</th>
    <th>Cena</th>";
  while($row = $result->fetch_assoc()) {
      $sg=$row['Sygnatura'];
      $ty=$row['Tytul'];
      $au=$row['Imie']." ".$row['Nazwisko'];
      $wd=$row['Wydawnictwo'];
      $rw=$row['Rok_wyd'];
      $cn=$row['Cena'];
      echo "<tr><td>$sg</td><td>$ty</td><td>$au</td><td>$wd</td><td>$rw</td><td style =text-align: right;>$cn</td></tr>";
  }
  ?>
</table>
<?php
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>