<?php

session_start();
require_once('db.class.php');

$senha = addslashes($_POST['senha']);
$senha2 = addslashes($_POST['senha2']);
$email = addslashes($_SESSION['emaill']);
$id = addslashes($_SESSION['idd']);


if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
    echo('<script>
    $("#senha").prop("disabled", false);
    $("#senha").css("cursor", "pointer");
    $("#senha2").prop("disabled", false);
    $("#senha2").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
    O email enviado é inválido, contate o Dev.
</div>');
die();
}

if(strlen($senha) > 40 || strlen($senha2) > 40 ){
			echo('<script>
			$("#senha").prop("disabled", false);
			$("#senha").css("cursor", "pointer");
			$("#senha2").prop("disabled", false);
			$("#senha2").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
            <div class="alert1">
            <span class="closebtn">&times;</span>
            Os dados inseridos ultrapassam o limite de caracteres permitidos.
        </div>');
	die();
}

if( $senha != $senha2 ){
    echo('<script>
    $("#senha").prop("disabled", false);
    $("#senha").css("cursor", "pointer");
    $("#senha2").prop("disabled", false);
    $("#senha2").css("cursor", "pointer");$(".closebtn").click(function(){$(".alert1").remove();});</script>
    <div class="alert1">
    <span class="closebtn">&times;</span>
    As senhas não coincidem.
</div>');
die();
}

$senha_nova = password_hash($senha, PASSWORD_BCRYPT);;

$objDB = new db();
$link = $objDB->conecta_mysql();

$sql = " SELECT * FROM `usuarios` WHERE email = '$email' ";
$funcao = mysqli_query($link, $sql);
if($funcao){
	$dados = mysqli_fetch_array($funcao, MYSQLI_ASSOC);
	if($dados == null){
    echo '<script>window.location.href="../login"</script>';
    die();
  }
  if(!password_verify($dados['id'],$id)){
    echo '<script>window.location.href="../login"</script>';
    die();
  }
  if($dados['changeSenha'] !== '1'){
    echo '<script>window.location.href="../login"</script>';
    die();
  }
}else{
  echo '<script>window.location.href="../login"</script>';
  die();
}

$sql = " UPDATE `usuarios` SET `senha` = '$senha_nova', `changeSenha` = '0' WHERE `usuarios`.`email` = '$email' ";
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
		Erro ao se conectar com o servidor. (#A/SS.P01)
	</div>');
	die();
}


$_SESSION = array();
echo '<script>
        $("#alterar").remove();
		$(".alert2").click(function(){window.location.href="../login"});</script>
			<div class="alert2">
			Sua senha foi Alterada com Sucesso! Clique aqui para fazer login.
		</div>';

?>