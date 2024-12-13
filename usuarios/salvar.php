<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql="insert into tbusu(cod_usu,nome,email,senha) values(null,'$nome','$email','$senha')";
  
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:formcad.php?mess=ok');
    }else{
        header('location:formcad.php?mess=ERROU!');
    }

?>