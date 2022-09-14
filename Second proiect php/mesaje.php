s<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Avalon</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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
   
   <div class="wrapper">

      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="index.php#home">Home</a>
                </li>
                <li>
                    <a href="index.php#about">Despre</a>
                </li>
                <li>
                    <a href="index.php#why_choose_us">De Ce Noi</a>
                </li>
                <li>
                    <a href="index.php#contact">Contacte</a>
                </li>
                  <li>
                    <a href="Produse.php">Produse</a>
                </li>
                 <li>
                    <a href="adaugare.php">Adaugare</a>
                </li>
                  <li>
                    <a href="editare.php">Editare</a>
                </li>
                  <li>
                    <a href="stergere.php">Stergere</a>
                </li>
            <li>
                    <a href="mesaje.php">Mesaje</a>
                </li>
            </ul>

        </nav>
      </div>


      <div id="content">


      <!-- section -->
      <section id="home" style="background: #011f9e;">
         <div class="row">
            <div class="col-lg-12">
               <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <li><img style="margin-right: 15px;" src="images/phone_icon.png" alt="#" /><a href="tel:+37378444555">078-444-555</a></li>
                        <li><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#" /><a href="mailto:avalon@office.md">avalon@office.md</a></li>
                        <li><img src="images/search_icon.png" alt="#" /></li>
                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
            </div>
         </div>
      </section>
      
      


   </div>
</div>

   <div class="overlay"></div>
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>
    




   <?php

    function Tabel()
{
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "avalon";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error)
        {
                die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM contacte";
        $result = $conn->query($sql);
        $n = $result->num_rows;

        if ($result->num_rows > 0)
        {
                echo "
                <div class='container mt-5'>
                <div class='row d-flex justify-content-center'>
                <div class='col-10'>
                <table class='table'>
                <tr><th style='border: 0px;'></th><th>Nume</th><th>Email</th><th>Telefon</th><th>Mesaj</th></tr>";
                while ($row = $result->fetch_assoc())
                {       
                       
                        echo "<tr><td style='border: 0px;'></td><td> " . $row['Nume']. "</td><td> " . $row['Email'] . "</td><td> " . $row['Telefon'] . "</td><td>".$row['Mesaj']."</td></tr>";
                }
                echo "</table> </div></div></div>";
        }
        else echo "<h2>Nu sunt mesaje</h2>";

        $conn->close();
}
?>
<?php
    tabel();
   ?>
   </body>
</html>