
<footer>
  <div class="foot-logo"><img src="./images/logo.png" alt=""></div>
  <div class="footer-menu">
    <ul>
      <li><a href="">home</a></li>
      <li><a href="">our services</a></li>
      <li><a href="">about us</a></li>
      <li><a href="">contact us</a></li>
    </ul>
  </div>
  <div class="foot-info">Advance Towing Vancouver | Specializing in 24 Hour Emergency Roadside Assistance and Towing in Vancouver and surrounding areas.</div>
  <div class="foot-payment-logo"><img src="./images/payment-icon.png" alt=""></div>
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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="get-quote-pop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="get-quote-popLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="sap-lg-heading"></div>
        <!-- Add form here -->


      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div> -->
    </div>
  </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
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
</script>

</body>
</html>
<?php wp_footer();?>