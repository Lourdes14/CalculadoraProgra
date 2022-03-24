<?php
  include('Calculo.php');
  $total=0;
  
  
  if(isset($_GET['n1']))
  {
      $Objeto=new Calculo();
      $n1=$_GET['n1'];
      $n2=$_GET['n2'];
      $n3=$_GET['n3'];

      $op=$_GET['opcion'];
      if($op=='litros')
      {
        $total=$Objeto->litros($n1,$n2,$n3);
      }
      if($op=='galones')
      {
        $total=$Objeto->galones($n1,$n2,$n3);
      }
  }
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <title>Calculo</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body bgcolor="#D7FF33 ">
      <div class="container">
        <h1 class="black-text" align="center">Control de agua</h1>
      </div>
      <br><br>
      <form method="get" action="index.php">
        <div class="row">
          <div class="input.field col s6">
            <input name="n1" id="n1" type="number" class="validate">
            <label class="active" for="n1">Alto</label>
          </div>

          <div class="input.field col s6">
            <input name="n2" id="n2" type="number" class="validate">
            <label class="active" for="n2">Ancho</label>
          </div>

          <div class="input.field col s6">
            <input name="n3" id="n3" type="number" class="validate">
            <label class="active" for="n3">Largo</label>
          </div>
        </div>

        <div class="input.field col s6 container">
          <label>Opciones</label>
          <br>
          <select name="opcion" class="browser-default">
            <option value="litros">litros</option>
            <option value="galones">galones</option>
          </select>  
        </div>
        <div align="center">
          <br>
        <div class="container">
          <input type="submit" value="Operar" class="waves-effect waves_light btn">
        </div>
      </div> 
      </div>
        <div align="center">
          <br>
      </form>
      <form method="get" action="index.php">
      <div class="container">
        <input type="hidden" name="limpiar" value="1">
        <input type="submit" value="Limpiar" class="waves-effect waves_light btn">
      </div>
</form>
     

      <script>
         document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
      }); 
      </script>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  <?php
    echo '<h2 class="black-text" align="center"> El resultado es: '.$total.'</h2>';
  ?>
 

  