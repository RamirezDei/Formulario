<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grafi.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <title>Resultado</title>
</head>
<body>
<h1>Hola estas han sido tus respuestas con los pasos que debes seguir.</h1>
<div class="container"style="margin-top:10px;">
   <img src="./img/baner.jpg" class="responsive" />
  <div class="card"style="margin-top:10px;">
<?php
    include_once"main.php";
    echo "Su correo es: <br> ".  $formu->correo;
    echo "<br>";
    echo "Su nombre es: <br> ".  $formu->nombre;
    echo "<br>";
    echo "Su lugar de residencia es: <br> ".  $formu->ciudad;
    echo "<br>";
    echo "Su estrato es: <br> ".  $formu->estrato;
    echo "<br>";
    echo "Su contrato es: <br> ".  $formu->contrato;
    echo "<br>";
    echo "Su cargo es: <br> ".  $formu->cargo;
    echo "<br>";
    echo "Su salario es: <br> ".  $formu->salario;
    echo "<br>";
    echo "Respuesta pregunta #1 Uno: <br> ".  $formu->pri;
    echo "<br>"; 
    echo "Respuesta pregunta #2 Dos: <br> ".$formu->seg."<br>".$mensaje_final_seg;
    echo "<br>";
    echo "Respuesta pregunta #3 Tres: <br> ".$formu->ter."<br>".$mensaje_final_ter;
    echo "<br>";
    echo "Respuesta pregunta #4 Cuatro: <br> ".$formu->cuar."<br>".$mensaje_final_cuar;
    echo "<br>";
    echo "Respuesta pregunta #5 Cinco: <br> ";
    echo "<image src='img/$formu->sex.jpg' width='200'>";
    echo "<br>";
    echo "Respuesta pregunta #6 Seis: <br> ".$formu->quin."<br>".$mensaje_final_quin;
    echo "<br>";
    echo "Respuesta pregunta #7 Siete: <br> ";
    echo "<image src='img/$formu->sept.jpg' width='200'>";
    echo "<br>";
    echo "Respuesta pregunta #8 Ocho: <br> ".$formu->oct;
    echo "<br>";
    echo "Respuesta pregunta #9 Nueve: <br> ".$formu->nov."<br>".$mensaje_final_nov;
    echo "<br>";
    echo "Respuesta pregunta #10 Diez: <br> ".$formu->deci."<br>".$mensaje_final_deci;
    echo "<br>";
    echo "Respuesta pregunta #11 Once: <br> ".$formu->onc."<br>".$mensaje_final_onc;
    echo "<br>";
    echo "Respuesta pregunta #12 Doce: <br> ".$formu->doc."<br>".$mensaje_final_doc;
 
    ?>
    </div>
    </div>
</body>
</html>