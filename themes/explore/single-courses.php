<?php

get_header();
?>
 <?php while(have_posts()): the_post();?>
  <section class="single-page-banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/todd-quackenbush-700-unsplash.jpg);">
    <div class="single-banner-content-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="single-banner-content">
              <h2 class="single-banner-title">Course Details</h2>
              <ul class="page-list">
                  <li><a href="<?php echo home_url('/');?>">Home</a></li>
                  <li>courses details</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- single-page-banner end  -->

  <!-- course-details-section start -->
  <section class="course-details-section section-padding section-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="course-details-content-wrapper">
            <div class="course-details-thumb">
              <img src="<?php echo the_post_thumbnail_url();?>" alt="<?php the_title();?>">
            </div>
            <div class="course-details-content">
  
            <?php the_content();?>
            </div>
          </div>
        </div>
        <?php endwhile;?>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
?>