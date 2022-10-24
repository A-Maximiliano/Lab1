<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lab #1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
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



  <center> <h2>CALCULAR IMPUESTO SALARIO</h2>
        <br></br>
         <form id="triangulo" name="cuadrado" action="calculo_salario.php" method="POST"> 
            <div class="form-gorup">
                
            <label>Salario:</label>
            <input type="number" name="ladotri" id="ladotri" >
            <br></br>
            <label>Impuesto:</label>
            <input type="number" name="alturatri" id="alturatri">
            <br></br>
            <input type="submit" name="btntri" value="Calcular">
            
           <!--<input type="text" name="nombredelacaja"> </center> -->
           </div>
           </form>
           <br></br>

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
    
        $var1 = "El monto del salario con la deduccion es: ";
        //operacion de formula del area
        $varesultado1 = ($_POST['ladotri'] * $_POST['alturatri']/100) ;
        $varesultado2 = $_POST['ladotri'] - $varesultado1;
    
    }
    
    //IMPRIMIR EN PANTALLA
    
    echo "$var1" . "$varesultado2";
    }

?>


  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
  </div>

</body>
</html>