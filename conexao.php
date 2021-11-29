<?php

 $conexao = mysqli_connect('localhost','root','');
    
    mysqli_select_db($conexao,'midia_local');
    if (!$conexao) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>