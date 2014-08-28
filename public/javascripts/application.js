$(document).ready(function(){

  new pxspeak.SpeakMeta( {gitCloneUrl:'https://github.com/pagodabox-quickstarts/php-laravel-mysql', language:'php'} );

  //
  $form = $('form')
  $textarea = $('textarea');
  $ask = $("#ask");

  //
  $textarea.on('focus', function(){ $form.addClass('focused'); });

  //
  $ask.on('click', function(){
    if($textarea.val()){
      $form.removeClass('errored');
      return true
    } else {
      $form.addClass('errored');
      return false
    }
  })

  //
  $textarea.on('change keyup paste', function(e){ $form.removeClass('errored'); });

});
