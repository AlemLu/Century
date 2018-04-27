$(document).ready(function(){
    // Menu Responsive
    $(".boton-menu span").click(function(e){
       e.preventDefault();
       if($(".boton-menu span").attr('class') == 'glyphicon glyphicon-menu-hamburger'){
          $(".boton-menu span").removeClass('glyphicon glyphicon-menu-hamburger').addClass('glyphicon glyphicon-remove');
          $(".navegacion nav").animate({left:'0'})
        } else{
            $(".boton-menu span").removeClass('glyphicon glyphicon-remove').addClass('glyphicon glyphicon-menu-hamburger');
            $(".navegacion nav").animate({left:'-100%'})
        }
    });
    
    //Agregando y Eliminando nav-responsive
    $(window).resize(function(){
        var wd = $(window).width();
        if(wd <= 700){
            $(".navegacion nav").addClass('nav-responsive')
        }else{
           $(".navegacion nav").removeClass('nav-responsive')
            $(".navegacion nav").css({'position':''})
        }
    });
    
    //Menu Pegajoso
    var navtop = $('.navegacion').offset().top;
    var navheight = $('.navegacion').height();
    
    $(window).scroll(function(){
       if($(window).scrollTop() > navtop){
          $('.navegacion').css({'position':'fixed', 'top':'0'})
          $('body').css({'padding-top':'navheight'})
          $('.nav-responsive').css({'position':'fixed'})
        }else{
          $('.navegacion').css({'position':'', 'top':''})
          $('body').css({'padding-top':'0'})
          $('.nav-responsive').css({'position':'fixed'})
        }
    });
});