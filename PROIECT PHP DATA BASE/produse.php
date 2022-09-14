<!DOCTYPE html>
<html lang="en">
<head>
  

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
  <a class="navbar-brand" href="#">Masini</a>
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
        $dbname = "masini";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM masini_coloane";
        $result = $conn->query($sql);
        $n = $result->num_rows;

        if ($result->num_rows > 0)
        {
                echo "
                <div class='container mt-5'>
                <div class='row d-flex justify-content-center'>
                <div class='col-12'>
                <table class='table'><tr><th style='border: 10px;'></th><th>ID</th><th>Denumire</th><th>Tip</th><th>Producator</th><th>Pret</th><tr>";
                while ($row = $result->fetch_assoc())
                {       
                        
                        echo "<tr><td style='border: 0px;'></td><td> ".$row['ID_masina']."</td><td> " . $row['Denumire'] . "</td><td> " . $row['Tip'] . "</td><td> " . $row['Producator'] . "</td><td>".$row['Pret']." Euro</td><tr>";;
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