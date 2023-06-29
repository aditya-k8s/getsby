<?php


/* template name: Services */

get_header();

?>


<div class="our-services-page">
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
      <div class="serv-list-inner" id="RegularTowing">
        <div class="serv-img"><img src="<?php the_field('image_regular_towing');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('regular_towing_title');?></div>
          <div class="text-para">
            <?php the_field('content_regular_towing');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="CollectorLuxuryVehicleTowing">
        <div class="serv-img"><img src=" <?php the_field('image_luxury_vehicle_towing');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('title_luxury_vehicle_towing');?></div>
          <div class="text-para">
            <?php the_field('content_luxury_vehicle_towing');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="HeavyDutyTowing">
        <div class="serv-img">
          <img src="<?php the_field('image_heavy_duty_towing');?>" alt="">
          <img src="<?php the_field('image2_heavy_duty_towing');?>" alt="">
        </div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('titleheavy_duty_towing');?></div>
          <div class="text-para">
            <?php the_field('content_heavy_duty_towing');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="MotorcycleTransportation">
        <div class="serv-img"><img src="<?php the_field('image_motorcycle_transportation');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('motorcycle_transportation');?></div>
          <div class="text-para">
            <?php the_field('content_motorcycle_transportation');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="AccidentTowing">
        <div class="serv-img"><img src="<?php the_field('image_accident_towing_specialists');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('title_accident_towing_specialists');?></div>
          <div class="text-para">
            <?php the_field('content_accident_towing_specialists');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="PrivatePropertyTowing">
        <div class="serv-img"><img src="<?php the_field('Image_private_property_towing');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"> <?php the_field('title_private_property_towing');?></div>
          <div class="text-para">
             <?php the_field('content_private_property_towing');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="VehicleStorage">
        <div class="serv-img"><img src="<?php the_field('image_vehicle_storage_vancouver');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('title_vehicle_storage_vancouver');?></div>
          <div class="text-para">
            <?php the_field('content_vehicle_storage_vancouver');?>
          </div>
        </div>
      </div>
      <div class="serv-list-inner" id="Fast&Friendly">
        <div class="serv-img"><img src="<?php the_field('image_fast_fiendly');?>" alt=""></div>
        <div class="serv-con">
          <div class="sap-md-heading"><?php the_field('title_fast_friendly');?></div>
          <div class="text-para">
            <?php the_field('content_fast_friendly');?>
          </div>
        </div>
      </div>      


    </div>
  </div>
</section>





  
</div>















<?php get_footer(); ?>