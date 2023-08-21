<?php

session_start();
require_once('db.class.php');
$id = addslashes($_GET['id']);
$email = addslashes($_GET['email']);
$objDB = new db();
$link = $objDB->conecta_mysql();
$sql = " SELECT * FROM `usuarios` WHERE email = '$email' ";
$funcao = mysqli_query($link, $sql);
if($funcao){
	$dados = mysqli_fetch_array($funcao, MYSQLI_ASSOC);
	if($dados == null){
    header('Location: ../index.html');
    die();
  }
  if(!password_verify($dados['id'],$id)){
    header('Location: ../index.html');
    die();
  }
  if($dados['changeSenha'] != '1'){
    header('Location: ../index.html');
    die();
  }
}else{
  header('Location: ../index.html');
  die();
}

$_SESSION['emaill'] = $email;
$_SESSION['idd'] = $id;


?>
<!DOCTYPE html>
<html style="font-size: 17px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Nova Senha- VavaLineups</title>
    <link href="../images/favicon.ico" rel="icon">
    <link rel="stylesheet" href="../style.css" media="screen">
    <link rel="stylesheet" href="../Login.css" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script class="u-script" type="text/javascript" src="../script.js" defer=""></script>
    <script type="text/javascript">
    $(document).ready(function(){
      const togglePassword = document.querySelector("#togglePassword");
      const password = document.querySelector("#senha");
  
      togglePassword.addEventListener("click", function () {
          // toggle the type attribute
          const type = password.getAttribute("type") === "password" ? "text" : "password";
          password.setAttribute("type", type);
          
          // toggle the icon
          this.classList.toggle("bi-eye");
      });
      
      const togglePassword2 = document.querySelector("#togglePassword2");
      const password2 = document.querySelector("#senha2");
  
      togglePassword2.addEventListener("click", function () {
          // toggle the type attribute
          const type = password2.getAttribute("type") === "password" ? "text" : "password";
          password2.setAttribute("type", type);
          
          // toggle the icon
          this.classList.toggle("bi-eye");
      });
      $('#alterar').click(function(){
        $("#senha").prop("disabled", true);
        $("#senha").css("cursor", "not-allowed");
        $("#senha2").prop("disabled", true);
        $("#senha2").css("cursor", "not-allowed");
        $.ajax({
          url: 'script-senha.php',
          method: 'post',
          data: { senha: $('#senha').val(), senha2: $('#senha2').val() },
          success: function(data){
            $('#alertas').html(data);
          }
        });
      });
    });
    </script>
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900|Lato:100,100i,300,300i,400,400i,700,700i,900,900i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "LINEUPS",
		"logo": "images/1473.png"
    }</script>
    <meta name="theme-color" content="#66c5e8">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
    <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>
  <body class="u-body u-xl-mode" data-lang="pt"><header class="u-box-shadow u-clearfix u-header u-image u-shading u-header" id="sec-7512" data-image-width="1200" data-image-height="720"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-align-center u-menu u-menu-hamburger u-offcanvas u-menu-1" data-responsive-from="XL">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-black u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Página-Inicial.html" style="padding: 10px 20px;">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Login.html" style="padding: 10px 20px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Vip.html" style="padding: 10px 20px;">Vip</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Página-Inicial.html">Página Inicial</a>
</li><li class="u-nav-item" id="login"><a class="u-button-style u-nav-link" href="../Login.html">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="../Vip.html">Vip</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <a href="" class="u-image u-logo u-image-1" data-image-width="720" data-image-height="326">
          <img src="../images/1473.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
      <div id="campo"></div>
    <section class="skrollable u-align-center u-clearfix u-image u-parallax u-section-1" id="sec-80d6" data-image-width="1565" data-image-height="800">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Redefina Sua Senha - Vip's 👑</h1>
        <div class="u-form u-form-1">
          <form  class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 10px">
            <div class="u-form-group u-form-name u-label-none" id="alertas">
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="senha-3b9a" class="u-label">Nova Senha</label>
              <input type="password" placeholder="Insira Uma Nova Senha" maxlength="40" id="senha" name="Senha" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-2" required="">
              <i class="bi bi-eye-slash olhin animated" id="togglePassword"></i>
            </div>
            <div class="u-form-email u-form-group u-label-none">
              <label for="senha2-3b9a" class="u-label">Repita Senha</label>
              <input type="password" placeholder="Repita Sua Nova Senha"  maxlength="40" id="senha2" name="Senha2" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required="">
              <i class="bi bi-eye-slash olhin" id="togglePassword2"></i>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="#" class="u-border-2 u-border-black u-border-hover-palette-4-base u-btn u-btn-rectangle u-btn-submit u-button-style u-hover-black u-text-hover-white u-white u-btn-1" id="alterar">ALTERAR</a>
            </div>
          </form>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-image u-shading u-footer" id="sec-922e" data-image-width="1200" data-image-height="720"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xl u-container-style u-layout-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-container-layout-1">
                  <a href="" class="u-image u-logo u-image-1" data-image-width="720" data-image-height="326">
                    <img src="../images/1473.png" class="u-logo-image u-logo-image-1">
                  </a>
                  <a href="https://34productions.tech" class="u-image u-logo u-image-2" data-image-width="1864" data-image-height="1865">
                    <img src="../images/logo1.png" class="u-logo-image u-logo-image-2">
                  </a>
                  <p class="u-align-center u-text u-text-1">
                    <span class="u-text-custom-color-2" style="font-weight: 700;">Vava Lineups</span> é um Projeto da <span class="u-text-custom-color-1" style="font-weight: 700;">34Productions</span> para todos os jogadores de Valorant que desejam verificar rapidamente lineups da Viper em seus jogos!&nbsp;
                  </p>
                  <ul class="u-align-center u-text u-text-2">
                    <li><a href="index.html" class="link animated">Home</a></li>
                    <li><a href="Login" class="link animated">Login</a></li>
                    <li><a href="Vip" class="link animated">Vip</a></li>
                  </ul>
                  <a href="https://34productions.tech" class="animated u-align-center u-btn u-button-style u-hover-none u-none u-text-custom-color-1 u-text-hover-grey-5 u-btn-1" target="_blank"><span class="u-icon u-icon-1"><svg class="u-svg-content" viewBox="0 0 55 55" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M55,27.5C55,12.337,42.663,0,27.5,0S0,12.337,0,27.5c0,8.009,3.444,15.228,8.926,20.258l-0.026,0.023l0.892,0.752
	c0.058,0.049,0.121,0.089,0.179,0.137c0.474,0.393,0.965,0.766,1.465,1.127c0.162,0.117,0.324,0.234,0.489,0.348
	c0.534,0.368,1.082,0.717,1.642,1.048c0.122,0.072,0.245,0.142,0.368,0.212c0.613,0.349,1.239,0.678,1.88,0.98
	c0.047,0.022,0.095,0.042,0.142,0.064c2.089,0.971,4.319,1.684,6.651,2.105c0.061,0.011,0.122,0.022,0.184,0.033
	c0.724,0.125,1.456,0.225,2.197,0.292c0.09,0.008,0.18,0.013,0.271,0.021C25.998,54.961,26.744,55,27.5,55
	c0.749,0,1.488-0.039,2.222-0.098c0.093-0.008,0.186-0.013,0.279-0.021c0.735-0.067,1.461-0.164,2.178-0.287
	c0.062-0.011,0.125-0.022,0.187-0.034c2.297-0.412,4.495-1.109,6.557-2.055c0.076-0.035,0.153-0.068,0.229-0.104
	c0.617-0.29,1.22-0.603,1.811-0.936c0.147-0.083,0.293-0.167,0.439-0.253c0.538-0.317,1.067-0.648,1.581-1
	c0.185-0.126,0.366-0.259,0.549-0.391c0.439-0.316,0.87-0.642,1.289-0.983c0.093-0.075,0.193-0.14,0.284-0.217l0.915-0.764
	l-0.027-0.023C51.523,42.802,55,35.55,55,27.5z M2,27.5C2,13.439,13.439,2,27.5,2S53,13.439,53,27.5
	c0,7.577-3.325,14.389-8.589,19.063c-0.294-0.203-0.59-0.385-0.893-0.537l-8.467-4.233c-0.76-0.38-1.232-1.144-1.232-1.993v-2.957
	c0.196-0.242,0.403-0.516,0.617-0.817c1.096-1.548,1.975-3.27,2.616-5.123c1.267-0.602,2.085-1.864,2.085-3.289v-3.545
	c0-0.867-0.318-1.708-0.887-2.369v-4.667c0.052-0.52,0.236-3.448-1.883-5.864C34.524,9.065,31.541,8,27.5,8
	s-7.024,1.065-8.867,3.168c-2.119,2.416-1.935,5.346-1.883,5.864v4.667c-0.568,0.661-0.887,1.502-0.887,2.369v3.545
	c0,1.101,0.494,2.128,1.34,2.821c0.81,3.173,2.477,5.575,3.093,6.389v2.894c0,0.816-0.445,1.566-1.162,1.958l-7.907,4.313
	c-0.252,0.137-0.502,0.297-0.752,0.476C5.276,41.792,2,35.022,2,27.5z"></path></svg></span>&nbsp; 34Productions
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div></footer>
  
</body></html>