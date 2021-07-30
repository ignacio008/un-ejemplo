<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CURSO DE REPASO</title>
</head>
<body>
  



<form action="" method="POST">


      <input type="number" name="n1">
      <br>
      <input type="number" name="n2">
      <br>
      <select name="operaciones" id="opc">
        <option value="sumar">sumar</option>
        <option value="restar">restar</option>
      </select>
      <br>
      <input type="submit" name="enviar">



</form>
<h1>resultado</h1>

<?php
$n1= 0;
$n2= 0;
$opr = 0;
if (isset($_POST["enviar"])) {
  
switch($opr=$_POST["operaciones"]){
  case 'sumar':
    $resultado = $n1=$_POST["n1"] + $n2=$_POST["n2"];
    echo "el resultado es"." ".$resultado;
    break;
    case 'restar':
      $resultado = $n1=$_POST["n1"] - $n2=$_POST["n2"];
      echo "el resultado es"." ".$resultado;
      break;
}

}

?>

<br>
<br>
    <fieldset>

    <legend><H2>CICLO WHILE</H2></legend>
      



<?php 

    $aumento = 5;
    while($aumento <10){
      echo " ".$aumento;
      $aumento++;
    }
?>
  </fieldset>

<br>
    <fieldset>
      <legend><h2>CICLO DO WHILE</h2></legend>
      
<?php

      $variable = 10;
    //  EJECUTA SOLO LO PRIMERO EN LUGAR DE SOLO WHILE
      do{
        echo $variable." //  EJECUTA SOLO LO PRIMERO EN LUGAR DE SOLO WHILE";
      } while ($variable < 9);

      $numero= 10;
      while ($numero<9);{
        echo "<br>".$numero;
      }

?>
    </fieldset>

<fieldset>
  <legend><h2>CICLO FOR</h2></legend>
  <?php   

      for($var=1; $var < 5; $var++){
        echo " ".$var;
      }

      for($var=5; $var > 1; $var--){
        echo " "." Disminuir ".$var;
      }

?>
</fieldset>


<fieldset>
  <legend><h2>CICLO FORECH</h2></legend>
  <?php   

      $predefinicdo = array("Elemento 1 ", "Elemento 2 ");
     foreach ($predefinicdo as $elementos ) {
        echo $elementos."<br>";
     }

     $asociados = array("clave1" => "elemento 1 ", "clave 2 " => "elemento 2 ");
     {
       foreach ($asociados as $claves => $elementonumero) {
       
        echo $claves." = ".$elementonumero."<br>";
       }
     }





?>
</fieldset>

<br>



<fieldset>
  <legend><h2>SWITCH</h2></legend>
  <?php   
  $variable1=5;
        switch ($variable1) {
          case '5':
            echo "vale 5";
            break;
          
          default:
            echo "no vale nada";
            break;
        }

?>
</fieldset>
<br>


    
<fieldset>
  <legend><h2>MI FUNCION</h2></legend>
  <?php   


$p1=2;

$p2=2;
$p3=2;
     function mifunction($p1,$p2,$p3){

      $adicion= $p1+$p2+$p3;
      $multiplicacion = $adicion*2;
      return $multiplicacion;

     }

     echo mifunction($p1,$p2,$p3);

?>
</fieldset>

<br>
<fieldset>
  <legend><h2>FORMULARIO</h2></legend>

   <form action="" method="POST" name="frm">

                <label for="">Nombre</label>
                <input type="text" name="nombre"> <br><br>
                <label for="">Apellido</label>
                <input type="text" name="apellido"><br><br>
                <input type="submit" name="enviar1">
                <br>

                <h2>RESULTADO</h2>
                <?php 

                $nombre = $_POST["nombre"];
                $apellido= $_POST["apellido"];

                if (isset($_POST["enviar1"])) {
                  # code...


                echo $nombre." ".$apellido;

                }

                ?>
   </form>

</fieldset>
<br>




<fieldset>

   <legend><h2>CALCULADORA</h2></legend>
    <form action="" method="POST">

    <label for="">Numero A: </label>
    <input type="number" name="numero1"><br><br>

    <label for="">Numero B: </label>
    <input type="number" name="numero2"><br><br>
<label for=""><b>Seleciona la operacion: </b></label><br><br>
    <select name="operacionesMat" id="">
      <option value="sumar">Sumar</option>
      <option value="restar">Restar</option>
      <option value="multiplicar">Multiplicar</option>
      <option value="dividir">Dividir</option>
    </select><br><br>
    <input type="submit" name="enviar">
    <br>
    <h2>Resultados de la Calculadora</h2>
    <?php

    $numero1 = $_POST["numero1"];
    
    $numero2 = $_POST["numero2"];

    $operacion = $_POST["operacionesMat"];

    if (isset($_POST["enviar"])) {
      
        switch ($operacion) {
          case 'sumar':
           $resultado = $numero1+$numero2;
           echo "El resultado de la suma es: ".$resultado;
            break;
         
            case 'restar':
              $resultado = $numero1-$numero2;
              echo "El resultado de la resta es: ".$resultado;
               break;

               case 'multiplicar':
                $resultado = $numero1*$numero2;
                echo "El resultado de la multiplicacion es: ".$resultado;
                
                 break;

                 case 'dividir':
                  $resultado = $numero1/$numero2;
                  echo "El resultado de la division es: ".$resultado;
                   break;


        }


    }


?>
<!-- AQUI LUEGO DE LA VARIABLE YA PUEDO PONER EL PHP Y LLAMARLO NO ANTES UNA VEZ QUE YA SE ALAMACENO -->
<input type="text" name="mostraresultados" placeholder="El resultado es: <?php echo $resultado?>">

    </form>

</fieldset>






<br>
</body>
</html>