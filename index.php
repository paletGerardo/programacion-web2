<!doctype html>
<html lang="en">

<head>
  <title>progamacion web 2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
  <div class="container">
    <hr>
    <h1>programacion web 2
      <span>trabajos practicos:</span>
    </h1>
    <hr>
    <h2>grupo 1</h2>

    <ul>
      <li>
        <a href="#ejercicio1">Ejercicio Nro. 1: Escribir un programa php que dada una variable dada, imprima en el navegador del cliente, su tipo
          de dato y su contenido. Formatee mediante el uso de HTML</a>
      </li>
      <li>
        <a href="#ejercicio2">Ejercicio Nro. 2: Escribir un programa php que calcule el área de un triángulo.</a>
      </li>
      <li>
        <a href="ejercicio3">Ejercicio Nro. 3: Escribir un programa php que calcule el área de un rectángulo</a>
      </li>
      <li>
        <a href="ejercicio4">Ejercicio Nro. 4: Escribir un programa php que calcule el área de un trapecio.</a>
      </li>
      <li>
        <a href="ejercicio5">Ejercicio Nro. 5: Escribir un programa php que intercambie el contenido de dos variables.
        </a>
      </li>
    </ul>
    <h2>grupo 2</h2>

    <ul>
      <li>
        <a href="ejercicio1">Ejercicio Nro. 1: Escribir un programa php que dada una variable dada, imprima en el navegador del cliente, su tipo
          de dato y su contenido. Formatee mediante el uso de HTML</a>
      </li>
      <li>
        <a href="ejercicio2">Ejercicio Nro. 2: Escribir un programa php que calcule el área de un triángulo.</a>
      </li>
      <li>
        <a href="ejercicio3">Ejercicio Nro. 3: Escribir un programa php que calcule el área de un rectángulo</a>
      </li>
      <li>
        <a href="ejercicio4">Ejercicio Nro. 4: Escribir un programa php que calcule el área de un trapecio.</a>
      </li>
      <li>
        <a href="ejercicio5">Ejercicio Nro. 5: Escribir un programa php que intercambie el contenido de dos variables.
        </a>
      </li>
    </ul>

    <h2>grupo 3</h2>

    <ul>
      <li>
        <a href="ejercicio1">Ejercicio Nro. 1: </a>
      </li>
      <li>
        <a href="ejercicio2">Ejercicio Nro. 2: Escribir un programa php que calcule el área de un triángulo.</a>
      </li>
      <li>
        <a href="ejercicio3">Ejercicio Nro. 3: Escribir un programa php que calcule el área de un rectángulo</a>
      </li>
      <li>
        <a href="ejercicio4">Ejercicio Nro. 4: Escribir un programa php que calcule el área de un trapecio.</a>
      </li>
      <li>
        <a href="ejercicio5">Ejercicio Nro. 5: Escribir un programa php que intercambie el contenido de dos variables.
        </a>
      </li>
    </ul>
  </div>
  <hr>
  <section>

    <div class="container">
      <div class="row d-flex justify-content-around">

        <div class="card col-md-5" id="ejercicio1">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <h4 class="card-title">Ejercicio 1</h4>
            <p class="card-text">determina variable</p>
            <form action="#" method="post">
              <div class="form-group">
                <label for="entrada">Escribir un programa php que dada una variable dada, imprima en el navegador del cliente, su tipo de dato
                  y su contenido. Formatee mediante el uso de HTML</label>
                <input type="text" class="form-control" name="entrada" id="entrada" aria-describedby="helpId" placeholder="variable">
              </div>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>
          </div>
        </div>

        <div class="card col-5" id="ejercicio2">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <h4 class="card-title">Ejercicio 2: Area del triangulo</h4>
            <p class="card-text">determina variable</p>

            <form action="area-triangulo.php" id="areatriangulo" method="get">
              <div class="form-group">
                <label for="entrada">base</label>
                <input type="text" class="form-control" name="basetriangulo" id="basetriangulo" aria-describedby="helpId" placeholder="definir base" require>
              </div>
              <div class="form-group">
                <label for="entrada">altura</label>
                <input type="text" class="form-control" name="alturatriangulo" id="alturatriangulo" aria-describedby="helpId" placeholder="definir altura" require>
              </div>
              <button type="submit" class="btn btn-primary" form="areatriangulo">Calcular</button>
            </form>

          </div>
        </div>

      </div>
      <hr>
      <div class="row d-flex justify-content-around">

        <div class="card col-5" id="ejercicio3">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <h4 class="card-title">Ejercicio 3:</h4>
            <p class="card-text">area del rectangulo</p>

            <form action="area-rectangulo.php" id="arearectangulo" method="get">
              <div class="form-group">
                <label for="entrada">base</label>
                <input type="text" class="form-control" name="baserectangulo" id="baserectangulo" aria-describedby="helpId" placeholder="definir base" require>
              </div>
              <div class="form-group">
                <label for="entrada">altura</label>
                <input type="text" class="form-control" name="alturarectangulo" id="alturarectangulo" aria-describedby="helpId" placeholder="definir altura" require>
              </div>
              <button type="submit" class="btn btn-primary" form="arearectangulo">Calcular</button>
            </form>

          </div>
        </div>

        <div class="card col-5" id="ejercicio2">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <h4 class="card-title">Ejercicio 4:</h4>
            <p class="card-text">Area del trapecio </p>
           
            <form action="area-trapecio.php" id="areatrapecio" method="get">
              <div class="form-group">
                <label for="entrada">lado a</label>
                <input type="text" class="form-control" name="ladoa" id="ladoa" aria-describedby="helpId" placeholder="definir base" require>
              </div>
              <div class="form-group">
                <label for="entrada">lado b</label>
                <input type="text" class="form-control" name="ladob" id="ladob" aria-describedby="helpId" placeholder="definir base" require>
              </div>
              <div class="form-group">
                <label for="entrada">altura</label>
                <input type="text" class="form-control" name="altura" id="alturarectangulo" aria-describedby="helpId" placeholder="definir altura" require>
              </div>
              <button type="submit" class="btn btn-primary" form="areatrapecio">Calcular</button>
            </form>

          </div>
        </div>

      </div>
      
      <hr>
      <div class="row d-flex justify-content-around">

        <div class="card col-5" id="ejercicio3">
          <img class="card-img-top" src="" alt="">
          <div class="card-body">
            <h4 class="card-title">Ejercicio 5:</h4>
            <p class="card-text">intercambio de variables</p>

            <form action="intercambio.php" id="intercambio" method="get">
              <div class="form-group">
                <label for="var1">dato 1</label>
                <input type="text" class="form-control" name="var1" id="var1" aria-describedby="helpId" placeholder="ingresar el valor 1" require>
              </div>
              <div class="form-group">
                <label for="var2">dato 2</label>
                <input type="text" class="form-control" name="var2" id="var2" aria-describedby="helpId" placeholder="ingresar el valor 2" require>
              </div>
              
              <button type="submit" class="btn btn-primary" form="intercambio">Intercambiar</button>
            </form>

          </div>
        </div>

      </div>
    </div>

  </section>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</body>

</html>