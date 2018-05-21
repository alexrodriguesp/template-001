<?php

  $assunto = $_POST['assunto'];
  $corpo = "
    Assunto: "  .$_POST['assunto']."
    Nome: "  .$_POST['nome']."
    Email: "  .$_POST['email']."
    Mensagem: "  .$_POST['Mensagem']."
  ";

   //4 – Agora definimos a  mensagem que vai ser enviado no e-mail
  $mensagem = "<strong>Nome:  </strong>".$nome;
  $mensagem .= "<br>  <strong>Mensagem: </strong>".$_POST['mensagem'];

mail('alexrodrigues.p@hotmail.com', $assunto, $corpo, "From: $email");
echo ("Mensagem enviada com sucesso !!")
?>
