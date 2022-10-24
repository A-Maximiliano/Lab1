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
    <p>Ejercicio: Sumar Numeros</p> 
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



  <center> <h2>SUMAR 3 NUMEROS POSITIVOS</h2>
        <br></br>
        <form id="triangulo" name="cuadrado" action="suma_positivos.php" method="POST"> 
            <div class="form-gorup">
                
            <label>Numero 1:</label>
            <input type="number" name="num1" id="num1" >
            <br></br>
            <label>Numero 2:</label>
            <input type="number" name="num2" id="num2">
            <br></br>
            <label>Numero 3:</label>
            <input type="number" name="num3" id="num3">
            <br></br>
            <input type="submit" name="btntri" value="SUMAR">
           </div>
        </form>
        <br></br>

           <?php
// CALCULAR EL AREA DE UN triangulo

if (isset($_POST['btntri'])) {
    // declarar variables vacias
    $var1 ="";
    $varesultado1 ="";
    
    if ($_POST['num1']==null || $_POST['num2']=="" || $_POST['num3']==null || $_POST['num3']== "") {
    
        $var1= "Los siento no se ingreso un valor";
        $varesultado1 ="";
        
    } //validar si el valor es negativo
    elseif ($_POST['num1']<=0) {
    
        $var1= "Lo siento no puede ingresar un valor negativo o cero";
        $varesultado1 ="";
    
    } 
    elseif ($_POST['num2']<=0 || $_POST['num3']<=0) {
    
        $var1= "Lo siento no puede ingresar un valor negativo o cero";
        $varesultado1 ="";
    
    }
    //SI TODO ESTA CORRECTO
    else
    {
    
        $var1 = "La suma de los numeros es: ";
        //operacion de formula del area
        $varesultado1 = ($_POST['num1'] + $_POST['num2'] + $_POST['num3']) ;
       
    
    }
    
    //IMPRIMIR EN PANTALLA
    
    echo "$var1" . "$varesultado1";
    }

?>


  <div class="mt-5 p-4 bg-dark text-white text-center">
    <p>Footer</p>
  </div>

</body>
</html>