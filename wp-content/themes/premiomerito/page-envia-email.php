<?php

	$nome = $_POST['nm'];
	$nick = explode( " ", $nome, 2 );
	$nick = $nick[0];
	$email = $_POST['ml'];
	$telefone = $_POST['tlfn'];
	$assunto = $_POST['ssnt'];
	$mensagem = $_POST['mnsg'];

	$url = get_bloginfo('url');
	$tUrl = get_bloginfo('template_url');

	$nomeEmpresa = "Revista Influência";
	$emailSender = "contato@revistainfluencia.com"; //específico para Locaweb
	// $emailEmpresa = "feicotur@gmail.com";
	$emailEmpresa = "raul@humanostud.io";


	$msgParaAdmin ="
	<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
	<div style='width: 100%; height: 100%; padding: 50px 0;'>
		<table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #ff4c35; border-spacing: 0'>
			<tr style='background: #fff; margin: 0; padding: 0'>
				<td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
					<img src='$tUrl/img/revista-influencia-logo-menu-fixed.png' style='margin: 20px 0 30px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans; padding: 0 15px 35px'>
					<div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
						<p style='color: #444; border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #aaa; font-style: italic;'><span style='width: 100px; display: inline-block'>Nome:</span> </b>$nome</p>
						<p style='color: #444; border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #aaa; font-style: italic;'><span style='width: 100px; display: inline-block'>E-mail:</span> </b>$email</p>
						<p style='color: #444; border-bottom: 1px dotted #ccc; padding: 10px 0 20px'><b style='color: #aaa; font-style: italic;'><span style='width: 100px; display: inline-block'>Telefone:</span> </b>$telefone</p>
						<p style='color: #444; border-bottom: 1px; padding: 10px 0'><b style='color: #aaa; font-style: italic;'><span style='width: 100px; display: block; margin-bottom: 20px;'>Mensagem:</span> </b>$mensagem</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";


	$msgParaUsuario  = "
	<!DOCTYPE html PUBLIC \'-//W3C//DTD XHTML 1.0 Strict//EN\' \'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\'>
	<div style='width: 100%; padding: 50px 0'>
		<table style='background: white; width: 460px; border-radius: 4px; margin: 0 auto; border: 15px solid #ff4c35; border-bottom-width: 20px; border-left-width: 0; border-right-width: 0; border-spacing: 0'>
			<tr style='background: #fff; margin: 0; padding: 0'>
				<td  style='font-family:Arial, sans; height: 110px; text-align: center;'>
					<img src='$tUrl/img/humano-logo-home.png' style='margin: 20px 0 30px'>
				</td>
			</tr>
			<tr>
				<td  style='font-family:Arial, sans; padding: 0 15px 15px'>
					<div style='width: 90%; padding: 1% 5%; margin-top: 20px'>
						<h1 style='font-size:22px; margin-bottom: 10px; color: #999; font-weight: lighter; margin-top: 30px; margin-bottom: 40px'>CONFIRMA&Ccedil;&Atilde;O DE CONTATO</h1>
						<p style='font-size:20px; margin-bottom: 10px; color: #666; line-height: 24px'><strong style='color: #7db6b0; font-size: 24px;'>Oi <b>$nick</b>!</strong><br/><br/>
							J&aacute; recebemos seu e-mail e ficamos muito felizes pelo seu contato. Responderemos o mais breve poss&iacute;vel.<br>
							<br>
							Grande abra&ccedil;o!<br>
						</p>
						<p style='margin-top: 50px; font-style: italic; color:#999; font-size:11px; font-family: Arial'>Observa&ccedil;&atilde;o: N&atilde;o &eacute; necess&aacute;rio responder este e-mail.</p>
					</div>
				</td>
			</tr>
		</table>
	</div>
	";

	$headerParaUsuario = "MIME-Version: 1.1\n";
	$headerParaUsuario .= "Content-type: text/html; charset=iso-8859-1\n";
	$headerParaUsuario .= "From: $emailEmpresa <$nomeEmpresa>\n"; // remetente
	$headerParaUsuario .= "Return-Path: $emailEmpresa\n"; // return-path
	
	$headerParaEmpresa = "MIME-Version: 1.0\n";
	$headerParaEmpresa .= "Content-type: text/html; charset=iso-8859-1\n";
	$headerParaEmpresa .="From: $email <$nome>\n";
	$headerParaEmpresa .= "Return-Path: $emailEmpresa\n"; // return-path


	// if($_SERVER['HTTP_HOST'] != "localhost")
	// {
		mail($emailEmpresa,utf8_decode($assunto),utf8_decode($msgParaAdmin),$headerParaEmpresa ,"-r".$emailSender) or die("erro");
		mail($email,utf8_decode("Confirmação de Contato"),utf8_decode($msgParaUsuario),$headerParaUsuario ,"-r".$emailSender) or die("erro");
	// }

	echo "sucesso";