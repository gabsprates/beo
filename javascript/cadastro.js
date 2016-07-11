(function($) {
  $.fn.extend({
    verSenha: function () {
      var control = $(this).closest('.control');
      var input   = control.find('input');
      var type    = input.attr('type');

      if (type === 'password') {
        input.attr('type', 'text');
        $(this).removeClass('fa-low-vision').addClass('fa-eye');
      } else {
        input.attr('type', 'password');
        $(this).removeClass('fa-eye').addClass('fa-low-vision');
      }
    },

    validaEmail: function () {

    },

    validaSenha: function () {
      var value   = $(this).val();
      var control = $(this).closest('.control');
      if (value.length >= 8) {
        control.addClass('valid');
        return true;
      } else {
        control.removeClass('valid');
        return false;
      }
    }
  });

  $('.senha-field').on('click', '.ver-senha', function () {
    $(this).verSenha();
  });
  $('.senha-field').on('keyup', '.valida-senha', function () {
    $(this).validaSenha();
  });
})(jQuery);
