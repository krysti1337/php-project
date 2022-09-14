<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
  th{
    font-size: 20px;
    text-align: center;
}

td{
 text-align: center;
}
</style>
</head>
<!-- body -->
<body class="main-layout">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Bicycle</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="produse.php">Produse</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="editare.php">Editare</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="stergere.php">Stergere</a>
    </li>
        <li class="nav-item">
        <a class="nav-link" href="adaugare.php">Adaugare</a>
    </li>
</ul>

</div>
</nav>




<?php

function produse()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bicycle";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM produse";
    $result = $conn->query($sql);
    $n = $result->num_rows;

    if ($result->num_rows > 0)
    {
        echo "
        <div class='container mt-5'>
        <div class='row d-flex justify-content-center'>
        <div class='col-12'>
        <table class='table'>
        <tr><th style='border: 0px;'></th><th>ID</th><th>Tip</th><th>Producator</th><th>Nume</th><th>Pret</th><th>Poza</th><th>SRC</th></tr>";
        while ($row = $result->fetch_assoc())
        {       
            $photo = $row['Poza'];
            echo "<tr><td style='border: 0px;'></td><td> " . $row['Id_Produs']. "</td><td> " . $row['Tip'] . "</td><td> " . $row['Producator'] . "</td><td> " . $row['Nume'] . "</td><td>".$row['Pret']."</td><td>"."<img src='$photo' width='100px'>"."</td><td>".$row['Poza']."</td></tr>";
        }
        echo "</table> </div></div></div>";
    }
    else echo "Nu sunt produse";

    $conn->close();
}
?>
<?php
function adauga_afisare(){ ?>


  <div class="container">
    <div class="row justify-content center">
        <div class="col-12">
            <h1 class="text-center my-5">Adauga</h1>
            <form method="post">

              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tip</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="coloana1">
              </div>
          </div>

          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Producator</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="coloana2">
          </div>
      </div>

      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">Nume</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="coloana3">
      </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Pret</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="coloana4">
  </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Poza URL</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="coloana5">
  </div>
</div>

<div class="form-group row">
    <div class="col-sm-10 text-center mb-5 mt-5">
      <button class="btn btn-secondary" name="adauga" type="submit">Adauga</button>
  </div>
</div>


</form>
</div></div></div>


<?php 
}

function adauga(){

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "bicycle";
   $conn = new mysqli($servername, $username, $password, $dbname);

   $coloana1=(string)$_POST['coloana1'];
   $coloana2=(string)$_POST['coloana2'];
   $coloana3=(string)$_POST['coloana3'];
   $coloana4=(string)$_POST['coloana4'];
   $coloana5=(string)$_POST['coloana5'];

   $table = "produse";

   if ($conn->connect_error)
   {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO produse (Tip, Producator, Nume, Pret, Poza)
VALUES ('$coloana1', '$coloana2', '$coloana3', '$coloana4','$coloana5')";

$result = $conn->query($sql);
$conn->close();


}



if (array_key_exists('adauga', $_POST)) adauga();
produse();
adauga_afisare();

?>
</body>
</html>