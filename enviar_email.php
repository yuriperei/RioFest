<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Obrigado por entrar em contato conosco. Tão cedo quanto possível entraremos em contato.'
	);

    $nome = @trim(stripslashes($_POST['nome'])); 
    $telefone = @trim(stripslashes($_POST['telefone']));
	$email = @trim(stripslashes($_POST['email'])); 
	$assunto = @trim(stripslashes($_POST['empresa']));   
    $mensagem = @trim(stripslashes($_POST['mensagem'])); 

    $email_from = $email;
    $email_to = 'contato@yuridesigner.com.br';//replace with your email

    $body = 'Nome: ' . $nome . "\n\n" . 'E-mail: ' . $email . "\n\n" . 'Telefone: ' . $telefone . "\n\n" . 'Empresa: ' . $assunto . "\n\n" . 'Mensagem: ' . $mensagem;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;