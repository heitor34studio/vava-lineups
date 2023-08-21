<?php
$access_token = "";
require_once 'vendor/autoload.php';
require_once('../db.class.php');


$email = addslashes($_POST['email']);
function encryptData($data, $key, $iv) {
  $cipher = "AES-256-CBC";
  $options = OPENSSL_RAW_DATA;
  $encryptedData = openssl_encrypt($data, $cipher, $key, $options, $iv);
  return base64_encode($encryptedData);
}

$key = "k9AA64L&E!*0#23cNJo%o7tUF!l2M0aQ";
$iv = openssl_random_pseudo_bytes(16);
$ivString = base64_encode($iv);
$emailEncryptado = encryptData($email,$key,$iv);

MercadoPago\SDK::setAccessToken($access_token);


$payment = new MercadoPago\Payment();
$payment->transaction_amount = 25;
$payment->description = "Acesso VIP- Vava Lineups";
$payment->payer = array(
  "email" => $email
  );
$payment->payment_method_id = "pix";
$payment->external_reference = $emailEncryptado;
$payment->save();


$link = $payment->point_of_interaction->transaction_data->ticket_url;
$idzinho = $payment->id;
$qr_code = 'data:image/png;base64, '.$payment->point_of_interaction->transaction_data->qr_code_base64;
$codigo = $payment->point_of_interaction->transaction_data->qr_code;



///ENVIA EMAIL PESSOA COM LINK
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
            $mail->Subject = "Link de Pagamento Pix Criado! Confirme Aqui!- Vava Lineups";
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
                      <span style="color:#404577;text-decoration:none;font-family:Arvo,Courier,Georgia,serif;color:#090909">Pague o Código Pix com o QR Code abaixo e clique no botão Abaixo para Ativar sua conta após o pagamento!</a>
                    </div>

                    </br>


                    <div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:15px;margin-bottom:10px;">
                    <h5 style="color:#404577;text-decoration:none;color:#090909">'.$codigo.'</h5>
                    </div>

                    </br>


                    <div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:15px;margin-bottom:10px;">
                    <a href="https://meusite3400.com/api/mp-ongoing.php?token='.urlencode($emailEncryptado).'&iv='.urlencode($ivString).'&idzinho='.urlencode($idzinho).'" target="_blank" style="background-color:#171a1b;color:#ffffff;text-decoration:none;padding:12px 20px;border-radius:5px;font-weight:bold;border-width:2px;border-color:#ffffff;font-family:Arvo,Courier,Georgia,serif;"> Ativar
                    </a>
                    </div>

                    <div style="bottom:0;width:100%;text-align:center;line-height:40px;font-size:25px;">
                    <img style="width:100%;" src="https://cdn.discordapp.com/attachments/735698151742111795/1129219067975307406/footer.png"></img>
                    </div>


                    </body>
                    </html>';


            $mail->Body = $body;
            //Add recipient
            $mail->addAddress($email);
            //Finally send email
            if ( !$mail->send() ) {
              $objDB = new db();
		          $link = $objDB->conecta_mysql();
              $sql = " DELETE FROM `usuarios` WHERE `usuarios`.`email` = $email ";
              $resultado_id = mysqli_query($link, $sql);
              if(!$resultado_id){
                echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
                <div class="alert1">
                <span class="closebtn">&times;</span>
                  Ocorreu um erro interno. Contate o Dev Imediatamente. (#A/M/I.P01)
                </div>');
              }
              echo('<script>$(".closebtn").click(function(){$(".alert1").remove();});</script>
                <div class="alert1">
                <span class="closebtn">&times;</span>
                Ocorreu um erro ao enviar o Email com o Link de Pagamento + de Ativação. Favor contatar o Dev. (#A/M/I.P00)
              </div>');
              die();
            }
            //Closing smtp connection
            $mail->smtpClose();



echo '<div style="display:flex;justify-content:center;align-content:center;"><img width="300" src="'.$qr_code.'" >
</div>
<script>$(".porra_toda").remove();</script>
<h4 class="u-text u-text-default u-text-2">Use o Código Pix Acima, ou <a class="pixzin" href="'.$link.'" target="_blank">Clique Aqui</a>
 para Pagar e então clique no botão Abaixo para Ativar sua conta!</h4>

 <center><a href="api/mp-ongoing.php?token='.urlencode($emailEncryptado).'&iv='.urlencode($ivString).'&idzinho='.urlencode($idzinho).'" class="u-border-black u-border-hover-palette-4-base u-btn u-btn-rectangle u-btn-submit
  u-button-style u-hover-black u-text-hover-white u-white u-btn-1 animated" id="ativar">ATIVAR</a></center>


';

?>