<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="grafi.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Encuesta</title>
  </head>
  <body>

    <?php 
           include_once"main.php";
    
    ?>

<div class="container"style="margin-top:10px;">
   <img src="./img/baner.jpg" class="responsive" />
  <div class="card"style="margin-top:10px;">
  <div class="card-body">
    <h2 align="center">ERGONOMÍA EN CASA</h2>
 <p> La evaluación ergonómica tiene por objeto detectar el nivel de presencia, en los puestos evaluados, de factores de riesgo para la aparición, en los trabajadores que los ocupan, de problemas de salud de tipo disergonómico. Existen diversos estudios que relacionan estos problemas de salud de origen laboral con la presencia, en un determinado nivel, de dichos factores de riesgo. Es por lo tanto necesario llevar a cabo evaluaciones ergonómicas de los puestos para detectar el nivel de dichos factores de riesgo. Aunque las legislaciones de cada país son más o menos exigentes, es obligación de las empresas identificar la existencia de peligros derivados de la presencia de elevados riesgos ergonómicos en sus puestos de trabajo. </P>
 <form action="controlle.php" method="POST">

    <div class="form-group">
      
              <label for="correo">Correo:</label>
              <input type="text" class="form-control" name="correo" placeholder="Ingrese su correo" id="correo">
            </div>

  <div class="form-group">
      
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" id="nombre">
            </div>
            <div class="form-group">
                <label for="ciudad">lugar de residencia (Ciudad):</label>
                <input type="text" class="form-control"name="ciudad" placeholder="Ingrese su lugar de residencia" id="ciudad">
              </div>
              <div class="form-group">
                <label for="estrato">Estrato Socioeconómico:</label>
                <input type="text" class="form-control" name="estrato" placeholder="Ingrese su estrato Socioeconómico" id="estrato">
              </div>
             <div class="form-group">
                <label for="contrato">Tipo contrato:</label>
                <select class="form-control" name="contrato">
                  <option value="Termino fijo"> Termino fijo </option>
                  <option value="Termino indefinido"> Termino indefinido </option>
                  <option value="Obra y labor "> Obra y labor </option>
                  <option value="Otro"> Otro </option>
                </select>
              </div>

              <div class="form-group">
                <label for="cargo">Antigüedad del cargo:</label>
                <select class="form-control" name="cargo">
                <option value="Menos de un (1) año "> Menos de un (1) año </option>
                  <option value="Entre 1 y 2 años"> Entre 1 y 2 años </option>
                  <option value="Entre 2 y 3 años"> Entre 2 y 3 años </option>
                  <option value="Más de 3 años"> Más de 3 años </option>
                </select>
              </div>
              <div class="form-group">
                <label for="salario">Salario devengado</label>
                <input type="salario" class="form-control"name="salario" placeholder="Ingrese su salario" id="salario">
              </div>
              <div class="form-group">
                <label for="pri">Responda Si o No según corresponda (recuerde que de la sinceridad de sus respuestas dependerá nuestra oportuna intervención)</label>
                <input type="text" class="form-control"name="pri" placeholder="Ingrese su respuesta" id="pri">             
              </div>
              <div class="form-group">
                <label for="seg">¿Dispone de un espacio de trabajo que permita la ubicación adecuada de su computador junto con los documentos y otros accesorios?</label>
                <input type="text" class="form-control"name="seg" placeholder="Ingrese su respuesta" id="seg">
              </div>
              <div class="form-group">
                <label for="ter">¿La distancia entre su visión y la pantalla es superior a 55 cm?</label>
                <br>
                <img src="./img/distancia.jpg" class="responsive" />
                <select class="form-control" name="ter">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="cuar">¿El ángulo de visión coincide con la parte superior de la pantalla de su ordenador?</label>
                <br>
                <img src="./img/angulo.jpg" class="responsive" />
                <select class="form-control" name="cuar">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="quin">¿Tiene espacio suficiente para colocar los antebrazos delante del teclado?</label>
                <select class="form-control" name="quin">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="sex">Seleccione la silla que más se asemeje a la que usted utiliza</label>
                <br>
                <input type="radio" name="sex" value="SILLA1"><img src="./img/SILLA1.jpg" class="responsive" />
                <br>
                <input type="radio" name="sex" value="silla_de_trabajo"><img src="./img/silla_de_trabajo.jpg" class="responsive" />
                <br>
                <input type="radio" name="sex" value="silla2"><img src="./img/silla2.jpg" class="responsive" />
                <br>
                <input type="radio" name="sex" value="silla3"><img src="./img/silla3.jpg" class="responsive" />
              </div>
              <div class="form-group">
                <label for="sept">Seleccione el tipo de pantalla que más se asemeja al que usted utiliza</label>
                <br>
                <input type="radio" name="sept" value="trabajo_en_casa"><img src="./img/trabajo_en_casa.jpg" width="200" height="200" class="responsive" />
                <br>
                <input type="radio" name="sept" value="trabajo_en_casa2"><img src="./img/trabajo_en_casa2.jpg" width="200" height="200" class="responsive" />
                <br>
                <input type="radio" name="sept" value="trabajo_en_casa3"><img src="./img/trabajo_en_casa3.jpg" width="200" height="200" class="responsive" />
                <br>
                <input type="radio" name="sept" value="trabajo_en_casa4"><img src="./img/trabajo_en_casa4.jpg" width="200" height="200" class="responsive" />
              </div>
              <div class="form-group">
                <label for="oct">Seleccione las diferentes molestias que ha presentado en algún momento de su jornada laboral </label>
                <input type="text" class="form-control"name="oct" placeholder="Ingrese su respuesta" id="oct">
                  <option> </option>
                </select>
              </div>
              <div class="form-group">
                <label for="nov">Dolor de cuello</label>
                <select class="form-control" name="nov">
                  <option value="si"> Si </option>
                  <option value="no" > NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="deci">Dolor en hombros</label>
                <select class="form-control" name="deci">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="onc">Dolor de espalda</label>
                <select class="form-control" name="onc">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <div class="form-group">
                <label for="doc">Dolor en las muñeas y manos</label>
                <select class="form-control" name="doc">
                  <option value="si"> Si </option>
                  <option value="no"> NO </option>
                </select>
              </div>
              <button type="submit">Enviar</button>
</form>
  </div>
</div>
</div>
  </body>
</html>