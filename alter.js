$(document).ready(function(){
    $.ajax({
      url: 'api/functions.php',
      method: 'post',
      data: { sair: true },
      success: function(data){
        $('#login').html(data);
      }
    });
    $('.hover-foda').click(function(){
        var idid = this.id;
        if(!$('#'+idid).hasClass('chosen-one')){
          $('.chosen-one').removeClass('chosen-one');
          $('#'+idid).addClass('chosen-one');
          $('#escolher').prop("disabled", false);
          $('#escolher').css('cursor', 'pointer');
        }else{
          $('.chosen-one').removeClass('chosen-one');
          $('#escolher').prop('disabled', true);
          $('#escolher').css('cursor', 'not-allowed');
        }
    });
    $('#escolher').click(function(){
      var mapa = $('.chosen-one').attr('id');
      var myarray = ['splitMap','lotusMap','havenMap','iceboxMap','bindMap','breezeMap','ascentMap','fractureMap','pearlMap'];
      if(jQuery.inArray(mapa, myarray)!== -1){
        wow = mapa.slice(0, -3) + '.html';
        $.ajax({
          url: wow,
          success: function(data){
            $('#map-chosen').html(data);
            $('#carousel_986a').remove();
          }
        });
      }
    });
    $('#esqueceu').click(function(){
      wow = 'Senha.html';
      $.ajax({
        url: wow,
          success: function(data){
          $('#campo').html(data);
          $('#sec-80d6').remove();
        }
      });
    });
  });