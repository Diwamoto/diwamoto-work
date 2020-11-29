$(function(){
  
  $(function(){

    $('.sidenav').sidenav({
      closeOnClick  : true,
      edge: 'right',
      draggable     : true
    });
    $('.parallax').parallax();
    $('.materialboxed').materialbox();

  }); // end of document ready

  $(function() {
    var pagetop = $('#page_top');   
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    $('a[href^="#"]').click(function(){
      var time = 500;
      var href= $(this).attr("href");
      var target = $(href == "#" ? 'html' : href);
      var distance = target.offset().top;
      $("html, body").animate({scrollTop:distance}, time, "swing");
      return false;
    });
  });
  
  ScrollReveal().reveal('.fade-under',{ delay: 100, distance: '100px', duration: 100, origin: 'top' });
  ScrollReveal().reveal('.fade-left',{ delay: 200, distance: '100px', duration: 200, origin: 'left' });
  ScrollReveal().reveal('.fade-right',{ delay: 200, distance: '100px', duration: 200, origin: 'right' });
});