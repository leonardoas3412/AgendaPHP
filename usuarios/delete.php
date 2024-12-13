<?php
    include('../banco.php');

    $cod= $_GET['cod'];

    $sql="delete from tbusu where cod_usu=$cod";

    $consulta = $conexao->query($sql);

    if ($consulta) {
        header('Location:formbusca.php?del=podepá'); 
    } else {
        echo '';
    }
    
?>