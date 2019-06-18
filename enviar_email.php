<?php
# alterar a variavel abaixo colocando o seu email

$destinatario = "comercial@ehvoluti.com.br";

$nome = $_REQUEST['nome'];
$fone = $_REQUEST['fone'];
$email = $_REQUEST['email'];
$recebecontato = $_REQUEST['lstRecebeContato'];


$assunto = "Contato do Site";
 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "Contato Site - Via formulario" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Fone: " . $fone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:index.php");


?>