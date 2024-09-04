<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $mensagem = addslashes($_POST['mensagem']);
    $confirmacao = "E-mail enviado com sucesso!";
    $erro = "Houve um erro ao enviar o email!";

    $para = "leol217661@gmail.com";
    $assunto = "Novo Contato - Portifólio Gabriel";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: leandrocomercial81@gmail.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo "<script>alert('$confirmacao');</script>";
    }else{
        echo "<script>alert('$erro');</script>";
    }

?>