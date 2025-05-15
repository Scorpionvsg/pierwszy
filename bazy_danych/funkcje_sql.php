<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

$sql="SELECT CONCAT(UPPER(pracownicy.Imie),' ',UPPER(pracownicy.Nazwisko)) as Pracownik from pracownicy;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {?>
<hr><ul>
    <?php
  while($row = $result->fetch_assoc()) {
    echo "<li>". $row["Pracownik"]. "</li>";
  }
  ?>
</ul>
<?php
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>