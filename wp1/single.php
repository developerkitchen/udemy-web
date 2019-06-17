<?php include('header.php'); ?>

<!-- single start -->
<div class="container">
    <div class="row">
        <div class="col-sm-8">
          <?php if ( have_posts() ) : have_posts(); the_post(); $postID = get_the_ID(); ?>
            <div class="col-sm-12 marginpadding0">
              <ul class="breadcrumb">
                <li><a href="/wp1/">AnaSayfa</a></li>
                <li><?php the_title(); ?></li>
              </ul>
            </div>
            <article>
                <img style="width: 100%;" src ="<?php echo wp_get_attachment_url( get_post_thumbnail_id() ) ?>" alt="<?php the_title(); ?>"  title = "<?php the_title(); ?>" />
                <h1 class="baslik text-center"><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
                <div class="tarih"><h5><i class="fas fa-calendar-week"></i> <?php the_time('d F Y'); ?> <i class="fas fa-clock"></i> <?php the_time('H:i'); ?></h5></div>
                <div class="etiketler">
                  <b>Etiketler : </b><?php echo getTagString(); //the_tags('', ' ', ''); ?>
                </div>
            </article>

            <div class="yazarinfo row">
                <div class="col-sm-2 text-center">
                  <?php $user = wp_get_current_user(); if ( $user ) : ?>
                    <img class="img-circle profile-photo yazarinfo" src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
                  <?php endif; ?>
                </div>
                <div class="col-sm-9">
                  <h3><?php the_author(); ?></h3>
                  <p><?php esc_textarea(the_author_meta('description')); ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>

        <!-- SideBar Menu start -->
        <?php include('sidebar.php'); ?>
        <!-- SideBar Menu finish -->
    </div>
</div>
<!-- single finish -->


<?php include('footer.php'); ?>
