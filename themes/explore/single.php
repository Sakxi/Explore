<?php
get_header();
 ?>
 <?php while(have_posts()): the_post();?>
 <section class="single-page-banner" style="background-image: url(<?php the_post_thumbnail_url()?> );">
      <div class="single-banner-content-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="single-banner-content">
                <h2 class="single-banner-title"><?php the_title();?></h2>
                <ul class="page-list">
                    <li><a href="<?php echo home_url('/');?>">Home</a></li>
                    <li><?php the_title();?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- single-page-banner end  -->

  <!-- blog-section start -->
  <section class="blog-section section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="entry-post-single">
            <div class="entry-post-thumb">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            </div>
            <div class="entry-post-content">
              <span class="<?php echo get_the_date('D'); ?>,<?php echo get_the_date('M'); ?>,<?php echo get_the_date('Y'); ?>"></span>
              <h4><?php the_title();?></h4>
         <p><?php the_content();?></p>
            </div>
            </div>
<?php echo do_shortcode('[gs-fb-comments]'); ?>

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_r02a"></div>
            
</div>
<?php endwhile;?>
<!------sidebar----->
        <div class="col-lg-4">
        <?php get_sidebar();?>
         
         </div>
         </div>
    </div>
  </section>
 <?php get_footer();?>

