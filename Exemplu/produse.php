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
                <table class='table'><tr><th style='border: 0px;'></th><th>Tip</th><th>Producator</th><th>Nume</th><th>Pret</th><th>Poza</th></tr>";
                while ($row = $result->fetch_assoc())
                {       
                        $photo = $row['Poza'];
                        echo "<tr><td style='border: 0px;'></td><td> " . $row['Tip'] . "</td><td> " . $row['Producator'] . "</td><td> " . $row['Nume'] . "</td><td>".$row['Pret']." Lei</td><td>"."<img src='$photo' width='250px'>"."</td></tr>";
                }
                echo "</table></div></div></div>";
        }
        else echo "Nu sunt produse";

        $conn->close();
}
    
   produse();

   ?>
   </body>
</html>