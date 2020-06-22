<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Generador de  codigos QR</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Seguridad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="informacion.html">Información</a>
          </li>
          
        </ul>
        <span class="navbar-text">
          <a class="nav-link btn" href="#">Ingreso de usuarios</a>
        </span>
      </div>
    </nav>
    <?php

        require 'phpqrcode/qrlib.php';

        $dir = 'temp/';

        if(!file_exists($dir))
            mkdir($dir);
        $filename = $dir.'test.png';
        

        $random = bin2hex(random_bytes(20));
        $size = 7;
        $level = 'H';
        $fr_size = 15;

        QRcode::png($random, $filename, $level, $size, $fr_size); 

        echo '<img src="'.$filename.'"/> <br>';
    ?>
    <form action="index.php">
       <div class="row">
            <div class="col-md" align="center">
                <button type="submit" class="btn btn-outline-dark" id="qr">Generar QR</button>
            </div>
        </div>
        
    </form>
        
    <div class="row">
      <div class="col-md" align='center' ><h1>Este es su código de acceso al condominio</h1></div>
    </div>
    <div class="row">
        <div class="col-md" align='center'>Tenga un bonito día</div>        
    </div>
    
    <!-- Footer -->
    <footer class="page-footer font-small blue">

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#">Sistema de control de accesos</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
</body>
</html>