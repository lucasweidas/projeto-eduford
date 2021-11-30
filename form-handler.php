<?php
$nome = $_POST['nome'];
$visitante_email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$email_from = 'info@naovaifuncionar.com';

$email_assunto = 'Novo Formulário Recebido';

$email_body = "Nome de Usuário: $nome.\n".
                "Email de Usuário: $visitante_email.\n".
                "Assunto: $assunto.\n".
                "Mensagem: $mensagem .\n";

$to = 'frangoassado372@gmail.com';

$headers = "De: $email_from \r\n";

$headers .= "Corresponde à: $visitante_email \r\n";

mail($to, $email_assunto, $email_body, $headers);

header("Location: contato.html");
?>