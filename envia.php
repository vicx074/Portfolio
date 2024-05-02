<?php

   $nome = addslashes($_POST['nome']);
   $email = addslashes($_POST['email']);
   $celular = addslashes($_POST['celular']);
   $mensagem = addslashes($_POST['mensagem']);

   $para = "victororg22@gmail.com";
   $assunto = "Coleta de dados";

   $corpo = "Nome: ".$nome"\n"."Email: ".$email."\n"."Celular: ".$celular."\n"."Mensagem: ".$mensagem."\n";

   $cabeca = "From: vicxcontaprofissional@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

   if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso!")
   }else{
    echo("Erro ao eviar o e-mail");
   }

?>