/* Mensagem */
$(document).ready(function() {
    $(".menu-toggle").on('click', function() {
        $(this).toggleClass("on");
        $('.menu-section').toggleClass("on");
        $("nav ul").toggleClass('hidden');
    });
    setTimeout(function(){actionLoader(),actionLoader2()}, newFunction());
    deslizar();
});
function actionLoader(){
    $('.transition-loader').hide();
    const newLocal = 'animated fadeInDown';

    $('.msgCenter').removeClass('hidden').addClass(newLocal).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
        $(this).removeClass('animated fadeInDown')
    });
}
function actionLoader2(){
    $('.transition-loader').hide();
    const newLocal = 'animated bounce';

    $('.msgCenter').removeClass('hidden').addClass(newLocal).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){
        $(this).removeClass('animated bounce')
    });
    $('.msgCenterShowSample').removeClass('hidden').show();
}
function newFunction() {
    return 3000;
}

/* Deslizar */
function deslizar(){
    var $doc = $('html, body');
    $('a').click(function() {
        $doc.animate({
              scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
        return false;
    });
}