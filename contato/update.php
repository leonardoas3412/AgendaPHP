<?php
    include('../banco.php');

    $cod = $_POST['cod'];
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];

    
    $sql = "update tbcontato 
            set nome = '$nome' ,rua='$rua',numero='$numero',cidade='$cidade',bairro='$bairro',fone='$fone', email = '$email'
            where cod_contato = $cod";

			echo $sql;
    $update = $conexao->query($sql);
    
    if($update){
        header('Location: formbusca.php?update=ok');
    }else{
        header('Location: formbusca.php?update=erro');
    }
?>