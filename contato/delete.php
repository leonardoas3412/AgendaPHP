<?php
    include('../banco.php');

    $cod= $_GET['cod'];

    $sql="delete from tbcontato where cod_contato=$cod";

    $consulta = $conexao->query($sql);

    if ($consulta) {
        header('Location:formbusca.php?del=podepá'); 
    } else {
        header('Location:formbusca.php?del=erro');
    }
    
?>