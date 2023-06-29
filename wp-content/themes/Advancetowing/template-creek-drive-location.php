<?php


/* template name: Creek drive location */

get_header();

?>


<div class="still-creek-drive-page">
  <section class="inner-banner">
    <div class="inner-banner-inner">
      <div class="inner-banner-img"><img src="<?php echo site_url();?>/wp-content/uploads/2023/04/inner-banner.png" alt=""></div>
      <div class="inner-banner-con">
        <div class="sap-xlg-heading"><?php the_title();?></div>
        <div class="text-para"><?php the_content();?></div>
        <div class="sap-btn-dark"><a href="tel:+6044352200">call now!</a></div>
      </div>
    </div>
  </section>

<section class="services-head">
  <div class="services-inner container">
    <div class="serv-list-head">
      <div class="serv-list-inner" id="">
        <div class="serv-img"><img src="<?php the_field('image_drive_location');?>" alt=""></div>
        <div class="serv-con">
      
          <div class="sap-md-heading"><?php the_title();?></div>
          <div class="text-para">

            <?php the_field('content_drive_location');?>
          </div>
        </div>
      </div>
      
     
      
          


    </div>
  </div>
</section>





  
</div>















<?php get_footer(); ?>