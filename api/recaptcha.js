$(document).ready(function() {
    $('#cadastrar').click(function(){
        var recaptchaValue = grecaptcha.getResponse();

        if (recaptchaValue.length === 0) {
            var wow = '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script><div class="alert1"><span class="closebtn">&times;</span>Por favor, confirme que você não é um robô.</div>';
            $('#alertas').html(wow);
        }else{
            $.ajax({
                url: 'api/functions.php',
                method: 'post',
                data: { email: $('#email').val(), senha: $('#senha').val(), senha2: $('#senha2').val(), metodo: $('#select-3967 option:selected').val() },
                success: function(data){
                  $('#alertas').html(data);
                },
                beforeSend: function(){
                  $('#cadastrar').css({display:"none"});
                  $('#loading').css({display:"block"});
                },
                complete: function(){
                  $('#loading').css({display:"none"});
                }
              });
        }
      });
    $('#logar').click(function(){
        var recaptchaValue = grecaptcha.getResponse();

        if (recaptchaValue.length === 0) {
            var wow = '<script>$(".closebtn").click(function(){$(".alert1").remove();});</script><div class="alert1"><span class="closebtn">&times;</span>Por favor, confirme que você não é um robô.</div>';
            $('#alertas').html(wow);
        }else{
            $.ajax({
                url: 'api/functions.php',
                method: 'post',
                data: { email: $('#email').val(), senha: $('#senha').val() },
                success: function(data){
                  $('#alertas').html(data);
                }
              });
        }
    });
});