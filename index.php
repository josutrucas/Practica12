<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calcularStem.js"></script>
</head>
<body>
  <section class="wrapper">
    <header>
      <h1 class="logo"><a href="stem.html">CiTIM</a></h1>
      
    </header>
    <section id="contenedor">
      <section  class="problema">
        <h2>Problema: Calcular ¿cuánto vale la velocidad con cual recuperar el segundo tramo?</h2>
        <p>Descripción:</p>
        <p>Dos centros de cómputo que trabajan en el procesamiento de datos enviados por satélite necesitan intercambiar 
          información. Como esto es confidencial, no pueden usar medios electrónicos y deben utilizar un mensajero en camioneta. 
          El mensajero tarda un tiempo T en ir de un centro a otro. La velocidad media en todo el trayecto es de 60 km/hy son 
          constantes las velocidades en cada uno de los dos tramos recorridos en un tiempo T/2.
           Si la velocidad en el primer tramo es de 50 km/h, ¿cuánto vale la velocidad con cual recuperar el segundo tramo? <br>
        </p>
      </section>
      <section  class="esquemaProblema">
        <h2>Esquema</h2>
        <center>
        <img class="imgProblema" src="images/problema.png">
        </center>
      </section>
      <section class="formulas">
        <h2>Fórmulas</h2>
        -Distancia total: distancia = velocidad media * tiempo.<br>
        -Distancia recorrida en el primer tramo: distancia primer tramo = velocidad * tiempo.<br>
-Distancia recorrida en el segundo tramo: distancia segundo tramo = distancia total - distancia primer tramo.<br>
-Velocidad en el segundo tramo: velocidad segundo tramo = distancia segundo tramo / (T/2).     
      </section>
      <section class="datos">
        <h2>Datos:</h2>
        -Velocidad media en todo el trayecto: 60 km/h.<br>

-Velocidad en el primer tramo: 50 km/h.<br>

-Tiempo que tarda en ir de un centro a otro: T.<br>

-Tiempo que tarda en recorrer el primer tramo: T/2.<br>
      
      </section>
      <section class="calculos">
        <h2>Solución para Calcular la distancia total</h2>
        <p>a)la distancia total es:<br>
          Calcular la distancia total: distancia = 60 km/h * T <br>
        </p>
        <h2>Solución para Calcular la distancia recorrida en el primer tramo</h2>
        <p>b)distancia primer tramo es:<br>
          distancia primer tramo = 50 km/h * (T/2) <br>
        </p>
        <h2>Solución para Calcular la distancia recorrida en el segundo tramo</h2>
        <p>c)distancia segundo tramo es:<br>
          distancia segundo tramo = distancia total - distancia primer tramo = 60T - 25T  (T/2) <br>
        </p>
        <h2>Solución para Calcular la velocidad en el segundo tramo</h2>
        <p>d)velocidad segundo tramo es:<br>
          velocidad segundo tramo = distancia segundo tramo / (T/2) = (35T) / (T/2) <br>
        </p>
        
        <button onclick="calcula_densidad();">Presiona para calcular</button>
      </section>
      <?php
     function calcula_densidad(){
         $distancia= 60;
         $distanciapt=50;
         return $distancia;
     }
     function calcula_densidadapt(){
      $distanciapt=50;
      $dpt= $distanciapt/2;
      return $dpt;
     }
     function calcula_distanciaS(){
      $distancia= 60;
      $dpt=25;
    $dst= $distancia-$dpt;
      return $dst;
     }
     function calcula_velocidad(){
    
      $dst=35;
      $vst=(4900/2)/($dst);
      return $vst;
     }
?>
 
      <section class="resultado">
        <h2>Resultado del inciso A:</h2>
        <div id="resultadoA"></div>
        <?php
 print "<h1>  distancia total = ".calcula_densidad(). " T(distancia total) </h1>";
?>
        <h2>Resultado del inciso B:</h2>
        <div id="resultadoB"></div>
        <?php
 print "<h1>  DistanciaPT = ".calcula_densidadapt(). " T esta es la distancia del primer tramo </h1>";
?>
        <h2>Resultado del inciso C:</h2>
        <div id="resultadoC"></div>
        <?php
 print "<h1>  DistanciaST = ".calcula_distanciaS(). " T esta es la distancia del segundo tramo </h1>";
?>
        <h2>Resultado del inciso D:</h2>
        <div id="resultadoD"></div>
        <?php
 print "<h1>  DistanciaST = ".calcula_velocidad(). " kh/h La velocidad con la cual se recorre el segundo tramo </h1>";
?>
      </section>
    </section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2023
    </footer>
  </section>
</body>
</html>
