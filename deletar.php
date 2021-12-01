<?php
    session_start();
    include "conexao.php";
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
    $sql = "DELETE FROM rota WHERE idrota = '$id'";
    $res = mysqli_query($conexao,$sql);
    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>