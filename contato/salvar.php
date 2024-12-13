<?php
    //conexão com banco de dados
    include('../banco.php');

    //receber os dados por POST
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $fone = $_POST['fone'];
    $email = $_POST['email'];


    $sql="insert into tbcontato(cod_contato,nome,rua,numero,cidade,bairro,fone,email) 
    values(null,'$nome','$rua','$numero','$cidade','$bairro','$fone','$email')";
  
    //executando a INSERT no banco
          $consulta = $conexao->query($sql);

   //verificar se o INSERT deu certo
   if($consulta == true){
        header('location:formcad.php?mess=ok');
    }else{
        header('location:formcad.php?mess=erro');
    }

?>