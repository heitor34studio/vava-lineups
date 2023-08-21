<?php
session_start();
require_once('db.class.php');
$contactEmail = addslashes($_POST['esqueceu']);
if(strlen($contactEmail) > 50){
			echo('<script>
			$("#email").prop("disabled", false);
			$("#email").css("cursor", "pointer");
			$("#esqueceuSenha").prop("disabled", false);
			$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
            <div class="alert1">
            <span class="closebtn">&times;</span>
            Os dados inseridos ultrapassam o limite de caracteres permitidos.
        </div>');
	die();
}
$err = false;
if (!filter_var($contactEmail, FILTER_VALIDATE_EMAIL)) {
    $err = true;
}
if(strlen($contactEmail) == 0 || $err){
    echo('<script>
	$("#esqueceuSenha").css({display:"inline-block"});
	$("#email").prop("disabled", false);
	$("#email").css("cursor", "pointer");
	$("#esqueceuSenha").prop("disabled", false);
	$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
    Por favor insira um email válido.
    </div>');
die();
}

$objDB = new db();
$link = $objDB->conecta_mysql();



$sql = " SELECT COUNT(*) AS jaexiste FROM usuarios  WHERE email = '$contactEmail' ";
$emailExiste = mysqli_query($link, $sql);
if($emailExiste){
	$qntd = mysqli_fetch_array($emailExiste, MYSQLI_ASSOC);
	if($qntd['jaexiste'] !== '1'){
        echo('<script>
		$("#esqueceuSenha").css({display:"inline-block"});
		$("#email").prop("disabled", false);
		$("#email").css("cursor", "pointer");
		$("#esqueceuSenha").prop("disabled", false);
		$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
        <div class="alert1">
        <span class="closebtn">&times;</span>
         Este email não existe na plataforma.
        </div>');
		die();
	}
}else{

    echo('<script>
	$("#esqueceuSenha").css({display:"inline-block"});
	$("#email").prop("disabled", false);
	$("#email").css("cursor", "pointer");
	$("#esqueceuSenha").prop("disabled", false);
	$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
    Erro ao se conectar com o servidor. (#A/E.P01)
    </div>');
    die();
}

//PEGA ID PARA CONFIRMAÇÃO DE LINK E CHECA SE EMAIL JÁ ESTÁ EM TROCA
$sql = " SELECT * FROM `usuarios` WHERE email = '$contactEmail' ";
$funcao = mysqli_query($link, $sql);
if(!$funcao){	
    echo('<script>
	$("#esqueceuSenha").css({display:"inline-block"});
	$("#email").prop("disabled", false);
	$("#email").css("cursor", "pointer");
	$("#esqueceuSenha").prop("disabled", false);
	$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
    Erro ao se conectar com o servidor. (#A/E.P03)
    </div>');
    die();
}
$dados = mysqli_fetch_array($funcao, MYSQLI_ASSOC);
if($dados['changeSenha'] == '1'){
    echo('<script>
	$("#esqueceuSenha").css({display:"inline-block"});
	$("#email").prop("disabled", false);
	$("#email").css("cursor", "pointer");
	$("#esqueceuSenha").prop("disabled", false);
	$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
		Já foi requisitada uma troca de senha para este Email. Se perceber que isto é um erro, contate o Dev.
    </div>');
	die();
}
$varParaUpdate = $dados['id'];
$id_usuario = password_hash($dados['id'], PASSWORD_BCRYPT);

//Include required PHPMailer files
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username = "suporte.thonthon@gmail.com";
//Set gmail password
	$mail->Password = "dupiyubvtmdhlloh";
//Email subject
	$mail->Subject = "Esqueci Minha Senha- Vava Lineups";
//Set sender email
	$mail->setFrom('suporte.thonthon@gmail.com');
//Enable HTML
	$mail->isHTML(true);
//Attachment
//$mail->addAttachment('img/attachment.png');
//Email body
$body = '
				<html>
					<body style="margin:0;bottom:0;width:100%;background-color:#fff;">

					<div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:25px;margin-bottom:10px;margin-top:30px;">
						<span style="color:#404577;text-decoration:none;font-family:Arvo,Courier,Georgia,serif;color:#090909">Clique no Botão Abaixo Para Atualizar suas Credenciais.</a>
					</div>

					</br>


					<div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:15px;margin-bottom:10px;">
					<a href="http://URL-DOMINIO/api/nova-senha.php?id='.$id_usuario.'&email='.$contactEmail.'" target="_blank" style="background-color:#171a1b;color:#ffffff;text-decoration:none;padding:12px 20px;border-radius:5px;font-weight:bold;border-width:2px;border-color:#ffffff;font-family:Arvo,Courier,Georgia,serif;"> Alterar
					</a>
					</div>
					<div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:25px;">
					<img style="width:100%;" src="https://cdn.discordapp.com/attachments/735698151742111795/1129219067975307406/footer.png"></img>
					</div>


					</body>
					</html>';


	$mail->Body = $body;
//Add recipient
	$mail->addAddress($contactEmail);
//Finally send email
	if ( $mail->send() ) {
		echo '<script>
		$(".alert2").click(function(){window.location.href="api/nova-senha.php?id='.$id_usuario.'&email='.$contactEmail.'"});</script>
			<div class="alert2">
			Um Email de Recuperação Foi Enviado! Cheque Sua Caixa de Spam.
		</div>';
		
		$sql = " UPDATE `usuarios` SET `changeSenha` = '1' WHERE `usuarios`.`id` = $varParaUpdate ";
		$wow = mysqli_query($link, $sql);
		if(!$wow){
			echo('<script>
			$("#esqueceuSenha").css({display:"inline-block"});
			$("#email").prop("disabled", false);
			$("#email").css("cursor", "pointer");
			$("#esqueceuSenha").prop("disabled", false);
			$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
			<div class="alert1">
			<span class="closebtn">&times;</span>
			Erro ao se conectar com o servidor. (#A/E.P04)
			</div>');
			die();
		}
	}else{
        echo('<script>
		$("#esqueceuSenha").css({display:"inline-block"});
		$("#email").prop("disabled", false);
		$("#email").css("cursor", "pointer");
		$("#esqueceuSenha").prop("disabled", false);
		$("#esqueceuSenha").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
        <div class="alert1">
        <span class="closebtn">&times;</span>
        Erro Ao Enviar o Email de Confirmação, favor contatar o Dev. (#A/E.P02)
        </div>');
        die();
	}
//Closing smtp connection
	$mail->smtpClose();
?>