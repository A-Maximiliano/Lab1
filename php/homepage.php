<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Website Example</title>
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
  <p>Ejercicios Varios Del Curso De Programacion Avanzada</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="area_triangulo.php">Area</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="calculo_salario">Salario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="num_mayor">Mayor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="par_impar">Par/Impar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="suma_positivos">Suma</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h2>About Me</h2>
      <h5>Photo of me:</h5>
      <div> <img class="img-fluid" src="../resources/img/portfolio-1.jpg" alt="..." /></div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
      <h3 class="mt-4">Some Links</h3>
      <p>Lorem ipsum dolor sit ame.</p>
      <ul class="nav nav-pills flex-column">
      <li class="nav-item">
      <a class="nav-link active" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Area</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Salario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Mayor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Par/Impar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Suma</a>
      </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div> <img class="img-fluid" src="../resources/img/portfolio-2.jpg" alt="..." /></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

      <h2 class="mt-5">TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2020</h5>
      <div> <img class="img-fluid" src="../resources/img/portfolio-3.jpg" alt="..." /></div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>Footer</p>
</div>

</body>
</html>