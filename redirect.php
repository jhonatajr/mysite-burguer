<?php 

$destinatario = "burguerdegaragem@gmail.com";

$nome = $_REQUEST['txtNome'];
$telefone = $_REQUEST['txtTel'];
$email= $_REQUEST['txtEmail'];
$unidade = $_REQUEST['unidade'];
$mensagem = $_REQUEST['txtMen'];

 // monta o e-mail na variavel $body
$assunto = "FALE-CONOSCO - BURGUER DE GARAGEM" . "\n";
$body = "MENSAGEM $nome - BURGUER DE GARAGEM" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Telefone: " . $telefone . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Unidade: " . $unidade . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario, $assunto , $body, "From: $email\r\n");

// redireciona para a página de obrigado
header("location:obrigado.html");















?>