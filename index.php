<?php include('header.php'); ?>

<!-- Üst Tanıtım start -->
<div class="container">
  <div class="jumbotron">
    <div class="row">
    	<div class="col-sm-3 text-center">
    		<img class="img-circle profile-photo" src="<?php bloginfo('template_url'); ?>/image/profile-photo.jpg">
    		<h1 id="fullname">İbrahim Gündüz</h1>
    	</div>
    	<div class="col-sm-9">
    		<h1><?php bloginfo('name'); ?></h1> 
    		<p><?php bloginfo('description'); ?></p> 
    	</div>
    </div>
  </div>
</div>
<!-- Üst Tanıtım finish -->

<!-- Blog Yazıları start -->
<div id="portfolio" class="container container-fluid text-center bg-grey">
  <div class="text-center slideanim">
      <?php query_posts('showposts=4'); ?>
      <?php $i=0; while (have_posts()) : the_post(); ?>
        <?php if($i%4 == 0): ?><div class="row"><?php endif; ?>
          <div class="column col-sm-3 show">
              <a href="<?php the_permalink() ?>">
              <div class="thumbnail">
                  <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?php the_title(); ?>" >
                  <p><strong><?php the_title(); ?></strong></p>
                  <p><?php echo myexcerpt(10); ?></p>
              </div>
              </a>
          </div>
        <?php if($i%4 == 3): ?></div><?php endif; ?>
      <?php $i++; endwhile;?>
  </div>
</div>
<!-- Blog Yazıları finish -->

<?php include('footer.php'); ?>

