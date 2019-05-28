$(document).ready(function(){
  // STICKY MENU TRIGGER
  $("#waypoint-trigger").waypoint(function(direction){
    if ($(document.body).attr("class") == "sticky_header") {
      $('.header').toggleClass('sticky');
      $('.container_custom').toggleClass('padding');
      $('.menu-wrapper').toggleClass('aligned');
    };
  },{offset: '100px'}
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

