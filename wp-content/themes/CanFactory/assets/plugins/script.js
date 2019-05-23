$(document).ready(function(){
  // STICKY MENU TRIGGER
  $("#waypoint-trigger").waypoint(function(direction){
    $('.header').toggleClass('sticky');
    $('.container_custom').toggleClass('padding');
    $('.menu-wrapper').toggleClass('aligned');
  },{offset: '25%'}
  );
  
  // SCROLL TO 
  $("[data-scroll-to]").click(function() {
    var $this = $(this),
        $toElement      = $this.attr('data-scroll-to'),
        $offset         = $this.attr('data-scroll-offset') * 1 || 0,
        $speed          = $this.attr('data-scroll-speed') * 1 || 500;
  
    $('html, body').animate({
      scrollTop: $($toElement).offset().top + $offset
    }, $speed);
    
  });

});
