<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Listado</title>
  <style>

    .hola {
      border-collapse: collapse;
      box-shadow: 0px 0px 8px #000;
      margin: 20px;
    }

    .hola th {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffd040;
    }

    .hola td {
      border: 1px solid #000;
      padding: 5px;
      background-color: #ffdd73;
    }

  </style>
</head>

<body>
  <form action="insertarabd.php" method="post">

  INTRODUEIX EL TEU NOM
  <br>

  <input type="text" name="nom" required placeholder="Introdueix el teu nom">
  <br>
<br>
  INTRODUEIX EL TEU COGNOMS
  <br>

  <input type="text" name="cognom" required placeholder="Introdueix els teus cognoms">
  <br>
<br>
  DATA NAIXAMENT
     <br>
     <input type = "date" name="data">
     <br>
     <br>



GENERE
  <br>
  <input type="radio" name="dam" value="dam">dam1
  <br>
  <input type="radio" name="dam" value="dam">dam2
  <br>
  <input type="radio" name="dam" value="dam">Robotica1
  <br>
  <input type="radio" name="dam" value="dam">Robotica2
  <br>

  <br>

  CONDICIONS I POLITIQUES DE L'ESCOLA
     <br>
     <input type="checkbox" required placeholder="Introdueix el teu nom" name="check1">ACEPTAR
     <br>
     <br>


       <input type="submit" name="submit">;
       <input type="submit" name="borrar" value="borrar">;

  </form>


<?php
if(isset ($_POST["submit"])){
  $_SESSION["nom"][] = $_REQUEST["nom"];
    foreach ($_SESSION["nom"] as $nom){
  }
  $_SESSION["cognom"][] = $_REQUEST["cognom"];
  foreach ($_SESSION["cognom"] as $cognom){
}
$_SESSION["data"][] = $_REQUEST["data"];
foreach ($_SESSION["data"] as $data){
}
$_SESSION["dam"][] = $_REQUEST["dam"];
foreach ($_SESSION["dam"] as $dam){
}

$link = mysqli_connect("localhost", "root", "", "exa");


if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt insert query execution
$sql = "INSERT INTO nom (nom, cognom, data, dam) VALUES ('$nom', '$cognom', '$data', '$dam')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection



  $mysql = new mysqli("localhost", "root", "", "exa");
  if ($mysql->connect_error){
    die("Problemas con la conexión a la base de datos");
}

  $registros = $mysql->query("select nom, cognom, data, dam from nom") or
    die($mysql->error);

  echo '<table class="hola">';
  echo '<tr><th>Nom</th><th>Cognom</th><th>Data</th><th>Cicle</th></tr>';
  while ($reg = $registros->fetch_array()) {
    echo '<tr>';
    echo '<td>';
    echo $reg['nom'];
    echo '</td>';
    echo '<td>';
    echo $reg['cognom'];
    echo '</td>';
    echo '<td>';
    echo $reg['data'];
    echo '</td>';
    echo '<td>';
    echo $reg['dam'];
    echo '</td>';
    echo '</tr>';
  }
  echo '<table>';

  $mysql->close();

  ?>
