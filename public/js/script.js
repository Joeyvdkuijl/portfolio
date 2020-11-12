var typed = new Typed('.type', {
  strings: [
    "Harde werker",
    "Developer",
    "Business-man"
  ],
  typeSpeed: 90,
  backSpeed: 120,
  loop: true
});
$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    loop: true,
    items: 4,
    margin:10,
    nav: true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:4
            
        }
    }
    
  });
  var skillsTopOffset = $(".skillsSection").offset().top;
  $(window).scroll(function() {
    if (window.pageYOffset > skillsTopOffset - $(window).height() + 200) {
      $(".chart").easyPieChart({
        easing: "easeInOut",
        barColor: "#fff",
        trackColor: false,
        scaleColor: false,
        lineWidth: 4,
        size: 152,
        onStep: function(from, to, percent) {
          $(this.el)
            .find(".percent")
            .text(Math.round(percent));
        }
      });
    }
  });
});