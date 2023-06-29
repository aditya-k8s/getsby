<?php


/* template name: Contact page */

get_header();

?>
 
<div class="contact-page">
  <section class="inner-banner">
    <div class="inner-banner-inner">
      <div class="inner-banner-img"><img src="<?php echo site_url();?>/wp-content/uploads/2023/04/inner-banner.png" alt=""></div>
      <div class="inner-banner-con">
        <div class="sap-xlg-heading"><?php the_title();?></div>
        <div class="text-para"><?php the_content();?> </div>
        <div class="sap-btn-dark"><a href="tel:+6044352200">call now!</a></div>
      </div>
    </div>
  </section>

  <section class="contact-us-sec" id="contact">
  <svg id="float-circ6" xmlns="http://www.w3.org/2000/svg" width="160" height="160" viewBox="0 0 160 160">
    <rect id="Rectangle_53" data-name="Rectangle 53" width="160" height="160" rx="80" fill="#d12727" opacity="0.1"/>
  </svg>
  <svg id="float-circ7" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
    <rect id="Rectangle_55" data-name="Rectangle 55" width="200" height="200" rx="100" fill="#d12727" opacity="0.1"/>
  </svg>
  
  <div class="contact-us-sec-inner container">
    <div class="con-us-top">
      <div class="con-us-top-left">
        <div class="caption">how can we help you?</div>
        <div class="sap-lg-heading"><?php the_title();?></div>
        <div class="text-para">
          <p><?php the_content();?></p>
                      <a  class="creek-pop-up" href="<?php echo site_url();?>/still-creek-drive-location/" target="_blank">We also have a location on Still Creek Drive in Burnaby.
         
        </div>
      </div>
      <div class="con-us-top-right">
        <div class="con-us-info-head">
          
          <ul>
            <li>
              <a href="https://www.google.com/maps/dir//Advance+Towing+1268+Franklin+St+Vancouver,+BC+V6A+1K1+Canada/@49.2820332,-123.0777739,14z/data=!4m5!4m4!1m0!1m2!1m1!1s0x54867113b9f3d76f:0x13ec8985860436a8" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="33.367" height="40" viewBox="0 0 33.367 40">
                  <path id="Subtraction_3" data-name="Subtraction 3" d="M-324.439-256.242a.662.662,0,0,1-.472-.194l-11.325-11.325a16.575,16.575,0,0,1-4.887-11.8,16.575,16.575,0,0,1,4.887-11.8,16.574,16.574,0,0,1,11.8-4.886,16.576,16.576,0,0,1,11.8,4.886,16.576,16.576,0,0,1,4.886,11.8,16.576,16.576,0,0,1-4.886,11.8l-11.326,11.325A.665.665,0,0,1-324.439-256.242Zm.044-31.6a7.987,7.987,0,0,0-7.978,7.978,7.987,7.987,0,0,0,7.978,7.978,7.987,7.987,0,0,0,7.978-7.978A7.987,7.987,0,0,0-324.4-287.84Z" transform="translate(341.122 296.241)" fill="#c4c4c4"/>
                </svg>
                
                <div class="sap-sm-heading">1268 Franklin St. Vancouver, BC V6A 1K1</div>
              </a>
            </li>
            <li>
              <a href="tel:+6044352200">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                  <path id="Path_30" data-name="Path 30" d="M12.882,1.9A3.115,3.115,0,0,0,9.179.089L2.3,1.964A3.134,3.134,0,0,0,0,4.979a35,35,0,0,0,35,35,3.134,3.134,0,0,0,3.015-2.3L39.889,30.8a3.115,3.115,0,0,0-1.812-3.7l-7.5-3.125a3.115,3.115,0,0,0-3.617.906L23.8,28.728A26.4,26.4,0,0,1,11.25,16.174L15.1,13.026a3.118,3.118,0,0,0,.906-3.617l-3.125-7.5Z" transform="translate(0 0.022)" fill="#c4c4c4"/>
                </svg>
                
                <div class="sap-sm-heading">604.435.2200</div>
              </a>
            </li>
          </ul>
        </div>
        <!-- Add form here -->
            <?php echo do_shortcode('[contact-form-7 id="35" title="Contact form 1"]');?>

      </div>


    </div>

    <div class="contact-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10410.810209159983!2d-123.0777739!3d49.2820332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54867113b9f3d76f%3A0x13ec8985860436a8!2sAdvance%20Towing!5e0!3m2!1sen!2sin!4v1681720323411!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>
</section>


</div>














<?php get_footer(); ?>