<?php
session_start();
?>
<!doctype html>
<html>

<head>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/oya.mp4" type="video/mp4">
  </video>

  <form action="hola.php" method="post">


  <input type="text" name="email">
       <input type="submit" name="submit">;
       <input type="submit" name="borrar" value="borrar">;
       <input type="submit" name="passar" value="passar">;

  </form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }



  $conn->close();
  ?>
<?php

if(isset ($_POST["submit"])){
  $_SESSION["email"][] = $_REQUEST["email"];
    foreach ($_SESSION["email"] as $email){
  }




$link = mysqli_connect("localhost", "root", "", "tienda");


if($link === false){
    die("la taula examenformbd no existeix");
}



$sql = "INSERT INTO usuarios (email) VALUES ('$email')";
if(mysqli_query($link, $sql)){
    echo "S'ha registrat correctament el llibre(isbn,titol,categoria,preu,editorial,autor)";
} else{
    echo "No es pot executar $sql. " . mysqli_error($link);
}



// Close connection
mysqli_close($link);
}
?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>OTAFRES</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.min.css" rel="stylesheet">

</head>


<body>

  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/oya.mp4" type="video/mp4">
  </video>

  <div class="masthead">
    <div class="masthead-bg"></div>
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <h1 class="mb-3">Coming Soon!</h1>
            <p class="mb-5">Estamos trabajando para abrir lo antes posible, en
              <strong>Septiembre</strong> pon tu correo para recibir un aviso con descuentos!</p>
            <div class="input-group input-group-newsletter">
              <form action="index.php" method="post">


              <input type="text" name="email">
                   <input type="submit" name="submit">;
                  

              </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  <div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-twitter"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-facebook-f"></i>
        </a>
      </li>
      <li class="list-unstyled-item">
        <a href="#">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
    </ul>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>

</html>
