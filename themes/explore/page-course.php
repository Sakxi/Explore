<?php
/*
Template Name: Course Page Template

*/
get_header();
?>
<?php
while(have_posts()): the_post();
?>

 <!-- single-page-banner start -->
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

  <!-- courses-section start -->
  <section class="courses-section section-padding section-bg">
    <div class="container">
      <div class="section-wrapper">
        <div class="row">
        <?php
		$args = array(
			'post_type'=>'courses',
			'posts_per_page'=>3,
			'orderby'=>'title',
			'order'=>'ASC' 
		);

		$courses=new WP_Query($args);
		while($courses->have_posts()):$courses->the_post();
		?>
          <div class="col-lg-4 col-md-6 course-single">
            <div class="course-single-item">
              <div class="course-single-thumb">
                <a href="<?php the_permalink(); ?>">  <img src="<?php echo the_post_thumbnail_url('courses');?>" alt="<?php the_title(); ?>"></a>
              </div>
              <div class="course-single-content">
                <div class="tags">
                </div>
                <h4 class="course-title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
                <p>
                <?php echo wp_trim_words(get_the_content(),10); ?>
								</p>
                </div>
            </div><!-- course-single-item end -->
          </div>
          <?php endwhile; wp_reset_postdata();?>
        </div>

      </div>
    </div>
  </section>
  <!-- courses-section end -->
<?php endwhile;?>
  <?php get_footer();?>