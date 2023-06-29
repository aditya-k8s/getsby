<?php


/* template name: Home */

get_header();

?>
<body <?php body_class(); ?>>
<style>
  .more {  
         display: none;  
         
     }  
</style>



<section class="hero-sec grey-back">
  <svg id="float-circ1" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200">
    <rect id="Rectangle_49" data-name="Rectangle 49" width="200" height="200" rx="100" fill="#d12727" opacity="0.1"/>
  </svg>
  <svg id="float-circ2" xmlns="http://www.w3.org/2000/svg" width="88" height="88" viewBox="0 0 88 88">
    <rect id="Rectangle_50" data-name="Rectangle 50" width="88" height="88" rx="44" fill="#d12727" opacity="0.1"/>
  </svg>
  
  <div class="hero-sec-inner container">
    <div class="left-sec">
      <div class="caption"><?php echo the_field('top_caption');?></div>
      <div class="sap-xlg-heading"><?php echo the_field('top_title');?></div>
      <div class="text-para"><?php echo the_field('top_content');?> </div>
      <div class="sap-btn-dark"><a href="tel:+6044352200">call now!</a></div>
    </div>
    <div class="right-sec">
      <div class="hero-back"><img src="http://dev1.kindlebit.com/Development/advancetowing/wp-content/uploads/2023/04/hero-back.png" alt=""></div>
      <div class="hero-truck" data-aos="fade-left" data-aos-duration="800" data-aos-delay="1000" data-aos-offset="0"><img src="<?php echo the_field('top_image');?>" alt=""></div>
    </div>
  </div>
  <a class="scroll-down" href="#rd-assist"><i class="fa-solid fa-angle-down"></i></a>
</section>


<section class="rd-assist-sec" id="rd-assist">
  <svg id="float-circ3" xmlns="http://www.w3.org/2000/svg" width="134" height="133" viewBox="0 0 134 133">
    <rect id="Rectangle_51" data-name="Rectangle 51" width="134" height="133" rx="66.5" fill="#d12727" opacity="0.1"/>
  </svg>
  
  <div class="rd-assist-sec-inner container">
    <div class="left-sec">
      <div class="caption"><?php echo the_field('roadside_assistance_caption');?></div>
      <div class="sap-lg-heading"><?php echo the_field('roadside_assistance_title');?></div>
      <div class="text-para">
        <?php echo the_field('roadside_assistance_content');?>
      </div>
      <div class="sap-btn-dark"><a href="<?php echo site_url();?>/contact/" target='_blank'>contact us</a></div>
    </div>
    <div class="right-sec">
      <div class="rd-assist-head">
        <?php
            if( have_rows('assistance') ):
              while ( have_rows('assistance') ) : the_row();
                ?>
        <div class="rd-assist-inner">
          <div class="rda-icon"><i class="<?php the_sub_field('icon'); ?>"></i></div>
          <div class="sap-sm-heading"><?php the_sub_field('assistance_title'); ?></div>
          <div class="text-para"><?php the_sub_field('assistance_content'); ?></div>
        </div>
      <?php 
          endwhile;
          endif;

            ?>
        
      </div>
    </div>
  </div>
</section>


<section class="tow-service-loc">
  <div class="tow-service-loc-inner container">
    <div class="caption"><?php the_field('towing_service_caption'); ?></div>
    <div class="sap-lg-heading"><?php the_field('towing_service_title'); ?></div>
    <div class="tsli-head">
      <div class="left-sec">
        <div class="text-para">
        <?php the_field('towing_service_content'); ?>
        </div>
       
       <div class="more text-para">
         
      <?php the_field('towing_service_content2'); ?>

       </div>

       <!-- <a href="#" class="show_hide" data-content="toggle-text">Read More</a> -->
        <div class="sap-btn-light">
           

          <button class="show_hide read" >Read More</button> 

        </div>
      </div>
      <div class="right-sec">
        <ul>
          <?php
            if( have_rows('locations') ):
              while ( have_rows('locations') ) : the_row();
                ?>
          <li>
            
            <div class="tsli-icon">
             
             <?php the_sub_field('location_icon'); ?>
              
            </div>
            <div class="sap-sm-heading"><?php the_sub_field('location_title'); ?></div>
              

          </li>
           <?php 
          endwhile;
          endif;

            ?> 
         <!--  <li>
            <div class="tsli-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="33.366" height="40" viewBox="0 0 33.366 40">
                <path id="Subtraction_4" data-name="Subtraction 4" d="M-324.439-256.242a.664.664,0,0,1-.473-.2l-11.325-11.325a16.574,16.574,0,0,1-4.886-11.8,16.574,16.574,0,0,1,4.886-11.8,16.574,16.574,0,0,1,11.8-4.886,16.574,16.574,0,0,1,11.8,4.886,16.574,16.574,0,0,1,4.886,11.8,16.574,16.574,0,0,1-4.886,11.8l-11.325,11.325A.663.663,0,0,1-324.439-256.242Zm.044-31.6a7.987,7.987,0,0,0-7.978,7.978,7.987,7.987,0,0,0,7.978,7.978,7.987,7.987,0,0,0,7.978-7.978A7.987,7.987,0,0,0-324.4-287.84Z" transform="translate(341.123 296.241)" fill="#d12727"/>
              </svg>
              
            </div>
            <div class="sap-sm-heading">Burnaby</div>
          </li>
          <li>
            <div class="tsli-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="33.366" height="40" viewBox="0 0 33.366 40">
                <path id="Subtraction_4" data-name="Subtraction 4" d="M-324.439-256.242a.664.664,0,0,1-.473-.2l-11.325-11.325a16.574,16.574,0,0,1-4.886-11.8,16.574,16.574,0,0,1,4.886-11.8,16.574,16.574,0,0,1,11.8-4.886,16.574,16.574,0,0,1,11.8,4.886,16.574,16.574,0,0,1,4.886,11.8,16.574,16.574,0,0,1-4.886,11.8l-11.325,11.325A.663.663,0,0,1-324.439-256.242Zm.044-31.6a7.987,7.987,0,0,0-7.978,7.978,7.987,7.987,0,0,0,7.978,7.978,7.987,7.987,0,0,0,7.978-7.978A7.987,7.987,0,0,0-324.4-287.84Z" transform="translate(341.123 296.241)" fill="#d12727"/>
              </svg>
              
            </div>
            <div class="sap-sm-heading">Vancouver</div>
          </li> -->
        </ul>
      </div>
    </div>
  </div>
</section>


<section class="about-us-sec" id="about">
  <svg id="float-circ4" xmlns="http://www.w3.org/2000/svg" width="155" height="156" viewBox="0 0 155 156">
    <rect id="Rectangle_52" data-name="Rectangle 52" width="155" height="156" rx="77.5" fill="#d12727" opacity="0.1"/>
  </svg>
  
  <div class="about-us-sec-inner container">
    <div class="left-sec">
      <div class="about-logo"><img src="<?php the_field('about_image'); ?>" alt=""></div>
    </div>
    <div class="right-sec">
      <div class="caption"><?php the_field('about_caption'); ?></div>
      <div class="sap-lg-heading"><?php the_field('about_title'); ?></div>
      <div class="text-para">
        <?php the_field('about_content'); ?>
      </div>
      <div class="au-head">
        <div class="au-left-sec">
          <div class="au-left-sec-inner">
            <ul class="au-counter">
              <?php
            if( have_rows('customer_service') ):
              while ( have_rows('customer_service') ) : the_row();
                ?>
              <li>
                <div class="sap-sm-heading counter-count"><?php the_sub_field('count_value'); ?></div>
                <div class="au-count-heading"><?php the_sub_field('count_title'); ?></div>
              </li>
              <?php 
          endwhile;
          endif;

            ?> 
              <!-- <li>
                <div class="sap-sm-heading counter-count">8495</div>
                <div class="au-count-heading">Roadside Assistance Customers</div>
              </li>
              <li>
                <div class="sap-sm-heading counter-count">289</div>
                <div class="au-count-heading">Corporate Clients</div>
              </li>
              <li>
                <div class="sap-sm-heading">24/7</div>
                <div class="au-count-heading">Emergency Service</div>
              </li> -->
            </ul>

          </div>
        </div>
        <div class="au-right-sec">
          <div class="au-right-sec-inner">
            <a href="https://www.google.com/search?hl=en-IN&gl=in&q=Advance+Towing,+1268+Franklin+St,+Vancouver,+BC+V6A+1K1,+Canada&ludocid=1435673587796424360&lsig=AB86z5VxFCkN4FpKrQKOSfu7sb4A#lrd=0x54867113b9f3d76f:0x13ec8985860436a8,1" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="39.199" height="40" viewBox="0 0 39.199 40">
              <g id="Group_5" data-name="Group 5" transform="translate(1184.577 765.171)" opacity="0.6" style="mix-blend-mode: luminosity;isolation: isolate">
                <path id="Path_6" data-name="Path 6" d="M-1089.33-687.239v7.745h10.764a9.222,9.222,0,0,1-4.018,6.018l6.491,5.036c3.782-3.491,5.964-8.618,5.964-14.709a22.96,22.96,0,0,0-.364-4.091Z" transform="translate(-75.248 -61.568)" fill="#4285f4"/>
                <path id="Path_7" data-name="Path 7" d="M-1167.715-651.791l-1.464,1.121-5.182,4.036h0a20,20,0,0,0,17.854,11.036,19.089,19.089,0,0,0,13.236-4.836l-6.491-5.036a11.913,11.913,0,0,1-6.745,1.927,11.94,11.94,0,0,1-11.2-8.236Z" transform="translate(-8.071 -89.573)" fill="#34a853"/>
                <path id="Path_8" data-name="Path 8" d="M-1182.432-712.61a19.752,19.752,0,0,0-2.145,8.964,19.752,19.752,0,0,0,2.145,8.964c0,.018,6.655-5.164,6.655-5.164a11.985,11.985,0,0,1-.636-3.8,11.985,11.985,0,0,1,.636-3.8Z" transform="translate(0 -41.525)" fill="#fbbc05"/>
                <path id="Path_9" data-name="Path 9" d="M-1156.507-757.207a10.912,10.912,0,0,1,7.654,2.982l5.727-5.727a19.186,19.186,0,0,0-13.381-5.218,19.964,19.964,0,0,0-17.854,11.036l6.654,5.164A11.94,11.94,0,0,1-1156.507-757.207Z" transform="translate(-8.07)" fill="#ea4335"/>
              </g>
            </svg>
            <div class="au-count-heading">Google reviews</div>
            </a>
          </div>
        </div>

      </div>


    </div>
  </div>
</section>


<section class="info-ban-sec blue-back">
  <div class="info-ban-sec-inner container">
    <ul class="ibsi-head">
       <?php
            if( have_rows('features') ):
              while ( have_rows('features') ) : the_row();
                ?>
      <li>
        <div class="ibsi-icon"><i class="<?php the_sub_field('feature_icon'); ?>"></i></div>
        <div class="sap-sm-heading"><?php the_sub_field('feature_heading'); ?></div>
      </li>
          <?php 
      endwhile;
      endif;

        ?> 
     <!--  <li>
        <div class="ibsi-icon"><i class="fa-solid fa-people-group"></i></div>
        <div class="sap-sm-heading">Family Owned & Operated</div>
      </li>
      <li>
        <div class="ibsi-icon"><i class="fa-solid fa-stopwatch"></i></div>
        <div class="sap-sm-heading">Timely Service</div>
      </li>
      <li>
        <div class="ibsi-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
        <div class="sap-sm-heading">Fair & Affordable Pricing</div>
      </li>
      <li>
        <div class="ibsi-icon"><i class="fa-solid fa-address-card"></i></div>
        <div class="sap-sm-heading">Fully Licensed & Insured</div>
      </li> -->
    </ul>
    <div class="discount-head">
      <div class="sap-lg-heading">Get <span class="text-red">10% off</span> on your first service</div>
      <div class="sap-btn-dark"><a href="tel:+6044352200">hurry! call now!</a></div>
    </div>
  </div>
</section>


<section class="our-partners-sec">
  <svg id="float-circ5" xmlns="http://www.w3.org/2000/svg" width="98" height="98" viewBox="0 0 98 98">
    <rect id="Rectangle_54" data-name="Rectangle 54" width="98" height="98" rx="49" fill="#d12727" opacity="0.1"/>
  </svg>
  <?php
         $donation_group_posts = get_posts(array(
        'post_type' => 'partners'
    ));
         

         $title =  $donation_group_posts[0]->post_title;
         $content =  $donation_group_posts[0]->post_content;
         $post_excerpt =  $donation_group_posts[0]->post_excerpt;
 ?>
  <div class="our-partners-sec-inner container">
    <div class="caption"><?php echo $title;?></div>
    <div class="sap-lg-heading"><?php echo $post_excerpt;?></div>
    <div class="text-para"><?php echo $content; ?>
    </div>

    <div class="owl-carousel partner-slider">
      <?php 
        foreach ( $donation_group_posts as $dg_post ) {
            $dg_id = $dg_post->ID;
            //$title = get_the_title($dg_id);
         
            if(have_rows('partners_logo', $dg_id)){
            while(have_rows('partners_logo', $dg_id)) : the_row();
            
    
  ?>


      <div class="item">
        <div class="partner-img">
          <img src="<?php the_sub_field('logos');?>" alt="">
        </div>
      </div>
      <?php  
        endwhile;
            }

            } 
      ?>
 
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
        <div class="sap-lg-heading">Contact Us</div>
        <div class="text-para">
          <p>We provide towing service in Vancouver, North Vancouver, Burnaby and New Westminster. Give us a call today for all  your Vancouver towing needs.</p>
          <a href="<?php echo site_url();?>/still-creek-drive-location/" target="_blank" class="creek-pop-up" >
            We also have a location on Still Creek Drive in Burnaby.
          </a>
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



<?php get_footer(); ?>

<script>
 $(document).ready(function(){  
        $(".read").click(function(){  
           jQuery('.more').show();
            if($(this).text()=='Read More'){  
                $(this).text('Read Less');  
            }  
            else{ 
                 jQuery('.more').hide();
                $(this).text('Read More');  
            }  
  
        });  
    }); 
</script>