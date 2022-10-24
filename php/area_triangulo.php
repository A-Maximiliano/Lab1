<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab #1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <script
      src="https://use.fontawesome.com/releases/v5.15.3/js/all.js"
      crossorigin="anonymous"
    ></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style> 
</head>
<body>

  <div class="p-5 bg-primary text-white text-center">
    <h1>Laboratorio No. 1</h1>
    <p>Ejercicio: Calcular Salario</p> 
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">

        <li class="nav-item">
          <a class="nav-link active" href="homepage.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="area_triangulo.php">Area</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="calculo_salario.php">Salario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="num_mayor.php">Mayor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="par_impar.php">Par/Impar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="suma_positivos.php">Suma</a>
        </li>
        
      </ul>
    </div>
  </nav>

  <br></br>

  <table style="width: 100%">

    <tr>
        <center> <h1>FORMULA AREA TRIANGULO</h>
        <br></br>
         <form id="triangulo" name="cuadrado" action="area_triangulo.php" method="POST"> 
            <div class="form-gorup">
                
            <label>base:</label>
            <input type="number" name="ladotri" id="ladotri" >
            <br></br>
            <label>altura:</label>
            <input type="number" name="alturatri" id="alturatri">
            <br></br>
            <input type="submit" name="btntri" value="Calcular"></center>
            </div>
            </form>
        </td>
    </tr>

 </table>
  
<?php
// CALCULAR EL AREA DE UN triangulo

if (isset($_POST['btntri'])) {
    // declarar variables vacias
    $var1 ="";
    $varesultado1 ="";
    
    if ($_POST['ladotri']==null || $_POST['alturatri']=="") {
    
        $var1= "Los siento no se ingreso un valor";
        $varesultado1 ="";
        
    } //validar si el valor es negativo
    elseif ($_POST['ladotri']<=0) {
    
        $var1= "Lo siento no puede ingresar un valor negativo o cero";
        $varesultado1 ="";
    
    } //SI TODO ESTA CORRECTO
    else
    {
    
        $var1 = "El resultado del area del triangulo es: ";
        //operacion de formula del area
        $varesultado1 = ($_POST['ladotri'] * $_POST['alturatri'] ) / 2;
    
    }
    
    //IMPRIMIR EN PANTALLA
    
    echo "$var1" . "$varesultado1";
    }

?>
<br></br>
<a href= "homepage.php" target="_blank">
    <img src="../resources/img/rocket.gif" width= "40px" height= "40px">
</a>

//Footer
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>