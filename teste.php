<?php
  include "consultar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Editar</th>
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
  
          echo "<tr class='linhas'>";
          echo "<td></td><td></td><td>$latitude</td><td>$longitude</td><td>$descricao</td>";
          echo "</tr>";
      }
      
  ?>
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>