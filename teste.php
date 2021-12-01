<?php
  include 'conexao.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Midia Local</title>
    <meta charset="UTF-8">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="main.js"></script>
  </head>
  <body>
    <div id="map">
    </div>
    <div id="cadastro-container" display='block'>
      <form  display='block'  method="post" action='cadastro.php'>
        <label for="latitude">latitude</label>
        <input type="text" name="lat" id="latitude" required="required" >
        <label for="longitude">longitude</label>
        <input type="text" name="lng" id="longitude" required="required">
        <label for="descricao">descrição</label>
        <input type="text" name="descricao" id="descricao" required="required">
        <input type="submit" value="Cadastrar"  >
      </form>
      
    
?>
    </div>
    <div id="pesquisar">
      <button class="btn btn-blue" id="consultar" onclick="consultar()">consultar</button>
    </div> 
<div id="tbl_consulta">
<form action="deletar.php">
<div id="tbl_consulta">
<table class="table">
    <thead class="thead-dark">
      <tr>
      <th scope="col">Localizar</th>
        <th scope="col">Apagar</th>
        <th scope="col">Latitude</th>
        <th scope="col">Longitude</th>
        <th scope="col">Descricao</th>
      </tr>
    </thead>
    <tbody>
<?php

      $sql = "SELECT * FROM  rota";
      $res = mysqli_query($conexao,$sql);
      $lin = mysqli_num_rows($res);
  
      while($reg = mysqli_fetch_row($res)){
          $latitude = $reg[1];
          $longitude = $reg[2];
          $descricao = $reg[3];
  
          echo "<tr>";
          echo "<td><button class='btn_localizar' id='ocalizar'>localizar</button></td>";
          echo "<td><button class='btn_apagar' id='apagar'>Apagar</button></td>";
          echo "<td>$latitude</td><td>$longitude</td><td>$descricao</td>";
          echo "</tr>";
      }

?>

    </tbody>
  </table>
  </form>
  </div>
  
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbKs_zBvbMG1kSK7Ffw3usDcu7fGkXF_g&callback=initMap&v=weekly"
      async
    ></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

  </html>
