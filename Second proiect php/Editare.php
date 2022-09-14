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
      <a class="navbar-brand" href="#">PHONE</a>
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
    $dbname = "dbphone";

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
        <tr><th style='border: 0px;'></th><th>ID</th><th>Tip</th><th>Producator</th><th>Nume</th><th>Pret</th></tr>";
        while ($row = $result->fetch_assoc())
        {       
            
            echo "<tr><td style='border: 0px;'></td><td> " . $row['ID']. "</td><td> " . $row['Tip'] . "</td><td> " . $row['Producator'] . "</td><td> " . $row['Nume'] . "</td><td>".$row['Pret']."</td><tr>";
        }
        echo "</table></div></div></div>";
    }
    else echo "În baza de date nu sunt înregistrați nimeni";

    $conn->close();
}
?>
<?php
function modificare_afisare(){ ?>


    <div class="container">
        <div class="row justify-content center">
            <div class="col-12">
                <h1 class="text-center my-5">Modifica</h1>
                <form method="post">

                  <div class="form-group row">
                    <label  class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="Id">
                  </div>
              </div>

              <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Coloana</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="coloana">
              </div>
          </div>

          <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Valoarea Noua</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="valoare">
          </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-10 text-center mb-5 mt-5">
          <button class="btn btn-secondary" name="modificare"    type="submit">Modifica</button>
      </div>
  </div>


</form>
</div></div></div>
<?php 
}



function modificare(){

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "dbphone";
   $conn = new mysqli($servername, $username, $password, $dbname);

   $coloana1=(string)$_POST['Id'];
   $coloana2=(string)$_POST['coloana'];
   $coloana3=(string)$_POST['valoare'];
   $table = "produse";

   if ($conn->connect_error)
   {
    die("Connection failed: " . $conn->connect_error);
}
$sql= "UPdate ".$table." SET ".$coloana2." = '".$coloana3."' WHERE Id_Produs = ".$coloana1.";";

$result = $conn->query($sql);
$conn->close();




}



if (array_key_exists('modificare', $_POST)) modificare();
produse();
modificare_afisare();

?>
</body>
</html>