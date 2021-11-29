<?php
    
    include "conexao.php";

     
    
    $sql = "SELECT * FROM  rota";
    $res = mysqli_query($conexao,$sql);
    $lin = mysqli_num_rows($res);

   
    

    
?>