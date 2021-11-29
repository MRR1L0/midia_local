<?php
    
    include "conexao.php";

    $latitude = $_POST["lat"];
    $longitude = $_POST["lng"];
    $descricao = $_POST["descricao"];
     
    
    $insert = "INSERT INTO rota VALUES ('','$latitude','$longitude','$descricao')";
    $res = mysqli_query($conexao,$insert);
    mysqli_close($conexao);
    
?>