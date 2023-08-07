


jQuery(document).ready(function () {
 jQuery('#nav-icon4').click(function () {
    jQuery(this).toggleClass('open');
});


});

jQuery(document).ready(function(){
 jQuery('.slide--speakers .owl-carousel').owlCarousel({
     loop:false,
     margin:30,
     nav:true,
     dots:true,
     responsive:{
         0:{
             items:2
         },
         600:{
             items:3
         },
         1000:{
             items:3
         }
     }
 });



 jQuery('#slider--top--person .owl-carousel').owlCarousel({
     loop:false,
     margin:30,
     nav:true,
     dots:false,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:6
         },
         1000:{
             items:3
         }
     }
 });

 jQuery('#slider--similar--person .owl-carousel').owlCarousel({
     loop:true,
     margin:30,
     paddding:30,
     nav:false,
     dots:true,
     autoplay:true,
     autoplayTimeout:5000,
     autoplaySpeed: 1000,
     autoplayHoverPause:true,
     responsive:{
         0:{
             items:1
         },
         600:{
             items:6
         },
         1000:{
             items:3
         }
     }
 });




  if (jQuery(window).width() <= 767) {

            jQuery('.moreless-button').click(function() {
              jQuery('.moretext').slideToggle();
              if (jQuery('.moreless-button').text() == "Read more") {
                jQuery(this).text("Read less")
            } else {
                jQuery(this).text("Read more")
            }
            return false;
        });
            
            
         } 

 
});










