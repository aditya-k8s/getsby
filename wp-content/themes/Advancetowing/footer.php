
<footer>
  <div class="foot-logo"><img src="<?php echo esc_url(wp_get_attachment_url( get_theme_mod('custom_logo')));?>" alt=""></div>
  <div class="footer-menu">
     <?php
     
                    
                    wp_nav_menu( $args = array(
                      'menu'      => "footer",
                      'menu_class'  => "footer-menu", 
                      'menu_id'   => "footer-menu"

                    ) );
                    

    ?>
  </div>
  <div class="foot-info">Advance Towing Vancouver | Specializing in 24 Hour Emergency Roadside Assistance and Towing in Vancouver and surrounding areas.</div>
  <div class="foot-payment-logo"><img src="<?php site_url();?>/Development/advancetowing/wp-content/uploads/2023/04/payment-icon.png;" alt=""></div>
  <div class="foot-bot">© Advance Towing 2023, All rights reserved.</div>
</footer>

<div class="modal fade" id="creek-pop-up" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="creek-pop-upLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]');?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="get-quote-pop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="get-quote-popLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="sap-lg-heading">Get Quote?</div>
         <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]');?>


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?php  echo site_url(); ?>/wp-content/themes/Advancetowing/assets/js/jquery.min.js"></script>
<script src="<?php  echo site_url(); ?>/wp-content/themes/Advancetowing/assets/js/owl.carousel.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
$(document).ready(function(){
$(".partner-slider").owlCarousel();
});

$('.partner-slider').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
autoplay:true,
autoplayTimeout:2000,
autoplayHoverPause:true,
responsive:{
0:{
  items:1,
  nav:true
},
600:{
  items:3,
  nav:false
},
1000:{
  items:6,
  nav:true,
  loop:false
}
}
})

</script>

<script>
AOS.init({
once: true
})

jQuery('#menu-item-30 a').attr('data-bs-toggle','modal');
jQuery('#menu-item-30 a').attr('data-bs-target','#get-quote-pop');

jQuery('ul.au-counter li:nth-last-child(1)').find('.sap-sm-heading').removeClass('counter-count');


$('.counter-count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
          
          //chnage count up speed here
            duration: 3000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

 
jQuery(document).ready(function(){
 jQuery('.menu-item-has-children a').click(function(){
  jQuery('.sub-menu').toggleClass('show');
    });
    });
</script>

</body>
</html>
<?php wp_footer();?>