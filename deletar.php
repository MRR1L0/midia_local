<?php
    include "conexao.php"; 
    $id = 1;
    $sql = "DELETE FROM rota WHERE idrota = '$id'";
    $res = mysqli_query($conexao,$sql);
?>