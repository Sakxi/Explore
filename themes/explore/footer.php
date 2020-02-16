<!-- fooetr-section start -->
<footer class="footer-section">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget company-intro-widget">
              <a href="index.html" class="site-logo"><img src="<?php echo get_theme_mod('footer_image');?>" alt="<?php ?>" width="120px"></a>
              <p><?php echo get_theme_mod('explore_footer_content1');?></p>
              <ul class="company-footer-contact-list">
                <li><i class="flaticon-phone-call"></i><?php echo get_theme_mod('explore_footer_content2');?></li>
                <li><i class="flaticon-clock"></i><?php echo get_theme_mod('explore_footer_content3');?></li>
              </ul>
            </div>
          </div><!-- widget end -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget course-links-widget">
              <h5 class="widget-title">Popular Courses</h5>
              <ul class="courses-link-list">
              <?php
		$args = array(
			'post_type'=>'courses',
			'posts_per_page'=>6,
			'orderby'=>'title',
			'order'=>'ASC' 
		);

		$courses=new WP_Query($args);
		while($courses->have_posts()):$courses->the_post();
		?>
                <li><a href="<php the_permalink(); ?>"><i class="fa fa-long-arrow-right"></i><?php the_title(); ?></a></li>
                <?php  endwhile;wp_reset_postdata();?>	
              </ul>
            </div>
          </div><!-- widget end -->
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="widget latest-news-widget">
              <h5 class="widget-title">Latest news</h5>
              <ul class="small-post-list">
              <?php
		$args = array(
			'post_type'=>'post',
			'posts_per_page'=>2,
			'orderby'=>'date',
			'order'=>'DESC' 
    );
    $courses=new WP_Query($args);
		while($courses->have_posts()):$courses->the_post();
		?>
                <li>
                  <div class="small-post-item">
                    <a href="#" class="post-date"><?php echo get_the_date('D'); ?>,<?php echo get_the_date('M'); ?>,<?php echo get_the_date('Y');?></a>
                    <h6 class="small-post-title"><a href="#"><?php the_title(); ?></a></h6>
                  </div>
                </li><!-- small-post-item end -->
                <?php  endwhile;wp_reset_postdata();?>	

              </ul>
            </div>
          </div><!-- widget end -->
          <div class="fb-page" data-href="https://www.facebook.com/explorehotelmanagement/" data-tabs="timeline" data-width="100" data-height="283" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/explorehotelmanagement/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/explorehotelmanagement/">Explore School of Tourism and Hotel Management</a></blockquote></div>
        </div>
      </div> 
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-sm-left text-center">
              <span class="copy-right-text">© 2019 <a href="#">Explore</a> All Rights Reserved.</span>
            </div>
            <div class="col-md-6 col-sm-6">
              <ul class="terms-privacy d-flex justify-content-sm-end justify-content-center">
                <li><a href="#"><li><a href="<?php echo home_url('/') ;?>">Terms & Conditions</a></li></a></li>
                <li><a href="#"><li><a href="<?php echo home_url('/') ;?>">Privacy</a></li></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div><!-- footer-bottom end -->
  </footer>
  <!-- fooetr-section end -->

  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->
 <!-- 
	<script src="assets/js/jquery-3.3.1.min.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/jquery.waypoints.min.js"></script>
	
	<script src="assets/js/jquery.countup.min.js"></script>

    <script src="assets/js/main.js"></script>-->
    <?php wp_footer(); ?>
</body>

</html>