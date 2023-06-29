<?php wp_head(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Advance Towing Welcome's You!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/Advancetowing/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php  echo site_url(); ?>/wp-content/themes/Advancetowing/assets/css/owl.theme.default.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php  echo site_url(); ?>/wp-content/themes/Advancetowing/assets/css/style.css">
  </head>
<body>

<div class="top-bar">
  <div class="top-bar-inner">
    <ul>
      <li><i class="fa-solid fa-clock"></i> 24/7 Emergency service</li>
      <li><a href="tel:+6044352200"><i class="fa-solid fa-phone"></i> 604.435.2200</a></li>
    </ul>
  </div>
  <div class="can-flag"><i class="fa-brands fa-canadian-maple-leaf"></i></div>
</div>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mobile-logo" href="<?php echo home_url();?>">
      <img src="<?php echo esc_url(wp_get_attachment_url( get_theme_mod('custom_logo')));?>" alt=""></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <?php
     
                    
                    wp_nav_menu( $args = array(
                      'menu'      => "Main-menu",
                      'menu_class'  => "navbar-nav", 
                      'menu_id'   => "menu-main_menu"

                    ) );
                    

    ?>
 
  <!--   <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            our services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Regular Towing</a></li>
            <li><a class="dropdown-item" href="#">Collector & Luxury Vehicle Towing</a></li>
            <li><a class="dropdown-item" href="#">Heavy Duty Towing & Heavy Equipment Moving Specialists</a></li>
            <li><a class="dropdown-item" href="#">Motorcycle Transportation</a></li>
            <li><a class="dropdown-item" href="#">Accident Towing Specialists</a></li>
            <li><a class="dropdown-item" href="#">Private Property Towing Service</a></li>
            <li><a class="dropdown-item" href="#">Vehicle Storage Vancouver</a></li>
            <li><a class="dropdown-item" href="#">Fast & Friendly Vancouver Scrap Car Removal</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">about us</a>
        </li>-->

        <li class="nav-item desktop-logo">
          <a class="nav-link active" href="<?php echo home_url();?>"><img src="<?php echo esc_url(wp_get_attachment_url( get_theme_mod('custom_logo')));?>" alt=""></a>
        </li>
        <?php
     
                    
                    wp_nav_menu( $args = array(
                      'menu'      => "main-menu-right",
                      'menu_class'  => "navbar-nav", 
                      'menu_id'   => "menu-main_menu"

                    ) );
                    

    ?>
      
    </div>
  </div>
</nav>
<style>
  .menu-item-has-children .sub-menu{
    display: none;
  }
  .sub-menu-toggle{
    display:none;
  }
  ul.sub-menu.show {
    display: block;
}

</style>