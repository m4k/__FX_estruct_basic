
function gravar() {

    var animacaotipo = 'animated bounceInDown';
    var animacaotipo1 = 'animated fadeInLeftBig';
    var animacaotipo2 = 'animated bounceOutUp';
    var animacaofim = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';

    $.ajax({
        method: "post",
        url: "controller/gravar.php",
        beforeSend: function () {
            $('.message-sent').html('Enviando ...');
        },
        data: $("#form").serialize(),
        success: function (data) {
            if (data == '1') {
                $('.message-sent').html('Mensagem enviada.');
            }
        },
        error: function (data) {
            $('.message-sent').html('Erro ao enviar Mensagem.');
        }

    });
}