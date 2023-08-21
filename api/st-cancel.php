<?php
if( !isset($_GET['token']) || !isset($_GET['iv']) || !isset($_GET['securitycode']) ){
    header('Location: ../');
    die();
}
function decryptData($encryptedData, $key, $iv) {
    $cipher = "AES-256-CBC";
    $options = OPENSSL_RAW_DATA;
    $decryptedData = openssl_decrypt(base64_decode($encryptedData), $cipher, $key, $options, $iv);
    return $decryptedData;
}
require_once('db.class.php');
$token = addslashes($_GET['token']);
$iv = addslashes(urldecode($_GET['iv']));
$securitycode = addslashes(urldecode($_GET['securitycode']));
$key = "k9AA64L&E!*0#23cNJo%o7tUF!l2M0aQ";
$iv2 = base64_decode($iv);
$email = decryptData($token,$key,$iv2);
$sc = decryptData($securitycode,$key,$iv2);
if($sc !== 'aprovado'){
  header('Location: ../login.html');
  die();
}
$objDB = new db();
$link = $objDB->conecta_mysql();
$sql = " SELECT * FROM `usuarios` WHERE email = '$email' ";
$jooj = mysqli_query($link, $sql);
if(!$jooj){
  echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
      <div class="alert1">
      <span class="closebtn">&times;</span>
      Erro ao se conectar com o servidor. Contate o Dev. (#A/S.P02)
 </div>';
die();
}
$registro = mysqli_fetch_array($jooj, MYSQLI_ASSOC);
if($registro == null){
    
        header('Location: ../login.html');
        die();
}

$sql = " DELETE FROM usuarios WHERE `usuarios`.`email` = '$email' ";
$jooj1 = mysqli_query($link, $sql);
  if(!$jooj1){
    echo '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
        <div class="alert1">
        <span class="closebtn">&times;</span>
        Erro ao se conectar com o servidor. Contate o Dev. (#A/M.P02)
      </div>';
    die();
  }
  header('Location: ../vip.html');
  die();






?>