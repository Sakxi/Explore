<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php
  wp_head(); ?>

</head>

<body <?php
      body_class();
      ?>>
      <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e09997b00fa3464"></script>
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2&appId=359780364808600&autoLogAppEvents=1"></script>
  <div class="header-bottom sticky-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg" id="navbar" data-toggle="affix">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
              'theme_location'  => 'menu-1',
              'container_class' => '',
              'container_id'    => '',
              'menu_class' => 'navbar-nav main-menu mx-auto',
              'menu_id'         => '',
          ) );
          if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
           }
          ?>
 <?php wp_nav_menu( array(
              'theme_location'  => 'menu-half',
              'container_class' => '',
              'container_id'    => '',
              'menu_class' => 'navbar-nav main-menu mx-auto',
              'menu_id'         => '',
          ) );
          ?>
          
          <div class="header-search-area">
            <div class="header-search-toggle"><i class="fa fa-search"></i></div>
            <div class="header-serach-block closed">
              <form class="header-search-form d-flex">
                <input type="search" name="header-search" id="header-search" placeholder="Search...">
                <button class="header-search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
  </header>