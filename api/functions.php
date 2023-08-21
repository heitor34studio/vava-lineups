<?php
	session_start();
	require_once('db.class.php');


	//FUNÇÃO LOGIN
	function loginUser(){
		$objDB = new db();
		$link = $objDB->conecta_mysql();
		$email = addslashes($_POST['email']);
		$senha =  addslashes($_POST['senha']);
		if($senha == null || $email == null){
			echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				Preencha todos os campos.
			</div>');
			die();
		}
		$pass_size2 = strlen($email);
		$user_size2 = strlen($senha);

		//VERIFICA SE ESTÁ NO TAMANHO PERMITIDO
		if($pass_size2 > 50 || $user_size2 > 40){
			echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				Os dados inseridos ultrapassam o limite de caracteres permitidos.
			</div>');
			die();
		}

				
		//VERIFICA EMAIL
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				O email inserido é inválido.
			</div>';
			die();
		}
		$sql = " SELECT * FROM usuarios WHERE (email = '$email')";
		$resultado_id = mysqli_query($link, $sql);
		if(!$resultado_id){
			echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				Erro ao se conectar com o servidor. (#A/F.P01)
			</div>');
			die();
		}
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if($dados_usuario == null){
			echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					A senha ou o email está incorreto.
				</div>');
				die();
		}
			if(password_verify($senha,$dados_usuario['senha'])){
				$_SESSION['vip'] = 'aprovado';
				echo '<script>window.location.href="index.html"</script>';
			}else{
				echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					A senha ou o email está incorreto.
				</div>');
				die();
			}
	}


	//FUNÇÃO CRIAR USUARIO
	function logonUser(){
		$email = addslashes($_POST['email']);
		$objDB = new db();
		$link = $objDB->conecta_mysql();
		$email = addslashes($_POST['email']);
		$senha =  addslashes($_POST['senha']);
		$senha2 = addslashes($_POST['senha2']);
		$metodo = addslashes($_POST['metodo']);
		$metodos = ['1','2'];
		if(!in_array($metodo,$metodos)){
			echo('<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				O valor do Método de Pagamento foi alterado.
			</div>');
			die();
		}
		$email_size = strlen($email);
		$senha_size = strlen($senha);
		$senha2_size = strlen($senha2);

		//VERIFICA SE ESTÁ NO TAMANHO PERMITIDO
		if($email_size > 50 || $senha_size > 40 || $senha2_size > 40){
			echo('<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				Os dados inseridos ultrapassam o limite de caracteres permitidos.
			</div>');
			die();
		}

		//VERIFICA EMAIL
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			echo '<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
				<div class="alert1">
				<span class="closebtn">&times;</span>
				O email inserido é inválido.
			</div>';
			die();
		}
		//verifica se email existe
		$sql = "select * from usuarios where email = '$email' ";
		if(!$resultado_id = mysqli_query($link, $sql)){
			echo '<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					Erro ao se conectar com o servidor. (#A/F.P03)
				</div>';
			die();
		}
		$dados_usuario = mysqli_fetch_array($resultado_id);
		if(isset($dados_usuario['email'])){
			if($dados_usuario['pago'] == 0){
				$sql = " DELETE FROM usuarios WHERE `usuarios`.`email` = '$email' ";
				if(!mysqli_query($link, $sql)){
				echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					Erro ao se conectar com o servidor. Contate o Dev. (#A/M.P01)
				</div>';
				die();
				}
			}else{
				echo '<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
						<div class="alert1">
						<span class="closebtn">&times;</span>
						Este email já está cadastrado.
					</div>';
				die();
			}
		}
		if($senha != $senha2){
			echo '<script>$("#cadastrar").css({display:"block"});$(".closebtn").click(function(){$(".alert1").remove();});</script>
			<div class="alert1">
			<span class="closebtn">&times;</span>
			As senhas não coincidem.
			</div>';
			die();
		}
		
		$senhaCrypt = password_hash($senha, PASSWORD_BCRYPT);
		$sql = " insert into usuarios(email, senha, metodo) values ('$email', '$senhaCrypt', '$metodo') ";
		if(!mysqli_query($link, $sql)){
			echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					Erro ao se conectar com o servidor. (#A/F.P04)
			</div>';
		die();
		}
		if($metodo == '1'){
			echo "
			<script>
			$(document).ready(function(){
				$('#cadastrar').remove();
				var jooj = '".$email."';
				$.ajax({
					url: 'api/mercado-pago/index.php',
					method: 'post',
					data: { email: jooj },
					success: function(data){
						$('#alertas').html(data);
					},
					beforeSend: function(){
					  $('#loading').css({display:'block'});
					}
				});
  			});
			</script>
			";
			die();
		}else{
			echo '<script>$(document).ready(function(){
				function redirectToNewPageWithData() {
					// Create a form element
					var form = document.createElement("form");
					form.method = "POST";
					form.action = "api/stripe/stripe.php"; // Replace with your desired page URL
				  
					// Create an input field for each data key-value pair
					var data = {
					  key1: "'.$email.'",
					  key2: "blob",
					  // Add more key-value pairs as required
					};
				  
					for (var key in data) {
					  if (data.hasOwnProperty(key)) {
						var input = document.createElement("input");
						input.type = "hidden";
						input.name = key;
						input.value = data[key];
						form.appendChild(input);
					  }
					}
				  
					// Append the form to the document body
					document.body.appendChild(form);
				  
					// Submit the form
					form.submit();
				  }
				  
				  // Call the function to redirect to the new page with POST data
				  redirectToNewPageWithData();
			});</script>';
		}
		die();

	}

	//FUNÇÃO MUDA BOTAUM
	function buttomChange(){
		$objDB = new db();
		$link = $objDB->conecta_mysql();
		$sql = " SELECT * FROM `usuarios` WHERE pago = '0' ";
		$jooj = mysqli_query($link, $sql);
		if(!$jooj){
		echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
			<div class="alert1">
			<span class="closebtn">&times;</span>
			Erro ao se conectar com o servidor. Contate o Dev. (#A/F.P05)
		</div>';
		die();
		}
        while($registro = mysqli_fetch_array($jooj, MYSQLI_ASSOC)){
            $idDoAmigo = $registro['id'];
            $data3 = new DateTime(date($registro['data']));
            $data2 = new DateTime(date('Y-m-d H:i:s'));
            $diferenca = $data2->diff($data3);
            $dias = $diferenca->format('%a');
            if($dias > 1){
            $sql = " DELETE FROM usuarios WHERE `usuarios`.`id` = '$idDoAmigo' ";
            $jooj1 = mysqli_query($link, $sql);
                if(!$jooj1){
                echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
                    <div class="alert1">
                    <span class="closebtn">&times;</span>
                    Erro ao se conectar com o servidor. Contate o Dev. (#A/M.P02)
                    </div>';
                die();
                }
            }
        }
		if(!isset($_SESSION['vip'])){
			echo '<a class="u-button-style u-nav-link" href="Login.html">Login</a>';
			die();
		}
		if(!addslashes($_SESSION['vip']) == 'aprovado'){
			echo '<a class="u-button-style u-nav-link" href="Login.html">Login</a>';
			die();
		}
		echo '<a class="u-button-style u-nav-link" href="api/sair.php">Sair</a>';
		die();
	}

	//FUNÇÃO LOGOUT/SAIR
	function logOut(){
		if(!isset($_SESSION['vip'])){
			die();
		}
		if(!addslashes($_SESSION['vip']) == 'aprovado'){
			die();
		}
			header('Location: ../login');
	}


	if(sizeof($_POST) == 2){
		loginUser();
	}elseif(sizeof($_POST) == 4 && isset($_POST['senha2']) && isset($_POST['metodo'])){
		logonUser();
	}elseif(sizeof($_POST) == 1 && addslashes($_POST['sair']) == true){
		buttomChange();
	}else{
		echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
					<div class="alert1">
					<span class="closebtn">&times;</span>
					Um erro interno ocorreu, favor contatar o Dev. (#A/F.P02)
				</div>');
		die();
	}

?>